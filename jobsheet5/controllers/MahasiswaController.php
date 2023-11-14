<?php

include_once '../../models/Mahasiswa.php';

class MahasiswaController{
    private $model;

    public function __construct($db) {
        $this->model = new Mahasiswa($db);
    }

    public function getAllMahasiswa() {
        return $this->model->getAllMahasiswa();
    }

    public function createMahasiswa($nim, $nama, $tempat_lahir, $jenis_kelamin, $agama, $alamat) {
        return $this->model->createMahasiswa($nim, $nama, $tempat_lahir, $jenis_kelamin, $agama, $alamat); 
    }

    public function getMahasiswaByNim($nim) {
        return $this->model->getMahasiswaByNim($nim);
    }

    public function updateMahasiswa($nim, $nama, $tempat_lahir, $jenis_kelamin, $agama, $alamat) {
        return $this->model->updateMahasiswa($nim, $nama, $tempat_lahir, $jenis_kelamin, $agama, $alamat);
    }

    public function deleteMahasiswa($nim) {
        return $this->model->deleteMahasiswa($nim);
    }

}