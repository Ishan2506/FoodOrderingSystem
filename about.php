
<?php

include 'config.php';
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
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Home </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assest/css/styleec.css">

    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
        .page-section{

  color: orange;
}
.timeline {
  position: relative;
  padding: 0;
  list-style: none;
}
.timeline:before {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 40px;
  width: 2px;
  margin-left: -1.5px;
  content: "";
  background-color: #e9ecef;
}
.timeline > li {
  position: relative;
  min-height: 50px;
  margin-bottom: 50px;
}
.timeline > li:after, .timeline > li:before {
  display: table;
  content: " ";
}
.timeline > li:after {
  clear: both;
}
.timeline > li .timeline-panel {
  position: relative;
  float: right;
  width: 100%;
  padding: 0 20px 0 100px;
  text-align: left;
}
.timeline > li .timeline-panel:before {
  right: auto;
  left: -15px;
  border-right-width: 15px;
  border-left-width: 0;
}
.timeline > li .timeline-panel:after {
  right: auto;
  left: -14px;
  border-right-width: 14px;
  border-left-width: 0;
}
.timeline > li .timeline-image {
  position: absolute;
  z-index: 100;
  left: 0;
  width: 80px;
  height: 80px;
  margin-left: 0;
  text-align: center;
  color: white;
  border: 7px solid #e9ecef;
  border-radius: 100%;
  background-color: #ffc800;
}
.timeline > li .timeline-image h4, .timeline > li .timeline-image .h4 {
  font-size: 10px;
  line-height: 14px;
  margin-top: 12px;
}
.timeline > li.timeline-inverted > .timeline-panel {
  float: right;
  padding: 0 20px 0 100px;
  text-align: left;
}
.timeline > li.timeline-inverted > .timeline-panel:before {
  right: auto;
  left: -15px;
  border-right-width: 15px;
  border-left-width: 0;
}
.timeline > li.timeline-inverted > .timeline-panel:after {
  right: auto;
  left: -14px;
  border-right-width: 14px;
  border-left-width: 0;
}
.timeline > li:last-child {
  margin-bottom: 0;
}
.timeline .timeline-heading h4, .timeline .timeline-heading .h4 {
  margin-top: 0;
  color: inherit;
}
.timeline .timeline-heading h4.subheading, .timeline .timeline-heading .subheading.h4 {
  text-transform: none;
}
.timeline .timeline-body > ul,
.timeline .timeline-body > p {
  margin-bottom: 0;
}

@media (min-width: 768px) {
  .timeline:before {
    left: 50%;
  }
  .timeline > li {
    min-height: 100px;
    margin-bottom: 100px;
  }
  .timeline > li .timeline-panel {
    float: left;
    width: 41%;
    padding: 0 20px 20px 30px;
    text-align: right;
  }
  .timeline > li .timeline-image {
    left: 50%;
    width: 100px;
    height: 100px;
    margin-left: -50px;
  }
  .timeline > li .timeline-image h4, .timeline > li .timeline-image .h4 {
    font-size: 13px;
    line-height: 18px;
    margin-top: 16px;
  }
  .timeline > li.timeline-inverted > .timeline-panel {
    float: right;
    padding: 0 30px 20px 20px;
    text-align: left;
  }
}
.timeline-image{
  background-color:orange;
}
@media (min-width: 992px) {
  .timeline > li {
    min-height: 150px;
  }
  .timeline > li .timeline-panel {
    padding: 0 20px 20px;
  }
  .timeline > li .timeline-image {
    width: 150px;
    height: 150px;
    margin-left: -75px;
  }
  .timeline > li .timeline-image h4, .timeline > li .timeline-image .h4 {
    font-size: 18px;
    line-height: 26px;
    margin-top: 30px;
  }
  .timeline > li.timeline-inverted > .timeline-panel {
    padding: 0 20px 20px;
  }
}
@media (min-width: 1200px) {
  .timeline > li {
    min-height: 170px;
  }
  .timeline > li .timeline-panel {
    padding: 0 20px 20px 100px;
  }
  .timeline > li .timeline-image {
    width: 170px;
    height: 170px;
    margin-left: -85px;
  }
  .timeline > li .timeline-image h4, .timeline > li .timeline-image .h4 {
    margin-top: 40px;
    font-size: 18px;
    
  }
  .timeline > li.timeline-inverted > .timeline-panel {
    padding: 0 100px 20px 20px;
  }
}

.page-section {
  padding: 6rem 0;
}
.page-section h2.section-heading, .page-section .section-heading.h2 {
  font-size: 2.5rem;
  margin-top: 0;
  margin-bottom: 1rem;
}
.page-section h3.section-subheading, .page-section .section-subheading.h3 {
  font-size: 1rem;
  font-weight: 400;
  font-style: italic;
  font-family: "Roboto Slab", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  margin-bottom: 4rem;
}

@media (min-width: 768px) {
  section {
    padding: 9rem 0;
  }
}

.text-center {
    text-align: center !important;
}

.page-section h2.section-heading, .page-section .section-heading.h2 {
    font-size: 2.5rem;
    margin-top: 0;
    margin-bottom: 1rem;
}
.text-uppercase {
    text-transform: uppercase !important;
}

.page-section h3.section-subheading, .page-section .section-subheading.h3 {
    font-size: 1rem;
    font-weight: 400;
    font-style: italic;
    font-family: "Roboto Slab", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    margin-bottom: 4rem;
}

.text-muted {
    --bs-text-opacity: 1;
    
    color: #6c757d !important;
}

p {
    line-height: 1.75;
    font-size: 1.7rem;
}
@media (min-width: 1400px)
.container-xxl, .container-xl, .container-lg, .container-md, .container-sm, .container {
    max-width: 1320px;
}
@media (min-width: 1200px)
.container-xl, .container-lg, .container-md, .container-sm, .container {
    max-width: 1140px;
}
@media (min-width: 992px)
.container-lg, .container-md, .container-sm, .container {
    max-width: 960px;
}
@media (min-width: 768px)
.container-md, .container-sm, .container {
    max-width: 720px;
}
@media (min-width: 576px)
.container-sm, .container {
    max-width: 540px;
}
.container, .container-fluid, .container-xxl, .container-xl, .container-lg, .container-md, .container-sm {
    width: 100%;
    padding-right: var(--bs-gutter-x, 0.75rem);
    padding-left: var(--bs-gutter-x, 0.75rem);
    margin-right: auto;
    margin-left: auto;
}
*, *::before, *::after {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
h4{
  font-size: 24px;

}
     </style>
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
    <img src="assest/images/asd.jpg" alt="" width="50" height="50" style=" border-radius: 50%;">
      <span class="logo_name"> &nbsp;DID CAFE</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="home.php"  class="active">
            <i class='bx bx-grid-alt'></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
        <a href="p_list.php"  >
            <i class='bx bx-box' ></i>
            <span class="links_name">Product</span>
          </a>
        </li>
       
        <li>
          <a href="orders.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">Orders</span>
          </a>
        </li>
      
        <li>
          <a href="history.php">
            <i class='bx bx-export' ></i>
            <span class="links_name">Order History</span>
          </a>
        </li>
        
        <li class="log_out">
          <a href="logout.php">
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
        <span class="dashboard">DID CAFE</span>
      </div>
      <?php
         
      $select = mysqli_query($conn, "SELECT * FROM `formtest` WHERE id = '$user_id'") or die('query failed');
      $fetch="";
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
     
   ?> 
      <div class="profile-details">
        <a href="update_profile.php">
        <img src="assest/uploaded_img/user/<?php echo $fetch['image']; ?>" alt="">
        <span class="admin_name"><?php echo $fetch['uname']; ?></span></a>
        
      </div>
      
      <a href="cart.php"> <div class="profile-details">
      <?php
      include 'config.php';
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

        <img src="assest/images/cart.png" alt="">
        <span class="admin_name">cart(<?php echo $row_count; ?>)</span>
        
      </div></a>
    </nav>
    <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                <br>
              
                <br>
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Our Special Journy :)</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2020-2023</h4>
                                <h4 class="subheading">About DID CAFE</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">DID Cafe is a unique and modern cafe that specializes in providing healthy and delicious food options for college students and their families. We use only the freshest ingredients and our menu changes seasonally to ensure that our customers are getting the best possible dining experience.
DID Cafe was founded by two sisters, who were both college students at the time, who saw a need for healthier food options on campus. They started by cooking meals in their dorm room and delivering them to other students on their floor. The business quickly grew from there and today we have locations across the country!
We believe that healthy eating should be affordable and convenient, which is why we offer delivery and takeout options as well as a dining room for those who want to eat in. We also have a loyalty program for our regular customers so that they can save even more money on their favorite meals!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>March 2022</h4>
                                <h4 class="subheading">What type of food does DID Cafe serve?</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">

DID Cafe is a restaurant that serves healthy food. The menu includes a variety of salads, sandwiches, wraps, and soups. There is also a selection of vegan and gluten-free options. DID Cafe also has aJuice Bar which offers fresh juices, smoothies, and acai bowls.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>January 2022</h4>
                                <h4 class="subheading">Why People are Choose DID CAFE?</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">There are many reasons to visit DID Cafe. For one, it is a great place to relax and enjoy some delicious coffee and food. The cafe has a cozy atmosphere that makes it perfect for spending time with friends or family. Additionally, the staff is always friendly and accommodating, so you're sure to have a great experience every time you visit. Finally, DID Cafe supports local businesses and organizations, so you can feel good about supporting your community while enjoying some amazing coffee.</p></div>
                        </div>
                    </li>
                        
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                       <a style="text-decoration:none;"href="p_list.php">     <h4>
                                 view
                                 <br>
                                 Our
                                <br>
                                catalog
                         </h4></a>
                        </div>
                    </li>
                </ul>
            </div>
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
