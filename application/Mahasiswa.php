<?php
    namespace App;
    require_once("User.php");
    
    class Mahasiswa extends User
    {
        protected $nim;
        protected $nama;
        protected $tanggal_lahir;
        protected $jenis_kelamin;

        function __construct($nim, $nama, $tgl, $jk){
            $this->nim = $nim;
            $this->nama = $nama;
            $this->tanggal_lahir = $tgl;
            $this->jenis_kelamin = $jk;
        }

        public function tampilkanAngkatan(){
            echo "Merupakan angkatan tahun 20" . substr($this->nim, 5, 2);
        }
        public function tampilkanUmur(){
            echo date_diff(date_create($this->tanggal_lahir), 
                date_create("today"))->y;
        }
        public function tampilkanNama(){
            echo $this->nama;
        }

        // Getter
        public function getNim(){
            return $this->nim;
        }

        public function getNama(){
            return $this->nama;
        }

        public function getTglLahir(){
            return $this->tanggal_lahir;
        }

        public function getJenisKelamin(){
            return $this->jenis_kelamin;
        }

        // Setter
        public function setNim($nim){
            $this->nim = $nim;
        }

        public function setNama($nama){
            $this->nama = $nama;
        }

        public function setTglLahir($tgl){
            $this->tanggal_lahir = $tgl;
        }

        public function setJenisKelamin($jk){
            $this->jenis_kelamin = $jk;
        }
    }
?>