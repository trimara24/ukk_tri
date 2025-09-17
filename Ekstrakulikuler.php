<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./vendor/bs/bs.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>SMKN 4 TASIKMALAYA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body style="background-color: whitesmoke;">

      <?php include 'navbar.php';?>

 <!-- SECTION ESKUL -->
     <section>
        <div class="container pt-5 mt-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-0">
                        <h3 class="mb-0">Ekstrakurrikuler</h3>
                        <h3 class="text-primary ">Siswa</h3>
                        <div class="row">
                            <?php
                            $eskul = [
                                ["nama" => "PASKIBRA" , "gambar" => "galeri/eskul1.png"],
                                ["nama" => "Pramuka" , "gambar" => "galeri/eskul2.png"],
                                ["nama" => "PMR" , "gambar" => "galeri/eskul3.png"],
                                ["nama" => "PLH" , "gambar" => "galeri/eskul4.png"],
                                ["nama" => "IT Club" , "gambar" => "galeri/eskul5.png"],
                                ["nama" => "PKS" , "gambar" => "galeri/eskul6.png"],
                                ["nama" => "Perisai diri" , "gambar" => "galeri/eskul7.jpg"],
                                ["nama" => "English Club" , "gambar" => "galeri/eskul8.png"],
                                ["nama" => "Cinematography" , "gambar" => "galeri/eskul9.png"],
                                ["nama" => "Laskar Pustaka" , "gambar" => "galeri/eskul10.png"],
                                ["nama" => "IRMA" , "gambar" => "galeri/eskul11.png"],
                                ["nama" => "Bulu Tangkis" , "gambar" => "galeri/eskul12.png"],
                                ["nama" => "Futsal" , "gambar" => "galeri/eskul13.png"],
                                ["nama" => "Basket" , "gambar" => "galeri/eskul14.png"],
                                ["nama" => "Voli" , "gambar" => "galeri/eskul15.jpeg"],
                            ];

                            foreach ($eskul as $item) { ?>
                            <div class="col-lg-4">
                                <div class="card shadow rounded m-3 p-4 d-flex align-items-center">
                                    <img src="<?= $item['gambar']; ?>" alt="" width="150" height="150">
                                <div class="card-body  border-0">
                                       <h4><?= $item['nama']; ?></h4>
                                </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!-- TUTUP SECTION ESKUL -->
     
   
    
    

 </body>
 </html>