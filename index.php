<?php
    require_once("Mahasiswa.php");
    require_once("MahasiswaBaru.php");

    $madha = new MahasiswaBaru("H1101201035", "Ramadhan", "2001-12-08", "Laki-Laki", 8008);
    $harry = new Mahasiswa("H1101191040", "Harry Anshary", "2001-03-31", "Laki-Laki");
    $nisa = new Mahasiswa("H1101191039", "Fakihatunnisa Arobbi'u Watsalatsunna", "2001-06-23", "Perempuan");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
</head>

<body>
    <?php echo "<p>Hello World</p>"; ?>
    <?php 
        $madha->tampilkanNama(); 
        echo "<br>";
        $madha->tampilkanUmur(); 
        echo "<br>";
        $madha->tampilkanAngkatan(); 
    ?>
</body>

</html>