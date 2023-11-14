<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/DosenController.php';
require '../../index.php';

//instansiasi class db
$database = new database;
$db = $database->getKoneksi();

$dosenController = new DosenController($db);
$dosen = $dosenController->getAllDosen();
?>

<div class = "px-2">
  <br>    
  <?php
  if(isset($_GET['success'])) { //memeriksa 
  ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <?= $_GET['success'] ?>  
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php
  }
  ?>

  <h3>Data Dosen</h3>
      <a class = "btn btn-primary" href="tambah.php">Tambah Dosen</a>
      <br>
      <table class = "table">
        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
  
      <?php
      $no = 1;
      foreach($dosen as $x) {
      ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $x['nip'] ?></td>
        <td><?php echo $x['nama'] ?></td>
        <td><?php echo $x['alamat'] ?></td>
        <td>
            <a class = "btn btn-warning" href="edit.php?nip=<?php echo $x['nip']; ?>">Edit</a>
            <a class = "btn btn-danger" href="hapus.php?nip=<?php echo $x['nip']; ?>" onclik ="return confrim('Apakah yakin akan menghapus..?')">Hapus</a>
        </td>
      </tr>
      <?php
      }
      ?>
    </table>
  </div>    
</dv>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>