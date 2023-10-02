<?php
class manusia {
    public $nama_saya;

    function panggil_nama($saya) {
        $this->nama_saya = $saya;
    }
}

//class turunan atau sub class dari class manusia
class mahasiswa extends manusia {
    public $nama_mahasiswa;
    private $nim_mahasiswa;
    protected $alamat_mahasiswa;

    function panggil_mahasiswa($mahasiswa) {
        $this->nama_mahasiswa = $mahasiswa;
    }

    private function panggil_nim($nim) {
        $this->$nim_mahasiswa = $nim;
    }

    // public function setNIM($nim) {
    //     $this->nim_mahasiswa = $nim;
    // }

    // public function getNIM() {
    //     return $this->nim_mahasiswa;
    // }

    protected function panggil_alamat($alamat) {
        $this->alamat_mahasiswa = $alamat;
    }
    
    // public function getAlamat($alamat) {
    //     $this->alamat_mahasiswa = $alamat;
    // }
}

//instansiasi class mahasiswa
$informatika = new mahasiswa();
$npm = new mahasiswa();
$lokasi = new mahasiswa();

$informatika->panggil_nama("Fariani Vinita");
$informatika->panggil_mahasiswa("Tamonob");
$npm->panggil_nim("220302008");
$lokasi->panggil_alamat("Perum Tegal Asri");

//tampilkan isi property
echo "Nama Depan Saya: " . $informatika->nama_saya . "</br>";
echo "Nama Belakang: " . $informatika->nama_mahasiswa . "</br>";
echo "NIM Saya: " . $npm->nim_mahasiswa . "</br>";
echo "Alamat Saya: " . $lokasi->alamat_mahasiswa;
?>