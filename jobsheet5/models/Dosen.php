<?php

class Dosen{
    private $koneksi;

    public function __construct($db) {
        $this->koneksi=$db;
    } 

    public function getAllDosen() {
        $query="SELECT * FROM dosen";
        $result=mysqli_query($this->koneksi, $query); //mengambil data
        return $result;
    }

    public function createDosen($nip, $nama, $alamat) {
        $query="INSERT INTO dosen (nip, nama, alamat)
        VALUES('$nip', '$nama', '$alamat')";

        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getDosenByNip($nip) {
        $query="SELECT * FROM dosen WHERE nip='$nip'"; 
        // $result=mysqli_query($this->koneksi, query);
        $result = $this->koneksi->query($query);
        return mysqli_fetch_assoc($result);
    }

    public function updateDosen($nip, $nama, $alamat) {
        $query="UPDATE dosen SET nip='$nip', nama='$nama',  alamat='$alamat'
        WHERE nip='$nip'";
        $result = $this->koneksi->query($query);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteDosen($nip) {
        $query="DELETE FROM dosen WHERE nip ='$nip'";
        $result = $this->koneksi->query($query);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}