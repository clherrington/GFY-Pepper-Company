
<div class="wrapper">
  <h3 class="h3-c">Featured Items</h3>
  <div class="carousel">
<?php
 while ($row = $productGet->fetch(PDO::FETCH_ASSOC))
 {
    //Variables

    $prodName = $row['Name'];
    $prodImg = $row['images'];
    $prodDesc = $row['Description'];
    $prodPrice = bcdiv($row['Price'], 1, 2);

  //Variables
  echo "

    <div class='carousel__item'>
      <div class='carousel__item-head'>
         <img class='carousel-img' src='./View/Public/Product-Photos/{$prodImg}'> 
      </div>
      <div class='carousel__item-body'>
        <p class='title'>{$prodName}.<br>{$prodDesc}</p>
        <p>{$prodPrice}</p>
      </div>
    </div>
  ";
}
?>
  </div>
</div>