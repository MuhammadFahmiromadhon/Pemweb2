<?php
class Handpone {
    public $merk;
    public $variasi;
    
    public function setMerk ($merk)
    {
        $this->merk = $merk;
    }

    public function setVariasi ($variasi)
    {
        $this->variasi = $variasi;
    }

    public function getInfo ()
    {
        return "Merk: " . $this->merk . ", Variasi: " . $this->variasi;
    }
}

// Membuat Object
$redmi = new Handpone();
$redmi->setMerk("Redmi 12c");
$redmi->setVariasi("Black");
echo $redmi->getInfo();

echo "<br>";

$infinix = new Handpone();
$infinix->setMerk("Infinix note 30");
$infinix->setVariasi("Blue");
echo $infinix->getInfo();