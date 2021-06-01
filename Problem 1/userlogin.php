<?php
session_start();    


include("connection.php");
if(!empty($_SESSION['username'])){
    header('Location: myaccount.php');
    die;
}
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT username, password FROM userinfo where username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
       $user_data = mysqli_fetch_assoc($result);
       
        if($user_data['password'] === $password){
            $_SESSION['username'] = $user_data['username'];
            $_SESSION['password'] = $user_data['password'];
            header('Location: myaccount.php');
            die;
        }else{
            $password_error = "Incorrect Username or Password!";
        }
    }
}





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
                <li>
                <a href="myaccount.php"><ion-icon name="person-circle-outline"></ion-icon> My Account</a>
                <ul>
                </ul>
                </li>
            </ul>
        </nav>
        <nav class="nav2">
            <div class="spacer"> </div>
            <h1>Problem 1</h1>
            <div class="menu-icon">
                <p class="hamburger" id="one"></p>
                <p class="hamburger" id="two"></p>
            </div>    
        </nav>
        <div class="menu-items">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="myaccount.php"><ion-icon name="person-circle-outline"></ion-icon> My Account</a></li>
            </ul>
        </div>  
        <script src="menu.js"></script>
        
        <div class="userform">
        
            <form method="post">
                <h1>Login</h1>
                <div class="inputbox">
                    <label for="username">Username</label>
                    <input name="username" class="username" type="text" required>
                </div>
                <div class="inputbox">
                    <label for="password">Password</label>
                    <input name="password" class="password" type="password" required>
                </div>
                <div class="error">
                    <?php if(isset($password_error)): ?>
                    <span><?php echo $password_error; ?></span>
                    <?php endif ?>
                </div>
                <div class="login">
                    <button type="submit" name="login"value="LOGIN">Login</button>
                </div>
            </form>
            <p> Not a User?<a href="usersignup.php"> Sign Up Here</a> </p>
        </div>
    </body>
</html>