<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping PHP</title>
</head>
<body>
    <?php
    echo "Perulangan FOR bilangan genah dari 1 hingga 10 </br>";
    for($x = 2; $x <= 10; $x += 2)
        echo "$x </br>";
    echo "Perulangan WHILE bilangan ganjil dari 1 hingga 10 </br>";
    $y = 1;
    while ($y <= 10) {
        echo "$y </br></br>";
        $y += 2;
    }
    echo "Perulangan DO WHILE bilangan prima kurang dari 20 </br>";
    $angka = 2;   
      do {
          $prima = true;
          for ($i = 2; $i <= sqrt($angka); $i++) {
              if ($angka % $i == 0) {
                  $prima = false;
                  break;
              }
          }
          if ($prima) {
              echo $angka . " ";
          }
          $angka++;
      } while ($angka < 20);
    ?>
</body>
</html>