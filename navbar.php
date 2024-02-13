<?php require "./login/koneksi.php"; ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GroShop - TIM 2 TRPL 1A MALAM</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="../home/main.css"/>
  </head>

  <body>
    <header class="header">
      <a href="./login/" class="logo"><i class="fas fa-shopping-basket"></i>GroShop</a>

      <nav class="navbar">
        <form method="GET" action="./login/" class="search-form">
          <input class="form-control" style="margin : 1rem; border: none;" type="search" id="search-box" name="keyword" placeholder="Cari Bahan Belanja disini....">
          <button type="submit" for="search-box" class="fa fa-search" id="searchbtn"></button>
        </form>
      </nav>
        <div class="icons">
          <div class="fas fa-search" id="search-btn"></div>
          <a href="./login/"><div class="fas fa-shopping-cart" id="cart-btn"></div></a>
          <a href="./login/"><div class="fas fa-user" id="login-btn"></div></a>
        </div>
    </header>

    <script >
      let navbar = document.querySelector(".navbar");

      document.querySelector("#search-btn").onclick = () =>{
          navbar.classList.toggle("active");
      }

      window.onscroll = () =>{

          navbar.classList.remove("active");
      }
    </script>
  </body>
</html>
