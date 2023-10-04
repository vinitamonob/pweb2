<?php
include '../classes/database.php';
$db = new Database();

$aksi = $_GET['aksi'];

if($aksi == "tambah") {
    $db->tambah_mhs($_POST['nim'], $_POST['nama'], $_POST['alamat']);
    header("location:tampil-mhs.php?success=Tambah Data Berhasil!");
} 

else if($aksi == "update") {
    $db->update($_POST['nim'], $_POST['nama'], $_POST['alamat']);
    header("location:tampil-mhs.php?success=Update Data Berhasil!");
} 

else if($aksi == "hapus") {
    $db->hapus($_GET['nim']);
    header("location:tampil-mhs.php?success=Hapus Data Berhasil!");
} 