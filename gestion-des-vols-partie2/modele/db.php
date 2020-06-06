<?php

  class db {

    private $host;
    private $username;
    private $password;
    private $db;
    

    public function conn(){

        $this->host = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->db = "gestion_vols";


        $conn=new mysqli($this->host, $this->username, $this->password, $this->db);

        return $conn;
    }


  }
?>