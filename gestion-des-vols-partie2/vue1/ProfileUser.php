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
</style>

<body>
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
           <div class="container"> 
       
		
        <div class="collapse navbar-collapse">
      
            <ul class="nav navbar-nav-expand-lg navbar-right">
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
  <!-- Navigation !-->
 



  <script>
    function showReservation(str) {
      if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
      } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
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
 
   <h2>Vos Reservation</h2>
    <select name="users" onchange="showReservation(this.value)">
 
      <option value="">Dates de Vos Reservation</option>

      <?php

      foreach ($res as $vol) { ?>
      <?php
        echo '<option value=' . $vol['Id_Reservation'] . '>' . $vol['DateReservation'] . '</option>';
      }
      ?>
    </select>

  </form>


  <br>
  <div id="txtHint" ></div>
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