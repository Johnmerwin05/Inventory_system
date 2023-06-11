<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'yumi');


    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        $t2 = $_POST["t2"];
        $t3 = $_POST["t3"];
        $t4 = $_POST["t4"];
        $t5 = $_POST["t5"];
        $t6 = $_POST["t6"];
        $t7 = $_POST["t7"];
        $t8 = $_POST["t8"];
        $s1 = $_POST["s1"];
        $s2 = $s1;
        $d1 = $_POST["d1"];
        $d2 = $_POST["d2"];
        $d3 = $_POST["d3"];


        $query = "UPDATE cash_flow SET t2='$t2', t3='$t3', t4='$t4', t5='$t5', t6='$t6',t7='$t7', t8='$t8', s1='$s1', s2='$s2', d1='$d1',d2='$d2',d3='$d3' WHERE id= '$id'";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo "<script>
             alert('Information succesfully Edited'); 
             window.history.go(-2);
             </script>";
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>