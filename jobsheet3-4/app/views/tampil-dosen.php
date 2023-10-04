<?php
//memanggil class database
include '../classes/database2.php';
//inistansiasi class databse
$db = new Database;
?>

<h3>Data Dosen</h3>
<a href="input-dosen.php">Tambah Dosen</a>
<br>
<table border = "1">
<tr>
    <th>No</th>
    <th>NIP</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Aksi</th>
</tr>

<?php
$no = 1;
foreach($db->tampil_dosen() as $x) {
?>
<tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $x['nip'] ?></td>
    <td><?php echo $x['nama'] ?></td>
    <td><?php echo $x['alamat'] ?></td>
    <td>
        <a href="edit-dosen.php?nip=<?php echo $x['nip']; ?>&aksi=edit">Edit</a>
        <a href="proses-dosen.php?nip=<?php echo $x['nip']; ?>&aksi=hapus">Hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
