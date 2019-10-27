<?php

include("connection.php");

//Register Work

if (isset($_POST['regbtn'])) {
    
    $n = $_POST['username'];
    $e = $_POST['useremail'];
    $p = $_POST['userphone'];
    $a = $_POST['useradd'];
    $pass = $_POST['userpass'];

    $query= mysqli_query($con,"INSERT INTO `tblreg`(`Name`, `Email`, `Phone`, `Address`, `Password`) VALUES ('$n','$e','$p','$a','$pass')");

    if ($query) {
        echo "<script>alert('You have been successfully registered!')</script>";
    }
    else {
        echo "<script>alert('Registration Failed!')</script>";
    }
}

//Login Work 

// if (isset($_GET['logbtn'])) {

//     $e=$_GET['useremail'];
//     $pass=$_GET['userpass'];

//     $query=mysqli_query($con,"SELECT * FROM `tblreg` WHERE Email='$e' and Password='$pass' ");

//     if (mysqli_num_rows($query)) {
//         echo "<script>alert('Login Successfull')</script>";
//     }

//     else {
//         echo "<script>alert('Login Failed!')</script>";
//     }

// }

if (isset($_POST['logbtn'])) {

    $e=$_POST['useremail'];
    $pass=$_POST['userpass'];

    $query=mysqli_query($con,"SELECT * FROM `tblreg` WHERE Email='$e' and Password='$pass' ");

    if (mysqli_num_rows($query)) {
        echo "<script>alert('Login Successfull')</script>";
    }

    else {
        echo "<script>alert('Login Failed!')</script>";
    }

}


?>