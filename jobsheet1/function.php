<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function PHP</title>
</head>
<body>

<form method="post" action="">
    Masukkan Panjang = <input type="text" name="panjang" id="panjang">
    Masukkan Lebar = <input type="text" name="lebar" id="lebar">
    <input type="submit" name="submit" value="Hitung">
</form>

<?php
function persegi_panjang($p, $l) {
    return $p * $l;
}

if(isset($_POST['submit'])) {
    $p = $_POST['panjang'];
    $l = $_POST['lebar'];
    $luas = persegi_panjang($p, $l);   
    echo "Maka Luas Persegi Panjang = persegi_panjang($luas) </br>";
}

?>

<form method="post" action="">
    Masukkan Jari-jari = <input type="text" name="jari-jari" id="jari-jari">
    <input type="submit" name="submit" value="Hitung">
</form>

<?php
function lingkaran($r) {
    return 3.14 * $r * $r;
}

if(isset($_POST['submit'])) {
    $r = $_POST['jari-jari'];
    $hasil = lingkaran($r);
    echo "Maka Luas Lingkaran = lingkaran($hasil) </br>";
}
?>

</body>
</html>