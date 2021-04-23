<?php
    namespace App;
    require_once("User.php");
    
    class Pegawai extends User
    {
        protected $nip;
        protected $nama;
        protected $no_hp;
        protected $gaji_pokok;

        function __construct($nip, $nama, $hp, $gaji){
            $this->nip = $nip;
            $this->nama = $nama;
            $this->no_hp = $hp;
            $this->gaji_pokok = $gaji;
        }

        public function tampilkanGaji()
        {
            echo "Jumlah Gaji : $this->gaji_pokok";
        }

        // Getter
        public function getNip(){
            return $this->nip;
        }

        public function getNama(){
            return $this->nama;
        }

        public function getNoHp(){
            return $this->no_hp;
        }

        public function getGajiPokok(){
            return $this->gaji_pokok;
        }

        // Setter
        public function setNip($nip){
            $this->nip = $nip;
        }

        public function setNama($nama){
            $this->nama = $nama;
        }

        public function setNoHp($hp){
            $this->no_hp = $hp;
        }

        public function setGajiPokok($gaji){
            $this->gaji_pokok = $gaji;
        }
    }
?>