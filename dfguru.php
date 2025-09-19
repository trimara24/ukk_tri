<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Guru</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<?php include 'navbar.php'; ?>

<body style="background-color: #ffffffff;">

    <div class="container mt-5">
         <div class="container">
        <h3 class="mb-0 my-5 ">Daftar Guru</h3>
                <h3 class="text-info">PPLG</h3>
        <div class="row">
            <?php

            $guru = [
                ["nama" => "Taufik Hidayat S.Kom", "mapel" => "", "foto" => "galeri/pataufik.jpg"],
                ["nama" => "Zul Hilmi", "mapel" => "", "foto" => "galeri/pazul.jpg"],
                ["nama" => "Bintang", "mapel" => "", "foto" => "galeri/pabintang.jpg"],
                ["nama" => "Adi", "mapel" => "", "foto" => "galeri/paadi.jpg"],
                ["nama" => "Arif", "mapel" => "", "foto" => "galeri/paarif.JPG"]
            ];

            foreach ($guru as $item) { ?>
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="card shadow text-center">
                        <img src="<?= $item['foto']; ?>" class="card-img-top" alt="Foto <?= $item['nama']; ?>" style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $item['nama']; ?></h5>
                            <p class="card-text"><?= $item['mapel']; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</body>
</html>
