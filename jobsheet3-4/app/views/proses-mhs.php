<?php
//memanggil class dri db
include '../classes/database.php';
//instansiasi class db
$db = new Database();

//mengambil nilai dri parameter aksi
$aksi = $_GET['aksi'];

//jika aksi = tambah
if($aksi == "tambah") {
    //memanggil metode tambah mhs
    $db->tambah_mhs($_POST['nim'], $_POST['nama'], $_POST['alamat']);
    header("location:tampil-mhs.php?success=Tambah Data Berhasil!"); //mengarahkan ke halaman dgn alert
} 

//jika aksi = update
else if($aksi == "update") {
    //memanggil metode update mhs
    $db->update($_POST['nim'], $_POST['nama'], $_POST['alamat']);
    header("location:tampil-mhs.php?success=Update Data Berhasil!"); //mengarahkan ke halaman dgn alert
} 

//jika aksi = hapus
else if($aksi == "hapus") {
    //memanggil metode hapus mhs
    $db->hapus($_GET['nim']);
    header("location:tampil-mhs.php?success=Hapus Data Berhasil!"); //mengarahkan ke halaman dgn alert
} 