<?php

use App\Person;

require_once('vendor/autoload.php');

$madha = new Person;

$madha->goodBye('Madha');
// $madha->hasName = "Ramadhan";
// echo $madha->hasName;

echo $madha->birthDate('08', 'Desember', '2001');
