<?php
session_start();

include("connection.php");
if(!isset($_SESSION['user_id'])){
    header('Location: userlogin.php');
    die;
}

$loguser = $_SESSION['user_id'];
$sql = "SELECT user_id, username, fullname, DOB, email_id FROM userinfo where user_id = '$loguser'";
$result = $conn -> query($sql);

$user_data = mysqli_fetch_assoc($result);


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="userlogin.css" rel="stylesheet">
        <link href="try.css" rel="stylesheet">
        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    </head>

    <body>
    <style>
            *{
                overflow-y: hidden;
            }
        </style>
    <div class="loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="obj1">
    </div>
    <div class="obj2">
    </div>
    <div class="obj3">
    </div>
    <div class="obj4">
    </div>
    <div class="obj5">
    </div>
    <div class="obj6">
    </div>
    <div class="obj7">
    </div>
    <div class="obj8">
    </div>
    <div class="obj9">
        <li></li>
        <li></li>
    </div>

    <div class="obj10">
        <li></li>
        <li></li>
    </div>
        <nav class="nav1">
            <h1>Problem 1</h1>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#"><ion-icon name="person-circle-outline"></ion-icon> My Account</a></li>
            </ul>
        </nav>
        <nav class="nav2">
            <div class="spacer"> </div>
            <h1>Problem 1</h1>
            <div class="menu-icon">
                <p class="hamburger" id="one"> </p>
                <p class="hamburger" id="two"> </p>
            </div>    
        </nav>
        <div class="menu-items">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#"><ion-icon name="person-circle-outline"></ion-icon> My Account</a></li>
            </ul>
            </div>  
            <script src="menu.js"></script>
        <div class="main">
            <div class="userphoto">
                <img src = "pp.png" class="pp">
                <img src = "pp2.png" class="ppp">
            </div>
            <div class="userinfo">
            <div class="greet">
                Welcome <?php echo $user_data['username']?> !
            </div>
            <div class="restinfo">
                <ul>
                    <li>Full Name: <?php echo $user_data['fullname']?> </li>
                    <li>Date of Birth: <?php echo $user_data['DOB']?> </li>
                    <li>Email ID: <?php echo $user_data['email_id']?> </li>
                </ul>
            </div>
            <a href="userlogout.php"><button class="logout">Logout</button></a>
            </div>
            
        </div>
    </body>
</html>