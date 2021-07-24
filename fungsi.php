<?php
$conn = mysqli_connect("localhost","root","","eki");


if(isset($_POST['buat']))
{
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $addtotable = mysqli_query($conn, "insert into login (email, username, password) values('$email','$username','$password')");
    
    header('location:login.php');
};

?>