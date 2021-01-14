<?php 

$jenisboneka = array("beruang" => 900000, "elang" => 900000, "harimau" => 900000, "naga" => 900000, "singa" => '900000');

$aksesoris = array("topi"=>30000, "tongkat"=>20000, "pedang"=>50000, "perisai"=>40000, "cincinSakti"=>120000, "sayapMalaikat"=>100000);

$jumlah = 0;
foreach ($jenisboneka as $namaboneka => $hargaboneka) {

}foreach ($aksesoris as $namaaksesoris => $hargaaksesoris) {

}

if ($aksesoris['perisai'] && $aksesoris['pedang']) {
	$jumlah = (($hargaboneka) + ($aksesoris['perisai']) +($aksesoris['pedang']));
	echo $jumlah * 10 / 100;
} 
echo "<br>";

if ($aksesoris['topi'] + $aksesoris['sayapMalaikat']) {
	$jumlah = (($hargaboneka) + ($aksesoris['topi']) + ($aksesoris['sayapMalaikat']));
	echo $jumlah * 13 / 100;
}
echo "<br>";

if ($aksesoris['cincinSakti']) {
	$jumlah = (($hargaboneka) + ($aksesoris['cincinSakti']));
	echo $jumlah * 20 / 100;
}

 ?>