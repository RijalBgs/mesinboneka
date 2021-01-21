<?php  
require 'doll.php'; 
echo "\n";
require 'accessoris.php';
echo "\n";

class Payment extends Accessoris {

	public $name;
	public $priceDoll = 900000;
	public $jumlah;
	public $total;

	public function getData ($priceDoll,$jumlah,$total){
		
		$this->priceDoll = $priceDoll;
		$this->jumlah = $jumlah;
		$this->total = $total;
		return $this->hasil;

	}

	public function addnametostring($s){
        $s.= " " . $this->name;
        echo "$s \n";
    }
	
	public function hasil() {
		$this->name = "Pembayaran :";
    	$this->addnametostring("Total ");
    	
		if ($this->acc['perisai'] && $this->acc['pedang']){
			$this->jumlah = ($this->priceDoll) + ($this->acc['perisai']) + ($this->acc['pedang']);
			$this->total = $this->priceDoll + $this->jumlah * 10 / 100;			
		} 
		elseif ($this->acc['topi'] && $this->acc['sayap malaikat']){
			$this->jumlah = ($this->priceDoll) + ($this->acc['topi']) + ($this->acc['sayap malaikat']);
			$this->total = $this->priceDoll + $this->jumlah * 13 / 100;
		} 
		elseif ($this->acc['cincin sakti']){
			$this->jumlah = ($this->priceDoll) + ($this->acc['cincin sakti']);
			$this->total = $this->priceDoll + $this->jumlah * 10 / 100;
		}
		else {
			$this->total = $this->priceDoll + $this->random;
			
		}
		return $this->total;

	}

}

$pay = new Payment;
echo $pay->hasil();


?>
