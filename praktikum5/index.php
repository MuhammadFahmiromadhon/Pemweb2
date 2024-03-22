<?php

class Manusia {
    public $nama;
    public $umur;
    
    public function setNama ($name)
    {
        $this->nama = $name;
    }

    public function setUmur ($umur)
    {
        $this->umur = $umur;
    }

    public function getInfo ()
    {
        return "Nama: " . $this->nama . ", Umur: " . $this->umur;
    }
}

// Membuat Object
$fahmi = new Manusia();
$fahmi->setNama("M FAHMI ROMADHON");
$fahmi->setUmur(19);
echo $fahmi->getInfo();

echo "<br>";

$balmon = new Manusia();
$balmon->setNama("M BALMON");
$balmon->setUmur(100);
echo $balmon->getInfo();