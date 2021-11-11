<?php


function cekprima($angka){
    if ($angka >= 2){
        $fakt = 0;

        for ($bagi=1; $bagi <= $angka; $bagi++){
            
            if ($angka % $bagi===0){
                 $fakt++;
            }
        }
        if($fakt ===2 ){
            return $angka . ' = Bilangan Prima<br>';
        }
    }
}
function deret($batasan){
    if($batasan >=2 ){
        for($angka = 2 ; $angka <= $batasan ; $angka++){
            echo cekprima($angka);
        }
    }
}deret(50);

?>