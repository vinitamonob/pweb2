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

    <br><br>
    <h4>Tambah Data Dosen</h4>
    <!-- data akan di kirim ke file -->
      <form action="proses-tambah.php" method="post">
        <table>
            <tr>
                <td width="150">NIP</td>
                <td><input class="form-control" type="text" name="nip"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input class="form-control" type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea class="form-control" name="alamat" id="" cols="30" rows="5"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input class="btn btn-primary" type="submit" name="submit" value="Simpan"></td>
            </tr>
        </table>
      </form>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>