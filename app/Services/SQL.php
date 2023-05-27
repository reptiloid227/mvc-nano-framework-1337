<?php

namespace App\Services;

use App\Contracts\Storage;

class SQL implements Storage
{
    private object $connect;

    public function __construct()
    {
        $this->connect = mysqli_connect(
            "localhost",
            "os_adm",
            "FxJ)S9.n/pu_fi@Y",
            "maxon"
        );
    }

    public function save(string $data): void
    {

        $this->connect
            ->query("INSERT INTO data (data) VALUES ('$data') ");
    }

    public function load(): void
    {
        $result = $this->connect
            ->query("SELECT * FROM `data`");

        echo "SQL<br>";

        foreach ($result as $item){
            print_r($item);
            echo "<br>";
        }
    }
}