<?php

namespace App\Models;

class PerguruanTinggi
{
    public $id;
    public $namaPT;
    protected $akreditasi;


    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNamaPT($namaPT)
    {
        $this->namaPT = $namaPT;
    }

    public function setAkreditasi($akreditasi)
    {
        $this->akreditasi = $akreditasi;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNamaPT()
    {
        return $this->namaPT;
    }

    public function getAkreditasi()
    {
        return $this->akreditasi;
    }

    public function registerMaba()
    {
    }
}
