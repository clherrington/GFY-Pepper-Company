<?php
    include './View/header.php';
    include './Controller/db_conn.php';
    include './View/navbar.php';
    include './Controller/ajax-calls.php';

    $database = new Database();
    $db = $database->connect();
?>

    <div id= 'nah' class='contest-entry'>
        <!-- Form -->
            <div id= 'nah'>
                <h2>Enter your info, it's safe. I promise</h2>
                <!-- Hot sauce Jots -->
                    <div class="form-row">
                        <div class="col">
                            <label for="name">Name</label> 
                            <input id="name" type='text' class='form-control' placeholder='Krakatoa!'/><br>
                        </div>
                        <div class="col">
                        <label for="desc">Description</label> 
                        <textarea id='desc' type="textarea" class="form-control" ></textarea><br>
                        </div>
                    </div>
                <!-- Hot sauce Jots -->

                <!-- desc -->
                    <label for="phone">Phone Number</label> 
                    <input id="phone" type='Telephone' class='form-control'/>
                    
                <!-- desc -->

                <!-- ajax call -->
                <button class='btn btn-primary' onclick="ajaxCard(document.getElementById('name').value, 
                document.getElementById('desc').value,
                document.getElementById('phone').value)">Submit</button>

                <!-- Message Display -->
                <p id='form-sub-message'></p>
            </div>
        
        <!-- Form -->
    </div>