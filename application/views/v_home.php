<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Website Desa</title>
    <style>
        body{
          padding: 30px;
        }
        nav a{
            text-decoration: none;
        }
        nav ul li a{
            width: auto;
            color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            list-style: none;
            font-size: 20px;
        }
        nav ul{
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        nav ul li {
            float: right;
            padding: 30px 20px 20px 16px;
            justify-content: center;
        }
        .dropdown{
            list-style: none;
        }
        .header-row{
            background-color: aliceblue;
        }
        #produk{
            display: inline-block;
            align-content: center;
        }
        .search{
          caret-color: #6DB9EF;
        }
      .nav-link:hover{
        color: #6DB9EF;
      }
      .btn:hover{
        background-color: #6DB9EF;
        color: black;
      }
      .btn a{
        text-decoration: none;
        color: white;
      }
      .img-fluid{
        display: flex;
        justify-content: center;
      }
      footer .card{
      background-color: aliceblue;
      color: black;
      }
      /* .col-profil{
        font-size: 15px;
        font-family: 'Open Sans', sans-serif;
      } */
      .col-profil{
        text-align: left;
        font-size: 15px;
        font-family: 'Open Sans', sans-serif;
      }
      .col-kontak{
        /* background-color: rebeccapurple; */
      }
      .col-kontak{
        text-align: right;
        font-size: 15px;
        font-family: 'Open Sans', sans-serif;
      }
      .card-link img{
        height: 30px;
      }
      .card-title a{
        text-decoration: none;
        color: black;
      }
      .info-admin a{
        color: black;
      }
      #wisata, #produk{
        text-decoration: none;
        color: black;
        display: inline-block;
        align-content: center;
      }
      .material-symbols-outlined {
        text-decoration: none;
        color: black;
        display: flex;
        justify-content: flex-end;
        float: right;
        font-variation-settings:
        'FILL' 0,
        'wght' 400,
        'GRAD' 0,
        'opsz' 24
      }
    </style>
</head>
<body>
<nav>
      <div class="header-row">
        <div class="header-column">
          <div class="header-logo">
            <table>
              <tbody>
                <tr>
                  <td>
                    <a href="">
                      <img height="40" data-sticky-top="33" src="<?php echo base_url() ?>assets/logo ekasari.png" alt="">
                    </a>
                  </td>
                  <td>
                    <h5>
                      <a href="" class="text-dark">
                        <strong> Desa Ekasari </strong>
                        <br>
                        Kabupaten Jembrana
                      </a>
                    </h5>
                  </td>
                </tr>
              </tbody>
              <ul class="dropdown">
                  <li style="padding-right: 42px;"><a href="index">Home</a></li>
                  <li style="padding-right: 42px;"><a href="#produk">Produk</a></li>
                  <li style="padding-right: 42px;"><a href="#wisata">Wisata</a></li>
              </ul>
            </table>
          </div>
        </div>
      </div>
      <br>

    </nav>
    <br>

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/KANTOR_DESA_EKASARI.jpeg" class="d-block w-100" alt="gambar 1" width="100" height="800">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/contoh_umkm.jpg" class="d-block w-100" alt="gambar 2" width="100" height="800">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/contoh_wisata.jpg" class="d-block w-100" alt="gambar 3" width="100" height="800">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br>
<!-- umkm wisata -->
<h4><a href="" id="produk">Produk</a></h4>
<a href="C_home/produk" class="material-symbols-outlined">arrow_forward</a>

<!-- card 1 -->
<div class="row">
<div class="col">
    <div class="card" style="width: 20rem;">
        <img src="assets/contoh_umkm.jpg" class="card-img-top" alt="foto 1">
        <div class="card-body">
            <h5 class="card-title"><a href="C_home/produk">Produk</a></h5>
            <p class="card-text">Deskripsi.</p>
        </div>
        <div class="card-body">
            <a href="#" class="card-link"><img src="assets/whatsapp.png" alt="icon wa"></a>
      
        </div>
    </div>
</div>
    <!-- card 2 -->
<div class="col">
    <div class="card" style="width: 20rem;">
        <img src="assets/contoh_umkm.jpg" class="card-img-top" alt="foto 2">
        <div class="card-body">
            <h5 class="card-title"><a href="C_home/produk">Produk</a></h5>
            <p class="card-text">Deskripsi.</p>
        </div>
        <div class="card-body">
            <a href="#" class="card-link"><img src="assets/whatsapp.png" alt="icon wa"></a>

        </div>
    </div>
</div>
<!-- card 3 -->
<div class="col">
<div class="card" style="width: 20rem;">
  <img src="assets/contoh_umkm.jpg" class="card-img-top" alt="foto 3">
  <div class="card-body">
    <h5 class="card-title"><a href="C_home/produk">Produk</a></h5>
    <p class="card-text">Deskripsi.</p>
  </div>

  <div class="card-body">
    <a href="#" class="card-link"><img src="assets/whatsapp.png" alt="icon wa"></a>
  </div>
  </div>
</div>
</div>
<br>
<!-- Wisata -->
<h4><a href="" id="wisata">Wisata</a></h4>
<a href="C_home/wisata" class="material-symbols-outlined">arrow_forward</a>
<!-- card 1 -->
<div class="row">
<div class="col">
    <div class="card" style="width: 20rem;">
        <img src="assets/contoh_wisata.jpg" class="card-img-top" alt="foto 1">
        <div class="card-body">
            <h5 class="card-title">Wisata</h5>
            <p class="card-text">Deskripsi.</p>
        </div>
        <div class="card-body">
        </div>
    </div>
</div>
    <!-- card 2 -->
<div class="col">
    <div class="card" style="width: 20rem;">
        <img src="assets/contoh_wisata.jpg" class="card-img-top" alt="foto 2">
        <div class="card-body">
            <h5 class="card-title">Wisata</h5>
            <p class="card-text">Deskripsi.</p>
        </div>
        <div class="card-body">
        </div>
    </div>
</div>
<!-- card 3 -->
<div class="col">
<div class="card" style="width: 20rem;">
  <img src="assets/contoh_wisata.jpg" class="card-img-top" alt="foto 3">
  <div class="card-body">
    <h5 class="card-title">Wisata</h5>
    <p class="card-text">Deskripsi.</p>
  </div>

  <div class="card-body">
  </div>
  </div>
</div>
<br>
<!-- footer -->
<footer>
  <br>
<div class="card text-center">
  <div class="card-header">
  </div>
<div class="container px-4 text-center">
  <div class="row gx-5">
    <div class="col">
      <div class="col-profil p-3"><strong>Profil</strong>
        <p>Desa Ekasari - Kecamatan Melaya <br>
        Kabupaten Jembrana, Bali</p>
      </div>
    </div>
    <div class="col">
      <div class="col-kontak p-3"><strong>Kontak</strong>
        <p>Jl. A.A. Ngurah Kediri, No. 1 <br>
      Kode Pos 82252 <br>
    Desa Ekasari, Kecamatan Melaya <br>
  Jembrana, Bali</p>
      </div>
    </div>
  </div>
  </div>
  <div class="info-admin"><a href="C_home/login">Anda admin?</a></div>
  </div>
</div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </form>
</body>
</html>