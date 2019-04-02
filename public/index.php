<?php

require '../vendor/autoload.php';
use App\Wcs\Hello;
use HelloWorld\SayHello;


$a = new Hello();
echo $a->talk();
echo SayHello::world();

