<html lang="en">

<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
     <!-- Custom fonts for this template-->
     <link href="template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="template/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="template/css/sb-admin.css" rel="stylesheet">
    <title>Admin Template & Image Fetch</title>

</head>
<body id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

<a class="navbar-brand mr-1" href="@Url.Action("Index", "Dashboard", new { area = "Admin" })">Admin | Insurance</a>

<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
    <i class="fas fa-bars"></i>
</button>

<div class="col-xs-4 col-sm-4 col-md-5 social" style="font-size:12px;">


<span style="color:white; font-weight:bold; padding-left:400px;">
<?php 

if ($_SESSION['login_user']==true) {
    echo "Welcome, ".$_SESSION['login_user'];
    
}

else {
    header("Location:login.html");
}

echo "<a style='color:white;' href='logout.php'> (Logout)</a>";

?>
</span>



    
</div>

</nav>







 <!-- Bootstrap core JavaScript-->
    <script src="template/vendor/jquery/jquery.min.js"></script>
    <script src="template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="template/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="template/vendor/chart.js/Chart.min.js"></script>
    <script src="template/vendor/datatables/jquery.dataTables.js"></script>
    <script src="template/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="template/js/sb-admin.min.js"></script>
    <!-- Demo scripts for this page-->
    <script src="template/js/demo/datatables-demo.js"></script>
    <script src="template/js/demo/chart-area-demo.js"></script>
    
</body>
</html>