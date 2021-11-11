<?php

//119140140 Dimas Aqshal Primadaffa
$bil1 = 10;
$bil2 = 5;
$operator;
$patokan;

echo "Bilangan 1 = $bil1";
echo '<br>';
echo "Bilangan 2 = $bil2 ";
echo '<br>';
echo "Berikut merupakan hasil dari setiap operasi";
echo '<br>';
echo '<br>';


function penjumlahan($bil1,$bil2){
    $operator=$bil1+$bil2;
    echo "PENJUMLAHAN";
    echo '<br>';
    echo "Operator : + ";
    echo '<br>';
    echo "hasil : $operator";
}
    penjumlahan($bil1,$bil2);
    echo '<br>';
    echo '<br>';

function pengurangan($bil1,$bil2){
     $operator=$bil1-$bil2;
    echo "PENGURANGAN";
    echo '<br>';
    echo "Operator : - ";
    echo '<br>';
    echo "hasil : $operator";
}
    pengurangan($bil1,$bil2);
    echo '<br>';
    echo '<br>';

function perkalian($bil1,$bil2){
        $operator=$bil1*$bil2;
       echo "PERKALIAN";
       echo '<br>';
       echo "Operator : * ";
       echo '<br>';
       echo "hasil : $operator";
   }
        perkalian($bil1,$bil2); 
        echo '<br>';
        echo '<br>';

function pembagian($bil1,$bil2){
        $operator=$bil1/$bil2;
       echo "PEMBAGIAN";
       echo '<br>';
       echo "Operator : / ";
       echo '<br>';
       echo "hasil : $operator";
   }
         pembagian($bil1,$bil2); 
         echo '<br>';
         echo '<br>';

function modulus($bil1,$bil2){
        $operator=$bil1%$bil2;
       echo "MODULUS";
       echo '<br>';
       echo "Operator : % ";
       echo '<br>';
       echo "hasil : $operator";
   }
         modulus($bil1,$bil2);  

?>