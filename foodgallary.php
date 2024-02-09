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
    <title>food gallery</title>
</head>
<body>

<section class="gallery" id="gallery">

    <h1 class="heading"> our food <span> gallery </span> </h1>

    <div class="box-container">
    <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE  cat LIKE '%burger%' ORDER BY RAND() limit 3");
      if(mysqli_num_rows($select_products) > 0){
        $fetch_product = mysqli_fetch_assoc($select_products);
      ?>
        <div class="box">
        <img src="assest/uploaded_img/<?php echo $fetch_product['image']; ?>" alt=""  width="100%" height="50%">

            <div class="content">
       

                <h3><?php echo $fetch_product['name']; ?></h3>
                <p>Lorem ipsum  sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
               <form method="post" action="">
               <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input type="hidden" name="product_id" value="<?php echo $fetch_product['id']; ?>">
            <input type="hidden" name="product_cat" value="<?php echo $fetch_product['cat']; ?>">
            <input type="hidden" name="userid" value="<?php echo $user_id; ?>">

               <input type="submit"  class="btn" name="add_to_cart" value="order now"></input></form>
            </div>
            <?php
     
      };
      ?>
        </div>
        <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE  cat LIKE '%pizza%' ORDER BY RAND() limit 9");
      if(mysqli_num_rows($select_products) > 0){
        $fetch_product = mysqli_fetch_assoc($select_products);
      ?>
        <div class="box">
        <img src="assest/uploaded_img/<?php echo $fetch_product['image']; ?>" alt=""  width="100%" height="50%">

            <div class="content">
       

                <h3><?php echo $fetch_product['name']; ?></h3>
                <p>Lorem ipsum  sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
               <form method="post" action="">
               <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input type="hidden" name="product_id" value="<?php echo $fetch_product['id']; ?>">
            <input type="hidden" name="product_cat" value="<?php echo $fetch_product['cat']; ?>">
            <input type="hidden" name="userid" value="<?php echo $user_id; ?>">

               <input type="submit"  class="btn" name="add_to_cart" value="order now"></input></form>
            </div>
            <?php
     
      };
      ?>
        </div>
        <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE  cat LIKE '%cake%' ORDER BY RAND() limit 4");
      if(mysqli_num_rows($select_products) > 0){
        $fetch_product = mysqli_fetch_assoc($select_products);
      ?>
        <div class="box">
        <img src="assest/uploaded_img/<?php echo $fetch_product['image']; ?>" alt=""  width="100%" height="50%">

            <div class="content">
       

                <h3><?php echo $fetch_product['name']; ?></h3>
                <p>Lorem ipsum  sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
               <form method="post" action="">
               <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input type="hidden" name="product_id" value="<?php echo $fetch_product['id']; ?>">
            <input type="hidden" name="product_cat" value="<?php echo $fetch_product['cat']; ?>">
            <input type="hidden" name="userid" value="<?php echo $user_id; ?>">

               <input type="submit"  class="btn" name="add_to_cart" value="order now"></input></form>
            </div>
            <?php
     
      };
      ?>
        </div>
        <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE  cat LIKE '%drink%' ORDER BY RAND() limit 2");
      if(mysqli_num_rows($select_products) > 0){
        $fetch_product = mysqli_fetch_assoc($select_products);
      ?>
        <div class="box">
        <img src="assest/uploaded_img/<?php echo $fetch_product['image']; ?>" alt=""  width="100%" height="50%">

            <div class="content">
       

                <h3><?php echo $fetch_product['name']; ?></h3>
                <p>Lorem ipsum  sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
               <form method="post" action="">
               <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input type="hidden" name="product_id" value="<?php echo $fetch_product['id']; ?>">
            <input type="hidden" name="product_cat" value="<?php echo $fetch_product['cat']; ?>">
            <input type="hidden" name="userid" value="<?php echo $user_id; ?>">

               <input type="submit"  class="btn" name="add_to_cart" value="order now"></input></form>
            </div>
            <?php
     
      };
      ?>
        </div>
        <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE  cat LIKE '%burger%' ORDER BY RAND() limit 8");
      if(mysqli_num_rows($select_products) > 0){
        $fetch_product = mysqli_fetch_assoc($select_products);
      ?>
        <div class="box">
        <img src="assest/uploaded_img/<?php echo $fetch_product['image']; ?>" alt=""  width="100%" height="50%">

            <div class="content">
       

                <h3><?php echo $fetch_product['name']; ?></h3>
                <p>Lorem ipsum  sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
               <form method="post" action="">
               <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input type="hidden" name="product_id" value="<?php echo $fetch_product['id']; ?>">
            <input type="hidden" name="product_cat" value="<?php echo $fetch_product['cat']; ?>">
            <input type="hidden" name="userid" value="<?php echo $user_id; ?>">

               <input type="submit"  class="btn" name="add_to_cart" value="order now"></input></form>
            </div>
            <?php
     
      };
      ?>
        </div>
        <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE  cat LIKE '%coffee%' ORDER BY RAND() limit 6");
      if(mysqli_num_rows($select_products) > 0){
        $fetch_product = mysqli_fetch_assoc($select_products);
      ?>
        <div class="box">
        <img src="assest/uploaded_img/<?php echo $fetch_product['image']; ?>" alt=""  width="100%" height="50%">

            <div class="content">
       

                <h3><?php echo $fetch_product['name']; ?></h3>
                <p>Lorem ipsum  sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
               <form method="post" action="">
               <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input type="hidden" name="product_id" value="<?php echo $fetch_product['id']; ?>">
            <input type="hidden" name="product_cat" value="<?php echo $fetch_product['cat']; ?>">
            <input type="hidden" name="userid" value="<?php echo $user_id; ?>">

               <input type="submit"  class="btn" name="add_to_cart" value="order now"></input></form>
            </div>
            <?php
     
      };
      ?>
        </div>
        <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE  cat LIKE '%pizza%' ORDER BY RAND() limit 4");
      if(mysqli_num_rows($select_products) > 0){
        $fetch_product = mysqli_fetch_assoc($select_products);
      ?>
        <div class="box">
        <img src="assest/uploaded_img/<?php echo $fetch_product['image']; ?>" alt=""  width="100%" height="50%">

            <div class="content">
       

                <h3><?php echo $fetch_product['name']; ?></h3>
                <p>Lorem ipsum  sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
               <form method="post" action="">
               <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input type="hidden" name="product_id" value="<?php echo $fetch_product['id']; ?>">
            <input type="hidden" name="product_cat" value="<?php echo $fetch_product['cat']; ?>">
            <input type="hidden" name="userid" value="<?php echo $user_id; ?>">

               <input type="submit"  class="btn" name="add_to_cart" value="order now"></input></form>
            </div>
            <?php
     
      };
      ?>
        </div>
        <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE  cat LIKE '%cake%' ORDER BY RAND() limit 3");
      if(mysqli_num_rows($select_products) > 0){
        $fetch_product = mysqli_fetch_assoc($select_products);
      ?>
        <div class="box">
        <img src="assest/uploaded_img/<?php echo $fetch_product['image']; ?>" alt=""  width="100%" height="50%">

            <div class="content">
       

                <h3><?php echo $fetch_product['name']; ?></h3>
                <p>Lorem ipsum  sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
               <form method="post" action="">
               <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input type="hidden" name="product_id" value="<?php echo $fetch_product['id']; ?>">
            <input type="hidden" name="product_cat" value="<?php echo $fetch_product['cat']; ?>">
            <input type="hidden" name="userid" value="<?php echo $user_id; ?>">

               <input type="submit"  class="btn" name="add_to_cart" value="order now"></input></form>
            </div>
            <?php
     
      };
      ?>
        </div>
        <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE  cat LIKE '%pizza%' ORDER BY RAND() limit 2");
      if(mysqli_num_rows($select_products) > 0){
        $fetch_product = mysqli_fetch_assoc($select_products);
      ?>
        <div class="box">
        <img src="assest/uploaded_img/<?php echo $fetch_product['image']; ?>" alt=""  width="100%" height="50%">

            <div class="content">
       

                <h3><?php echo $fetch_product['name']; ?></h3>
                <p>Lorem ipsum  sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
               <form method="post" action="">
               <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input type="hidden" name="product_id" value="<?php echo $fetch_product['id']; ?>">
            <input type="hidden" name="product_cat" value="<?php echo $fetch_product['cat']; ?>">
            <input type="hidden" name="userid" value="<?php echo $user_id; ?>">

               <input type="submit"  class="btn" name="add_to_cart" value="order now"></input></form>
            </div>
            <?php
     
      };
      ?>
        </div>

    </div>

</section>
<script src="assest/js/script.js"></script>
</body>
</html>