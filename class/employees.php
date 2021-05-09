<?php
class Employee
{
    private $conn;

    private $db_table = "Employee";

    public $id;
    public $name;
    public $email;
    public $age;
    public $designation;
    public $created;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getEmployees()
    {
        $sqlQuery = "SELECT id, name, email, age, designation, created FROM " . $this->db_table . "";
        $statement = $this->conn->prepare($sqlQuery);
        $statement->execute();
        return $statement;
    }

    public function createEmployee()
    {
        $sqlQuery = "INSERT INTO
                    ". $this->db_table ."
                SET
                    name = :name, 
                    email = :email, 
                    age = :age, 
                    designation = :designation, 
                    created = :created";
    
        $statement = $this->conn->prepare($sqlQuery);
    
        $this->name=htmlspecialchars(strip_tags($this->name));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->age=htmlspecialchars(strip_tags($this->age));
        $this->designation=htmlspecialchars(strip_tags($this->designation));
        $this->created=htmlspecialchars(strip_tags($this->created));
    
        $statement->bindParam(":name", $this->name);
        $statement->bindParam(":email", $this->email);
        $statement->bindParam(":age", $this->age);
        $statement->bindParam(":designation", $this->designation);
        $statement->bindParam(":created", $this->created);
    
        if($statement->execute()){
           return true;
        }
        return false;
    }

    public function getSingleEmployee()
    {
        $sqlQuery = "SELECT
                    id, 
                    name, 
                    email, 
                    age, 
                    designation, 
                    created
                  FROM
                    ". $this->db_table ."
                WHERE 
                   id = ?
                LIMIT 0,1";

        $statement = $this->conn->prepare($sqlQuery);

        $statement->bindParam(1, $this->id);

        $statement->execute();

        $dataRow = $statement->fetch(PDO::FETCH_ASSOC);
        
        $this->name = $dataRow['name'];
        $this->email = $dataRow['email'];
        $this->age = $dataRow['age'];
        $this->designation = $dataRow['designation'];
        $this->created = $dataRow['created'];
    }
    
    public function updateEmployee()
    {
        $sqlQuery = "UPDATE
                    ". $this->db_table ."
                SET
                    name = :name, 
                    email = :email, 
                    age = :age, 
                    designation = :designation, 
                    created = :created
                WHERE 
                    id = :id";
    
        $statement = $this->conn->prepare($sqlQuery);
    
        $this->name=htmlspecialchars(strip_tags($this->name));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->age=htmlspecialchars(strip_tags($this->age));
        $this->designation=htmlspecialchars(strip_tags($this->designation));
        $this->created=htmlspecialchars(strip_tags($this->created));
        $this->id=htmlspecialchars(strip_tags($this->id));
    
        // bind data
        $statement->bindParam(":name", $this->name);
        $statement->bindParam(":email", $this->email);
        $statement->bindParam(":age", $this->age);
        $statement->bindParam(":designation", $this->designation);
        $statement->bindParam(":created", $this->created);
        $statement->bindParam(":id", $this->id);
    
        if($statement->execute()){
           return true;
        }
        return false;
    }

    function deleteEmployee()
    {
        $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE id = ?";
        $statement = $this->conn->prepare($sqlQuery);
    
        $this->id=htmlspecialchars(strip_tags($this->id));
    
        $statement->bindParam(1, $this->id);
    
        if($statement->execute()){
            return true;
        }
        return false;
    }
}

?>