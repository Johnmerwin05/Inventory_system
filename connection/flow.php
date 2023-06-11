<?php

error_reporting(0);


include '../t/db_conn.php';
    

    if(isset($_POST['submit']))
    {
        $Business = $_POST["Business"];
        $year = $_POST["year"];
        $t1 = $_POST["t1"];
        $t2 = $_POST["t2"];
        $t3 = $_POST["t3"];
        $t4 = $_POST["t4"];
        $t5 = $_POST["t5"];
        $t6 = $_POST["t6"];
        $t7 = $_POST["t7"];
        $t8 = $_POST["t8"];
        $t9 = $t1 + $t2 + $t3 - $t4 + $t5 - $t6 - $t7 + $t8;
        $s1 = $_POST["s1"];
        $s2 = $s1;
        $d1 = $_POST["d1"];
        $d2 = $_POST["d2"];
        $d4 = $d1 - $d2;
        $date1 = $_POST["date1"];
        $date2 = $_POST["date2"];
        $cash = $t9 - $s2 - $d4;




        $result = mysqli_query($conn,"INSERT into cash_flow (Business, year, t1, t2, t3, t4, t5, t6, t7, t8, t9, s1, s2, d1, d2, d4, dd1, dd2, cash) values ('$Business', '$year', '$t1', '$t2', '$t3', '$t4', '$t5', '$t6', '$t7', '$t8', '$t9', '$s1', '$s2', '$d1', '$d2', '$d4', '$date1', '$date2', '$cash')");
        

        if($result)
        {
            echo "<script>
             alert('Information succesfully Added'); 
             window.history.go(-2);
             </script>";

        }
        else{
            echo '<script type="text/javascript">'  ."alert('FAILED')" .'</script>';
        }

    }


?>