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
$query="SELECT * from cash_flow WHERE id = '$id'";  
$connect=mysqli_query($conn,$query);  
$num=mysqli_num_rows($connect);



if ($num > 0) {
    while ($data = mysqli_fetch_assoc($connect)) {
        $gg = $data['t9'] - $data['s2'] - $data['d4'] ;

?>

<button type="button" class="btn btn-success" id="print-button">Print me</button>
<br><br><br>

<div class="text-center">
    <p><?= $data['Business']; ?></p>
    <p>Statement of Cash Flow</p>
    <p>As of <?= $data['year']; ?></p>
    </div>
<br><br>
<div style="margin-left: 30px;">
    <p style="font-weight: 800; margin-left: 15%; text-transform: uppercase;">CASH FLOWS FROM OPERATING SERVICES</p>
    
    <div class="parent">
    <p style="margin-left: 17%;">Net Income</p>
    <p style="text-align:right; margin-right: 20%;">₱<?= number_format($data['t1']) ?></p>
    </div>

    <div class="parent">
    <p style="margin-left: 20%;">Depreciations</p>
    <p style="text-align:right; margin-right: 20%;">₱<?= number_format($data['t2']) ?></p>
    </div>

    <div class="parent">
    <p style="margin-left: 20%;">Decrease in accounts receivable (ADD)</p>
    <p style="text-align:right; margin-right: 20%;">₱<?= number_format($data['t3']) ?></p>
    </div>

    <div class="parent">
    <p style="margin-left: 20%;">Increase in accounts receivable (LESS)</p>
    <p style="text-align:right; margin-right: 20%;">₱<?= number_format($data['t4']) ?></p>
    </div>

    <div class="parent">
    <p style="margin-left: 20%;">Decrease in inventory (ADD)</p>
    <p style="text-align:right; margin-right: 20%;">₱<?= number_format($data['t5']) ?></p>
    </div>

    <div class="parent">
    <p style="margin-left: 20%;">Increase in inventory (LESS)</p>
    <p style="text-align:right; margin-right: 20%;">₱<?= number_format($data['t6']) ?></p>
    </div>

    <div class="parent">
    <p style="margin-left: 20%;">Decrease in accounts payable (LESS)</p>
    <p style="text-align:right; margin-right: 20%;">₱<?= number_format($data['t7']) ?></p>
    </div>

    <div class="parent">
    <p style="margin-left: 20%;">Increase in accounts payable (ADD)</p>
    <p style="text-align:right; margin-right: 20%;">₱<?= number_format($data['t8']) ?></p>
    </div>


    <div class="parent">
    <p style="font-weight: 800; margin-left: 15%; text-transform: uppercase;">Net Cash provided by operating services</p>
    <p style="text-align:right; margin-right: 20%; font-weight: 800;">₱<?= number_format($data['t9']) ?></p>
    </div>
    <br><br>

    <p style="font-weight: 800; margin-left: 15%; text-transform: uppercase;">CASH FLOW FROM INVESTING ACTIVITIES</p>

    <div class="parent">
    <p style="margin-left: 20%;">Equipment</p>
    <p style="text-align:right; margin-right: 20%;">₱<?= number_format($data['s1']) ?></p>
    </div>

    <div class="parent">
    <p style="font-weight: 800; margin-left: 15%; text-transform: uppercase;">Net Cash used in investing activities</p>
    <p style="text-align:right; margin-right: 20%; font-weight: 800;">₱<?= number_format($data['s2']) ?></p>
    </div>
    <br><br>

    <p style="font-weight: 800; margin-left: 15%; text-transform: uppercase;">CASH FLOW FROM FINANCING ACTIVITIES</p>

    <div class="parent">
    <p style="margin-left: 20%;">Borrowing of long term debt</p>
    <p style="text-align:right; margin-right: 20%;">₱<?= number_format($data['d1']) ?></p>
    </div>

    <div class="parent">
    <p style="margin-left: 20%;">Cash dividends (LESS)</p>
    <p style="text-align:right; margin-right: 20%;">₱<?= number_format($data['d2']) ?></p>
    </div>

    <div class="parent">
    <p style="font-weight: 800; margin-left: 15%; text-transform: uppercase;">Net Cash used in financing activities</p>
    <p style="text-align:right; margin-right: 20%; font-weight: 800;">₱<?= number_format($data['d4']) ?></p>
    </div>

    <div class="parent">
    <p style="font-weight: 800; margin-left: 10%; color: red; text-transform: uppercase;">Net increase in cash</p>
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