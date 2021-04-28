<?php
require_once('vendor/autoload.php');
use App\Mahasiswa;

// $umar = new Mahasiswa("H1101191000", "Umar Amir", "01012001", "Lelaki");
// $umar->bergerak();

Mahasiswa::bergerak();
echo "\n" . Mahasiswa::$status;
Mahasiswa::NON_AKTIF;
$status_mahasiswa = Mahasiswa::NON_AKTIF;

echo "\n" . $status_mahasiswa;

echo Mahasiswa::hitungSks(5, 3);
?>