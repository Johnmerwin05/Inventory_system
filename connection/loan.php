<?php


include '../t/db_conn.php';
    

    if(isset($_POST['submit']))
    {
        $Business = $_POST["Business"];
        $year = $_POST["year"];
        $input1 = $_POST["input1"];
        $input2 = $_POST["input2"];
        $input3 = $_POST["input3"];
        $input4 = $_POST["input4"];
        $input5 = $_POST["input5"];
        $input6 = $_POST["input6"];
        $input7 = $_POST["input7"];
        $total = $input1 + $input2 + $input3 + $input4 + $input5 + $input6 + $input7;
        $g1 = $_POST["g1"];
        $g2 = $_POST["g2"];
        $g3 = $_POST["g3"];
        $g4 = $_POST["g4"];
        $g5 = $_POST["g5"];
        $g6 = $_POST["g6"];
        $g7 = $_POST["g7"];
        $g8 = $_POST["g8"];
        $g10 = $g1 + $g2 + $g3 - $g4 + $g5 - $g6 + $g7 - $g8;
        $l1 = $_POST["l1"];
        $l2 = $_POST["l2"];
        $l3 = $_POST["l3"];
        $l4 = $_POST["l4"];
        $l5 = $_POST["l5"];
        $l6 = $_POST["l6"];
        $l7 = $_POST["l7"];
        $l8 = $_POST["l8"];
        $l12 = $l1 + $l2 + $l3 + $l4 + $l5 + $l6 + $l7 + $l8;
        $e1 = $_POST["e1"];
        $e2 = $_POST["e2"];
        $e3 = $_POST["e3"];
        $e4 = $_POST["e4"];
        $e7 = $e1 + $e2 + $e3 + $e4;



        $result = mysqli_query($conn,"INSERT into current_asset (Business, year, input1, input2, input3, input4, input5, input6, input7, input12, g1, g2, g3, g4, g5, g6, g7, g8, g10, l1, l2 , l3 , l4 , l5 , l6 , l7 , l8 ,l12, e1, e2 , e3 , e4 , e7) values ('$Business','$year','$input1', '$input2', '$input3', '$input4', '$input5', '$input6', '$input7', '$total', '$g1', '$g2', '$g3', '$g4', '$g5', '$g6', '$g7', '$g8', '$g10', '$l1', '$l2', '$l3', '$l4', '$l5', '$l6', '$l7', '$l8','$l12', '$e1', '$e2', '$e3', '$e4', '$e7')");
        

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