<?php

namespace App;

class FileHandler
{
    public function readFile(string $filename): string
    {
        if (!file_exists($filename)) {
            return "Ошибка: Файл не найден.";
        }

        return file_get_contents($filename);
    }
}
