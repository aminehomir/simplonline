<?php 
 session_start();
 if(isset($_SESSION['username'])):
 endif;
 
 //include('../Controleur/Reservation.php');
 include 'connection.php';

 //$sql = "Select passager.Nom , passager.Prenom, passager.NumeroPassport, reservation.Id_user, reservation.Id_Reservation, reservation.DateReservation from reservation,  passager ORDER BY reservation.Id_Reservation ";
   
 $sql = "SELECT * FROM reservation WHERE Numvol=' $id'";
    $result = $conn->query($sql);




 

 
?>


<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Journey HTML CSS Template</title>
<!-- 
Journey Template 
http://www.templatemo.com/tm-511-journey
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" type="text/css" href="css/datepicker.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/templatemo-style.css">    
    
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
            
    <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
      </head>

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
       
<div style="width: 300px;  height: 180px;"></div>
<center>
        <h1>Les informations de votre Réservation</h1>
        <h3></h3>
        <div style="width: 30px;  height: 40px;"></div>
    <div class="container">
        <table id="data" class="table table-bordered">
            <tr>
                <th width="10%">Numero de Reservation</th>
                <th width="10%">Numero de Vol Selecionné</th>
                <th width="10%">Nom</th>
                <th width="10%">Prenom</th>
                <th width="10%">Address</th>
                <th width="10%">Code Postal</th>
                <th width="10%">Ville</th>
                <th width="10%">Numero de Passport</th>
                <th width="10%">Date de Reservation</th>
            </tr>
            <?php while($row = mysqli_fetch_object($result)){ ?>
                <tr >
                    
                    <td><?php echo $row->Nom ?></td>
                    <td><?php echo $row->Prenom ?></td>
                    <td><?php echo $row->NumeroPassport ?></td>
                    <td><?php echo $row->Id_user ?></td>
                    <td><?php echo $row->Id_Reservation ?></td>
                    <td><?php echo $row->DateReservation ?>DH</td>
                     
                   
                   
                </tr>
                <?php } ?>
        </table>
        <div>
            <input type="submit" onclick="window.location.href='profile.php'" value="Retour au liste des vols">
        </div>
    </div>
    </center>
    <div style="width: 300px;  height: 150px;"></div>
        <div class="tm-page-wrap mx-auto">
      

            
            


            <footer class="tm-container-outer">
                <p class="mb-0">Copyright © <span class="tm-current-year">2018</span> Your Company 
                    
                . Designed by <a rel="nofollow" href="http://www.google.com/+templatemo" target="_parent">Template Mo</a></p>
            </footer>
        </div>
    </div> <!-- .main-content -->

    <!-- load JS files -->
    <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
    <script src="js/popper.min.js"></script>                    <!-- https://popper.js.org/ -->       
    <script src="js/bootstrap.min.js"></script>                 <!-- https://getbootstrap.com/ -->
    <script src="js/datepicker.min.js"></script>                <!-- https://github.com/qodesmith/datepicker -->
    <script src="js/jquery.singlePageNav.min.js"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
    <script src="slick/slick.min.js"></script>                  <!-- http://kenwheeler.github.io/slick/ -->
    <script src="js/jquery.scrollTo.min.js"></script>           <!-- https://github.com/flesler/jquery.scrollTo -->
    

</body>
</html>


