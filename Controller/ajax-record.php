<?php

    include './db_conn.php';
    include '../Model/contest-queries.php';

    $database = new Database();
    $db = $database->connect();



    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

    //vars
        $name = trim(htmlentities($POST['name']));
        $desc = trim(htmlentities($POST['desc']));
        $phone = trim(htmlentities($POST['phone']));
    //vars

    $hotJotsData =
    [
        "name"=> $name,
        "desc"=> $desc,
        "phone"=> $phone
    ];

    $hotJots = new Contest($db);
    $hotJots->checkEntry($phone);

    if ($hotJots->checkEntry($phone))
    {
       Echo "Don't cheat!";
    }
    else
    {
        $hotJots->contestEntry($hotJotsData);
        echo "Thanks george";
    }
    

?>