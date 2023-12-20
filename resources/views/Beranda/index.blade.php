<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Analisa Property</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Favicons
    ================================================== -->
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

  <!-- Stylesheet
    ================================================== -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
  <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
  <!-- Navigation
    ==========================================-->
  <nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
          data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span
            class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand page-scroll" href="#page-center">
          <img src="/img/logo/logo.ico" width="140">
        </a>
        <!-- <div class="phone"><span>Call Today</span>320-123-4321</div> -->
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#header" class="page-scroll">Beranda</a></li>
          <li><a href="#about" class="page-scroll">Tentang Kita</a></li>
          <li><a href="{{ route('layanan.index') }}" class="page-scroll">Layanan</a></li>
          <li><a href="{{ route('projek.index') }}" class="page-scroll">Project</a></li>
          <li><a href="{{ route('testimoni.index') }}" class="page-scroll">Testimoni</a></li>
          <li><a href="#contact" class="page-scroll">Kontak</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
  </nav>
  <!-- Header -->
  <header id="header">
    <div class="intro">
      <div class="overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 intro-text">
              <h1>Agency Marketing Property &
                Konsultan Property
              </h1>
              <p>Menyediakan solusi properti sesuai kebutuhan yang anda butuhkan. Kami siap menjadi mitra terpercaya
                dalam perjalanan properti anda.</p>
              <a href="{{ route('beranda.index') }}" class="btn btn-custom btn-lg page-scroll">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div id="video">
    <div class="container">
      <div class="row">
        <div class="col-lg-6"> <video width="200%" height="auto" controls>
            <source src="/video/rumah.mp4" type="video/mp4">
        </div>
      </div>
    </div>
    <!-- About Section -->
    <div id="about">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-6"> <img src="img/about.jpg" class="img-responsive" alt=""> </div>
          <div class="col-xs-12 col-md-6">
            <div class="about-text">
              <h2>Siapa Kita ?</h2>
              <p>Agent Property Analisa Properti adalah perusahaan konsultan properti yang berfokus pada penyediaan
                layanan analisis properti. Kami membantu klien kami untuk memahami pasar properti, menilai properti, dan
                membuat keputusan investasi properti yang tepat.<br>Kami didukung oleh tim profesional yang
                berpengalaman dan memiliki pengetahuan yang luas tentang pasar properti. Kami berkomitmen untuk
                memberikan layanan terbaik bagi klien kami, dan membantu mereka untuk mencapai tujuan investasi properti
                mereka.</p>
              <h3>Kenapa Memilih Kita ?</h3>
              <div class="list-style">
                <div class="col-lg-6 col-sm-6 col-xs-12">
                  <ul>
                    <li>Profesional</li>
                    <li>Asuransi Penuh</li>
                    <li>Pakar Kendali Biaya</li>
                    <li>Jaminan Kepuasan 100%</li>
                  </ul>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12">
                  <ul>
                    <li>Gratis Konsultasi</li>
                    <li>Kepuasan Pelanggan</li>
                    <li>Manajemen Projek</li>
                    <li>Harga Terjangkau</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Services Section -->
      <div id="services">
        <div class="container">
          <div class="section-title">
            <h2>Layanan</h2>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="service-media"> <img src="img/services/service-1.jpg" alt=" "> </div>
              <div class="service-desc">
                <h3>New Home Construction</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd
                  commodo nibh ante facilisis bibendum dolor feugiat at.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="service-media"> <img src="img/services/service-2.jpg" alt=" "> </div>
              <div class="service-desc">
                <h3>Home Additions</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd
                  commodo nibh ante facilisis bibendum dolor feugiat at. Lorem ipsum dolor sit amet, consectetur
                  adipiscing elit.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="service-media"> <img src="img/services/service-3.jpg" alt=" "> </div>
              <div class="service-desc">
                <h3>Bathroom Remodels</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd
                  commodo nibh ante facilisis bibendum dolor feugiat at.</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="service-media"> <img src="img/services/service-4.jpg" alt=" "> </div>
              <div class="service-desc">
                <h3>Kitchen Remodels</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd
                  commodo nibh ante facilisis bibendum dolor feugiat at.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="service-media"> <img src="img/services/service-5.jpg" alt=" "> </div>
              <div class="service-desc">
                <h3>Windows & Doors</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd
                  commodo nibh ante facilisis bibendum dolor feugiat at.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="service-media"> <img src="img/services/service-6.jpg" alt=" "> </div>
              <div class="service-desc">
                <h3>Decks & Porches</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd
                  commodo nibh ante facilisis bibendum dolor feugiat at.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Gallery Section -->
      <div id="portfolio">
        <div class="container">
          <div class="section-title">
            <h2>Project Kita</h2>
          </div>
          <div class="row">
            <div class="portfolio-items">
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="portfolio-item">
                  <div class="hover-bg"> <a href="img/portfolio/01-large.jpg" title="Project Title"
                      data-lightbox-gallery="gallery1">
                      <div class="hover-text">
                        <h4>Lorem Ipsum</h4>
                      </div>
                      <img src="img/portfolio/01-small.jpg" class="img-responsive" alt="Project Title">
                    </a> </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="portfolio-item">
                  <div class="hover-bg"> <a href="img/portfolio/02-large.jpg" title="Project Title"
                      data-lightbox-gallery="gallery1">
                      <div class="hover-text">
                        <h4>Adipiscing Elit</h4>
                      </div>
                      <img src="img/portfolio/02-small.jpg" class="img-responsive" alt="Project Title">
                    </a> </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="portfolio-item">
                  <div class="hover-bg"> <a href="img/portfolio/03-large.jpg" title="Project Title"
                      data-lightbox-gallery="gallery1">
                      <div class="hover-text">
                        <h4>Lorem Ipsum</h4>
                      </div>
                      <img src="img/portfolio/03-small.jpg" class="img-responsive" alt="Project Title">
                    </a> </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="portfolio-item">
                  <div class="hover-bg"> <a href="img/portfolio/04-large.jpg" title="Project Title"
                      data-lightbox-gallery="gallery1">
                      <div class="hover-text">
                        <h4>Lorem Ipsum</h4>
                      </div>
                      <img src="img/portfolio/04-small.jpg" class="img-responsive" alt="Project Title">
                    </a> </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="portfolio-item">
                  <div class="hover-bg"> <a href="img/portfolio/05-large.jpg" title="Project Title"
                      data-lightbox-gallery="gallery1">
                      <div class="hover-text">
                        <h4>Adipiscing Elit</h4>
                      </div>
                      <img src="img/portfolio/05-small.jpg" class="img-responsive" alt="Project Title">
                    </a> </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="portfolio-item">
                  <div class="hover-bg"> <a href="img/portfolio/06-large.jpg" title="Project Title"
                      data-lightbox-gallery="gallery1">
                      <div class="hover-text">
                        <h4>Dolor Sit</h4>
                      </div>
                      <img src="img/portfolio/06-small.jpg" class="img-responsive" alt="Project Title">
                    </a> </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="portfolio-item">
                  <div class="hover-bg"> <a href="img/portfolio/07-large.jpg" title="Project Title"
                      data-lightbox-gallery="gallery1">
                      <div class="hover-text">
                        <h4>Dolor Sit</h4>
                      </div>
                      <img src="img/portfolio/07-small.jpg" class="img-responsive" alt="Project Title">
                    </a> </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="portfolio-item">
                  <div class="hover-bg"> <a href="img/portfolio/08-large.jpg" title="Project Title"
                      data-lightbox-gallery="gallery1">
                      <div class="hover-text">
                        <h4>Lorem Ipsum</h4>
                      </div>
                      <img src="img/portfolio/08-small.jpg" class="img-responsive" alt="Project Title">
                    </a> </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="portfolio-item">
                  <div class="hover-bg"> <a href="img/portfolio/09-large.jpg" title="Project Title"
                      data-lightbox-gallery="gallery1">
                      <div class="hover-text">
                        <h4>Adipiscing Elit</h4>
                      </div>
                      <img src="img/portfolio/09-small.jpg" class="img-responsive" alt="Project Title">
                    </a> </div>
                </div>
              </div>
            </div>
          </div>
          <a href="{{ route('beranda.index') }}"
            class="btn btn-custom btn-lg page-scroll center-button">Selengkapnya</a>
        </div>
      </div>
      <!-- Testimoni -->
      
      <!-- Contact Section -->
      <div id="contact">
        <div class="container">
          <div class="col-md-8">
            <div class="row">
              <div class="section-title">
                <h2></h2>
                <p>Silakan isi formulir di bawah ini untuk mengirim email kepada kami dan kami akan menghubungi Anda
                  sesegera mungkin.</p>
              </div>
              <form name="sentMessage" id="contactForm" novalidate>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" id="name" class="form-control" placeholder="Nama" required="required">
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <textarea name="message" id="message" class="form-control" rows="4" placeholder="Pesan"
                    required></textarea>
                  <p class="help-block text-danger"></p>
                </div>
                <div id="success"></div>
                <button type="submit" class="btn btn-custom btn-lg">Kirim Pesan</button>
              </form>
            </div>
          </div>
          <div class="col-md-3 col-md-offset-1 contact-info">
            <div class="contact-item">
              <h4>Info Kontak</h4>
              <p><span>Alamat</span>Jl. Simaja Utara,<br>
                Kesambi, Kota Cirebon 45133</p>
            </div>
            <div class="contact-item">
              <p><span>Telepon</span> +62 818-0815-9127</p>
            </div>
            <div class="contact-item">
              <p><span>Email</span> analisaproperty@gmail.com</p>
            </div>
          </div>
          <div class="col-md-12">
            <div class="row">
              <div class="social">
                <ul>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer Section -->
      <div id="footer">
        <div class="container text-center">
          <p>&copy; 2017 INNOVA. Design by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
        </div>
      </div>
      <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
      <script type="text/javascript" src="js/bootstrap.js"></script>
      <script type="text/javascript" src="js/SmoothScroll.js"></script>
      <script type="text/javascript" src="js/nivo-lightbox.js"></script>
      <script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
      <script type="text/javascript" src="js/contact_me.js"></script>
      <script type="text/javascript" src="js/main.js"></script>
</body>

</html>