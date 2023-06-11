<?php 
include '../t/db_conn.php';

 $id = $_GET['id'];

 $query = mysqli_query($conn, "DELETE FROM current_asset WHERE id = '$id'");
 $query = mysqli_query($conn, "DELETE FROM revenues WHERE id = '$id'");
 $query = mysqli_query($conn, "DELETE FROM cash_flow WHERE id = '$id'");

 echo "<script>alert('Information succesfully Deleted'); window.history.go(-1);</script>";

?>
