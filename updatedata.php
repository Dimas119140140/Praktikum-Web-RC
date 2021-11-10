<?php
include 'koneksi.php';

$NIM=$_POST['NIM'];
    $Nama=$_POST['Nama'];
    $Prodi=$_POST['Prodi'];
    $Angkatan=$_POST['Angkatan'];
    $result['pesan']="";

    if($NIM==""){
        $result['pesan']="nim harus di isi";
    }elseif($Nama==""){
        $result['pesan']="nama harus di isi";
    }elseif($Prodi==""){
        $result['pesan']="Prodi harus di isi";
    }elseif($Angkatan==""){
        $result['pesan']="Angkatan harus di isi";
    }else{
        $queryResult= $connect->query("UPDATE datamhs SET NIM='".$NIM."',Nama='".$Nama."',Prodi='".$Prodi."',
        Angkatan='".$Angkatan."' WHERE NIM='".$NIM."'");

        if($queryResult){
            $result['pesan']="Data berhasil di update";
        }else{
            $result['pesan']="Data gagal diupdate";  
        }
    }

    echo json_encode($result);

?>