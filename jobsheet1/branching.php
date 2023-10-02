<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching PHP</title>
</head>
<body>

<form method="post">
        Masukkan Bilangan: <input type="text" name="bilangan">
        <input type="submit" name="submit" value="Cek">
</form>

<?php
// $x = 2;
// echo "Nilai X = $x </br></br>";

if (isset($_POST['submit'])) {
    $x = $_POST['bilangan'];

    // Mengkonversi input menjadi angka (float)
    $x = intval($x);
    echo "</br>";

    if ($x > 0) {
        echo "$x adalah Bilangan Positif";
    } else if ($x < 0) {
        echo "$x adalah Bilangan Negatif";
    } else {
        echo "$x adalah Bilangan Nol";
    }
}
    ?>
</body>
</html>