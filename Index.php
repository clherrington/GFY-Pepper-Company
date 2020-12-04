<?php
    include './View/header.php';
    include './Controller/db_conn.php';
    include './Model/product-queries.php';
    include './View/navbar.php';

    
    $database = new Database();
    $db = $database->connect();

    $product = new Product($db);
    $productGet = $product->prodRead();

?>

<!-- I really don't know -->
<?php
include './View/Public/carousel.php'
?>

<alert>I couldn't get the product search to work</alert>
<button onclick='href="./contest-page.php"'class= 'btn'>Contest</button>




<?php
    include './View/footer.php';
?>
