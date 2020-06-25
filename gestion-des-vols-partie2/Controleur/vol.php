  
<?php

include '../modele/db.php';
include '../modele/vol.php';
$data=new vol();
$message="";
$success_message = ''; 

//Add Vol 

if(isset($_POST["addvol"])){

    $field= array (

        'nbvol'                 => $_POST['nbvol'],
        'lieudepart'            => $_POST['lieudepart'],
        'lieuarrive'            => $_POST['lieuarrive'],
        'datedepart'            => $_POST['datedepart'],
        'datearrive'            => $_POST['datearrive'],
        'nbplace'               => $_POST['nbplace'],
        'prix'                  => $_POST['prix']
        
    );

if($data->required_Validation($field)){
    $nbvol       = $_POST['nbvol'];
    $lieudepart = $_POST['lieudepart'];  
    $lieuarrive = $_POST['lieuarrive'];  
    $datedepart = $_POST['datedepart'];
    $datearrive = $_POST['datearrive'];
    $nbplace = $_POST['nbplace'];  
    $prix = $_POST['prix'];    

    if($lieudepart <> $lieuarrive && $datedepart <= $datearrive ){  
    $addV = $data->Addvol($nbvol, $lieudepart, $lieuarrive, $datedepart, $datearrive, $nbplace, $prix);
    $success_message = 'Vol Inserted';

    }

    else{

        $message= "choose different place or different timing ";
    }
    
}


else{

    $message= $data->errors;
}


}




?>