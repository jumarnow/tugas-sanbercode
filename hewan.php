<?php

trait Hewan {
    public $nama, $darah = 50, $jumlahKaki, $keahlian;

    public function __construct($nama, $darah, $jumlahKaki, $keahlian){
        $this->nama = $nama;
        $this->darah = $darah;
        $this->jumlahKaki = $jumlahKaki;
        $this->keahlian = $keahlian;
    }
    
    public function atraksi(){
        echo $this->nama ." sedang ".$this->keahlian;
    }
}

trait Fight{
    public $attackPower, $defencePower;

    public function __construct($attackPower, $defencePower){
        $this->attackPower = $attackPower;
        $this->defencePower = $defencePower;
    }

    public function serang(){
        echo $this->nama. ' sedang menyerang '. $elang;
    }
    public function diserang(){
        echo $this->nama. ' sedang menyerang '. $elang;
    }
    public function getInfoHewan(){
        
    }
    
    

}

class Elang{
    use Hewan, Fight;
}

class Harimau{
    use Hewan, Fight;
}

$elang = new Elang("elang", 2, "terbang tinggi", 10, 5);
// $elang->nama = "elang";
// $elang->jumlahKaki = 2;
// $elang->keahlian = "terbang tinggi";
// $elang->attackPower = 10;
// $elang->defencePower = 5;


$harimau = new Harimau("harimau", 4, "lari cepat", 7, 8);
// $elang->nama = "harimau";
// $elang->jumlahKaki = 4;
// $elang->keahlian = "lari cepat";
// $elang->attackPower = 7;
// $elang->defencePower = 8;

?>