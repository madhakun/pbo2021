<?php
    namespace App;
    
    class Mobil
    {
        public $roda;
        public $kursi;

        public function nyalakan(){
            echo "Mobil dengan roda $this->roda menyala <br>";
        }

        public function mundur(){
            $this->nyalakan();
            echo "Mobil berjalan mundur <br>";
        }
    }
?>