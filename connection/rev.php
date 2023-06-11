<?php


include '../t/db_conn.php';
    

    if(isset($_POST['submit']))
    {
        $Business = $_POST["Business"];
        $year = $_POST["year"];
        $b1 = $_POST["b1"];
        $b2 = $_POST["b2"];
        $b3 = $_POST["b3"];
        $b4 = $_POST["b4"];
        $b5 = $_POST["b5"];
        $b6 = $b1 + $b2 + $b3 + $b4 + $b5;
        $f1 = $_POST["f1"];
        $f2 = $_POST["f2"];
        $f3 = $_POST["f3"];
        $f4 = $_POST["f4"];
        $f5 = $_POST["f5"];
        $f6 = $_POST["f6"];
        $f7 = $_POST["f7"];
        $f8 = $_POST["f8"];
        $f9 = $_POST["f9"];
        $f10 = $_POST["f10"];
        $f11 = $f1 + $f2 + $f3 + $f4 + $f5 + $f6 + $f7 + $f8 + $f9 + $f10;

        $net = $b6 - $f11;




        $result = mysqli_query($conn,"INSERT into revenues (Business, year, b1, b2, b3, b4, b5, b6, f1, f2, f3, f4, f5, f6, f7, f8, f9, f10, f11, net) values ('$Business','$year','$b1', '$b2', '$b3', '$b4', '$b5', '$b6', '$f1', '$f2', '$f3', '$f4', '$f5', '$f6', '$f7', '$f8', '$f9', '$f10', '$f11', '$net')");
        

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