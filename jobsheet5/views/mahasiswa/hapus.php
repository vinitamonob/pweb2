<?php

include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];

    $mahasiswaController = new MahasiswaController($db);
    $result = $mahasiswaController->deleteMahasiswa($nim);

    if ($result) {
        header("location:index.php");
    } else {
        echo "Gagal menghapus data";
    }
}