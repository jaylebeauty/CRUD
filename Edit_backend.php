<?php
include('connect.php');
$data=$_REQUEST['data'];
$name = $_REQUEST['name'];
$address = $_REQUEST['address'];
$age = $_REQUEST['age'];
$attend = $_REQUEST['attend'];

echo $name;
echo $address;
echo $age;
echo $attend;

if (!$conn) {
    $e = oci_error();
}
else{
    $stid = oci_parse($conn,"UPDATE CUSTOMERS SET name=:name_bv,address=:address_bv,age=:age_bv,attend=:attend_bv WHERE ID ='$data'");

    oci_bind_by_name($stid, ":name_bv", $name);
    oci_bind_by_name($stid, ":address_bv", $address);
    oci_bind_by_name($stid, ":age_bv", $age);
    oci_bind_by_name($stid, ":attend_bv", $attend);
    oci_execute($stid);

    echo $stid;
}