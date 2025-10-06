<?php
namespace App\Services;

use App\Models\User;

class RegisterService
{
    public function register($data)
    {
        return User::create($data);
    }
}