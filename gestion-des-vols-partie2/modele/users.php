<?php 
class users extends db {

    
    public function can_login($table_name, $where_condition)  
    {  
         $condition = '';  
         foreach($where_condition as $key => $value)  
         {  
              $condition .= $key . " = '".$value."' AND ";  
         }  
         $condition = substr($condition, 0, -5);  
         /*This code will convert array to string like this-  
         input - array(  
              'id'     =>     '5'  
         )  
         output = id = '5'*/  
         $query = "SELECT * FROM ".$table_name." WHERE " . $condition;  
         $result = mysqli_query($this->conn(), $query);
         

         while($row = $result->fetch_assoc()){
           
            $_SESSION['user_type'] = $row['user_type'];
            $_SESSION['Id_user'] = $row['Id_user'];
            $_SESSION['email'] = $row['email'];   

        }
         
        
         if(mysqli_num_rows($result)) 
        
         {  
              return true;  
         }  
         else  
         {  
            
              $this->error = "Wrong Data";  
         }  
    } 

    public function required_validation($field)  
      {    
           $count = 0;  
           foreach($field as $key => $value)  
           {  
                if(empty($value))  
                {  
                     $count++;  
                     $this->error .="<p>" . $key . " is required</p>";  
                }  
           }  
           if($count == 0)  
           {  
                return true;  
           }  
      } 
      
      
      public function Emailexist($email){  

        $query2 = "SELECT * FROM user WHERE email = '".$email."'";  
        $result = $this->conn()->query($query2);
        $row = $result->num_rows; 
        if($row > 0){  
            return true;  
        } else {  
            return false;  
        }  
    }

    function register($username,$email,$password) {  
         
        $query3 = "INSERT into user (username, email, password, user_type) values ('$username','$email','$password','User')";  
        $result = $this->conn()->query($query3);
        return true;  
    }
}


 ?>