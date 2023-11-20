<?php

include_once '../../config.php';
include_once '../../controllers/DosenController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_POST['submit'])) {
    $nip=$_POST['nip'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];

    $dosenController = new DosenController($db);
    $result = $dosenController->createDosen($nip, $nama,$alamat);

    if($result) {
        header("location:index.php");
    } else {
        header("location:tambah.php");
    }
}