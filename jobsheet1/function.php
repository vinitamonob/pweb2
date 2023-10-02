<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function PHP</title>
</head>
<body>
    <?php
    function persegi_panjang($p, $l) {
        return $p*$l;
    }
    function lingkaran($r) {
        return 3.14 * $r * $r;
    }
    ?>
    
    Masukkan Panjang = <input type="text" name="" id="">
    <?php
    echo "Luas Persegi Panjang = " . persegi_panjang(5, 2) . "</br>";
    echo "Luas Persegi Panjang = " . lingkaran(7) . "</br>";
    ?>
</body>
</html>