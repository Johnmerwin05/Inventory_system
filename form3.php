<?php
session_start();

if ($_SESSION["status"] != true){

    header("Location: t/login.php");
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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>


    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <style>

.pending {
font-size: 13px;
font-weight: bold;
padding-left: 10px;
padding-right: 10px;
border-radius: 10px;
border: none;
text-align: center;
background: #ff9800;
color: white;
}

.delete {
color: #E55451;
font-size: 22.5px;
margin-left: 2%
}
.view{
color: #2B547E;
font-size: 23px;
}
.approve {
color: #66CDAA;
font-size: 23px;
}

.delete:hover{
color: #BCC6CC;
}
.view:hover{
color: #BCC6CC;
}
.approve:hover{
color: #BCC6CC;
}
        .form-group {
            display: inline-block; width:24.5%;
        }
        .form-group1 {
            display: inline-block; width:29.5%;
        }
        
        .form-group .cf-medium {
            width:130%;
        }

        .form_group label {
            display: block !important; 
            width: 150% !important;
        }


.form-group{
    margin-left: 40px;
}





    </style>
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
    <div class="sidebar-brand-text mx-3">BALANCE SHEET</div>
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
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

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


                <div class="container-fluid">



                <div class="modal-dialog" >
                <div class="modal-content" style="width: 165%; margin-left: -35%; color: #535353;">

                <form method="POST" action="connection/flow.php" enctype="multipart/form-data">
                
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" > Statement of Cash Flow </h5>
                </div>

                        <div class="modal-body">
                        <h4 class="modal-title" style="margin-bottom: 2%; color: #424242; font-weight: bolder; "> I. Business Information</h4>
                        <div class="form-group mr-5 ml-5">
                        <label> Businesses </label>
                        <select class="form-control" name="Business">
                        <option selected="true" disabled="disabled">Choose Business</option>   
                        <?php

                        include 't/db_conn.php';
                        if ($conn) {

                                            //echo "Connection successfully";  
                        }else{  
                            echo "Error";  
                        }  
                        $sql = "SELECT * FROM current_asset";
                        $result = $conn->query($sql);
                        $options =array();
                        while($row=mysqli_fetch_array($result))
                            {    
                                $options[] =$row;    
                            }
                                                                                
                            ?>
                        <?php
                            foreach($options as $option):
                            echo '<option value ="'.$option['Business'].' ">'.$option['Business'].' </option>';
                            endforeach;
                        ?> 
                        </select>
                        </div>

                        <div class="form-group mr-5 ml-5">
                        <label> As of </label>
                        <select class="form-control" name="year">
                        <option selected="true" disabled="disabled">Choose year</option>   
                        <?php

                        include 't/db_conn.php';
                        if ($conn) {

                                            //echo "Connection successfully";  
                        }else{  
                            echo "Error";  
                        }  
                        $sql = "SELECT * FROM current_asset";
                        $result = $conn->query($sql);
                        $options =array();
                        while($row=mysqli_fetch_array($result))
                            {    
                                $options[] =$row;    
                            }
                                                                                
                            ?>
                        <?php
                            foreach($options as $option):
                            echo '<option value ="'.$option['year'].' ">'.$option['year'].' </option>';
                            endforeach;
                        ?> 
                        </select>
                        </div>
                        <br>
                        <h5 class="modal-title" style="margin-bottom: 2%; color: #424242; font-weight: bolder;"> Operating Services</h5>
                        <div class="form-group">
                        <label> Net Income </label>
                        <select class="form-control" name="t1">
                        <option selected="true" disabled="disabled">Choose Net Income</option>   
                        <?php

                        include 't/db_conn.php';
                        if ($conn) {

                                            //echo "Connection successfully";  
                        }else{  
                            echo "Error";  
                        }  
                        $sql = "SELECT * FROM revenues";
                        $result = $conn->query($sql);
                        $options =array();
                        while($row=mysqli_fetch_array($result))
                            {    
                                $options[] =$row;    
                            }
                                                                                
                            ?>
                        <?php
                            foreach($options as $option):
                            echo '<option value ="'.$option['net'].' ">'.$option['net'].' </option>';
                            endforeach;
                        ?> 
                        </select>
                        </div>
                        
                        <div class="form-group">
                            <label> Depreciation expense </label>
                            <input type="text" name="t2" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Decrease in accounts receivble </label>
                            <input type="text" name="t3" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                        </div>

                        
                        <div class="form-group">
                            <label> Increase in accounts receivable</label>
                            <input type="text" name="t4" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                        </div>

                        <div class="form-group">
                            <label> Decrease in inventory</label>
                            <input type="text" name="t5" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                        </div>

                        <div class="form-group">
                            <label> Increase in inventory</label>
                            <input type="text" name="t6" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                        </div>

                        <div class="form-group">
                            <label> Decrease in accounts payable</label>
                            <input type="text" name="t7" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                        </div>

                        <div class="form-group">
                            <label> Increase in accounts payable</label>
                            <input type="text" name="t8" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                        </div>

                        <br>
                        <h5 class="modal-title" style="margin-bottom: 2%; color: #424242; font-weight: bolder;"> Investing Activities</h5>

                        <div class="form-group">
                            <label> Equipment </label>
                            <input type="text" name="s1" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                        </div>

                        <h5 class="modal-title" style="margin-bottom: 2%; color: #424242; font-weight: bolder;"> Financing Activities</h5>

                        <div class="form-group">
                            <label> Borrowing of long term dept </label>
                            <input type="text" name="d1" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                        </div>

                        <div class="form-group">
                            <label> Cash dividends </label>
                            <input type="text" name="d2" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                        </div>

                        <br><br><br>

                        <div class="form-group">
                            <label> Cash at the beginning of the year </label>
                            <input type="text" name="date1" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Cash at the end of the year </label>
                            <input type="text" name="date2" class="form-control" required>
                        </div>

                        
                        

                    <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
            </div>
        </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Financial Statement 2022-2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

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
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>