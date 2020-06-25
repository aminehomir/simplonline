<?php

class vol extends db {

    public function required_Validation($field){

        $count = 0;
        foreach($field as $key => $value){

            if(empty($value)){

                $count++;
                $this->errors .="<p>" . $key . " is required </p>";

             }
        }


        if($count === 0){

            return true;
        }

    }

    function addidvol($id){
        $sql2 = "SELECT * FROM vol WHERE Numvol=' $id'";
        $result = $this->conn()->query($sql2);
    }

    public function Addvol($nbvol, $lieudepart, $lieuarrive, $datedepart, $datearrive, $nbplace, $prix) {  
         
        $addvol = "INSERT INTO vol (num_vol,lieu_depart,lieu_arrive,date_depart,date_arrive,nom_places,prix,status) values ('$nbvol', '$lieudepart', '$lieuarrive', '$datedepart', '$datearrive', '$nbplace', '$prix','dispo')";  
        $result = $this->conn()->query($addvol);
        return true;  
    }

    public function selectvol($Table_Name){

        $array=array();
        $query="SELECT * FROM ".$Table_Name."";
        $result=mysqli_query($this->conn(),$query);
        while($row=mysqli_fetch_assoc($result)){

            $array[] = $row;
        }
            return $array;
    }

    public function selectOne($table, $condition) {
        $conn=$this->conn();
        $query2 = "SELECT * FROM $table";
        $i = 0;
        foreach($condition as $key => $value){
            if ($i === 0){
                $query2 = $query2 . " WHERE $key=?";
            }
            else{
                $query2 = $query2 . " AND $key=?";
            }
            $i++;
        }
        $query2 = $query2 . " LIMIT 1";
       
        $stmt = $conn->prepare($query2);
        $value = array_values($condition);
        $type = str_repeat('s', count($value));
        $stmt->bind_param($type, ...$value);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_assoc();
        return $records;
    }


   

    public function update($status, $idv){
        $update2 = ("UPDATE `vol` SET `status` = '$status' WHERE `vol`.`Numvol` = $idv");
        $result = $this->conn()->query($update2);
        return $result;
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




}


?>