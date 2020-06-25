
<?php 


session_start();
include_once '../modele/db.php';
include_once '../modele/users.php';

$source = new users();
$source2 = new users();

$message ="";


if(isset($_POST["signup"])){

  $field= array (

      'username' => $_POST["username"],
      'password' => $_POST["password"],
      'email' => $_POST["email"]
  );

if($source->required_Validation($field)){


      $username = $_POST['username']; 
      $email = $_POST['email'];  
      $password = $_POST['password'];  
       
      $_SESSION["email"] = $_POST["$email"]; 
     
      $emailex = $source->Emailexist($email);  

      if(!$emailex){  
        $query3 = $source->register($username,$email,$password);  

          if($query3){  

              header("location:../vue1/login.php?true=Registration Successful");

          }
          else{  
            
             
              header("location:../vue1/signup.php?Error=Registration Not Successful");
          }  
      }    
      else {  
          
          header("location:../vue1/signup.php?email=Email already exist");
      }  
}



else{

  $message= $source->error;
}

}

if(isset($_POST["login"])){

  $field= array (

      'username' => $_POST["username"],
      'password' => $_POST["password"]
  );



if($source2->required_Validation($field)){

  if($source2->can_login("user", $field)){
      
      $_SESSION["username"] = $_POST["username"]; 
      
      if($_SESSION['user_type'] == "admin"){

          header("location:../vue1/adminvols.php");
      }
      else{

          header("location:../vue1/profile.php");
      }

  }
  else{

      $message = $source2->error;
  }

}
else{

  $message= $source2->error;
}
}









 ?>