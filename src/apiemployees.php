<?php

include_once 'employee.php';

class ApiEmployee{


    function getAll(){
        $employee = new Employee();
        $employees = array();
        $employees["items"] = array();

        $res = $employee->getEmployees();

        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)){
    
                $item=array(
                    "id" => $row['id'],
                    "name" => $row['name'],
                    "designation" => $row['designation'],
                );
                array_push($employees["items"], $item);
            }
        
            echo json_encode($employees);
        }else{
            echo json_encode(array('message' => 'No Elements Found'));
        }
    }
}

?>