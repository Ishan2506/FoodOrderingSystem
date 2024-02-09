
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
include 'config.php';
if(isset($_POST['pbtn'])){
         mysqli_query($conn, "DELETE FROM `cart` WHERE uid = '$user_id'");
         
      }

      header('location:orders.php');
      ?>