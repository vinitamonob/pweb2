<?php

include_once '../../config.php';
include_once '../../controllers/DosenController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['nip'])) {
    $nip = $_GET['nip'];

    $dosenController = new DosenController($db);
    $result = $dosenController->deleteDosen($nip);

    if ($result) {
        header("location:index.php");
    } else {
        echo "Gagal menghapus data";
    }
}