<?php

include_once 'database.php';

class Employee extends Database{
    
    function getEmployees(){
        $query = $this->connect()->query('SELECT * FROM Employee');
        
        return $query;
    }

}

?>