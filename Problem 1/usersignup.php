<?php
session_start();    

    include("connection.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $fullname = $_POST['fullname'];
        $dob = $_POST['dob'];
        $email_id = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user_id = rand(1, 20);

        $sql_u = "SELECT * FROM userinfo WHERE username='$username'";
        $result_u = $conn->query($sql_u);
        if(mysqli_num_rows($result_u) > 0){
                 $user_dupli = "Username already Taken!";
        }
        else{
            $sql = "INSERT INTO userinfo (user_id,fullname,username,DOB,email_id,password) 
            VALUES ('$user_id','$fullname', '$username', '$dob', '$email_id', '$password')";
            $result = $conn->query($sql);
            header('Location: userlogin.php');
            die; 
            } 
            /*else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }*/
    }
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="userlogin.css" rel="stylesheet">
        <link href="try.css" rel="stylesheet">
        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    </head>

    <body>
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
                <li><a href="myaccount.php"><ion-icon name="person-circle-outline"></ion-icon> My Account</a></li>
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
                <h1>Sign Up</h1>
                <div class="inputbox">
                    <label for="fullname">Fullname</label><br>
                    <input name="fullname" class="fullname" type="text" required><br>
                </div>
                <div class="inputbox">
                    <label for="username">Username</label><br>
                    <input name="username" class="username" type="text" required><br>
                </div>
                <div class="error">
                    <?php if(isset($user_dupli)): ?>
                    <span><?php echo $user_dupli; ?></span>
                    <?php endif ?>
                </div>
                <div class="inputbox">
                    <label for="dob">Date of Birth</label><br>
                    <input name="dob" class="dob" type="date" required><br>
                </div>
                <div class="inputbox">
                    <label for="email_id">Email ID</label><br>
                    <input name="email" class="email" type="email" required><br>
                </div>
                <div class="inputbox">
                    <label for="password">Password</label><br>
                    <input name="password" class="password" type="password" required>
                </div>
                <div class="login">
                    <button type="submit" value="signup">Sign Up</button>
                </div>
            </form>
            <p> Already a User? <a href="userlogin.php"> Login</a></p>
        </div>
    </body>
</html>