<?php

include_once '../../config.php';
include_once '../../controllers/DosenController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['nip'])) {
    $nip = $_GET['nip'];

    $dosenController = new DosenController($db);
    $dosenData = $dosenController->getDosemByNip($nip);

    if ($dosenData) {
        if (isset($_POST['submit'])) {
            $nim=$_POST['nip'];
            $nama=$_POST['nama'];
            $alamat=$_POST['alamat'];

            $result = $dosenController->updateDosen($nip, $nama, $alamat);
            if ($result) {
                header("location:index.php");
            } else {
                header("location:edit.php");
            }       
        } 
    } else {
        echo "Dosen tidak ditemukan";
    }
} 
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

<br>
<h4>Edit Data Dosen</h4>
<?php
if ($dosenData) {
?>
<div class="">
  <form action="" method="post">
      <?php
      foreach ($dosenData as $d => $value) {
      ?>    
      <table broder="0" class="table table-borderless">
          <tr>
              <td width="150">
                  <?php
                  echo $d;
                  ?>
              </td>
              <td>
                  <input class="form-control w-50" type="text" name="<?php echo $d ?>" value="<?php echo $value ?>">
              </td>
          </tr>
      <?php
      }
      ?>
      <tr>
          <td></td>
          <td>
              <input class="btn btn-primary" type="submit" name="submit" value="Simpan">
          </td>
      </tr>
      </table>
  </form>
</div>
<?php    
}
?>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>