<?php

namespace App\Controllers;
use App\Services\StorageManager;

class MainController
{
    public function index(): void
    {
        view("index");
    }


    public function save(): void
    {
        view("index");
        if (isset($_POST['storage']) && isset($_POST['data'])) {
            $storageManager = StorageManager::init($_POST['storage']);
            $storageManager->save($_POST['data']);
        }

        StorageManager::loadAll();
    }


}