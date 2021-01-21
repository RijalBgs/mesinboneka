<?php

class Boneka{

    public $name;
    protected $doll = array("beruang", "singa", "elang", "naga", "harimau");

    public function typeBoneka() {
    echo "==========================BONEKA============================"."\n";
        $this->name = "Boneka :";
        $this->addnametostring("Jenis ");
        $length = count($this->doll);
        for($i=0;$i<$length;$i++){
            echo $this->doll[$i]."\n";
        }
        "\n";
        $this->name = "Boneka Yang Dipilih :";
        $this->addnametostring("Jenis ");
        $random = array_rand($this->doll);
            echo $this->doll[$random];
            
    }

    function addnametostring($s){
        $s.= " " . $this->name;
        echo "$s \n";
    }

}

// $boneka = new Boneka;
// $boneka->typeBoneka();

?>