<?php
    namespace App;
    
    class User
    {
        public $_username;
        public $_password;

        function __construct($user, $pass)
        {
            $this->username = $user;
            $this->password = $pass;
        }
        
        public function login(){
            return "$this->username berhasil login";
        }
    }
?>