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

    function tampil_dosen() {
        $sql = "SELECT * FROM dosen";
        $dosen = $this->koneksi->query($sql);
        return $dosen;
    }

    function tambah_dosen($nip, $nama, $alamat) {
        $sql = "INSERT INTO `dosen` (`nip`, `nama`, `alamat`) VALUES ('$nip', '$nama', '$alamat')";
        $this->koneksi->query($sql);
    }

    function edit($nip) {
        $sql = "SELECT `nip`, `nama`, `alamat` FROM `dosen` WHERE nip = $nip";
        $dosen = $this->koneksi->query($sql);
        return $dosen;
    }

    function update($nip, $nama, $alamat) {
        $sql = "UPDATE `dosen` SET `nip`='$nip',`nama`='$nama',`alamat`='$alamat' WHERE nip = $nip";
        $this->koneksi->query($sql);
    }
    
    function hapus($nip) {
        $sql = "DELETE FROM `dosen` WHERE nip = $nip";
        $this->koneksi->query($sql); 
    }
}