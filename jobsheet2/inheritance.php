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

    function panggil_mahasiswa($mahasiswa) {
        $this->nama_mahasiswa = $mahasiswa;
    }

    function panggil_nim($nim) {
        $this->nim_mahasiswa = $nim;
    }
}

//instansiasi class mahasiswa
$informatika = new mahasiswa();

$informatika->panggil_nama("Fariani Vinita");
$informatika->panggil_mahasiswa("Tamonob");
$informatika->panggil_nim("220302008");

//tampilkan isi property
echo "Nama Depan Saya: " . $informatika->nama_saya . "</br>";
echo "Nama Belakang: " . $informatika->nama_mahasiswa . "</br>";
echo "NIM Saya: " . $informatika->nim_mahasiswa;
?>