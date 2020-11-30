<?php
class Contest {
    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function checkEntry($phone)
    {
        

        $query = "SELECT * from ContestIdeas WHERE PhoneNumber = {$phone}";

        //Prepares query statement
        $stmt = $this->conn->prepare($query);

        //execute query
        $stmt->execute();

        if($stmt->rowCount() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }


        //return values
        return $stmt;
    }

    public function contestEntry($data)
    {

        //vars
        $name = $data['name'];
        $desc = $data['desc'];
        $phone = $data['phone'];
        //vars

        $query = "INSERT into ContestIdeas
                    (Name, Description, PhoneNumber)
                   Values ( '$name', '$desc', '$phone');";
        
        $stmt = $this->conn->prepare($query);

        $stmt->execute();

    }
}