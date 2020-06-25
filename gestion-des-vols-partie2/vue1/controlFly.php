<?php
 $id = '';
 $lieudepart = '';
 $lieuarrive = '';
 $datedepart = '';
 $datearrive = '';
 $nblpace = '';
 $prix = '';
 $status = '';

 $ide = '';
 $statuse = '';


if(isset($_GET['Numvol'])){
    $flyes = $data->selectOne('vol', ['Numvol' => $_GET['Numvol']]);
    $id = $flyes['Numvol'];
    $nvol = $flyes['num_vol'];
    $lieuedpart = $flyes['lieu_depart'];
    $lieuarrive = $flyes['lieu_arrive'];
    $datedepart = $flyes['date_depart'];
    $datearrive = $flyes['date_arrive'];
    $nbplace = $flyes['nom_places'];
    $prix = $flyes['prix'];
    $status = $flyes['status'];
    
}


if(isset($_GET["status"]) && isset($_GET['Numvol'])){
    $statusV = $_GET['status'];
    $id_Vol = $_GET['Numvol'];
    $count = $data->updatev($statusV, $id_Vol);
    header("location:adminvols.php");
    exit();
}

?>


