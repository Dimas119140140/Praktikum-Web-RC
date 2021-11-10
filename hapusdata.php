<?php
    include 'koneksi.php';
    $NIM=$_POST['NIM'];
    $connect->query("DELETE FROM datamhs WHERE NIM=".$NIM);

    ?>