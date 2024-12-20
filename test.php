<?php

require 'vendor/autoload.php';

use App\FileHandler;

$fileHandler = new FileHandler();
$result = $fileHandler->readFile('example.txt'); // Замените на ваш файл
echo $result;
