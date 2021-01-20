<?php  
require 'doll.php'; 
echo "\n";
require 'accessoris.php';
echo "\n";

class Payment extends Accessoris {

	public $name;
	public $hargaBoneka = 900000;
	public $jumlah;
	public $total;

	public function getData ($hargaBoneka,$jumlah,$total){
		
		$this->hargaBoneka = $hargaBoneka;
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
			$this->jumlah = ($this->hargaBoneka) + ($this->acc['perisai']) + ($this->acc['pedang']);
			echo $this->hargaBoneka + $this->jumlah * 10 / 100;			
		} 
		elseif ($this->acc['topi'] && $this->acc['sayap malaikat']){
			$this->jumlah = ($this->hargaBoneka) + ($this->acc['topi']) + ($this->acc['sayap malaikat']);
			$this->hargaBoneka + $this->jumlah * 13 / 100;
		} 
		elseif ($this->acc['cincin sakti']){
			$this->jumlah = ($this->hargaBoneka) + ($this->acc['cincin sakti']);
			$this->hargaBoneka + $this->jumlah * 10 / 100;
		}
		else {
			echo $this->total = ($this->hargaBoneka) + ($this->acc);
		}

	}

}

$total = new Payment;
$total->hasil();


?>
