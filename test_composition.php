<?php
require_once('vendor/autoload.php');

use App\Alamat;
use App\Pengguna;

$pengguna = new Pengguna(3, "Ramadhan", new Alamat(1, "Pontianak"));

$alamat_pengguna = $pengguna->getAlamat();
echo $alamat_pengguna->getKota();
