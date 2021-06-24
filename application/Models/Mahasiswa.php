<?php

namespace App\Models;

use App\Models\TugasAkhir;
use App\Models\PerguruanTinggi;

require_once('Pengguna.php');

class Mahasiswa extends Pengguna
{
    private $nim;
    private $nama;
    private $IPK;
    private $alamat;
    public $tugas_akhir;
    public $perguruan_tinggi;

    function __construct($nim,  $nama, $ipk, $alamat, PerguruanTinggi $pt)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->IPK = $ipk;
        $this->alamat = $alamat;
        $this->perguruan_tinggi = $pt;
    }

    public function setTugasAkhir(TugasAkhir $ta)
    {
        $this->tugas_akhir = $ta;
    }

    public function getNim()
    {
        return $this->nim;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getIPK()
    {
        return $this->IPK;
    }

    public function getAlamat()
    {
        return $this->alamat;
    }

    public function getJudulTA()
    {
        return $this->judulTA;
    }

    public function inputMatkul()
    {
    }

    public function updateProfil()
    {
    }
}
