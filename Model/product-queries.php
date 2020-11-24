<?php
class Product{
    public function __construct($db)
    {
        $this->conn = $db;
    }

    function prodRead(){
        $query = "SELECT * from foodproducts";

        //prepare the statement
        $stmt = $this->conn->prepare($query);

        //execute query
        $stmt->execute();
        
        //return values
        return $stmt;
    }
}
?>