<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Edit Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
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
  </style>
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
                  <li style="padding-right: 42px;"><a href="#">Home</a></li>
                  <li style="padding-right: 42px;"><a href="#produk">Produk</a></li>
                  <li style="padding-right: 42px;"><a href="#wisata">Wisata</a></li>
              </ul>
            </table>
          </div>
        </div>
      </div>
      <br>
      <div class="search">
        <form class="d-flex" id="search" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <br>
    <!-- produk -->
    <h3>Produk</h3>
    <div id="produk">
    <div class="row">
    <div class="col">
        <div class="card" style="width: 20rem;">
        <img src="<?php echo base_url() ?>assets/contoh_umkm.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Nama Produk</h5>
            <p class="card-text">Deskripsi</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Nama Pemilik</li>
            <li class="list-group-item">NIP Pemilik</li>
            <li class="list-group-item">No Wa</li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">Edit</a>
            <a href="#" class="card-link">Hapus</a>
        </div>
        </div>
        <br>
    </div>

    <!-- produk 2 -->
    <div class="col">
        <div class="card" style="width: 20rem;">
        <img src="<?php echo base_url() ?>assets/contoh_umkm.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Nama Produk</h5>
            <p class="card-text">Deskripsi</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Nama Pemilik</li>
            <li class="list-group-item">NIP Pemilik</li>
            <li class="list-group-item">No Wa</li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">Edit</a>
            <a href="#" class="card-link">Hapus</a>
        </div>
        </div>
        <br>
    </div>

    <!-- produk 3 -->
        <div class="col">
        <div class="card" style="width: 20rem;">
        <img src="<?php echo base_url() ?>assets/contoh_umkm.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Nama Produk</h5>
            <p class="card-text">Deskripsi</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Nama Pemilik</li>
            <li class="list-group-item">NIP Pemilik</li>
            <li class="list-group-item">No Wa</li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">Edit</a>
            <a href="#" class="card-link">Hapus</a>
        </div>
        </div>
        <br>
    </div>

    <!-- produk 4 -->
    <div class="col">
        <div class="card" style="width: 20rem;">
        <img src="<?php echo base_url() ?>assets/contoh_umkm.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Nama Produk</h5>
            <p class="card-text">Deskripsi</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Nama Pemilik</li>
            <li class="list-group-item">NIP Pemilik</li>
            <li class="list-group-item">No Wa</li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">Edit</a>
            <a href="#" class="card-link">Hapus</a>
        </div>
        </div>
        <br>
    </div>

    <!-- produk 5 -->
    <div class="col">
        <div class="card" style="width: 20rem;">
        <img src="<?php echo base_url() ?>assets/contoh_umkm.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Nama Produk</h5>
            <p class="card-text">Deskripsi</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Nama Pemilik</li>
            <li class="list-group-item">NIP Pemilik</li>
            <li class="list-group-item">No Wa</li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">Edit</a>
            <a href="#" class="card-link">Hapus</a>
        </div>
        </div>
        <br>
    </div>

    <!-- produk 6 -->
    <div class="col">
        <div class="card" style="width: 20rem;">
        <img src="<?php echo base_url() ?>assets/contoh_umkm.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Nama Produk</h5>
            <p class="card-text">Deskripsi</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Nama Pemilik</li>
            <li class="list-group-item">NIP Pemilik</li>
            <li class="list-group-item">No Wa</li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">Edit</a>
            <a href="#" class="card-link">Hapus</a>
        </div>
        </div>
        <br>
    </div>

    <!-- produk 7 -->
    <div class="col">
        <div class="card" style="width: 20rem;">
        <img src="<?php echo base_url() ?>assets/contoh_umkm.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Nama Produk</h5>
            <p class="card-text">Deskripsi</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Nama Pemilik</li>
            <li class="list-group-item">NIP Pemilik</li>
            <li class="list-group-item">No Wa</li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">Edit</a>
            <a href="#" class="card-link">Hapus</a>
        </div>
        </div>
        <br>
    </div>

    <!-- produk 8 -->
    <div class="col">
        <div class="card" style="width: 20rem;">
        <img src="<?php echo base_url() ?>assets/contoh_umkm.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Nama Produk</h5>
            <p class="card-text">Deskripsi</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Nama Pemilik</li>
            <li class="list-group-item">NIP Pemilik</li>
            <li class="list-group-item">No Wa</li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">Edit</a>
            <a href="#" class="card-link">Hapus</a>
        </div>
        </div>
        <br>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>