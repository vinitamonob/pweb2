<?php
class manusia {
    private $nama_saya;

    //method
    function panggil_nama($saya) {
        $this->nama_saya = $saya;
    }

    public function ambil_nama() {
        return $this->nama_saya;
    }
}

//class turunan atau sub class dari class manusia
class mahasiswa extends manusia {
    protected $nama_mahasiswa;

    //method
    function panggil_mahasiswa($mahasiswa) {
        $this->nama_mahasiswa = $mahasiswa;
    }

    function ambil_mahasiswa() {
        return $this->nama_mahasiswa;
    }

}

//instansiasi class mahasiswa
$informatika = new mahasiswa();

$informatika->panggil_nama("Fariani Vinita");
$informatika->panggil_mahasiswa("Tamonob");


//tampilkan isi property
echo "Nama Depan Saya: " . $informatika->ambil_nama() . "</br>";
echo "Nama Belakang: " . $informatika->ambil_mahasiswa() . "</br>";

?>