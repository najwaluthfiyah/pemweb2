<?php

class mahasiswanf  {
    public $nama;
    public $nilai;

    public function __construct($nama, $nim, $matkul, $nilai) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->matkul = $matkul;
        $this->nilai = $nilai;

    }

    public function getNama(){
        return $this->nama;
    }

    public function getNim(){
        return $this->nim;
    }

    public function getMatkul(){
        return $this->matkul;
    }

    public function getNilai(){
        return $this->nilai;
    }

    public function grade(){
        return $this->nilai >= 60 ? 'Lulus' : 'Tidak Lulus';
    }

    public function hasilujian(){

        if($this->nilai >= 85) {
            return 'A';
        } elseif ( $this->nilai >= 70){
            return 'B';
        } elseif ( $this->nilai >= 60){
            return 'C';
        } else {
            return 'D';
        }

    }

}