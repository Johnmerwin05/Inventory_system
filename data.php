<?php

include 't/db_conn.php'; 
                                //hostname, username, password, database name  
                                if ($conn) {

                                    //echo "Connection successfully";  
                                }else{  
                                    echo "Error";  
                                }  
                                $query="SELECT * from current_asset ORDER BY id DESC LIMIT 1";  
                                $connect=mysqli_query($conn,$query);  
                                $num=mysqli_num_rows($connect);



if ($num > 0) {
    while ($data = mysqli_fetch_assoc($connect)) {

        $dataPoints = array(
            array("label" => "Total Current Asset", "y" => $data['input12']),
            array("label" => "Total Non-Current Asset", "y" => $data['g10']),
            array("label" => "Total Current Liabilities", "y" => $data['l12']),
            array("label" => "Total Non-Current Liabilitie", "y" => $data['n7']),
            array("label" => "Total Liabilities and Owners Equity", "y" => $data['e7']),
        )

    ?>
<!DOCTYPE HTML>
<html>
<head>

<style>
    .canvasjs-chart-credit
{
    display: none !important;
}

#chartContainer{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>
<h2 style="text-align:center;">Balance Sheet</h2>
<script>
window.onload = function() {
 

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: ""
	},
	data: [{
		type: "pie",
		yValueFormatString: "\"₱\"#,##0.00",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}

<?php
    }
}

?>
</script>


</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>        