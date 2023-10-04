<?php
class database {
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "akademik";
    var $koneksi;

    function __construct() {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
    }

    function tampil_mahasiswa() {
        $sql = "SELECT * FROM mahasiswa";
        $mahasiswa = $this->koneksi->query($sql);
        return $mahasiswa;
    }

    function tambah_mhs($nim, $nama, $alamat) {
        $sql = "INSERT INTO `mahasiswa` (`nim`, `nama`, `alamat`) VALUES ('$nim', '$nama', '$alamat')";
        $this->koneksi->query($sql);
    }

    function edit($nim) {
        $sql = "SELECT `nim`, `nama`, `alamat` FROM `mahasiswa` WHERE nim = $nim";
        $mahasiswa = $this->koneksi->query($sql);
        return $mahasiswa;
    }

    function update($nim, $nama, $alamat) {
        $sql = "UPDATE `mahasiswa` SET `nim`='$nim',`nama`='$nama',`alamat`='$alamat' WHERE nim = $nim";
        $this->koneksi->query($sql);
    }
    
    function hapus($nim) {
        $sql = "DELETE FROM `mahasiswa` WHERE nim = $nim";
        $this->koneksi->query($sql); 
    }
}