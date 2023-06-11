<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'yumi');


    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        $Business = $_POST["Business"];
        $year = $_POST["year"];
        $input1 = $_POST["input1"];
        $input2 = $_POST["input2"];
        $input3 = $_POST["input3"];
        $input4 = $_POST["input4"];
        $input5 = $_POST["input5"];
        $input6 = $_POST["input6"];
        $input7 = $_POST["input7"];
        $input8 = $_POST["input8"];
        $input9 = $_POST["input9"];
        $input10 = $_POST["input10"];
        $input11 = $_POST["input11"];
        $g1 = $_POST["g1"];
        $g2 = $_POST["g2"];
        $g3 = $_POST["g3"];
        $g4 = $_POST["g4"];
        $g5 = $_POST["g5"];
        $g6 = $_POST["g6"];
        $g7 = $_POST["g7"];
        $g8 = $_POST["g8"];
        $g9 = $_POST["g9"];
        $l1 = $_POST["l1"];
        $l2 = $_POST["l2"];
        $l3 = $_POST["l3"];
        $l4 = $_POST["l4"];
        $l5 = $_POST["l5"];
        $l6 = $_POST["l6"];
        $l7 = $_POST["l7"];
        $l8 = $_POST["l8"];
        $l9 = $_POST["l9"];
        $l10 = $_POST["l10"];
        $l11 = $_POST["l11"];
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $n3 = $_POST["n3"];
        $n4 = $_POST["n4"];
        $n5 = $_POST["n5"];
        $n6 = $_POST["n6"];
        $e1 = $_POST["e1"];
        $e2 = $_POST["e2"];
        $e3 = $_POST["e3"];
        $e4 = $_POST["e4"];
        $e5 = $_POST["e5"];
        $e6 = $_POST["e6"];

        $query = "UPDATE current_asset SET Business='$Business', year='$year', input1='$input1', input2='$input2', input3='$input3', input4='$input4', input5='$input5', input6='$input6', input7='$input7', input8='$input8', input9='$input9', input10='$input10' , input11='$input11',g1='$g1',g2='$g2',g3='$g3',g4='$g4',g5='$g5',g6='$g6',g7='$g7',g8='$g8',g9='$g9',l1='$l1',l2='$l2',l3='$l3',l4='$l4',l5='$l5',l6='$l6',l7='$l7',l8='$l8',l9='$l9',l10='$l10',l11='$l11',n1='$n1',n2='$n2',n3='$n3',n4='$n4',n5='$n5',n6='$n6',e1='$e1',e2='$e2',e3='$e3',e4='$e4',e5='$e5',e6='$e6'  WHERE id= '$id'";
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