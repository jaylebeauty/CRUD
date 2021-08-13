<?php

    include('connect.php');
    $sql="SELECT COUNT(*) FROM CUSTOMERS c WHERE ATTEND ='Tablet'";
    $obj = oci_parse($conn, $sql);
    oci_execute($obj,OCI_DEFAULT);
    $row1 = oci_fetch_row($obj);

    $sql="SELECT COUNT(*) FROM CUSTOMERS c WHERE ATTEND ='Smartphone'";
    $obj = oci_parse($conn, $sql);
    oci_execute($obj,OCI_DEFAULT);
    $row2 = oci_fetch_row($obj);

    $sql="SELECT COUNT(*) FROM CUSTOMERS c WHERE ATTEND ='Car cam'";
    $obj = oci_parse($conn, $sql);
    oci_execute($obj,OCI_DEFAULT);
    $row3 = oci_fetch_row($obj);

    $sql="SELECT COUNT(*) FROM CUSTOMERS c WHERE ATTEND ='IP cam'";
    $obj = oci_parse($conn, $sql);
    oci_execute($obj,OCI_DEFAULT);
    $row4 = oci_fetch_row($obj);
        
$dataPoints = array(
	array("label"=> "Tablet", "y"=> $row1),
	array("label"=> "Smartphone", "y"=> $row2),
	array("label"=> "Car cam", "y"=> $row3),
	array("label"=> "IP cam", "y"=> $row4),
);
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {

 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "ความสนใจ"
	},
	subtitles: [{
		text: ""
	}],
	data: [{
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		yValueFormatString: "฿#,##0",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>                              