<?php

use JetBrains\PhpStorm\NoReturn;

if (!function_exists("view")) {
    function view(string $path): void
    {
        require_once APPLICATION . "/resources/views/" . $path. ".html";
    }
}

if(!function_exists("abort")){
    #[NoReturn] function abort(): void
    {
        header("404");
        view("404");
        die();
    }
}
