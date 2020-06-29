<?php session_start(); ?>

<!doctype html>
<html lang="en">

<head>
  <title>Profil</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <!-- Bootstrap CSS -->
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>

<link rel="stylesheet" href="../public/Css/DashboardAdmin.css">
<link rel="stylesheet" href="../public/Css/Profile.css">
<style>
select ,option{
	width: 50%;
	height: 50px;
	margin: 0 auto 15px;
	padding: 0 15px;
	border: none;
	border-bottom: 2px solid #ebebeb;
  }
  
  select:focus {
	outline: none;
	border-bottom-color: #67DAD5 !important;
  }

  .container1{
    margin-top:80px;
    margin-bottom:50px;
    text-align: center;
    background-color: #eee;
    width: 400px;
    padding: 10px;
  }
  .container2{
    width:100%;
    width: 30%;
    margin: auto;
  }
  body{
    margin-top:20px;
    background:#eee;
}
.db-social .jumbotron {
    margin: 0;
    background: url(https://wallpaperaccess.com/full/1201158.png);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    background-position: bottom center;
    color: #fff!important;
    height: 300px;
    position: relative;
    box-shadow: inset 0 0 20px rgba(0,0,0,.3);
    padding: 0;
}

.container-fluid {
    padding: 30px 30px;
}

.db-social .head-profile {
    margin-top: -120px;
    border-radius: 4px;
    position: relative;
}

.widget {
    background: #fff;
    border-radius: 0;
    border: none;
    margin-bottom: 30px;
}
.has-shadow {
    box-shadow: 0 1px 15px 1px rgba(52,40,104,.08);
}
.db-social .head-profile:before {
    content: "";
    background: rgba(255,255,255,.6);
    height: 20px;
    width: 90%;
    position: absolute;
    top: -20px;
    left: 0;
    right: 0;
    margin: 0 auto;
    border-radius: 4px 4px 0 0;
}
.db-social .head-profile:after {
    content: "";
    background: rgba(255,255,255,.3);
    height: 20px;
    width: 80%;
    position: absolute;
    top: -40px;
    left: 0;
    right: 0;
    margin: 0 auto;
    border-radius: 4px 4px 0 0;
}
.db-social .widget-body {
    padding: 1rem 1.4rem;
}
.widget-body {
    padding: 1.4rem;
}
.pb-0, .py-0 {
    padding-bottom: 0!important;
}
.db-social .image-default img {
    width: 120px;
    position: absolute;
    top: -80px;
    left: 0;
    right: 0;
    margin: 0 auto;
    box-shadow: 0 0 0 6px rgba(255,255,255,1);
    z-index: 10;
}
.db-social .infos {
    text-align: center;
    margin-top: 4rem;
    margin-bottom: 1rem;
    line-height: 1.8rem;
}
.db-social h2 {
    color: #2c304d;
    font-size: 1.6rem;
    font-weight: 600;
    margin-bottom: .2rem;
}
.db-social .location {
    color: #aea9c3;
    font-size: 1rem;
}
.db-social .follow .btn {
    padding: 10px 30px;
}
.btn:not(:disabled):not(.disabled) {
    cursor: pointer;
}
.btn-shadow, .btn-shadow a {
    color: #5d5386;
    background-color: #fff;
    border-color: #fff;
    box-shadow: 0 1px 15px 1px rgba(52,40,104,.15);
}
.db-social .head-profile .actions {
    display: inline-block;
    vertical-align: middle;
    margin-left: .5rem;
}
.actions {
    z-index: 999;
    display: block;
}
.actions.dark .dropdown-toggle {
    color: #2c304d;
}
.actions .dropdown-toggle {
    color: #98a8b4;
    background: none;
    border: none;
    padding: 0;
    font-size: 1.7rem;
}
.actions .dropdown-menu {
    border: none;
    min-width: auto;
    font-size: 1rem;
    border-radius: 4px;
    padding: 1.4rem 1.8rem;
    text-align: left;
    box-shadow: 1px 1px 30px rgba(0,0,0,.15);
}

.actions .dropdown-menu .dropdown-item {
    padding: .5rem 0;
}
.actions .dropdown-menu a {
    color: #2c304d;
    font-weight: 500;
}

.db-social .head-profile li:first-child {
    padding-left: 0;
}
.db-social .head-profile li {
    display: inline-block;
    text-align: center;
    padding: 0 1rem;
}
.db-social .head-profile li .counter {
    color: #2c304d;
    font-size: 1.4rem;
    font-weight: 600;
}
.db-social .head-profile li .heading {
    color: #aea9c3;
    font-size: 1rem;
}
</style>

<body>
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
           <div class="container"> 
       
		      
        <div class="collapse navbar-collapse">
        
            <ul class="nav navbar-nav-expand-lg navbar-right">
            <li class="nav-item">
        <a class="nav-link"  href="profile.php" ><i class="fa fa-home fa-fw" ></i></a>
      </li>
                <li  class="dropdown">
                
				
                    <a  href="#" class="dropdown " data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span> 
                        <strong> bonjour  <?php echo $_SESSION['username'];?> </strong>
                        <span class="glyphicon glyphicon-chevron-down"> </span>
                    </a>
                    <ul style=" width: 300px;  height: 180px;" class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="text-center">
                                            <span style="font-size:80px"class="glyphicon glyphicon-user icon-size"></span>
                                        </p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="text-left"><strong><?php echo $_SESSION['username'];?> </strong> <?php echo '(', $_SESSION['user_type'] ,')'; ?>  </p>
                                        <p class="text-left small"> <?php echo $_SESSION['email'];?></p>
                                        <p class="text-left">
                                            <a href="ProfileUser.php" class="btn btn-primary ">Profil</a>
                                        </p>
                                   </div>
                                </div>
                            </div>  
								
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="">
                                    <div class="col-lg-12">
                                        <p>
                                            <a href="logout.php" class="btn btn-danger btn-block">logout</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>


<main>

<div class="container db-social">
<?php if (isset($_SESSION['username']) && isset($_SESSION['user_type']) && isset($_SESSION['email'])) : ?> 
    <div class="jumbotron jumbotron-fluid"></div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-11">
                <div class="widget head-profile has-shadow">
                    <div class="widget-body pb-0">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-4 col-md-4 d-flex justify-content-lg-start justify-content-md-start justify-content-center">
                               
                                 
                            </div>
                            <div class="col-xl-4 col-md-4 d-flex justify-content-center">
                                <div class="image-default">
                                    <img class="rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="...">
                                </div>
                                <div class="infos">
                                    <h2> <?php echo $_SESSION['username']; ?></h2>
                                    <h2> <p>Status : <?php echo $_SESSION['user_type']; ?> </p></h2>
                                    <h2><p>Email :   <a href="#"><?php echo $_SESSION['email']; ?></a></p></h2>
                                   
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4 d-flex justify-content-lg-end justify-content-md-end justify-content-center">
                                <div class="follow">
                                 
                                    <div class="actions dark">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif ?>
</div>
 
  
  </main>
  <!-- Navigation !-->
 



  <script>
    function showReservation(str) {
      if (str == "") {
        document.getElementById("test").innerHTML = "";
        return;
      } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("test").innerHTML = this.responseText;
          }
        };
        xmlhttp.open("GET", "getuser.php?rev=" + str, true);
        xmlhttp.send();
      }
    }
  </script>
  <form style=" text-align: center;">

    <?php

    include '../modele/db.php';
    include '../modele/Reservation.php';
    
    $data = new reservation();
    
    isset($_SESSION['Id_user']);

    $id_U = $_SESSION['Id_user'];

    $condition = ['Id_user' => $id_U];

    $res = $data->selectAll('reservation', $condition);
    // echo "<pre>", print_r($res) , "<pre>";
    ?>
 
   
    <select name="users" onchange="showReservation(this.value)">
 
      <option value=""> dates de Reservation</option>

      <?php

      foreach ($res as $vol) { ?>
      <?php
        echo '<option value=' . $vol['Id_Reservation'] . '>' . $vol['DateReservation'] . '</option>';
      }
      ?>
    </select>

  </form>


  <br>
  <div id="test" ></div>
  <br>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
</body>

</html>