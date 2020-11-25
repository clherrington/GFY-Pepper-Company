<?php
class Contest {
    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function checkEntryExists($data)
    {
        
        //vars
        $phone = $data['PhoneNumber'];
        //vars

        $query1 = "SELECT * from ContestIdeas WHERE PhoneNumber = {$phone}";

        //Prepares query statement
        $stmt = $this->conn->prepare($query);

        //execute query
        $stmt->execute();

        if(count($stmt) > 0)
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
        $name = $data['Name'];
        $desc = $data['Description'];
        $phone = $data['PhoneNumber'];
        //vars

        $query1 = "SELECT * from ContestIdeas WHERE PhoneNumber = {$phone}";

        //Prepares query statement
        $stmt = $this->conn->prepare($query);

        //execute query
        $stmt->execute();

        //return values
        return $stmt;

        if

        $query2 = "INSERT into ContestIdeas"

    }
}