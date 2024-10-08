<?php

namespace App\Core\Http;

class Redirect implements RedirectInterface
{

    public function to(string $url)
    {
        header("Location: $url");
        exit;
    }

}