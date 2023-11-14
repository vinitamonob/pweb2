<?php
class database {
    //deklarasi 
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "akademik";
    var $koneksi;

    //yg pertama kali dipanggil ketika objek class db dibuat
    function __construct() {
        // Membuat koneksi ke database MySQL menggunakan mysqli_connect.
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
    }


    // function tampil_mahasiswa_kebumen( ) {
    //     $sql= "SELECT * FROM mahasiswa WHERE alamat LIKE '%Kebumen%'";
    //     $mahasiswa = $this->koneksi->query($sql);
    //     return $mahasiswa;
    // }


    //ambil data mhs dlm db
    function tampil_mahasiswa() {
        $sql = "SELECT * FROM mahasiswa";
        $mahasiswa = $this->koneksi->query($sql);
        return $mahasiswa; //mengembalikkan nilai 
    }

    //tambah data mhs
    function tambah_mhs($nim, $nama, $alamat) {
        $sql = "INSERT INTO `mahasiswa` (`nim`, `nama`, `alamat`) VALUES ('$nim', '$nama', '$alamat')";
        $this->koneksi->query($sql); //menjalankan printah
    }

    //edit data mhs 
    function edit($nim) {
        $sql = "SELECT `nim`, `nama`, `alamat` FROM `mahasiswa` WHERE nim = $nim";
        $mahasiswa = $this->koneksi->query($sql);
        return $mahasiswa; //mengembalikkan nilai 
    }

    //update data mhs
    function update($nim, $nama, $alamat) {
        $sql = "UPDATE `mahasiswa` SET `nim`='$nim',`nama`='$nama',`alamat`='$alamat' WHERE nim = $nim";
        $this->koneksi->query($sql); //menjalankan printah
    }
    
    //hapus data mhs
    function hapus($nim) {
        $sql = "DELETE FROM `mahasiswa` WHERE nim = $nim";
        $this->koneksi->query($sql); //menjalankan printah
    }
}