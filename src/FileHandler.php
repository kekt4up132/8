<?php

namespace App;

class FileHandler
{
    public function readFile(string $filename): string
    {
        if (!file_exists($filename)) {
            return "Ошибка: Файл не найден.";
        }

        $content = file_get_contents($filename);
        
        if ($content === false) {
            return "Ошибка: Не удалось прочитать файл.";
        }

        return $content;
    }
}
