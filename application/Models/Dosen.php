<?php

namespace App\Models;

require_once('Pengguna.php');

use App\Models\TugasAkhir;
use App\Models\PerguruanTinggi;

class Dosen extends Pengguna implements Pegawai
{
    private $nip;
    private $nama;
    private $no_telp;
    public $tugasAkhir = [];
    public $perguruan_tinggi;

    public function validasiMahasiswa()
    {
    }

    public function setNip($nip)
    {
        $this->nip = $nip;
    }

    public function presensiMasuk()
    {
    }

    public function getNip()
    {
        return $this->nip;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setTugasAkhir(TugasAkhir $tga)
    {
        $this->tugasAkhir[] = $tga;
    }

    public function getTugasAkhir()
    {
        return $this->tugasAkhir;
    }

    public function setPerguruanTinggi(PerguruanTinggi $pt)
    {
        $this->perguruan_tinggi = $pt;
    }

    public function getPerguruanTinggi()
    {
        return $this->perguruan_tinggi;
    }
}
