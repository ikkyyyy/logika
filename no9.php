<?php

$satuvar = 12;
$satuvar1 = 45;
$satuvar2 = 55;
$satuvar3 = 65;
$satuvar4 = 80;
$satuvar5 = 86;
$satuvar6 = 89;

$duavar = 55;
$duavar1 = 77;
$duavar3 = 90;

function global_var()

{


global $duavar, $duavar1, $duavar3;


echo "bilangan yang terdapat kedua variabel : $duavar
 $duavar1 
 $duavar3 \n<br>";

}


global_var();


echo "bilangan yang terdapat hanya satu varibael saja : $satuvar
$satuvar1
$satuvar2
$satuvar3 
$satuvar4 
$satuvar5 
$satuvar6 
 \n<br>";

?>