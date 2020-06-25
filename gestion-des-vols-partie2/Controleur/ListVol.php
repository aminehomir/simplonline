<?php

include_once '../modele/db.php';
include_once '../modele/vol.php';
$data2=new vol();

      $vol_data = $data2->selectvol('vol');
       
       foreach($vol_data as $vol){
        ?>

        <tr>
            <td><?php echo $vol["num_vol"]; ?></td>
            <td><?php echo $vol["lieu_depart"]; ?></td>
            <td><?php echo $vol["lieu_arrive"]; ?></td>
            <td><?php echo $vol["date_depart"]; ?></td>
            <td><?php echo $vol["date_arrive"]; ?></td>
            <td><?php echo $vol["nom_places"]; ?></td>
            <td><?php echo $vol["prix"]; ?></td>
            <td><?php echo $vol["status"]; ?></td>
            <?php if($vol['status'] === "dispo")
            {
               ?>
               <td><a href="adminvols.php?status=annule&Numvol=<?php echo $vol["Numvol"]; ?>" style="color:black;">
               <i style="color: #67DAD5;">V</i>
         </a></td>
                     
         <?php       } 
                  
          else{ ?>
               
             
               <td><a href="adminvols.php?status=dispo&Numvol=<?php echo $vol["Numvol"]; ?>" style="color:black;">
               X
            </a></td>
            <?php   } ?>
            
          
            
       </tr>

    <?php
       }
    ?>