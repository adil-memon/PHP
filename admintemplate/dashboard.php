<?php

include("header.php");
include("connection.php");
?>


<div id="wrapper">

<ul class="sidebar navbar-nav">
    <li class="nav-item active">
        <a class="nav-link" href="@Url.Action("Index", "Dashboard", new { area = "Admin" })">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Users</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">User Settings:</h6>
            @Html.ActionLink("View Current Users", "Index", "Registration", new { area = "Admin" }, new { @class = "dropdown-item" })
        </div>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Categories</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">View Category:</h6>
            @Html.ActionLink("View Category Details", "Index", "categories", new { area = "Admin" }, new { @class = "dropdown-item" })
        </div>
    </li>
    
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Add Policy</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Policy Details:</h6>
            @Html.ActionLink("View Policy Details", "Index", "policies", new { area = "Admin" }, new { @class = "dropdown-item" })
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Premium Policy</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Premium Policy Details:</h6>
            @Html.ActionLink("View Details", "Index", "premiums", new { area = "Admin" }, new { @class = "dropdown-item" })
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Schemes</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Schemes Details:</h6>
            @Html.ActionLink("View Details", "Index", "schemes", new { area = "Admin" }, new { @class = "dropdown-item" })
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Online Payments</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Policy Details:</h6>
            @Html.ActionLink("View Payment Details", "Index", "onlinepayments", new { area = "Admin" }, new { @class = "dropdown-item" })
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Premium Payments</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Policy Details:</h6>
            @Html.ActionLink("View Payment Details", "Index", "premiumpay", new { area = "Admin" }, new { @class = "dropdown-item" })
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Loan Request</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Policy Details:</h6>
            @Html.ActionLink("View Loan Details", "Index", "loans", new { area = "Admin" }, new { @class = "dropdown-item" })
        </div>
    </li>
    
</ul>

<div id="content-wrapper">
   
<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Overview</li>
    </ol>
    <!-- Icon Cards-->
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-comments"></i>
                    </div>
                    <div class="mr-5">26 New Messages!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                        <i class="fas fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-list"></i>
                    </div>
                    <div class="mr-5">11 New Tasks!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                        <i class="fas fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-shopping-cart"></i>
                    </div>
                    <div class="mr-5">123 New Orders!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                        <i class="fas fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-life-ring"></i>
                    </div>
                    <div class="mr-5">13 New Tickets!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                        <i class="fas fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <!-- Area Chart Example-->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Area Chart Example
        </div>
        <div class="card-body">
            <canvas id="myAreaChart" width="100%" height="30"></canvas>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php
                $query="SELECT * FROM `imguploading`";
                $r=mysqli_query($con,$query);

               echo "<table class='table table-bordered' id='dataTable' width='100% cellspacing='0'>";
                  echo "<thead>";
                      echo "<tr>";
                           echo "<th>Id</th>";
                           echo "<th>Name</th>";
                           echo "<th>Images</th>";
                      echo "</tr>";
                  echo "</thead>";
                   echo "<tfoot>";
                        echo "<tr>";
                            echo "<th>Id</th>";
                            echo "<th>Name</th>";
                            echo "<th>Images</th>";
                            echo "</tr>";
                    echo "<tfoot>";

                   while ($row=mysqli_fetch_array($r)) {
                    echo "<tbody>";
                    echo "<tr>";
                        echo "<td>".$row['Id']."</td>";
                        echo "<td>".$row['s.name']."</td>";
                        echo "<td><img src='uploads/".$row['s.img']."' width='100' height='100'/> </td>";
                        echo "</tr>";
                echo "<tbody>";
                   }
                   

                echo "</table>";
                ?>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        
    </div>
</div>
<!-- /.container-fluid -->
<?php include("footer.php"); ?>

</div>

</div>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

</div>



