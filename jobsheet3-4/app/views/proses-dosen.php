<?php
//memanggil class dri db
include '../classes/database2.php';
//instansiasi class db
$db = new Database();

//mengambil nilai dri parameter aksi
$aksi = $_GET['aksi'];

//jika aksi = tambah
if($aksi == "tambah") {
    //memanggil metode tambah dosen
    $db->tambah_dosen($_POST['nip'], $_POST['nama'], $_POST['alamat']);
    header("location:tampil-dosen.php?success=Tambah Data Berhasil!"); //mengarahkan ke halaman dgn alert
} 

//jika aksi = update
else if($aksi == "update") {
    //memanggil metode update dosen
    $db->update($_POST['nip'], $_POST['nama'], $_POST['alamat']);
    header("location:tampil-dosen.php?success=Update Data Berhasil!"); //mengarahkan ke halaman dgn alert
} 

//jika aksi = hapus
else if($aksi == "hapus") {
    //memanggil metode hapus dosen
    $db->hapus($_GET['nip']);
    header("location:tampil-dosen.php?success=Hapus Data Berhasil!"); //mengarahkan ke halaman dgn alert
} 