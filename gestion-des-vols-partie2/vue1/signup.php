<?php 
include_once '../Controleur/Login1.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Singup Form</title>
 <link rel="stylesheet" href="css/style2.css">
 <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet"> 
</head>
<body>

 <div style="background-image: url(img/1.jpg);background-size: 100% auto;"class="container">
  <div class="form">
   <div class="form-section">
    <form action="" method="POST">
    <?php 

if(isset($message)){
 echo '<label class="text-danger">'.$message.'</label>';
  }
?>
     <div class="group">
      <h3 class="heading">Create account</h3>
     </div>
     <div class="group">
      <input type="text" name="username" class="control" placeholder="Enter Name..." value="<?php if(!empty($data['username'])): echo $data['name']; endif;?>">
      <div class="error">
     
      </div>
     </div>
     <div class="group">
      <input type="email" name="email" class="control" placeholder="Enter Email.." value="<?php if(!empty($data['email'])): echo $data['email']; endif; ?>">
      <div class="error">
      <?php                
                        if(@$_GET['true']==true)
                        {
                        ?>
                        <div class="alert-light text-success text-center py-3" style="background-color:rgba(0, 0, 0, 0);"><?php echo $_GET['true'] ?></div>                                
                       <?php
                        }
                        ?>
 
 
                        <?php 
                        if(@$_GET['Error']==true)
                        {
                        ?>
                        <div class="alert-light text-danger text-center py-3" style="background-color:rgba(0, 0, 0, 0);"><?php echo $_GET['Error'] ?></div>                                
                       <?php
                        }
                      ?>
                      <?php                
                        if(@$_GET['email']==true)
                        {
                        ?>
                        <div class="alert-light text-danger text-center py-3" style="background-color:rgba(0, 0, 0, 0);"><?php echo $_GET['email'] ?></div>                                
                       <?php
                        }
                        ?>
      </div>
     </div>
     <div class="group">
      <input type="password" name="password" class="control" placeholder="Create Password..." value="<?php if(!empty($data['password'])): echo $data['password']; endif; ?>">
      <div class="error">
     
      </div>
     </div>
     
     <div class="group m20">
      <input type="submit" name="signup" class="btn" value="Create account &rarr;">
     </div>
     <div class="group m20">
      <a href="login.php" class="link">Already have an account ?</a>
     </div>
    </form>
   </div>
  </div>
 </div>


</body>
</html>