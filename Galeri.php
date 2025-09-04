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
<body>
   <?php include 'navbar.php';?>
<!-- SECTION GALERI -->
 <?php 
 $galeri = [
         'galeri/ri1.JPG',
         'galeri/ri2.JPG',
         'galeri/ri3.JPG',
         'galeri/ri4.JPG',
         'galeri/ri5.JPG',
         'galeri/ri6.JPG'
 ];
 $i = 0;
 ?>
  <section>
    <div class="container p-4 mt-5 my-5">
      <div class="row">
        <h3 class="mb-0 my-5 ">Galeri</h3>
        <div class="card">
          <div class="col-lg-12">
            <h3 class="text-center">PERINGATAN HUT RI KE-80</h3>
            <hr>
            <div class="row m-3">
              <?php while ($i < count($galeri)): ?>
              <div class="col-lg-4">
                <img src="<?=$galeri[$i]?>" class="img-fluid rounded">
              </div>
              <?php $i++;?>
              <?php endwhile;?>
            </div>
          </div>
        </div>
      </div>
  </section>
<!-- TUTUP GALERI -->

<!-- SECTION GALERI 2 -->
 
  <?php 
 $galeri = [
         'galeri/ri1.JPG',
         'galeri/ri2.JPG',
         'galeri/ri3.JPG',
         'galeri/ri4.JPG',
         'galeri/ri5.JPG',
         'galeri/ri6.JPG'
 ];
 $i = 0;
 ?>
  <section>
    <div class="container p-4 mt-5 my-5">
      <div class="row">
        <h3 class="mb-0 my-5 ">Galeri</h3>
        <div class="card">
          <div class="col-lg-12">
            <h3 class="text-center">PERINGATAN HUT RI KE-80</h3>
            <hr>
            <div class="row m-3">
              <?php while ($i < count($galeri)): ?>
              <div class="col-lg-4">
                <img src="<?=$galeri[$i]?>" class="img-fluid rounded">
              </div>
              <?php $i++;?>
              <?php endwhile;?>
            </div>
          </div>
        </div>
      </div>
  </section>

<!-- TUTUP GALERI 2 -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>
</html>