<?php

namespace App\Models;

interface Pegawai
{
    #untuk interface visibility yang harus digunakan hanya boleh public
    public function setNip($nip);

    public function presensiMasuk();

    public function getNip();

    public function setNama($nama);

    public function getNama();
}
