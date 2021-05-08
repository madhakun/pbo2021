<?php

require_once('vendor/autoload.php');

use App\Cendol;
use App\EsJeruk;
use App\Kopi;
use App\Teh;

$cendol_madha = new Cendol();
$cendol_madha->minum();

$kopi_aming = new Kopi();
$kopi_aming->buat();

$kopi_asiang = new Kopi();
$kopi_asiang->buat();
$kopi_asiang->minum();

EsJeruk::dilihat();

$teh_es_kantin = new Teh;
$teh_es_kantin->buat();
