<?php
$connect=new mysqli("localhost","root","","crud");
if(!$connect){
    echo "koneksi gagal";
    exit();
}
?>