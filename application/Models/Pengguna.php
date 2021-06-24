<?php

namespace App\Models;

class Pengguna
{
    public $username;
    public $password;
    protected $email;

    function __construct($user, $pass, $email)
    {
        $this->username = $user;
        $this->password = $pass;
        $this->email = $email;
    }

    public function login()
    {
    }

    public function register()
    {
    }
}
