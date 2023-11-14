<?php

class Mahasiswa{
    private $koneksi;

    public function __construct($db) {
        $this->koneksi=$db;
    } 

    public function getAllMahasiswa() {
        $query="SELECT * FROM mahasiswa";
        $result=mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createMahasiswa($nim, $nama, $tempat_lahir, $jenis_kelamin, $agama, $alamat) {
        $query="INSERT INTO mahasiswa (nim, nama, tempat_lahir, jenis_kelamin, agama, alamat)
        VALUES('$nim', '$nama', '$tempat_lahir', '$jenis_kelamin', '$agama', '$alamat')";

        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getMahasiswaByNim($nim) {
        $query="SELECT * FROM mahasiswa WHERE nim=$nim"; 
        // $result=mysqli_query($this->koneksi, query);
        $result = $this->koneksi->query($query);
        return mysqli_fetch_assoc($result);
    }

    public function updateMahasiswa($nim, $nama, $tempat_lahir, $jenis_kelamin, $agama, $alamat) {
        $query="UPDATE mahasiswa SET nim='$nim', nama='$nama', tempat_lahir='$tempat_lahir', jenis_kelamin='$jenis_kelamin', agama='$agama', alamat='$alamat'
        WHERE nim='$nim'";
        $result = $this->koneksi->query($query);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteMahasiswa($nim) {
        $query="DELETE FROM mahasiswa WHERE nim ='$nim'";
        $result = $this->koneksi->query($query);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}