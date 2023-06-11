<?php
session_start();

if ($_SESSION["status"] != true){

    header("Location: t/login.php");
}

?>

<?php

    function ordinal($number) 
    {
        $ends = array('th','st','nd','rd','th','th','th','th','th','th');
        if ((($number % 100) >= 11) && (($number%100) <= 13))
        return $number. 'th';
        else
        return $number. $ends[$number % 10];
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Financial Statement</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>

        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

         <!-- Sidebar -->
         <ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-balance-scale"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Financial Statement</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="index.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<div class="sidebar-heading">
                Balance Sheet
</div>

<li class="nav-item">
                <a class="nav-link collapsed" href="index.php" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Assets</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="current.php">Current Asset</a>
                        <a class="collapse-item" href="non-current.php">Fixed Asset</a>
                    </div>
                </div>
            </li>
            
            <li class="nav-item">
    <a class="nav-link" href="totalass.php">
        <i class="fas fa-fw fa-dollar"></i>
        <span>Total Assets</span></a>
</li> 
<li class="nav-item">
                <a class="nav-link collapsed" href="index.php" data-toggle="collapse" data-target="#collapseli"
                    aria-expanded="true" aria-controls="collapseli">
                    <i class="fas fa-fw fa-sack-dollar"></i>
                    <span>Liabilities</span>
                </a>
                <div id="collapseli" class="collapse" aria-labelledby="headingli"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="currentli.php">Current Liabilities</a>
                        <a class="collapse-item" href="equity.php">Equity</a>
                    </div>
                </div>
            </li>  

<!-- Nav Item - Tables -->

<li class="nav-item">
    <a class="nav-link" href="totalaa.php">
        <i class="fas fa-fw fa-dollar"></i>
        <span>Total liabilities and Equity</span></a>
</li>  

<div class="sidebar-heading">
        Income Statement
</div>            
<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="revenues.php">
        <i class="fas fa-fw fa-person"></i>
        <span>Revenues</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="oe.php">
    <i class="fas fa-fw fa-piggy-bank"></i>
        <span>Operating Expenses</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="ni.php">
    <i class="fas fa-fw fa-dollar"></i>
        <span>Net Income</span></a>
</li>


<div class="sidebar-heading">
        Statement of Cash Flow
</div> 
<li class="nav-item">
                <a class="nav-link collapsed" href="index.php" data-toggle="collapse" data-target="#collapsecf"
                    aria-expanded="true" aria-controls="collapsecf">
                    <i class="fas fa-fw fa-diagram-project"></i>
                    <span>Cash FLows</span>
                </a>
                <div id="collapsecf" class="collapse" aria-labelledby="headingcf"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="osc.php">Operating Services</a>
                        <a class="collapse-item" href="iac.php">Investing Activities</a>
                        <a class="collapse-item" href="fac.php">Financing Activities</a>
                        <a class="collapse-item" href="nic1.php">Net increase in cash </a>
                    </div>
                </div>
            </li> 

<div class="sidebar-heading">
        Security
</div>             
<li class="nav-item">
    <a class="nav-link" href="admins.php">
        <i class="fas fa-fw fa-lock"></i>
        <span>Admins</span></a>
</li>
        

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


            



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>




                        

                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Assets</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                                include 't/db_conn.php';
                
                                                $result = mysqli_query($conn, 'SELECT SUM(input12 + g10 ) AS value_sum FROM current_asset'); 
                                                $row = mysqli_fetch_assoc($result); 
                                                $sum = $row['value_sum'];
                                                $summ = number_format((float)$sum, 2, '.', '');
                                                echo '₱ ' .number_format($summ).'</h4>';
                                            ?>  </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Total liabilities and equity</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                                include 't/db_conn.php';
                
                                                $result = mysqli_query($conn, 'SELECT SUM(l12 + e7 ) AS value_sum FROM current_asset'); 
                                                $row = mysqli_fetch_assoc($result); 
                                                $sum = $row['value_sum'];
                                                $summ = number_format((float)$sum, 2, '.', '');
                                                echo '₱ ' .number_format($summ).'</h4>';
                                            ?>  </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-male fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Net-Income
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                
                                            <?php
                                                include 't/db_conn.php';
                
                                                $result = mysqli_query($conn, 'SELECT SUM(net) AS value_sum FROM revenues'); 
                                                $row = mysqli_fetch_assoc($result); 
                                                $sum = $row['value_sum'];
                                                $summ = number_format((float)$sum, 2, '.', '');
                                                echo '₱ ' .number_format($summ).'</h4>';
                                            ?>  </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-money-check fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Net Increase in cash</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                                include 't/db_conn.php';
                
                                                $result = mysqli_query($conn, 'SELECT SUM(cash) AS value_sum FROM cash_flow'); 
                                                $row = mysqli_fetch_assoc($result); 
                                                $sum = $row['value_sum'];
                                                $summ = number_format((float)$sum, 2, '.', '');
                                                echo '₱ ' .number_format($summ).'</h4>';
                                            ?>  </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-lock fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>




<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3 display-6 font-weight-bold">
    <p class="mb-2 text-gray-800">Total liabilities and equity Informations</p>                            
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >

                <thead style="font-size: 12px;">
                    <tr>
                    <th style="white-space:nowrap">ID no.</th>
                    <th style="white-space:nowrap">Business name</th>
                    <th style="white-space:nowrap">As of</th>
                    <th style="white-space:nowrap">Total Liabilities</th>
                    <th style="white-space:nowrap">Total Equity</th>
                    <th style="white-space:nowrap">Total Asset</th>            
                        
                    </tr>
                </thead>
            <?php 
            $bill = 1;
            include 't/db_conn.php'; 
            //hostname, username, password, database name  
            if ($conn) {

                //echo "Connection successfully";  
            }else{  
                echo "Error";  
            }  
            $query="SELECT * from current_asset";  
            $connect=mysqli_query($conn,$query);  
            $num=mysqli_num_rows($connect);
            
                                
                                
                            if ($num>0) {  
                                while($data=mysqli_fetch_assoc($connect)){  
                                    $gg = $data['l12'] + $data['e7'];                      
                                    
                                    
                                    ?>

                                        <tr style="font-size: 16px;color: #2B547E;font-weight:bold;padding-left: 15%; text-align: center;">  
                                        <td><?= $bill++; ?></td>
                                        <td><?= $data['Business']; ?></td>
                                        <td><?= $data['year']; ?></td>
                                        <td>₱<?= number_format($data['l12']) ?></td>
                                        <td>₱<?= number_format($data['e7']) ?></td>
                                        <td style="color: #477647;">₱<?= number_format($gg) ?></td>
                                        </tr>  

                                     <?php
                                        
                                }  
                            }  
                    ?>  
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<div class="container-fluid">


<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3 display-6 font-weight-bold">
    <p class="mb-2 text-gray-800">Total Assets Informations</p>                            
    </div>
    

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >

                <thead style="font-size: 12px;">
                    <tr>
                    <th style="white-space:nowrap">ID no.</th>
                    <th style="white-space:nowrap">Business name</th>
                    <th style="white-space:nowrap">As of</th>
                    <th style="white-space:nowrap">Total Current Asset</th>
                    <th style="white-space:nowrap">Total Fixed Asset</th>
                    <th style="white-space:nowrap">Total Asset</th>
                        
                    </tr>
                </thead>
            <?php 
            $bill = 1;
            include 't/db_conn.php'; 
            //hostname, username, password, database name  
            if ($conn) {

                //echo "Connection successfully";  
            }else{  
                echo "Error";  
            }  
            $query="SELECT * from current_asset";  
            $connect=mysqli_query($conn,$query);  
            $num=mysqli_num_rows($connect);
            
                                
                                
                            if ($num>0) {  
                                while($data=mysqli_fetch_assoc($connect)){  
                                    $gg = $data['input12'] + $data['g10'];                      
                                    
                                    
                                    ?>

                                        <tr style="font-size: 16px;color: #2B547E;font-weight:bold;padding-left: 15%; text-align: center;">  
                                        <td><?= $bill++; ?></td>
                                        <td><?= $data['Business']; ?></td>
                                        <td><?= $data['year']; ?></td>
                                        <td>₱<?= number_format($data['input12']) ?></td>
                                        <td>₱<?= number_format($data['g10']) ?></td>
                                        <td style="color: #477647;">₱<?= number_format($gg) ?></td>
                                        </tr>  

                                     <?php
                                        
                                }  
                            }  
                    ?>  
            </table>
        </div>
    </div>
</div>


</div>
<!-- /.container-fluid -->


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3 display-6 font-weight-bold">
    <p class="mb-2 text-gray-800">Net-Income Informations</p>                            
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >

                <thead style="font-size: 12px;">
                    <tr>
                    <th style="white-space:nowrap">ID no.</th>
                    <th style="white-space:nowrap">Business name</th>
                    <th style="white-space:nowrap">As of</th>
                    <th style="white-space:nowrap">Gross Income</th>
                    <th style="white-space:nowrap">Total Operating Expense</th>
                    <th style="white-space:nowrap">Net Income</th>
                        
                    </tr>
                </thead>
            <?php 
            $bill = 1;
            include 't/db_conn.php'; 
            //hostname, username, password, database name  
            if ($conn) {

                //echo "Connection successfully";  
            }else{  
                echo "Error";  
            }  
            $query="SELECT * from revenues";  
            $connect=mysqli_query($conn,$query);  
            $num=mysqli_num_rows($connect);
            
                                
                                
                            if ($num>0) {  
                                while($data=mysqli_fetch_assoc($connect)){                        
                                    
                                    
                                    ?>

                                        <tr style="font-size: 16px;color: #2B547E;font-weight:bold;padding-left: 15%; text-align: center;">  
                                        <td><?= $bill++; ?></td>
                                        <td><?= $data['Business']; ?></td>
                                        <td><?= $data['year']; ?></td>
                                        <td>₱<?= number_format($data['b6']) ?></td>
                                        <td>₱<?= number_format($data['f11']) ?></td>
                                        <td style="color: #477647;">₱<?= number_format($data['net']) ?></td>
                                        </tr>  

                                     <?php
                                        
                                }  
                            }  
                    ?>  
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->



<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3 display-6 font-weight-bold">
    <p class="mb-2 text-gray-800">Net Increase in cash Informations</p>                            
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >

                <thead style="font-size: 12px;">
                    <tr>
                    <th style="white-space:nowrap">ID no.</th>
                    <th style="white-space:nowrap">Business name</th>
                    <th style="white-space:nowrap">As of</th>
                    <th style="white-space:nowrap">Cash at the beginning of the year</th>
                    <th style="white-space:nowrap">Cash at the end of the year</th>
                    <th style="white-space:nowrap">Cash at end</th>
                    <th style="white-space:nowrap">Net increase in cash</th>

                        
                    </tr>
                </thead>
            <?php 
            $bill = 1;
            include 't/db_conn.php'; 
            //hostname, username, password, database name  
            if ($conn) {

                //echo "Connection successfully";  
            }else{  
                echo "Error";  
            }  
            $query="SELECT * from cash_flow";  
            $connect=mysqli_query($conn,$query);  
            $num=mysqli_num_rows($connect);
            
                                
                                
                            if ($num>0) {  
                                while($data=mysqli_fetch_assoc($connect)){                        
                                    
                                    
                                    ?>

                                        <tr style="font-size: 16px;color: #2B547E;font-weight:bold;padding-left: 15%; text-align: center;">  
                                        <td><?= $bill++; ?></td>
                                        <td><?= $data['Business']; ?></td>
                                        <td><?= $data['year']; ?></td>
                                        <td>₱<?= number_format($data['dd1']) ?></td>
                                        <td>₱<?= number_format($data['dd2']) ?></td>
                                        <td>₱<?= number_format($data['dd1']) + number_format($data['dd2']) ?></td>
                                        <td style="color: #477647;">₱<?= number_format($data['cash']) ?></td>
                                        </tr>  

                                     <?php
                                        
                                }  
                            }  
                    ?>  
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

                    
                    


        

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="t/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>