<?php
include 'koneksi.php';

$NIM=$_POST['NIM'];
$result=array();


$queryResult = $connect->query("SELECT * FROM datamhs WHERE NIM=".$NIM);
$fetchData= $queryResult->fetch_assoc();
$result=$fetchData;


echo json_encode($result);
?>