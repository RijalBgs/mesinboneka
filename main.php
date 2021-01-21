<?php 

include 'doll.php';
$boneka = new Boneka();
$boneka->typeBoneka();

include 'accessoris.php'
$aksesoris = new Accessoris;
$aksesoris->typeAccessoris();

include 'cost.php';
$pay = new Payment;
$pay->hasil();

 ?>