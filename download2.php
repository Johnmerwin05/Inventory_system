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
        .btn{
            margin: 10% 10% 0% 10%;
        }

        .parent {
            display: flex;
            justify-content: space-between;
        }




    </style>
</head>

<body id="page-top">

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
        $gg = $data['e7'] + $data['l12'];

?>

<button type="button" class="btn btn-success" id="print-button">Print me</button>
<br><br><br>

<div class="text-center">
    <p><?= $data['Business']; ?></p>
    <p>Balance sheet</p>
    <p>As of <?= $data['year']; ?></p>
    </div>
<br><br>
<div style="margin-left: 30px;">
    <p style="font-weight: 800; margin-left: 15%;">LIABILITIES</p>
    
    <div class="parent">
    <p style="margin-left: 20%;">Accounts Payable</p>
    <p style="text-align:right; margin-right: 20%;">₱<?= number_format($data['l1']) ?></p>
    </div>

    <div class="parent">
    <p style="margin-left: 20%;">Unearned Revenues </p>
    <p style="text-align:right; margin-right: 20%;">₱<?= number_format($data['l2']) ?></p>
    </div>

    <div class="parent">
    <p style="margin-left: 20%;">Wages Payable</p>
    <p style="text-align:right; margin-right: 20%;">₱<?= number_format($data['l3']) ?></p>
    </div>

    <div class="parent">
    <p style="margin-left: 20%;">Interest Payable</p>
    <p style="text-align:right; margin-right: 20%;">₱<?= number_format($data['l4']) ?></p>
    </div>

    <div class="parent">
    <p style="margin-left: 20%;">Taxes Payable</p>
    <p style="text-align:right; margin-right: 20%;">₱<?= number_format($data['l5']) ?></p>
    </div>

    <div class="parent">
    <p style="margin-left: 20%;">Payroll Liabilities</p>
    <p style="text-align:right; margin-right: 20%;">₱<?= number_format($data['l6']) ?></p>
    </div>

    <div class="parent">
    <p style="margin-left: 20%;">Warranty Liability</p>
    <p style="text-align:right; margin-right: 20%;">₱<?= number_format($data['l7']) ?></p>
    </div>

    <div class="parent">
    <p style="margin-left: 20%;">Other Liabilities</p>
    <p style="text-align:right; margin-right: 20%;">₱<?= number_format($data['l8']) ?></p>
    </div>

    <div class="parent">
    <p style="font-weight: 800; margin-left: 15%;">TOTAL LIABILITIES</p>
    <p style="text-align:right; margin-right: 20%; font-weight: 800;">₱<?= number_format($data['l12']) ?></p>
    </div>
    <br><br>

    <p style="font-weight: 800; margin-left: 15%;">EQUITY</p>

    <div class="parent">
    <p style="margin-left: 20%;">Owners Capital</p>
    <p style="text-align:right; margin-right: 20%;">₱<?= number_format($data['e1']) ?></p>
    </div>

    <div class="parent">
    <p style="margin-left: 20%;">Retained Earnings</p>
    <p style="text-align:right; margin-right: 20%;">₱<?= number_format($data['e2']) ?></p>
    </div>

    <div class="parent">
    <p style="margin-left: 20%;">Current Earnings</p>
    <p style="text-align:right; margin-right: 20%;">₱<?= number_format($data['e3']) ?></p>
    </div>

    <div class="parent">
    <p style="margin-left: 20%;">Owners Withdrawal</p>
    <p style="text-align:right; margin-right: 20%;">₱<?= number_format($data['e4']) ?></p>
    </div>

    <div class="parent">
    <p style="font-weight: 800; margin-left: 15%;">TOTAL EQUITY</p>
    <p style="text-align:right; margin-right: 20%; font-weight: 800;">₱<?= number_format($data['e7']) ?></p>
    </div>

    <div class="parent">
    <p style="font-weight: 800; margin-left: 10%; color: red;">TOTAL LIABILITES AND EQUITY</p>
    <p style="text-align:right; margin-right: 20%; font-weight: 800; color: red;">₱<?= number_format($gg) ?></p>
    </div>


    </div>
<?php
    }}

?>

<script>
    document.getElementById("print-button").addEventListener("click", function() {
    window.print();
});
    </script>

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