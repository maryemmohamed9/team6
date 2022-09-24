<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $f_name=$_POST['f_name'];
    $l_name=$_POST['l_name'];
    $email = $_POST['email'];
    $password =$_POST['password'];

    $connection = mysqli_connect("localhost","root","","odc");
    $query =  mysqli_query($connection,"SELECT * FROM admin WHERE email = '$email' AND password = '$password'");

    $user =  mysqli_fetch_assoc($query);
    if(empty($user)){
        header("location: login.php");
    }else{
        $_SESSION['crud'] = $user;
        header("location: home.html");
    }
}else{
    include "login.html";
}