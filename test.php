<?php

require 'vendor/autoload.php';

use App\FileHandler;

$fileHandler = new FileHandler();
$result = $fileHandler->readFile('lalala.txt');
echo $result;
