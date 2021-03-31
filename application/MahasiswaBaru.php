<?php 
    namespace application\backend;
    require_once("Mahasiswa.php");
    
    class MahasiswaBaru extends Mahasiswa
    {
        protected $no_registrasi;

        function __construct($nim, $nama, $tgl, $jk, $no_reg){
            $this->nim = $nim;
            $this->nama = $nama;
            $this->tanggal_lahir = $tgl;
            $this->jenis_kelamin = $jk;
            $this->no_registrasi = $no_reg;
        }

        public function bayarGedung(){
            echo "$this->username Anda Telah Membayar Gedung";
        }

        // Getter
        public function getNoRegistrasi(){
            return $this->no_registrasi;
        }

        // Setter
        public function setNoRegistrasi($no_reg){
            $this->no_registrasi = $no_reg;
        }
    }
?>