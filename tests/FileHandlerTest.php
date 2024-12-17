<?php

namespace Tests;

require_once __DIR__ . '/../autoload.php';

use MyProject\FileHandler;
use PHPUnit\Framework\TestCase;

class FileHandlerTest extends TestCase
{
    public function testReadFileSuccess(): void
    {
        $fileHandler = new FileHandler();
        $filename = 'test.txt';
        file_put_contents($filename, 'Тестовое содержимое');

        $this->assertEquals('Тестовое содержимое', $fileHandler->readFile($filename));

        unlink($filename); // Удаляем файл после теста
    }

    public function testReadFileNotFound(): void
    {
        $fileHandler = new FileHandler();
        $this->assertEquals("Ошибка: Файл не найден.", $fileHandler->readFile('non_existent_file.txt'));
    }
}
