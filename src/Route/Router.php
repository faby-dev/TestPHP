<?php

namespace App\Route;

class Router
{
    private $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function show()
    {
        echo $this->url;
    }
}
