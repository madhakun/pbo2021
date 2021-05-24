<?php

require_once('vendor/autoload.php');

use App\Pengguna;
use App\Penjual;
use App\Alamat;

$madha = new Pengguna(3, "Ramadhan", new Alamat(1, "Pontianak"));

$lapak_nisa = new Penjual();
$lapak_nisa->setName('Tunisa');
$lapak_nisa->setId(1);

$lapak_gusti = new Penjual();
$lapak_gusti->setName('Gusti');
$lapak_gusti->setId(2);

$lapak_faul = new Penjual();
$lapak_faul->setName('Faul');
$lapak_faul->setId(3);


$madha->setPenjual($lapak_nisa);
$madha->setPenjual($lapak_gusti);
$madha->setPenjual($lapak_faul);

$penjual_madha = $madha->getPenjual();
echo $penjual_madha[0]->getName();
