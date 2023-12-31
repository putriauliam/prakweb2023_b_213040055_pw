<?php 

require 'functions.php';
$buku = query("SELECT * FROM buku join kategori on kategori.id_kategori = buku.id_kategori");



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Bootsrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="CSS/style.css" />

    <title>Bukubook</title>
  </head>
  <body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark  bg-primary shadow-sm ">
      <div class="container">
      <div class="navbar-brand font-weight-bold" >
          <h3>Tata Buku</h3>
        </div>   
    </nav>   
  </section>

    <!-- container daftar buku -->
    <section id="skills">
      <div class="container">
        <div class="row text-center">
          <div class="col mt-4">
            <h1>Daftar Buku</h1>
          </div>
        </div>
        <div class="row justify-content-center text-center">
        <?php foreach( $buku as $row) : ?>
          <div class="col-md-4 mt-3 mb-3">
            <div class="card bg-white shadow">
              <div class="card-body">
                <img src="img/<?= $row["gambar"]; ?>" class="card-img-top" height="500" width="200">
                <h4 class=""><?= $row["judul_buku"]; ?></h4>
                <h5 class=""><?= $row["penulis"]; ?></h5>
               
                <a href="detail.php?id=<?= $row["id_buku"]; ?>" class="btn btn-primary btn-lg">Selengkapnya</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
          
        </div>
      </div>
      
    </section>


    <!-- Akhir daftar buku -->

  
    <!-- Footer -->
    <footer class="bg-primary text-white text-center pb-2">
      <p class="pt-2">Dibuat Oleh <a href="https://www.instagram.com/ptriauliam/" class="text-white fw-bold">Putri Aulia Maulidina</a></p>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
