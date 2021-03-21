<?php
    class User
    {
        protected $_username;
        protected $_password;

        public function login(){
            return "$this->username berhasil login";
        }
    }
?>