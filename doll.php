<?php

class Boneka{

    public $name;
    public $doll = array("beruang", "singa", "elang", "naga", "harimau");

    public function typeBoneka() {
    echo "==========================JENIS BONEKA============================"."\n";
        $this->name = "Boneka :";
        $this->addnametostring("Jenis ");
        $random = array_rand($this->doll);
            echo $this->doll[$random];
            
    }

    function addnametostring($s){
        $s.= " " . $this->name;
        echo "$s \n";
    }

}

$boneka = new Boneka;
$boneka->typeBoneka();

?>