<?php 
	$conn=oci_connect("crud","crud2021","localhost/orcl", "AL32UTF8");

    if (!$conn) {
        $e = oci_error();
    }
    else{
        //echo('successfully');
    }
?>

