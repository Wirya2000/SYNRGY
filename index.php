<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/helvetica-neue-55" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <title>Car Rental</title>
</head>
<!-- <body>
  <nav class="navbar">
    <div class="container-navbar">
      <div class="navbar-logo">
        <img src="">
      </div>
      <div class="navbar-list">
        <ul></ul>
      </div>
    </div>
  </nav> -->
  <header class="header my-auto w-100 p-0">
    <!-- <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid mx-5">
        <span class="navbar-text">
          <div class="logo"></div>
        </span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
            <li class="nav-item py-auto">
              <a class="nav-link text-content" href="#">Our Service</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-content" href="#">Why Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-content" href="#">Testimonial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-content" href="#">FAQ</a>
            </li>
            <li class="nav-item">
              <button type="button" class="btn btn-green">Register</button>
            </li>
          </ul>
        </div>
      </div>
    </nav> -->
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
    <div class="container article-our-service-container mt-5 mb-5">
      <div class="row">
        <div class="col-md">
          <img src="https://i.ibb.co/QCqbh0Z/img-service.png" class="service-image">
        </div>
        <div class="col-md our-service-text-container">
          <p class="sub-title">Best Car Rental for any kind of trip in (Lokasimu)!</p>
          <p class="text-content-light">
            Sewa mobil di (Lokasimu) bersama Binar Car Rental jaminan harga lebih murah dibandingkan yang lain, kondisi mobil baru, serta kualitas pelayanan terbaik untuk perjalanan wisata, bisnis, wedding, meeting, dll.
          </p>
          <ul id="remove-bullet" style="position: relative;" class="m-0 p-0">
            <li class="our-service-li">
              <img src="https://i.ibb.co/wcNnMBh/Ellipse-22.png" class="icon-ellipse"> <img src="https://i.ibb.co/kMXHnpm/fi-check.png" class="icon-check"> <P class="our-service-list">Sewa Mobil Dengan Supir di Bali 12 Jam</p>
            </li>
            <li class="our-service-li">
              <img src="https://i.ibb.co/wcNnMBh/Ellipse-22.png" class="icon-ellipse"> <img src="https://i.ibb.co/kMXHnpm/fi-check.png" class="icon-check"> <P class="our-service-list">Sewa Mobil Lepas Kunci di Bali 24 Jam</p>
            </li>
            <li class="our-service-li">
              <img src="https://i.ibb.co/wcNnMBh/Ellipse-22.png" class="icon-ellipse"> <img src="https://i.ibb.co/kMXHnpm/fi-check.png" class="icon-check"> <P class="our-service-list">Sewa Mobil Jangka Panjang Bulanan</p>
            </li>
            <li class="our-service-li">
              <img src="https://i.ibb.co/wcNnMBh/Ellipse-22.png" class="icon-ellipse"> <img src="https://i.ibb.co/kMXHnpm/fi-check.png" class="icon-check"> <P class="our-service-list">Gratis Antar - Jemput Mobil di Bandara</p>
            </li>
            <li class="our-service-li">
              <img src="https://i.ibb.co/wcNnMBh/Ellipse-22.png" class="icon-ellipse"> <img src="https://i.ibb.co/kMXHnpm/fi-check.png" class="icon-check"> <P class="our-service-list">Layanan Airport Transfer / Drop In Out</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container why-us-container mt-5 mx-auto mb-0">
      <p class="sub-judul" style="margin-bottom: 16px;">
        Why Us?
      </p>
      <p class="text-content-light">
        Mengapa harus pilih Binar Car Rental?
      <div class="row justify-content-between mx-auto">
        <div class="col-md">
          <div class="card card-why-us-container">
            <div class="card-body">
              <img src="https://i.ibb.co/ZGyq0vS/icon-complete.png">
              <h5 class="card-title">Mobil Lengkap</h5>
              <p class="card-text">Tersedia banyak pilihan mobil, kondisi masih baru, bersih dan terawat</p>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card card-why-us-container">
            <div class="card-body">
              <img src="https://i.ibb.co/xGzd8vB/icon-price.png">
              <h5 class="card-title">Harga Murah</h5>
              <p class="card-text">Harga murah dan bersaing, bisa bandingkan harga kami dengan rental mobil lain</p>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card card-why-us-container">
            <div class="card-body">
              <img src="https://i.ibb.co/y4hLK23/icon-24hrs.png">
              <h5 class="card-title">Layanan 24 Jam</h5>
              <p class="card-text">Siap melayani kebutuhan Anda selama 24 jam nonstop. Kami juga tersedia di akhir minggu</p>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card card-why-us-container">
            <div class="card-body">
              <img src="https://i.ibb.co/n65kL50/icon-professional.png">
              <h5 class="card-title">Sopir Profesional</h5>
              <p class="card-text">Sopir yang profesional, berpengalaman, jujur, ramah dan selalu tepat waktu</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container testimonial-container mt-5">
      <p class="sub-judul" style="text-align: center;">
        Testimonial
      </p>
      <p class="text-content-light" style="text-align: center;">
        Berbagai review positif dari para pelanggan kami
      </p>
      <!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="card d-block" style="width: 619px; padding: 24px; background-color: #F1F3FF">
              <div class="card-body card-image-text">
                <img src="https://i.ibb.co/56zr0B1/img-photo.png" style="width: 80px;">
                <div class="testimonial-content">
                  <div class="bintang">
                    <img src="https://i.ibb.co/7Xc4fDD/Star.png"><img src="https://i.ibb.co/7Xc4fDD/Star.png"><img src="https://i.ibb.co/7Xc4fDD/Star.png"><img src="https://i.ibb.co/7Xc4fDD/Star.png"><img src="https://i.ibb.co/7Xc4fDD/Star.png">
                  </div>
                  <p class="card-text text-content-light" style="margin: 0;">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod”</p>
                  <p class="card-text text-content">John Dee 32, Bromo</p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card d-block" style="width: 619px; padding: 24px; background-color: #F1F3FF">
              <div class="card-body card-image-text">
                <img src="https://i.ibb.co/qBv81Gp/img-photo-1.png" style="width: 80px;">
                <div class="testimonial-content">
                  <div class="bintang">
                    <img src="https://i.ibb.co/7Xc4fDD/Star.png"><img src="https://i.ibb.co/7Xc4fDD/Star.png"><img src="https://i.ibb.co/7Xc4fDD/Star.png"><img src="https://i.ibb.co/7Xc4fDD/Star.png"><img src="https://i.ibb.co/7Xc4fDD/Star.png">
                  </div>
                  <p class="card-text text-content-light" style="margin: 0;">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod”</p>
                  <p class="card-text text-content">John Dee 32, Bromo</p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card d-block" style="width: 619px; padding: 24px; background-color: #F1F3FF">
              <div class="card-body card-image-text">
                <img src="https://i.ibb.co/56zr0B1/img-photo.png" style="width: 80px;">
                <div class="testimonial-content">
                  <div class="bintang">
                    <img src="https://i.ibb.co/7Xc4fDD/Star.png"><img src="https://i.ibb.co/7Xc4fDD/Star.png"><img src="https://i.ibb.co/7Xc4fDD/Star.png"><img src="https://i.ibb.co/7Xc4fDD/Star.png"><img src="https://i.ibb.co/7Xc4fDD/Star.png">
                  </div>
                  <p class="card-text text-content-light" style="margin: 0;">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod”</p>
                  <p class="card-text text-content">John Dee 32, Bromo</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> -->
      <div class="container text-center my-3">
        <div class="row my-auto justify-content-center">
          <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
              <div class="col-md-12">
                <div class="card d-block mx-auto" style="max-width: 619px; padding: 24px; background-color: #F1F3FF">
                  <div class="card-body card-image-text">
                    <div class="row">
                      <div class="col-md-3 m-auto">
                        <img src="https://i.ibb.co/56zr0B1/img-photo.png" style="width: 80px;">
                      </div>
                      <div class="col-md-9">
                        <div class="testimonial-content">
                          <div class="bintang">
                            <img src="https://i.ibb.co/7Xc4fDD/Star.png"><img src="https://i.ibb.co/7Xc4fDD/Star.png"><img src="https://i.ibb.co/7Xc4fDD/Star.png"><img src="https://i.ibb.co/7Xc4fDD/Star.png"><img src="https://i.ibb.co/7Xc4fDD/Star.png">
                          </div>
                          <p class="card-text text-content-light" style="margin: 0; text-align:start">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod”</p>
                          <p class="card-text text-content">John Dee 32, Bromo</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              <div class="carousel-item">
                <div class="col-md-12">
                  <div class="card d-block mx-auto" style="max-width: 619px; padding: 24px; background-color: #F1F3FF">
                    <div class="card-body card-image-text">
                      <div class="row">
                        <div class="col-md-3 m-auto">
                          <img src="https://i.ibb.co/56zr0B1/img-photo.png" style="width: 80px;">
                        </div>
                        <div class="col-md-9">
                          <div class="testimonial-content">
                            <div class="bintang">
                              <img src="https://i.ibb.co/7Xc4fDD/Star.png"><img src="https://i.ibb.co/7Xc4fDD/Star.png"><img src="https://i.ibb.co/7Xc4fDD/Star.png"><img src="https://i.ibb.co/7Xc4fDD/Star.png"><img src="https://i.ibb.co/7Xc4fDD/Star.png">
                            </div>
                            <p class="card-text text-content-light" style="margin: 0; text-align:start">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod”</p>
                            <p class="card-text text-content">John Dee 32, Bromo</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <div class="carousel-item">
              <div class="col-md-12">
                <div class="card d-block mx-auto" style="max-width: 619px; padding: 24px; background-color: #F1F3FF">
                  <div class="card-body card-image-text">
                    <div class="row">
                      <div class="col-md-3 m-auto">
                        <img src="https://i.ibb.co/56zr0B1/img-photo.png" style="width: 80px;">
                      </div>
                      <div class="col-md-9">
                        <div class="testimonial-content">
                          <div class="bintang">
                            <img src="https://i.ibb.co/7Xc4fDD/Star.png"><img src="https://i.ibb.co/7Xc4fDD/Star.png"><img src="https://i.ibb.co/7Xc4fDD/Star.png"><img src="https://i.ibb.co/7Xc4fDD/Star.png"><img src="https://i.ibb.co/7Xc4fDD/Star.png">
                          </div>
                          <p class="card-text text-content-light" style="margin: 0; text-align:start">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod”</p>
                          <p class="card-text text-content">John Dee 32, Bromo</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a class="" href="#recipeCarousel" role="button" data-bs-slide="prev" style="text-decoration: none;">
            <img src="https://i.ibb.co/RYt8QMt/Left-button.png">
          </a>
          <a class="" href="#recipeCarousel" role="button" data-bs-slide="next" style="text-decoration: none;">
            <img src="https://i.ibb.co/RQRD9KZ/Right-button.png">
            </a>
          </div>
        </div>		
      </div>
    </div>
    <div class="container banner-container p-5 mt-5">
      <div class="banner-content" style="text-align: center;">
        <p class="text-title" style="color: var(--neutral-01, #FFF); margin: 0px auto 16px auto">
          Sewa Mobil di (Lokasimu) Sekarang
        </p>
        <p class="text-content-light" style="color: var(--neutral-01, #FFF); max-width: 468px; margin: 0px auto 52px auto">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        </p>
        <button type="button" class="btn btn-green">Mulai Sewa Mobil</button>
      </div>
    </div>
    </div>
    <div class="container faq-container row mx-auto mb-0 mt-5" style="max-width:1168px">
      <div class="col-md">
        <p class="text-title" style="max-width: 368px;">
          Frequently Asked Question
        </p>
        <p class="text-content-light" style="width: 368;">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit
        </p>
      </div>
      <div class="accordion col-md" id="accordionExample" style="max-width:668px">
        <div class="accordion-item" style="margin-bottom: 16px;">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button collapsed text-content-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
              Apa saja syarat yang dibutuhkan?
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the</div>
          </div>
        </div>
        <div class="accordion-item" style="margin-bottom: 16px;">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed text-content-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Berapa hari minimal sewa mobil lepas kunci?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the</div>
          </div>
        </div>
        <div class="accordion-item" style="margin-bottom: 16px;">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed text-content-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Berapa hari sebelumnya sabaiknya booking sewa mobil?
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the</div>
          </div>
        </div>
        <div class="accordion-item" style="margin-bottom: 16px;">
          <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed text-content-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              Apakah Ada biaya antar-jemput?
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the</div>
          </div>
        </div>
        <div class="accordion-item" style="margin-bottom: 16px;">
          <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed text-content-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              Bagaimana jika terjadi kecelakaan
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the</div>
          </div>
        </div>
      </div>
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
  <script src="index.js"></script>
</body>
</html>