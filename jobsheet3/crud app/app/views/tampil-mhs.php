<?php
//memanggil class database
include '../classes/database.php';

//instansiasi class database
$db = new database;
?>

<h3>Data Mahasiswa</h3>
<a href="input-mhs.php">Tambah Mahasiswa</a>
<table border = "1">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
    </tr>
    <?php
    $no = 1;
    foreach ($db->tampil_mahasiswa() as $x) {
    ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $x['nim'] ?></td>
        <td><?php echo $x['nama'] ?></td>
        <td><?php echo $x['alamat'] ?></td>
        <td>
            <a href="edit-mhs.php">Edit</a>
            <a href="hapus-mhs.php">Hapus</a>
        </td>
    </tr>
    <?php
    }
    ?>
</table>