<?php
require_once('vendor/autoload.php');

use App\MahasiswaBaru;

$madha = new MahasiswaBaru("H1101191035", "Ramadhan", "08122001", "Lelaki", "10001");
$madha->tuntaskan();
