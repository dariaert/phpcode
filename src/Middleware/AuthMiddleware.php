<?php

namespace App\Middleware;

use App\Core\Middleware\AbstractMiddleware;

class AuthMiddleware extends AbstractMiddleware
{
    public function handle(): void
    {
        if (!$this->auth->check()) {
            $this->redirect->to('/login');
        }
    }
}