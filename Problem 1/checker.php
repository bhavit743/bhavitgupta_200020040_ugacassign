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

    $sql_u = "SELECT * FROM userinfo username='$username";
    $result_u = $conn->query($sql_u);

    if(mysqli_num_rows($result_u) > 0){
        $user_dupli = "<p>Username already Taken</p>";
    }
    $sql = "INSERT INTO userinfo (user_id,fullname,username,DOB,email_id,password) 
    VALUES ('$user_id','$fullname', '$username', '$dob', '$email_id', '$password')";

if ($conn->query($sql) === TRUE) {
header('Location: userlogin.php');
die; 

} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>