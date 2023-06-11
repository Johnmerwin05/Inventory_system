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

<?php

$conn=mysqli_connect("localhost","root","","yumi"); 

$id = $_GET['id'];
if ($conn) {

    //echo "Connection successfully";  
}else{  
    echo "Error";  
}  
$query="SELECT * from current_asset WHERE id = '$id'";  
$connect=mysqli_query($conn,$query);  
$num=mysqli_num_rows($connect);



if ($num > 0) {
    while ($data = mysqli_fetch_assoc($connect)) {

?>


        <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 165%; margin-left: -35%; color: #535353;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" > Edit Balance Sheet </h5>
                </div>

                <form action="edit_connect.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="update_id" value="<?= $data['id']; ?>">

                        <div class="modal-body">
                        <h4 class="modal-title" style="margin-bottom: 2%; color: #424242; font-weight: bolder; "> I. Business Information</h4>
                        <div class="form-group">
                            <label> Business name </label>
                            <input type="text" name="Business" class="form-control" value="<?= $data['Business']; ?>" required>
                        </div>

                        <div class="form-group">
                                    <label> Year </label>
                                    <input type="text" name="year" class="form-control" value="<?= $data['year']; ?>" required>
                        </div>
                        <br>
                        <h4 class="modal-title" style="margin-bottom: 2%; color: #424242; font-weight: bolder; "> II. Asset</h4>
                        <h5 class="modal-title" style="margin-bottom: 2%; color: #424242; font-weight: bolder;"> Current Asset</h5>
                        <div class="form-group">
                            <label> Cash and cash Equity </label>
                            <input type="text" name="input1" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['input1']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Accounts Receivable </label>
                            <input type="text" name="input2" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['input2']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Other Receivable </label>
                            <input type="text" name="input3" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['input3']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Petty Cash </label>
                            <input type="text" name="input4" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['input4']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Temporary Investments </label>
                            <input type="text" name="input5" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['input5']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Inventory </label>
                            <input type="text" name="input6" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['input6']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Supplies </label>
                            <input type="text" name="input7" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['input7']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Prepaid Insurance </label>
                            <input type="text" name="input8" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['input8']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Prepaid Expense</label>
                            <input type="text" name="input9" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['input9']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Marketable Securities </label>
                            <input type="text" name="input10" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['input10']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Other Current Asset </label>
                            <input type="text" name="input11" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['input11']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label> Total Current Asset </label>
                            <input type="text" name="input12" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['input12']; ?>" readonly>
                        </div>

                        

                        <h5 class="modal-title" style="margin-bottom: 2%; color: #424242; font-weight: bolder;"> Non-Current Asset</h5>
                        <div class="form-group">
                            <label> Land </label>
                            <input type="text" name="g1" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['g1']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Land improvements </label>
                            <input type="text" name="g2" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['g2']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Buildings </label>
                            <input type="text" name="g3" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['g3']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Equipment </label>
                            <input type="text" name="g4" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['g4']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Capital work-in-progress </label>
                            <input type="text" name="g5" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['g5']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Investment, Advances and long term receivable </label>
                            <input type="text" name="g6" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['g6']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Intangible Asset</label>
                            <input type="text" name="g7" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['g7']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Other Asset</label>
                            <input type="text" name="g8" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['g8']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Accumulated Depreciation</label>
                            <input type="text" name="g9" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['g9']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label> Total Non-Current Asset</label>
                            <input type="text" name="g10" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['g10']; ?>" readonly>
                        </div>
                        <h4 class="modal-title" style="margin-bottom: 2%; color: #424242; font-weight: bolder; "> III. Liabilities</h4>
                        <h5 class="modal-title" style="margin-bottom: 2%; color: #424242; font-weight: bolder;">Current Liabilities</h5>

                        <div class="form-group">
                            <label> Short-term Loans Payable </label>
                            <input type="text" name="l1" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['l1']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Accounts Payable </label>
                            <input type="text" name="l2" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['l2']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Deferred Revenues </label>
                            <input type="text" name="l3" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['l3']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Wages Payable </label>
                            <input type="text" name="l4" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['l4']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Interest Payable </label>
                            <input type="text" name="l5" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['l5']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Taxes Payable </label>
                            <input type="text" name="l6" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['l6']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Accrued Expenses </label>
                            <input type="text" name="l7" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['l7']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Unearned Revenues </label>
                            <input type="text" name="l8" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['l8']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Payroll Liabilities</label>
                            <input type="text" name="l9" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['l9']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Warranty Liability </label>
                            <input type="text" name="l10" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['l10']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Other Current Liabilities </label>
                            <input type="text" name="l11" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['l11']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label> Total Current Liabilities </label>
                            <input type="text" name="l12" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['l12']; ?>" readonly>
                        </div>

                        <h5 class="modal-title" style="margin-bottom: 2%; color: #424242; font-weight: bolder;">Non-Current Liabilities</h5>

                        <div class="form-group">
                            <label> Long-term Dept </label>
                            <input type="text" name="n1" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['n1']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Long-term loans and advances </label>
                            <input type="text" name="n2" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['n2']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Notes Payable </label>
                            <input type="text" name="n3" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['n3']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Bonds Payable </label>
                            <input type="text" name="n4" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['n4']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Deferred Income Taxes </label>
                            <input type="text" name="n5" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['n5']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Other Non-Current Liabilities </label>
                            <input type="text" name="n6" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['n6']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label> Total Non-Current Liabilities </label>
                            <input type="text" name="n7" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['n7']; ?>" readonly>
                        </div>

                        <h5 class="modal-title" style="margin-bottom: 2%; color: #424242; font-weight: bolder;">Equity</h5>

                        <div class="form-group">
                            <label> Owners Capital </label>
                            <input type="text" name="e1" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['e1']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Paid-in-Capital</label>
                            <input type="text" name="e2" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['e2']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Retained Earnings</label>
                            <input type="text" name="e3" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['e3']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Current year Earnings </label>
                            <input type="text" name="e4" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['e4']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Contributed Capital </label>
                            <input type="text" name="e5" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['e5']; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label> Treasury Stock </label>
                            <input type="text" name="e6" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['e6']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label> Total Liabilities and Owners Equity </label>
                            <input type="text" name="e7" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?= $data['e7']; ?>" readonly>
                        </div>


                        <?php
    } 
}

                        ?>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                    </div>

                    </form>

</div>
</div>
</div>
</div>
</div>
</div>

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Loan Management System 2023</span>
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