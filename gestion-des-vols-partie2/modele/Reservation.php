<?php

  class reservation extends db {
  

    function AddPassager($nom,$prenom,$address,$codepo,$ville,$numpass,$iduser) {  
    
        $query = "INSERT INTO passager(Nom,Prenom,Address,CodePostal,Ville,NumeroPassport,Id_user) VALUES('$nom','$prenom','$address','$codepo','$ville','$numpass','$iduser')";
        $result = $this->conn()->query($query);
        
        return true;  
    }
    
    function AddReservation($iduser,$id) {  
    
        $AddR = "insert into reservation(Id_user,Id_vol,DateReservation) values ('$iduser','$id',NOW())";  
        $result = $this->conn()->query($AddR);
       
        return true;  
    }
    
    


  



  public function selectAll($table, $condition = []){
    $conn = $this->conn();
    $sql = "SELECT * FROM $table";
        $i = 0;
        foreach($condition as $key => $value){
            if ($i === 0){
                $sql = $sql . " WHERE $key=?";
            }
            else{
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }
        $stmt =  $conn->prepare($sql);
        $value = array_values($condition);
        $type = str_repeat('s', count($value));
        $stmt->bind_param($type, ...$value);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
}
public function selectOne($table, $condition) {
    $conn=$this->conn();
    $sql = "SELECT * FROM $table";
    $i = 0;
    foreach($condition as $key => $value){
        if ($i === 0){
            $sql = $sql . " WHERE $key=?";
        }
        else{
            $sql = $sql . " AND $key=?";
        }
        $i++;
    }
    $sql = $sql . " LIMIT 1";
   
    $stmt = $conn->prepare($sql);
    $value = array_values($condition);
    $type = str_repeat('s', count($value));
    $stmt->bind_param($type, ...$value);
    $stmt->execute();
    $records = $stmt->get_result()->fetch_assoc();
    return $records;
}


public function History($table, $condition = []){
    $conn = $this->conn();
    $sql = "SELECT lieu_depart,lieu_arrive,date_depart,date_arrive,prix,DateReservation FROM $table INNER JOIN vol V ON V.Numvol = $table.Id_vol";
    
    $i = 0;
    foreach($condition as $key => $value){
        if ($i === 0){
            $sql = $sql . " WHERE $key=?";
        }
        else{
            $sql = $sql . " AND $key=?";
        }
        $i++;
    }
    $stmt =  $conn->prepare($sql);
    $value = array_values($condition);
    $type = str_repeat('s', count($value));
    $stmt->bind_param($type, ...$value);
    $stmt->execute();
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
  }


 
}

?>