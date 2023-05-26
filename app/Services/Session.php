<?php

namespace App\Services;

use App\Contracts\Storage;

class Session implements Storage
{
    public function __construct()
    {
        session_start();
    }

    public function save(string $data): void
    {
        $_SESSION['data'][time()] = $data;
    }

    public function load(): void
    {
        echo "Сессия: ";
        var_dump($_SESSION['data']);
        echo "<br><br>";
    }
}