<?php
  require "./login/koneksi.php";

  $queryKategori = mysqli_query($koneksi, "SELECT * FROM data_kategori");
  $queryProduk = mysqli_query($koneksi, "SELECT * FROM data_produk");
  $produk = mysqli_fetch_array($queryProduk);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GroShop - TIM 2 TRPL 1A MALAM</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="main.css" />
  </head>
  <body>
    
    <?php include "navbar.php"; ?>
 
    <div class="container text-center" style="margin-top : 4rem;">
      <h3 id="daftar" class="text-center mb-5 mt-3">DAFTAR <span>KATEGORI</span></h3>
      <div class="row">
        <?php while ($kategori = mysqli_fetch_array($queryKategori)){ ?>
        <div class="col-sm-4 col-md-3 mb-5">
          <div class="card" style="width: 25rem; border-radius: 2em">
          <div class="image-box">
            <?php echo '<img src="data:image/jpeg;base64, '.base64_encode($kategori['foto']).'" class="card-img-top p-4" style="witdh:10rem; height:21rem;"/>'; ?>
          </div>
            <div class="card-body">
              <h5 class="card-title fs-1 fw-semibold"><?php echo $kategori['nama_kategori']; ?> </h5>
              <a href="./login/" class="btn btn-warning fs-3 mb-3">Lihat</a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  
    


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>
