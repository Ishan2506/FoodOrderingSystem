<?php


@include 'config.php';

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_id=$_POST['product_id'];
   $product_cat=$_POST['product_cat'];
   $uid=$_POST['userid'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity,p_id,cat,uid) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity','$product_id','$product_cat','$uid')");
      $message[] = 'product added to cart succesfully';
   }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

           <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<!-- custom css file link  -->
        <link rel="stylesheet" href="assest/css/style.css">
    <title>mainpage of did cafe</title>
    <style>
        
.search {
  width: 100%;
  position: relative;
  display: flex;
  color:#ff3838;
}

.searchTerm {
  width: 100%;
  border: 2px solid #ff3838;
  border-right: none;
  padding: 5px;
  height: 40px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #ff3838;
  font-size: 18px;
  font-weight: bold;
  background:transparent;
}

.searchTerm:focus{
  color: #ff3838;
}

.searchButton {
  width: 38px;
  height: 40px;
  border: 2px solid #ff3838;
  background:transparent;

  text-align: center;
  color: #ff3838;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}

/*Resize the wrap to see the search bar change!*/


@media (min-width: 1600px) {
  .wrap{
  width: 30%;
  position: absolute;
  top: 20%;
  left: 17%;
  transform: translate(-50%, -50%);
}
 .btn:hover{
  background:red;
}
}
    </style>
</head>
<body>

<section class="home" id="home">

<div class="content">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <h3>Coffee made with love</h3>
    <p> This place is crowded for Italian, dessert, fast food, vegan and other cuisines. It is one of the best cafe for people who like sweets. This coffe shop offers delicious baked products and desserts. They are famous for their exquisite designer cakes, which get customized for various occasions and events.</p>
    <!-- <a href="#" class="btn">order now</a> -->
    <form method="post" action="">
               <input type="hidden" name="product_name" value="Did Special Coffe">
            <input type="hidden" name="product_price" value="350">
            <input type="hidden" name="product_image" value="coff.png"> 
            <input type="hidden" name="product_id" value="01">
            <input type="hidden" name="product_id" value="1">
            <input type="hidden" name="product_cat" value="coffee">
            <input type="hidden" name="userid" value="<?php echo $user_id; ?>">
               <input type="submit"  class="btn" name="add_to_cart" value="Order Now"></input></form>
</div>

<div class="image">
    <img src="assest/images/coff.png" alt="" >
</div>

<form action="food_search.php" method="post">
<div class="wrap">
        <?php


if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>
   <div class="search">
      <input type="text" class="searchTerm" placeholder="What are you looking for?" name="search" required >
      <button type="submit" class="searchButton">
        <i class="fas fa-search"></i>
     </button>
   </div>
</div>
</form>
</section>

</header>
<script src="assest/js/script.js"></script>
</body>
</html>