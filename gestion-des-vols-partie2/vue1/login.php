<?php
include_once '../Controleur/Login1.php';

?>
<?php if(isset($_SESSION['id'])): ?>
  <?php //header("location:profile.php"); ?>
  <?php endif; ?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Singup Form</title>
 <link rel="stylesheet" href="css/style2.css">
 <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet"> 
</head>
<body>
 
 <div style="background-image: url(img/1.jpg);background-size: 100% auto;" class="container">
  <div class="form">
   <div class="form-section">
    <form action="" method="POST">
      <div class="group">
       
         
      </div>
     <div class="group">
      <h3 class="heading">User Login</h3>
     </div>
     <?php 

if(isset($message)){
    echo '<label class="text-danger">'.$message.'</label>';
  }
?>
     <div class="group">
     <input type="text" name="username" class="control" placeholder="Enter Name..." value="<?php if(!empty($data['name'])): echo $data['name']; endif;?>">
      <div class="error">
        <?php if(!empty($data['name_error'])): ?>
          <?php echo $data['name_error']; ?>
        <?php endif; ?>
      </div>
     </div>
     <div class="group">
      <input type="password" name="password" class="control" placeholder="Create Password..." value="<?php if(!empty($data['password'])): echo $data['password']; endif;?>">
      <div class="error">
        <?php if(!empty($data['password_error'])): ?>
          <?php echo $data['password_error']; ?>
        <?php endif; ?>
      </div>
     </div>
 
     <div class="group m20">
      <input type="submit" name="login" class="btn" value="Login &rarr;">
     </div>
     <div class="group m20">
      <a href="signup.php" class="link">Create new account ?</a>
     </div>
    </form>
   </div>
  </div>
 </div>


</body>
</html>