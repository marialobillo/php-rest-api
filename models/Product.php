<?php

class Product
{
    private $conn;
    private $table = 'products';
    

    /* Properties */
    public $id;
    public $name;
    public $description;
    public $category_id;
    public $category_name;
    public $created_at;


    //Constructor
    public function __constructor($database)
    {
        $this->conn = $database;
    }

    // Get all products
    public function getAllProducts()
    {
        $query = 'SELECT c.name as name_category, p.id, p.category_id, 
            p.name, p.description, p.created_at FROM ' . $this->table . 
            'LEFT JOIN  categories c on p.category_id = c.id ORDER BY 
            p.created_at DESC';

        $stmt = $this->conn->prepeare($query);
        $stmt->execute();

        return $stmt;
    }

    // Get one product
    public function getSingleProduct()
    {
        $query = 'SELECT c.name as name_category, p.id, p.category_id, 
        p.name, p.description, p.created_at FROM ' . $this->table . 
        'LEFT JOIN  categories c on p.category_id = c.id WHERE p.id = ? LIMIT 0,1';

        $stmt = $this->conn->prepeare($query);
        // PARAMS
        $stmt->bindParam(1, $this->id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        // PROPERTIES
        $this->id = $row['id'];
        $this->name = $row['name'];
        $this->description = $row['description'];
        $this->category_id = $row['category_id'];
        $this->category_name = $row['category_name'];
        $this->created_at = $row['created_at'];

        return $stmt;
    }


    // create a new category
    public function createProduct()
    {
        $query = 'INSERT INTO ' . $this->table . '(name, description, category_id) 
                VALUES (:name, :description, :category_id)';
       
        $stmt = $this->conn->prepeare($query);
        // clean data
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->description = htmlspecialchars(strip_tags($this->description));
        $this->category_id = htmlspecialchars(strip_tags($this->category_id));

        // PARAMS
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':category_id', $this->category_id);

        if($stmt->execute()){
            return true;
        }

        // if errors
        printf("Error $s. \n" , $stmt->error);
        return false;
    }


    public function updateProduct()
    {
        $query = 'UPDATE ' . $this->table . ' SET name = :name, description = :description, 
        category_id = :category_id WHERE id = :id';
       
        $stmt = $this->conn->prepeare($query);
        // clean data
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->description = htmlspecialchars(strip_tags($this->description));
        $this->category_id = htmlspecialchars(strip_tags($this->category_id));
        $this->id = htmlspecialchars(strip_tags($this->id));

        // PARAMS
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':category_id', $this->category_id);
        $stmt->bindParam(':id', $this->id);


        if($stmt->execute()){
            return true;
        }

        // if errors
        printf("Error $s. \n" , $stmt->error);
        return false;
    }

    // Delete category
    public function deleteProduct()
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