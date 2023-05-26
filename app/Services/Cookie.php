<?php

namespace App\Services;

use App\Contracts\Storage;

class Cookie implements Storage
{

    public function save(string $data): void
    {
        setcookie("data", $data, time() + 3600);
    }

    public function load(): void
    {
        if (isset($_COOKIE['data'])) {
            echo "Куки<br>" . $_COOKIE['data'] . "<br>";
        }
    }
}