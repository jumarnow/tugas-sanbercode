<?php

abstract class Hewan {
    public $nama, $darah = 50, $jumlahKaki, $keahlian;

    public function __construct($nama){
        $this->nama = $nama;
    }
    
    public function atraksi(){
        $str = $this->nama ." sedang ".$this->keahlian;
        return $str;
    }

    abstract public function getInfoHewan();

    public function getInfo(){
        $str =  "Nama : $this->nama" . "<br>" . 
                "Darah : $this->darah" . "<br>" . 
                "Jumlah Kaki : $this->jumlahKaki" . "<br>" . 
                "Keahlian : $this->keahlian" . "<br>" ;
                return $str;
    }
}

trait Fight{
    public $attackPower, $defencePower;

    // public function __construct($attackPower, $defencePower){
    //     $this->attackPower = $attackPower;
    //     $this->defencePower = $defencePower;
    // }

    public function serang($hewan){
        echo "$this->nama sedang menyerang $hewan->nama" . "<br>";
        echo "=============================================" . "<br>";
        $hewan->diserang($this);
    }
    public function diserang($hewan){
        echo "$this->nama sedang diserang $hewan->nama" . "<br>";
        $this->darah = $this->darah - ($hewan->attackPower/$this->defencePower);

        echo "Darah $this->nama tersisa : $this->darah". "<br>";
    }
    
    
    

}

class Elang extends Hewan{
    use Fight;

    public function __construct($nama){
        parent::__construct($nama);
        $this->jumlahKaki = 2;
        $this->keahlian = "terbang tinggi";
        $this->attackPower = 10;
        $this->defencePower = 5;

    }

    public function getInfoHewan(){
        $str = "=== ELANG ===" . "<br>" . 
                parent::getInfo() .
                "Attack Power : $this->attackPower" . "<br>" . 
                "Defence Power : $this->defencePower" . "<br>" 
                ;

        return $str;
    }
}

class Harimau extends Hewan{
    use Fight;

    public function __construct($nama){
        parent::__construct($nama);
        $this->jumlahKaki = 4;
        $this->keahlian = "lari cepat";
        $this->attackPower = 7;
        $this->defencePower = 8;

    }

    public function getInfoHewan(){
        $str = "=== HARIMAU ===" . "<br>" . 
                parent::getInfo() .
                "Attack Power : $this->attackPower" . "<br>" . 
                "Defence Power : $this->defencePower" . "<br>" 
                ;
                
        return $str;
    }

}

$elang_1 = new Elang("Elang Jawa");
$harimau_1 = new Harimau("Harimau Sumatra");
echo $harimau_1->atraksi() . "<br>";
echo $harimau_1->getInfoHewan() . "<br>";
echo $elang_1->getInfoHewan() . "<br>";

$elang_1->serang($harimau_1) . "<br>";
echo $harimau_1->getInfoHewan() . "<br>";
$harimau_1->serang($elang_1) . "<br>";


?>