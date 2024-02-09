
<?php

session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:log.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:log.php');
}

?>
<?php

@include 'config.php';

if(isset($_GET['delete'])){
  $delete_id = $_GET['delete'];
  $delete_query = mysqli_query($conn, "DELETE FROM `order` WHERE id = $delete_id ") or die('query failed');
  if($delete_query){
     header('location:adsea.php');
     $message[] = 'Oreder has been deleted';
  }else{
     header('location:adsea.php');
     $message[] = 'Order could not be deleted';
  };
};

?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Admin Panel </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assest/css/styleec.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        .wrap{
          width: 30%;
          position: absolute;
          top: 15%;
          left: 50%;
          transform: translate(-50%, -50%);
        }
            </style>
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">DID CAFE</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="index.php" >
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="ad.php"  >
            <i class='bx bx-box' ></i>
            <span class="links_name">Product</span>
          </a>
        </li>
        <li>
          <a href="adsea.php" class="active">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">User Order list</span>
          </a>
        </li>
        <li>
          <a href="uad.php" >
            <i class='bx bx-user' ></i>
            <span class="links_name">Users</span>
          </a>
        </li>
        <li>
          <a href="admin.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">Add Products</span>
          </a>
        </li>
        <li>
          <a href="ordertak.php" >
            <i class='bx bx-import' ></i>
            <span class="links_name">Order Table</span>
          </a>
        </li>
        <li>
          <a href="doneorders.php">
            <i class='bx bx-export' ></i>
            <span class="links_name">Prepered Orders</span>
          </a>
        </li>
        <li>
          <a href="prose.php">
            <i class='bx bx-doughnut-chart' ></i>
            <span class="links_name">Sales</span>
          </a>
        </li>
        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <?php
         
      $select = mysqli_query($conn, "SELECT * FROM `formtest` WHERE id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
     
   ?> 
      <div class="profile-details">
        
        <img src="assest/uploaded_img/user/<?php echo $fetch['image']; ?>" alt="">
        <span class="admin_name"><?php echo $fetch['uname']; ?></span>
        
      </div>
    </nav>
   


  
    <?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<!-- <form action="" method="POST">
<div class="wrap">
   <div class="search">
      <input type="text" class="searchTerm" placeholder="Which customer order do you want to see?" name="search" required >
      <button type="submit" name="submit" class="searchButton">
        <i class="fas fa-search"></i>
     </button>
   </div>
</div>
</form> -->

<br>
<div class="container">
<section>
<form action="" method="post" class="add-product-form" enctype="multipart/form-data">
<br>
<br><h3>User Order Details</h3>
<label>Start Date</label>
  <input type="date" class="box" name="sdate" id="sdate" placeholder="Start Date" required> 
  <label>End Date</label>
  <input type="date" class="box" name="edate" id="edate" placeholder="End Date" required> 
   <input type="submit" name="submit" class="btn">

</form>
</section>
<br>
<br>

<br>
<br>
<br>
<?php
         if(isset($_POST['submit'])){
          $sds = $_POST['sdate'];
          $ed = $_POST['edate'];
           
           
            $q = "SELECT * FROM `order`  WHERE order_date BETWEEN '$sds' AND '$ed'";
            $qr = mysqli_query($conn, $q);
            
          
         ?>

<div class="container">
<section class="display-product-table">
<h1 class="heading">User Order Details</h1>
   <table>

      <thead>
      
      <th>User name</th>
         <th>Total price</th>
         <th>Total quantity</th>
         <th>Food Items</th>
         <th>Order Date and Time</th>


         

         <!-- <th>action</th> -->
      </thead>

      <tbody>
       
         <tr>
      <?php
        if(mysqli_num_rows($qr) > 0){
            while($row = mysqli_fetch_array($qr)){
              $b= substr($row['pr_name'],0,-2);
              $a=explode (",",$b );
      ?>
            <td><?php echo $row['name']; ?></td>
            <td>₹<?php echo $row['total_price']; ?>/-</td>
            <td><?php echo $row['total_products']; ?></td>
            <td><?php for($i = 0; $i < count($a); $i++){ echo "<ul'><li>".$a[$i]."</li></ul>";} ?></td>

            <td><?php echo $row['order_date']; ?></td>
           
            
         </tr>
         <?php
            };    
            }
            else{
               echo "<div class='empty'>Did Not Order Anything </div>";
            };
        }
    
         ?>

         
      </tbody>
   </table>

</section>



</section>



  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>
