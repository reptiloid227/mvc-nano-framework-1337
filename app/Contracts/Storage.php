<?php

namespace App\Contracts;

interface Storage
{
    public function save(string $data): void;


    public function load(): void;
}