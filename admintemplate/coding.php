<?php
session_start();
include("connection.php");

if (isset($_GET['logbtn'])) {

    $e=$_GET['useremail'];
    $pass=$_GET['userpass'];
    

    $query=mysqli_query($con,"SELECT * FROM `tblreg` WHERE Email='$e' and Password='$pass' ");

    if (mysqli_num_rows($query)) {
        $_SESSION['login_user']=$e;
        echo "<script>alert('Login Successfull')</script>";
        header("Location:dashboard.php");
    }

    else {
        echo "<script>alert('Login Failed!')</script>";
        header("Location:login.html");
    }
}

?>