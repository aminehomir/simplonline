<?php
include_once '../modele/db.php';
include_once '../modele/vol.php';
?>

  <?php 

$data = new vol();
$table = 'vol';
$id_V='';




if(isset($_GET['Numvol'])){ 

    $id_V = $_GET['Numvol'];
}

$condition = ['Numvol' => $id_V

];

$res = $data->selectAll($table, $condition);
?>

<?php foreach($res as $vol){?>

  <tr >
                    
                    <td><?php echo $vol['num_vol'] ?> </td>
                    <td><?php echo $vol['lieu_depart'] ?></td>
                    <td><?php echo $vol['lieu_arrive'] ?></td>
                    <td><?php echo $vol['date_depart'] ?></td>
                    <td><?php echo $vol['date_arrive'] ?></td>
                    <td><?php echo $vol['prix'] ?>DH</td>
                     
                    <input type="hidden" name="vol" value="<?php  echo $vol['Numvol']  ?>" />
                   
                </tr>
   <?php } 

?>

