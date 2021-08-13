<?php
include('connect.php');
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
    $stid = oci_parse($conn,"INSERT INTO Customers (name,address,age,attend) VALUES(:name_bv, :address_bv, :age_bv, :attend_bv)");

    oci_bind_by_name($stid, ":name_bv", $name);
    oci_bind_by_name($stid, ":address_bv", $address);
    oci_bind_by_name($stid, ":age_bv", $age);
    oci_bind_by_name($stid, ":attend_bv", $attend);
    oci_execute($stid);

    echo $stid;
}