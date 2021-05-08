<?php

namespace App;

class Kopi implements Minuman
{
    public function buat()
    {
        echo "Masak air panas hingga mendidih";
        echo "Masukkan kopi ke dalam gelas dan air panas";
        echo "aduk sebanyak 60 kali putaran";
        echo "diamkan selama 15 menit";
        echo "tambahkan gula aren";
    }

    public function minum()
    {
        echo "diseruput sedikit demi sedikit";
    }

    public function tambahSusu()
    {
        echo "tambahkan susu kedalam kopi";
    }
}
