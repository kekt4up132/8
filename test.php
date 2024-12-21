<?php

require 'vendor/autoload.php';

use App\FileHandler;

$fileHandler = new FileHandler();
$result = $fileHandler->readFile('dub.txt');
echo $result;
