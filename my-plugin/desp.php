<?php

global $wpdb;
$tablename = $wpdb->prefix."myplugin0";



?>

<style>
table {
    margin-top: 30px;
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 60%;
}
table thead  {
	background-color: #54585d;
	color: #ffffff;
	font-weight: bold;
	font-size: 13px;
	border: 1px solid #54585d;
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
    font-weight: bold;
  padding: 8px;
}


</style>

<table>
<thead>
  <tr>
  <th>Nom</th>
 <th>Option</th>
 <th>Description</th>
  </tr>
    </thead>
  <?php
     $sql = $wpdb->get_results("SELECT * FROM ".$tablename."");
     foreach($sql as $result){
      
      $nom = $result->nom;
      $option = $result->option;
      $desc = $result->description;

      echo "
      <tr>
     
      <td>".$nom."</td>
      <td>".$option."</td>
      <td>".$desc."</td>
      
      </tr>";
      
   }
 
?>
</table>