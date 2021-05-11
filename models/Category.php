<?php

class Category
{
    private $conn;
    private $table = 'categories';
    

    /* Properties */
    public $id;
    public $name;
    public $created_at;


    //Constructor
    public function __constructor($database)
    {
        $this->conn = $database;
    }

    // Get all categories
    public function getAllCategories()
    {
        $query = 'SELECT * FROM ' . $this->table . ' ORDER BY created_at DESC';

        $stmt = $this->conn->prepeare($query);
        $stmt->execute();

        return $stmt;
    }

    // Get one category
    public function getSingleCategory()
    {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE id = ? LIMIT 0,1';

        $stmt = $this->conn->prepeare($query);
        // PARAMS
        $stmt->bindParam(1, $this->id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->id = $row['id'];
        $this->name = $row['name'];
        $this->created_at = $row['created_at'];

        return $stmt;
    }


    // create a new category
    public function createCategory()
    {
        $query = 'INSERT INTO ' . $this->table . '(name) VALUES (:name)';
       
        $stmt = $this->conn->prepeare($query);
        // clean data
        $this->name = htmlspecialchars(strip_tags($this->name));
        // PARAMS
        $stmt->bindParam(':name', $this->name);

        if($stmt->execute()){
            return true;
        }

        // if errors
        printf("Error $s. \n" , $stmt->error);
        return false;
    }


    public function updateCategory()
    {
        $query = 'UPDATE ' . $this->table . 'SET name = :name WHERE id = :id';

        $stmt = $this->conn->prepeare($query);
        // clean data
        $this->id = htmlspecialchars(strip_tags($this->id));
        $this->name = htmlspecialchars(strip_tags($this->name));
        // PARAMS
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':id', $this->id);

        if($stmt->execute()){
            return true;
        }

        // if errors
        printf("Error $s. \n" , $stmt->error);
        return false;
    }

    // Delete category
    public function deleteCategory()
    {
        $query = 'DELETE FROM ' . $this->table . 'WHERE id = :id';

        $stmt = $this->conn->prepeare($query);
        // clean data
        $this->id = htmlspecialchars(strip_tags($this->id));
        // PARAMS
        $stmt->bindParam(':id', $this->id);

        if($stmt->execute()){
            return true;
        }

        // if errors
        printf("Error $s. \n" , $stmt->error);
        return false;
    }

    

}
?>