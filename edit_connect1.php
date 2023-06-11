<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'yumi');


    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        $Business = $_POST["Business"];
        $year = $_POST["year"];
        $a1 = $_POST["a1"];
        $a2 = $_POST["a2"];
        $a3 = $_POST["a3"];
        $b1 = $_POST["b1"];
        $b2 = $_POST["b2"];
        $b3 = $_POST["b3"];
        $b4 = $_POST["b4"];
        $b5 = $_POST["b5"];
        $f1 = $_POST["f1"];
        $f2 = $_POST["f2"];
        $f3 = $_POST["f3"];
        $f4 = $_POST["f4"];
        $f5 = $_POST["f5"];
        $f6 = $_POST["f6"];
        $f7 = $_POST["f7"];
        $f8 = $_POST["f8"];
        $f9 = $_POST["f9"];


        $query = "UPDATE revenues SET Business='$Business', year='$year', a1='$a1', a2='$a2', a3='$a3', b1='$b1', b2='$b2', b3='$b3', b4='$b4', b5='$b5', f1='$f1',f2='$f2',f3='$f3',f4='$f4',f5='$f5',f6='$f6',f7='$f7',f8='$f8',f9='$f9' WHERE id= '$id'";
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