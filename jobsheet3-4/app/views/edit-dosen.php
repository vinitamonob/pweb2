<?php
include '../classes/database2.php';
$db = new Database();
?>

<h3>Edit Data Dosen</h3>
<form action="proses-dosen.php?aksi=update" method="post">
    <?php
    $nip = $_GET['nip'];
    $dosen = $db->edit($nip);
    foreach($dosen as $d) {
    ?>
    
    <table>
        <tr>
            <td>NIP</td>
            <td>  
                <input type="hidden" name="nip" value="<?php echo $d['nip'] ?>">
                <input type="text" name="nip" value="<?php echo $d['nip'] ?>"></td>
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
