<?php 
require 'functions.php';
$id=$_GET["id"];


$buku = query("SELECT * FROM buku join kategori on kategori.id_kategori = buku.id_kategori WHERE id_buku = $id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
      <div class="container">
      <div class="navbar-brand font-weight-bold" >
          <h3>Tata Buku</h3>
        </div>    
      </div>
    </nav>
  
    <section class="content">
    <div class="container mt-4">
    <h1>Detail Buku</h1>

       <div class="row">
       <?php foreach( $buku as $row) : ?>
           <div class="col-md-6">
           <img src="img/<?php echo $row["gambar"]; ?>"alt="" class="img-responsive mt-3" width="500" height="auto"></td>
           </div>

           
        <div class="col-md-6">
            <h2><?php echo $row["judul_buku"] ?></h2>
            
            <h5 class="mt-5">Kategori Buku :</h5>
            <h5><?php echo $row["nama_kategori"] ?></h5>

            <h5 class="mt-5">Penulis :</h5>
            <h5><?php echo $row["penulis"] ?></h5>
            
            <h5 class="mt-5">Penerbit :</h5>
            <h5 ><?php echo $row["penerbit"] ?></h5>
            
            <h5 class="mt-5">Tahun Terbit :</h5>
            <h5><?php echo $row["tahun_terbit"] ?></h5>
            
           
            <?php endforeach; ?>  

            <form method="post">
                <div class="form-grup">
                    <div class="input-group">
                    </div>
                </div>

            </form>
        </div>
       </div>
    </div>
    </section>

    <!-- Footer -->
       <footer class="bg-primary text-white text-center pb-2">
      <p class="pt-2 mt-5">Dibuat Oleh <a href="https://www.instagram.com/ptriauliam/" class="text-white fw-bold">Putri Aulia Maulidina</a></p>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>