<?php

class Accessoris{

    public $name;
    public $acc = array("pedang"=>50000, "perisai"=>40000, "cincin sakti"=>120000, "topi"=>30000, "sayap malaikat"=>100000, "tongkat"=>20000);
    public $random;

    public function typeAccessoris() {
        echo "==========================DAFTAR ACCESSORIS============================"."\n";
        $this->name = "Accessoris :";
        $this->addnametostring("Daftar ");
        $this->random = array_rand($this->acc,3);
            echo ($this->random[0])." : ". $this->acc[$this->random[0]]. "\n";
            echo ($this->random[1])." : ". $this->acc[$this->random[1]]. "\n";
            echo ($this->random[2])." : ". $this->acc[$this->random[2]];
            
           
    }

    public function addnametostring($s){
        $s.= " " . $this->name;
        echo "$s \n";
    }

}

$accessoris = new Accessoris;
$accessoris->typeAccessoris();

?>