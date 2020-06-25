<?php

include_once '../modele/db.php';
include_once '../modele/Reservation.php';

$data=new reservation();






if(isset($_POST["submit"])){
  
        $nom = $_POST['Nom'];
        $prenom = $_POST['Prenom']; 
        $address = $_POST['Address'];
        $codepo = $_POST['CodePostal'];
        $ville = $_POST['Ville'];
        $numpass = $_POST['NumeroPassport'];
        $iduser=$_SESSION['Id_user'];
        $id= $_GET['Numvol'];
        ;
        

         $query= $data->AddPassager($nom,$prenom,$address,$codepo,$ville,$numpass,$iduser);
        $AddR= $data->AddReservation($iduser,$id);
        
        $id_res =$data->insert_id;
        $_GET['Id_Reservation'];
        header('location:profile.php?"');

  

}




   ?>