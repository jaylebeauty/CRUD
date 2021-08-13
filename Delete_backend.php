<?php
include('connect.php');
$data=$_REQUEST['data'];
if (!$conn) {
    $e = oci_error();
}
else{
    $stid = oci_parse($conn,"DELETE FROM Customers WHERE ID ='$data'");
    oci_execute($stid);

    echo $stid;
}