<?php
//memanggil class database
include '../classes/database.php';
//inistansiasi class databse
$db = new Database;
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SISTEM AKADEMIK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<div class = "px-4 py-3">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><h3>SISTEM AKADEMIK</h3></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Mahasiswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Dosen</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class = "px-2">
    <br>    
    <?php
    if(isset($_GET['success'])) {
    ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <?= $_GET['success'] ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
    }
    ?>
    
    <h3>Data Mahasiswa</h3>
    <a class = "btn btn-primary mb-2 mt-2" href="input-mhs.php">Tambah Mahasiswa</a>
    <br>
      <table class = "table">
          <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>
          </tr>

          <?php
          $no = 1;
          foreach($db->tampil_mahasiswa() as $x) {
          ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $x['nim'] ?></td>
            <td><?php echo $x['nama'] ?></td>
            <td><?php echo $x['alamat'] ?></td>
            <td>
              <a class="btn btn-warning" href="edit-mhs.php?nim=<?php echo $x['nim']; ?>&aksi=edit">Edit</a>
              <a class="btn btn-danger" href="proses-mhs.php?nim=<?php echo $x['nim']; ?>&aksi=hapus">Hapus</a>
            </td>
          </tr>

          <?php
          }
          ?>

      </table>
    </div>    
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>