<?php

namespace App;

class EsJeruk  implements Minuman
{
    public function minum()
    {
        echo "Minumlah";
    }

    public function buat()
    {
        echo "Masukkin blender";
    }

    public static function dilihat()
    {
        echo "Cuma boleh dilihat tak boleh diminum";
    }
}
