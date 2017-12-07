<?php

require_once 'constants.php';

class Mysql {
    
    private $conn;
    
    function _construct()
    {       $this->conn = new mysqli(DM_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or
            die('There was a problem connecting to the database.');
            
    }
    
    function verify_Email_and_Password($email,$password) 
    {       $query = "SELECT *
            FROM travelers
            WHERE Email = ? AND Password = ?
            Limit 1";}
        
        if($stmt = $this->conn->prepare($query))
        {   $stmt->bind_param('ss', $email, $password);
            $stmt->execute();}
            
        if(stmt->fetch())
        {   $stmt->close();
            return true;
            }  
}
?>