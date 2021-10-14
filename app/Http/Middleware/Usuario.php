<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Usuario {
    public $username = "";
    public $email = "";
    public $password ="";
    public $validate = "";
    public $admin = false;
}
