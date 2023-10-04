<?php
include '../classes/database2.php';
$db = new Database();

$aksi = $_GET['aksi'];

if($aksi == "tambah") {
    $db->tambah_dosen($_POST['nip'], $_POST['nama'], $_POST['alamat']);
    header("location:tampil-dosen.php");
} 

else if($aksi == "update") {
    $db->update($_POST['nip'], $_POST['nama'], $_POST['alamat']);
    header("location:tampil-dosen.php");
} 

else if($aksi == "hapus") {
    $db->hapus($_GET['nip']);
    header("location:tampil-dosen.php");
} 