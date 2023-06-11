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

    <style>
.delete {
color: #E55451;
font-size: 22.5px;
margin-left: 2%
}

.approve {
color: #66CDAA;
font-size: 23px;
}

.delete:hover{
color: #BCC6CC;
}
.approve:hover{
color: #BCC6CC;
}

a.view {
    display: block;
    width: 105px;
    font-size: 13px;
    height: 45px;
    background: #4E9CAF;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    color: white;
    font-weight: bold;
    line-height: 25px;
    text-decoration:none
}

a.view:hover{
color: #BCC6CC;
}



    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

         <!-- Sidebar -->
         <ul class="navbar-nav bg-success sidebar sidebar-dark accordion" id="accordionSidebar">

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
                        <a class="collapse-item" href="non-current.php">Non-Current Asset</a>
                    </div>
                </div>
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
                        <a class="collapse-item" href="non-currentli.php">Non-Current Liabilitis</a>
                        <a class="collapse-item" href="equity.php">Equity</a>
                    </div>
                </div>
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
    <a class="nav-link" href="cogs.php">
        <i class="fas fa-fw fa-wallet"></i>
        <span>Cost of Good Sold</span></a>
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

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Costs of good sold Informations</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="form2.php" class="view float-right mr-2" style=" text-decoration:none; font-weight: bold;"><i class="fa-solid fa-plus"></i> Add New</a>                             
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >

                                    <thead style="font-size: 12px;">
                                        <tr>
                                        <th style="white-space:nowrap">ID no.</th>
                                        <th style="white-space:nowrap">Business name</th>
                                        <th style="white-space:nowrap">As of</th>
                                        <th style="white-space:nowrap">Beginning</th>
                                        <th style="white-space:nowrap">Purchases Discount</th>
                                        <th style="white-space:nowrap">Purchases return and Allowance</th>
                                        <th style="white-space:nowrap">Freight In</th>
                                        <th style="white-space:nowrap">Merchandise Inventory</th>
                                        <th style="white-space:nowrap">Cost of Sales</th>
                                        
                                        <th style="white-space:nowrap">Action</th>
                                            
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
                                                            <td>₱<?= number_format($data['b1']) ?></td>
                                                            <td>₱<?= number_format($data['b2']) ?></td>
                                                            <td>₱<?= number_format($data['b3']) ?></td>
                                                            <td>₱<?= number_format($data['b4']) ?></td>
                                                            <td>₱<?= number_format($data['b5']) ?></td>
                                                            <td style="color: #477647;">₱<?= number_format($data['b6']) ?></td>

                                                            <td >
                                                            <a href="edit1.php?id=<?= $data['id']; ?>" class="aprrove"><i class='fas fa-edit mb-1'></i></a>
                                                            <a href="delete/loan_delete.php?id=<?= $data['id']; ?>" class="delete"><i class='fa-solid fa-rectangle-xmark xmark fa-xs' style="margin-right: 3%;"></i></a>  </td>
                                                            </tr>  

                                                         <?php
                                                            
                                                    }  
                                                }  
                                        ?>  
                                </table>
                            </div>
                        </div>
                    </div>
                    


                    </script>
                    
                    <script>
                        $('.delete').on('click', function(e){
                            e.preventDefault();
                            const href = $(this).attr('href')

                            Swal.fire({
                            title: 'Are you sure?',
                            text: "you want to delete this info?",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes, delete it!'
                            
                            }).then((result) => {
                            if (result.value) {
                                document.location.href = href;
                                
                                
                            }
                            })
                        })
                    </script>

<script>
                        $('.aprrove').on('click', function(e){
                            e.preventDefault();
                            const href = $(this).attr('href')

                            Swal.fire({
                            title: 'Are you sure?',
                            text: "you want to edit this info?",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes, Do it!'
                            
                            }).then((result) => {
                            if (result.value) {
                                document.location.href = href;
                                                                
                            }
                            })
                        })



                    </script>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

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