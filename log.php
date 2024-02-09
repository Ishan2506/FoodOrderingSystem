
<?php

session_start();
$_SESSION['user_id']=0;
$_SESSION['admin_name']=0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>login</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
 
    <link rel="stylesheet" type="text/css" href="assest/css/bootstrap.css">
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" type="text/css" href="https://www.w3schools.com/lib/w3.css"> 
    
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-image:url(assest/css/loginm.jpg);
	background-attachment: fixed;
	background-position: center center;
	background-repeat: no-repear;
	background-size: cover;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #061d09,
            #cbff63
    );
    left: 200px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -350px;
    bottom: -80px;
}
form{
    height: 520px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 70%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #000000;;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgb(180, 180, 180);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #cc0d4d;
}
.button1{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}
p{
    font-size:14px;
    margin-top:10px;
    margin-left:25px;
    color: #cc0d4d;
}
a{
    font-size:14px;
    color: #1526bf;
}

.toggle {
  background: none;
  border: none;
  color: #337ab7;
  /*display: none;*/
  /*font-size: .9em;*/
  font-weight: 600;
  /*padding: .5em;*/
  position: absolute;
  right: 3em;
  top: 19.3em;
  z-index: 9;
}

.fa {
  font-size: 1.5rem;
}
    </style> 
  

</head>
<body>


    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="#" method="post" >
        <h3>Sign In</h3>

        <label for="username">Email</label>
        <input type="text" name="email" placeholder="Email" required>

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="txtPassword" name="password" required>
        <button type="button" id="btnToggle" class="toggle"><i id="eyeIcon" class="fa fa-eye"></i></button>
        <input class="button1"type="submit" name="login" value="login"  >
        <!-- <button name="login">Log In</button> -->
        
        <br>

        <p class="p1">If You Don't Have Account <a href="signup.php">Click Here</a></p>
    </form>

    <script>
        let passwordInput = document.getElementById('txtPassword'),
    toggle = document.getElementById('btnToggle'),
    icon =  document.getElementById('eyeIcon');

function togglePassword() {
  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
    icon.classList.add("fa-eye-slash");
    //toggle.innerHTML = 'hide';
  } else {
    passwordInput.type = 'password';
    icon.classList.remove("fa-eye-slash");
    //toggle.innerHTML = 'show';
  }
}

function checkInput() {
  //if (passwordInput.value === '') {
  //toggle.style.display = 'none';
  //toggle.innerHTML = 'show';
  //  passwordInput.type = 'password';
  //} else {
  //  toggle.style.display = 'block';
  //}
}

toggle.addEventListener('click', togglePassword, false);
passwordInput.addEventListener('keyup', checkInput, false);
    </script>
</body>
</html>




<?php


include 'config.php';

if(isset($_POST['login']))
{
$email = mysqli_real_escape_string($conn ,$_POST['email']);
$pass =  mysqli_real_escape_string($conn ,md5($_POST['password']));


$select = " SELECT * FROM formtest WHERE email = '$email' && pass = '$pass' ";

$result = mysqli_query($conn, $select);
$chk = mysqli_num_rows($result);

if($chk == 1){
    while($row = mysqli_fetch_assoc($result)){ 
   $qw=$row['id'];
        $re=$row['uname'];
    $_SESSION['user_id']=$qw;
$_SESSION['admin_name'] = $re;
       echo "<script>window.location.href='home.php'</script>";
        break;
    }}

else{

    echo '<script>alert("InCorecct Email Or Password")</script>';
}

};
?>