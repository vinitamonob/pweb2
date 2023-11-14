<?php

include_once '../../models/Dosen.php';

class DosenController{
    private $model;

    public function __construct($db) {
        $this->model = new Dosen($db);
    }

    public function getAllDosen() {
        return $this->model->getAllDosen();
    }

    public function createDosen($nip, $nama, $alamat) {
        return $this->model->createDosen($nip, $nama, $alamat); 
    }

    public function getDosenByNip($nip) {
        return $this->model->getDosenByNip($nip);
    }

    public function updateDosen($nip, $nama, $alamat) {
        return $this->model->updateDosen($nip, $nama, $alamat);
    }

    public function deleteDosen($nip) {
        return $this->model->deleteDosen($nip);
    }

}