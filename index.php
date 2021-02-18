<?php
    include("Mahasiswa.php");

    $madha = new Mahasiswa();
    $madha->nim = "H1101191035";
    $madha->nama = "Ramadhan";
    $madha->tanggal_lahir = "08 Desember 2001";
    $madha->jenis_kelamin = "Laki-Laki";

    $harry = new Mahasiswa();
    $harry->nim = "H1101191040";
    $harry->nama = "Harry Anshary";
    $harry->tanggal_lahir = "31 Maret 2001";
    $harry->jenis_kelamin = "Laki-Laki";

    $nisa = new Mahasiswa();
    $nisa->nim = "H1101191039";
    $nisa->nama = "Fakihatunnisa Arobbi'u Watsalatsunna";
    $nisa->tanggal_lahir = "23 Juni 2001";
    $nisa->jenis_kelamin = "Perempuan";
?>