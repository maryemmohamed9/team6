<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $f_name=$_POST['f_name'];
    $l_name=$_POST['l_name'];
    $phone_number= $_POST['phone_number'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $graduate=$_POST['graduation'];

    $instructor_id=$_POST['instructor_id'];
    $admin_id=$_POST['admin_id'];
    $course_id=$_POST['course_id'];
    $gov_id=$_POST['gov_id'];

    $connection = mysqli_connect("localhost","root","","odc");
    mysqli_query($connection,"INSERT INTO student (f_name,l_name,phone_number,email,password,graduate,admin_id,course_id,instructor_id,gov_id) VALUES ( '$f_name' , '$l_name' , '$phone_number' , '$email','$password' , '$graduate','$admin_id','$course_id','$instructor_id','$gov_id')");

    if(mysqli_affected_rows($connection) == 1){
        echo "user is registerd";
    }

}else{

    include "register.html";

}