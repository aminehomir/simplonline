<?php 
 
  if(isset($_SESSION['username'])):
  endif;
  session_start();
  include('../Controleur/Reservation.php');


//echo "<input hidden value='$id' name='idvol'>";

//echo "testddddddddddddddddddddddddddddd" .$id  ;

if(isset($_POST['id'] )){
    
  $_SESSION['vol']=$id;
  $sql=$data->addidvol($id); 

}
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
       
        <div class="tm-page-wrap mx-auto">
            <section class="tm-banner">
                <div class="tm-container-outer tm-banner-bg">

                
                    <div class="container">

                        <div class="row tm-banner-row tm-banner-row-header">
                            <div class="col-xs-12">
                                <div class="tm-banner-header">
                                    <h1 class="text-uppercase tm-banner-title">Renseignements personnels</h1>
                                    <img src="img/dots-3.png" alt="Dots">
                                   
                                          
                                </div>    
                            </div>  <!-- col-xs-12 -->                      
                        </div> <!-- row -->

         
                        <div class="row tm-banner-row" id="tm-section-search">
                           
                        <div id="table_class"  class="tm-search-form tm-section-pad-2">
                        <p class="tm-banner-subtitle">Votre Vol</p>
        <table id="data" class="table table-bordered">
                <tr>
                    <th width="10%">Numero de vol</th>
                    <th width="10%">Lieu Depart</th>
                    <th width="10%">Lieu Arrive</th>
                    <th width="10%">Date Depart</th>
                    <th width="10%">Date Arrive</th>
                    <th width="10%">Prix (DH)</th>
                    
                   
                </tr>
                <?php    include_once '../Controleur/VolRecuper.php';?>
        </table>
    </div>



                            <form action="" method="post" class="tm-search-form tm-section-pad-2">

                            <input type="hidden" name="volid" value="25" />
                            <p class="tm-banner-subtitle">Renseignements personnels </p>
                                <div class="form-row tm-search-form-row">                                
                                    <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
                                        <label for="nom">Nom</label>
                                        <input name="Nom" type="text" class="form-control" id="nom" placeholder="entrez votre nom..."required='true'>
                                    </div>

                                    <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
                                        <label for="prenom">Prenom</label>
                                        <input name="Prenom" type="text" class="form-control" id="prenom" placeholder="entrez votre prenom..."required='true'>
                                    </div>
                                    <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
                                        <label for="address">Address</label>
                                        <input name="Address" type="text" class="form-control" id="address" placeholder="entrez votre address..."required='true'>
                                    </div>
                                    <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
                                        <label for="codepostal">Code postal</label>
                                        <input name="CodePostal" type="text" class="form-control" id="codepostal" placeholder="entrez votre code postal..."required='true'>
                                    </div>
                                    <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
                                        <label for="ville">Ville</label>
                                        <input name="Ville" type="text" class="form-control" id="ville" placeholder="entrez votre ville..." required='true'>
                                    </div>
                                    <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
                                        <label for="passport">Numero passport</label>
                                        <input name="NumeroPassport" type="text" class="form-control" id="passport" placeholder="entrez votre numero passport..." required='true'>
                                    </div>
                                   
                                </div> <!-- form-row -->
                                <div class="form-row tm-search-form-row">
                                      
                                    
                                    <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
                                        <label for="btnSubmit">&nbsp;</label>
                                        <button type="submit" name="submit" class="btn btn-primary tm-btn tm-btn-search text-uppercase" id="Submit">Réserver</button>
                                    </div>
                                </div>                              
                            </form>                             

                        </div> <!-- row -->
                        <div class="tm-banner-overlay"></div>
                    </div>  <!-- .container -->                   
                </div>     <!-- .tm-container-outer -->                 
            </section>

            
            


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