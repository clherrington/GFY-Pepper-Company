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






<?php
    include './View/footer.php';
?>
