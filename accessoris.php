<?php
class Accessoris{

    public $name;
    public $acc = array("pedang"=>50000, "perisai"=>40000, "cincin sakti"=>120000, "topi"=>30000, "sayap malaikat"=>100000, "tongkat"=>20000);

    public function typeAccessoris() {
        $this->name = "Accessoris :";
        $this->addnametostring("Daftar ");
        $random = array_rand($this->acc,3);
            echo ($random[0])." : ". $this->acc[$random[0]]. "\n";
            echo ($random[1])." : ". $this->acc[$random[1]]. "\n";
            echo ($random[2])." : ". $this->acc[$random[2]];
            
           
    }

    public function addnametostring($s){
        $s.= " " . $this->name;
        echo "$s \n";
    }

}

$accessoris = new Accessoris;
$accessoris->typeAccessoris();

?>