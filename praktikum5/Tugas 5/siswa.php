<?php

class Siswa {
    private $nama;
    private $usia;
    private $nilai;

    public function __construct($nama, $usia, $nilai){
        $this->nama = $nama;
        $this->usia = $usia;
        $this->nilai = $nilai;
    }
    
    public function getNama() {
        return $this->nama;
    }

    public function getUsia() {
        return $this->usia;
    }

    public function getNilai() {
        return $this->nilai;
    }


    public function hasilLulus() {
        return $this->nilai >= 65 ? 'Lulus' : 'Tidak Lulus';
    }

    public function predikat() {
        if ($this->nilai >= 90) {
            return 'A';
        } elseif ($this->nilai >= 80) {
            return 'B';
        } elseif ($this->nilai >= 70) {
            return 'C';
        } else {
            return 'D';
        }
    }
}