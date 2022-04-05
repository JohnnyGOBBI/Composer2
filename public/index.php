<?php

use App\Wcs\Hello;

require_once "../vendor/autoload.php";

$coucou = new Hello();

echo $coucou->talk();