<?php

namespace App\Services;

use App\Contracts\Storage;
use Exception;

class StorageManager
{
    private static array $storages = [
        'SQL' => SQL::class,
        'SESSION' => Session::class,
        'COOKIE' => Cookie::class
    ];

    /**
     * @throws Exception
     */
    public static function init(string $storage): Storage
    {
        if (!in_array($storage, array_keys(self::$storages))) {
            throw new Exception("Неверный тип данных");
        }

        return new self::$storages[$storage];

    }


    public static function loadAll(): void
    {
        foreach (self::$storages as $storageClass){
            $storage = new $storageClass;
            $storage->load();
        }

    }
}