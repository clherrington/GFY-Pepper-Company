
<div class="wrapper">
  <h3 class="h3-c">Featured Items</h3>
  <div class="carousel">
    <div class="carousel__item">
      <div class="carousel__item-head">
        🐳
      </div>
      <div class="carousel__item-body">
        <p class="title">spouting whale</p>
        <p>Unicode: U+1F433</p>
      </div>
    </div>
    <div class="carousel__item">
      <div class="carousel__item-head">
        🐋
      </div>
      <div class="carousel__item-body">
        <p class="title">whale</p>
        <p>Unicode: U+1F40B</p>
      </div>
    </div>
    <div class="carousel__item">
      <div class="carousel__item-head">
        🐬
      </div>
      <div class="carousel__item-body">
        <p class="title">dolphin</p>
        <p>Unicode: U+1F42C</p>
      </div>
    </div>
    <div class="carousel__item">
      <div class="carousel__item-head">
        🐟
      </div>
      <div class="carousel__item-body">
        <p class="title">fish</p>
        <p>Unicode: U+1F41F</p>
      </div>
    </div>
    <div class="carousel__item">
      <div class="carousel__item-head">
        🐠
      </div>
      <div class="carousel__item-body">
        <p class="title">tropical fish</p>
        <p>Unicode: U+1F420</p>
      </div>
    </div>
    <div class="carousel__item">
      <div class="carousel__item-head">
        🐡
      </div>
      <div class="carousel__item-body">
        <p class="title">blowfish</p>
        <p>Unicode: U+1F421</p>
      </div>
    </div>
    <div class="carousel__item">
      <div class="carousel__item-head">
        🦈
      </div>
      <div class="carousel__item-body">
        <p class="title">shark</p>
        <p>Unicode: U+1F988</p>
      </div>
    </div>
    <div class="carousel__item">
      <div class="carousel__item-head">
        🐙
      </div>
      <div class="carousel__item-body">
        <p class="title">octopus</p>
        <p>Unicode: U+1F419</p>
      </div>
    </div>
    <div class="carousel__item">
      <div class="carousel__item-head">
        🐚
      </div>
      <div class="carousel__item-body">
        <p class="title">spiral shell</p>
        <p>Unicode: U+1F41A</p>
      </div>
    </div>
  </div>
</div>




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
         <img src='./View/Public/Product-Photos/{$prodImg}'> 
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