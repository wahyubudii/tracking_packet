<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tracket Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index">Tracket</a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Testimonial</a></li>
          <li><a class="getstarted scrollto" href="#about">Cek Sekarang</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Cek paket kamu sekarang juga!</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Kami terhubung dengan semua ekspedisi yang ada di Indonesia</h2>
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="#about" class="btn-get-started scrollto">Cek Sekarang</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Partnership Section ======= -->
    <section id="clients" class="clients clients">
      <div class="container">

        <div class="row">

          @foreach($ekspedisis as $ekspedisi)
          <div class="col-lg-2 col-md-4 col-6">
            <img src="{{$ekspedisi->image}}" class="img-fluid" alt="" data-aos="zoom-in">
          </div>
          @endforeach

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Find Packet Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Masukkan Kode Paket</h2>
        </div>
        <div class="shadow p-3 bg-white rounded pt-5">
          <div class="d-flex justify-content-center">
            <div class="row mx-1">
              <div class="col">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Masukkan Nomor Resi" id="search-input">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <button class="btn btn-primary" type="button" id="search-button" onclick="searchPacket()">Lihat Paket</button>
              </div>
            </div>
          </div>

          <div class="result" id="result">

          </div>

          <div class="row mt-4">
            <div class="col" id="info">

            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Testimoni</h2>
          <p>Apa pendapat orang-orang tentang website ini</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            @foreach($testimonials as $testimonial)
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{$testimonial->image}}" class="testimonial-img" alt="">
                  <h3>{{$testimonial->name}}</h3>
                  <h4>{{$testimonial->job}}</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    {{strip_tags($testimonial->comment)}}
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
            @endforeach

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-lg-6 text-lg-left text-center">
            <div class="copyright">
              &copy; Copyright <strong>Tracker</strong>. All Rights Reserved
            </div>
            <div class="credits">
              Designed by <a href="https://github.com/wahyubudii" target="_blank">@wahyubudii</a>
            </div>
          </div>
          <div class="col-lg-6">
            <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
              <a href="#" class="scrollto">Home</a>
              <a href="#">Privacy Policy</a>
              <a href="#">Terms of Use</a>
            </nav>
          </div>
        </div>
      </div>
    </footer><!-- End Footer -->

    <a href="index" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script>
      function searchPacket() {
        var userValue = document.getElementById('search-input').value;
        const database = '{{$packets[0]["packet_code"]}}'
        const info = document.createElement('div')

        if (!userValue) {
          info.className = 'alert alert-danger';
          info.innerHTML = 'Nomor kode barang tidak boleh kosong!';
          return document.getElementById('info').appendChild(info)
        }


        if (userValue == database) {
          var html = '<div id="portfolio-details" class="portfolio-details"><div class="container"><div class="row gy-4"><div class="col-lg-8"><div class="portfolio-details-slider"><img src="{{$packets[0]["image"]}}" alt=""></div></div><div class="col-lg-4"><div class="portfolio-info"><h3>Informasi Paket</h3><ul><li><strong>Kode Barang</strong>: {{$packets[0]["packet_code"]}}</li><li><strong>Status Barang</strong>: {{$packets[0]["status"]}}</li><li><strong>Nama Barang</strong>: {{$packets[0]["packet_name"]}}</li><li><strong>Pengirim</strong>: {{$packets[0]["sender"]}}</li><li><strong>Penerima</strong>:{{$packets[0]["receiver"]}}</li><li><strong>Asal</strong>: {{$packets[0]["source"]}}</li><li><strong>Tujuan</strong>: {{$packets[0]["destination"]}}</li><li><strong>Deskripsi Barang</strong>: {{strip_tags($packets[0]["description"])}}</li></ul></div></div></div></div></div>';
          var wrapper = document.createElement('div')
          wrapper.innerHTML = html;
          document.getElementById('result').appendChild(wrapper)
          document.getElementById('search-input').value=''
        } else {
          info.className = 'alert alert-warning';
          info.innerHTML = 'Kode barang tidak ditemukan pada database, silahkan coba lagi!';
          document.getElementById('info').appendChild(info)
        }
      }
    </script>

</body>

</html>