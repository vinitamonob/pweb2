<?php
include '../classes/database.php';
$db = new Database();
?>

<h3>Edit Data Mahasiswa</h3>
<form action="proses-mhs.php?aksi=update" method="post">
    <?php
    $nim = $_GET['nim'];
    $mahasiswa = $db->edit($nim);
    foreach($mahasiswa as $d) {
    ?>
    
    <table>
        <tr>
            <td>NIM</td>
            <td>  
                <input type="hidden" name="nim" value="<?php echo $d['nim'] ?>">
                <input type="text" name="nim" value="<?php echo $d['nim'] ?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $d['nama'] ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat" id="" cols="30" rows="5"><?php echo $d['alamat'] ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan"></td>
        </tr>
    </table>
<?php    
}
?>
</form>
