<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="/css/style.css" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/helvetica-neue-55" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/feather-icons"></script>
  <title>Car Rental</title>
</head>
<body>
  <header class="header my-auto w-100 p-0">
    <nav class="navbar navbar-expand-lg">
  <div class="container-fluid mx-5">
    <span class="navbar-text">
      <div class="logo"></div>
    </span>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width: 50%;">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">BCR</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Our Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Why Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Testimoni</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">FAQ</a>
          </li>
          <li class="nav-item">
          <button type="button" class="btn btn-green">Register</button>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 title-container my-auto">
          <p class="text-title" style="max-width: 568px;">
            Sewa & Rental Mobil Terbaik di kawasan (Lokasimu)
          </p>
          <p class="app-description">
            Selamat datang di Binar Car Rental. Kami menyediakan mobil kualitas terbaik dengan harga terjangkau. Selalu siap melayani kebutuhanmu untuk sewa mobil selama 24 jam.
          </p>
          <button type="button" class="btn btn-green btn-sewa-mobil">Mulai Sewa Mobil</button>
        </div>
        <div class="col-md-6 car-image-container p-0 mb-0 me-0 mt-3">
          <img src="https://i.ibb.co/LkcKw8w/img-car.png" class="car-image" style="width: 100%;">
        </div>
      </div>
    </div>
  </header>

  <article>
    <div class="container" style="width: 73%; border-radius:10px; background-color:white;">
      <div class="row justify-content-between">
        <div class="col-md-3">
          <p class="card-text text-cari">Tipe Driver</p>
          <select name="tipe_driver" id="tipe_driver" style="width: 100%;">
            <option value="dengan_sopir">Dengan Sopir</option>
            <option value="tanpa_sopir">Tanpa Sopir (Lepas Kunci)</option>
          </select>
        </div>
        <div class="col-md-3">
          <p class="card-text text-cari">Tanggal</p>
          <input type="date" id="tanggal" name="tanggal" style="width: 100%;">
        </div>
        <div class="col-md-3">
          <p class="card-text text-cari">Waktu Jemput/Ambil</p>
          <select name="waktu" id="waktu" style="width: 100%;">
            <option value="08.00">08.00 WIB</option>
            <option value="08.00">09.00 WIB</option>
            <option value="08.00">10.00 WIB</option>
            <option value="08.00">11.00 WIB</option>
            <option value="08.00">12.00 WIB</option>
          </select>
        </div>
        <div class="col-md-3">
          <p class="card-text text-cari">Jumlah Penumpang (optional)</p>
          <input type="text" name="jumlah_penumpang" id="jumlah_penumpang" style="width: 100%;">
        </div>
        <div class="col-md-1">
          <button class="btn-green" id="btn_cari">Cari Mobil</button>
        </div>
      </div>
    </div>
    <div class="container" id="carContainerElement">
      <!-- <div class="card" style="width: 18rem;">
        <img src="images/car01.min.jpg" class="card-img-top" alt="">
        <div class="card-body">
          <p class="card-text">Nama/Tipe Mobil</p>
          <p class="card-text">Rp 430.000 / hari</p>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi consequatur ipsum excepturi voluptatum cumque ea alias dolorem sed.</p>
          <p class="card-text"><i data-feather="users"></i>4 orang</p>
          <p class="card-text"><i data-feather="settings"></i>Manual</p>
          <p class="card-text"><i data-feather="calendar"></i>Tahun 2020</p>
          <a href="#" class="btn btn-green">Pilih Mobil</a>
        </div>
      </div> -->
    </div>
  </article>

  <footer>
    <div class="container footer mt-5 mx-auto mb-0" style="margin: 150px auto 0px auto;">
      <div class="row justify-content-between mx-auto">
        <div class="col-md-3">
          <div class="footer-address">
            <p class="card-text text-content-light" >Jalan Suroyo No. 161 Mayangan Kota Probolonggo 672000</p>
            <p class="card-text text-content-light" >binarcarrental@gmail.com</p>
            <p class="card-text text-content-light" >081-233-334-808</p>
          </div>
        </div>
        <div class="col-md-1">
          <div class="footer-navigation">
            <p class="card-text text-content-light" >Our services</p>
            <p class="card-text text-content-light" >Why Us</p>
            <p class="card-text text-content-light" >Testimonial</p>
            <p class="card-text text-content-light" >FAQ</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="footer-sosmed">
            <p class="card-text text-content-light">Connect with us</p>
            <div class="bintang">
              <img class="connect-with-us" src="https://i.ibb.co/zSFrCS2/icon-facebook.png"><img  class="connect-with-us" src="https://i.ibb.co/2KkNRJB/icon-instagram.png"><img class="connect-with-us" src="https://i.ibb.co/5s2RJ9N/icon-twitter.png"><img class="connect-with-us" src="https://i.ibb.co/qJNpMXy/icon-mail.png"><img class="connect-with-us" src="https://i.ibb.co/dMSppG6/icon-twitch.png">
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="footer-copyright">
            <p class="card-text text-content-light" style="margin: 0;">Copyright Binar 2022</p>
            <div class="logo"></div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="/scripts/index.js"></script>
  <!-- <script src="/scripts/binar.js"></script> -->
  <script src="/scripts/app.js"></script>
  <script>
    // function cariMobil() {
    //   var tipe_driver = document.getElementById('tipe_driver');
    //   var tanggal = document.getElementById('tanggal');
    //   var waktu = document.getElementById('waktu');
    //   var jumlah_penumpang = document.getElementById('jumlah_penumpang');
    //   console.log(tipe_driver);
    //   const newCar = new Car(tipe_driver, )
    // }
  </script>
  <script>
    feather.replace();
  </script>
</body>
</html>