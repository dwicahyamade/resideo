<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <!-- Font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

  <!-- Swiper -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <!-- Custom css -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/fitodac/bsnav@master/dist/bsnav.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="css/layout.css">

  <title>Resideo - Home</title>
</head>

<body>
  <header>
    <div class="navbar navbar-expand-lg bsnav bsnav-transparent bsnav-sticky bsnav-sticky-slide">
      <div class="container">
        <a class="navbar-brand" href="#">resideo</a>
        <button class="navbar-toggler toggler-spring order-1"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse justify-content-md-center">
          <ul class="navbar-nav navbar-mobile mr-0">
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Properties</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Agents</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Themes</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
          </ul>
        </div>
        <span class="navbar-text ml-auto">
          <a class="nav-link" href="#"><i class="far fa-2x fa-user-circle"></i></a>
        </span>
      </div>
    </div>
  </header>

  <main>
    <section class="banner">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-12 col-lg-6 banner__text">
            <div class="swiper-container swiper-banner">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <h1 class="banner__title">
                    Colorful Little Apartement
                  </h1>
                  <div class="banner__subtitle mt-4">
                    1 BD | 1 BA | 500 SF
                  </div>
                  <div class="banner__prices mt-5">
                    $2,675
                  </div>
                  <div class="banner__detail">
                    VIEW DETAILS -----
                  </div>
                </div>
                <div class="swiper-slide">
                  <h1 class="banner__title">
                    Chic Apartement In Downtown
                  </h1>
                  <div class="banner__subtitle mt-4">
                    1 BD | 1 BA | 500 SF
                  </div>
                  <div class="banner__prices mt-5">
                    $96,000
                  </div>
                  <div class="banner__detail">
                    VIEW DETAILS -----
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="banner__title">
                    Cozy Two Bedroom Apartement
                  </div>
                  <div class="banner__subtitle mt-4">
                    1 BD | 1 BA | 500 SF
                  </div>
                  <div class="banner__prices mt-5">
                    $89,000
                  </div>
                  <div class="banner__detail">
                    VIEW DETAILS -----
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="slider-container">
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"><i class="fas fa-2x fa-arrow-right"></i></div>
            <div class="swiper-button-prev"><i class="fas fa-2x fa-arrow-left"></i></div>
          </div>
          <div class="col-6 banner__img">
            <div class="swiper-container swiper-banner">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="img/hero-prop-2.jpg" alt="Hero">
                </div>
                <div class="swiper-slide">
                  <img src="img/hero-prop-1.jpg" alt="Hero">
                </div>
                <div class="swiper-slide">
                  <img src="img/hero-prop-3.jpg" alt="Hero">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="featured">
      <div class="container">
        <div class="featured__title">
          Featured Properties
        </div>
        <div class="featured__subtitle pb-5">
          Browse our latest hot offers
        </div>
        <div class="row featured__container">
          <div class="col-lg-4 d-flex align-items-stretch">
            <a href="/" class="card text-white">
              <img src="img/prop-4-1-gallery.jpg" class="card-img" alt="Apartement">
              <div class="card-img-overlay">
                <div class="card-text-container">
                  <h5 class="card-title">Chic Apartement In Downtown</h5>
                  <p class="card-prices">$890,000</p>
                  <p class="card-text">2 BD | 2 BA | 920 SF</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 d-flex align-items-stretch">
            <a href="/" class="card text-white">
              <img src="img/prop-5-1-gallery.jpg" class="card-img" alt="Apartement">
              <div class="card-img-overlay">
                <div class="card-text-container">
                  <h5 class="card-title">Colorful Little Apartement</h5>
                  <p class="card-prices">$2,675</p>
                  <p class="card-text">1 BD | 2 BA | 500 SF</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 d-flex align-items-stretch">
            <a href="/" class="card text-white">
              <img src="img/prop-6-1-gallery.jpg" class="card-img" alt="Apartement">
              <div class="card-img-overlay">
                <div class="card-text-container">
                  <h5 class="card-title">Cozy Two Bedroom Apartement</h5>
                  <p class="card-prices">$960,000</p>
                  <p class="card-text">2 BD | 2 BA | 870 SF</p>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="row featured__container mt-4">
          <div class="col-lg-4 d-flex align-items-stretch">
            <a href="/" class="card text-white">
              <img src="img/prop-10-1-gallery.jpg" class="card-img" alt="Apartement">
              <div class="card-img-overlay">
                <div class="card-text-container">
                  <h5 class="card-title">Cozy Two Bedroom Apartement</h5>
                  <p class="card-prices">$960,000</p>
                  <p class="card-text">2 BD | 2 BA | 870 SF</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 d-flex align-items-stretch">
            <a href="/" class="card text-white">
              <img src="img/prop-11-1-gallery.jpg" class="card-img" alt="Apartement">
              <div class="card-img-overlay">
                <div class="card-text-container">
                  <h5 class="card-title">Cozy Two Bedroom Apartement</h5>
                  <p class="card-prices">$960,000</p>
                  <p class="card-text">2 BD | 2 BA | 870 SF</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 d-flex align-items-stretch">
            <a href="/" class="card text-white">
              <img src="img/prop-12-1-gallery.jpg" class="card-img" alt="Apartement">
              <div class="card-img-overlay">
                <div class="card-text-container">
                  <h5 class="card-title">Cozy Two Bedroom Apartement</h5>
                  <p class="card-prices">$960,000</p>
                  <p class="card-text">2 BD | 2 BA | 870 SF</p>
                </div>
              </div>
            </a>
          </div>
        </div>
        <p class="browse mt-5">BROWSE ALL -----</p>
      </div>
    </section>
    <section class="services">
      <img src="img/services-c-fig-2.jpg" class="services__bg" alt="resideo">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-4 services__text">
            <div class="services__title">
              Why Choose Us
            </div>
            <div class="services__subtitle">
              We offer perfecr real estate services
            </div>
            <div class="services__learn-more">
              LEARN MORE -----
            </div>
          </div>
          <div class="col-lg-7 services__card">
            <div class="row no-gutters">
              <div class="swiper-container swiper-services">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="card text-center">
                      <img src="img/service-icon-1-white.svg" class="card-img-top mx-auto" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Find your future home</h5>
                        <p class="card-text">We help you find a new home by offering a smart real estate experience</p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="card text-center">
                      <img src="img/service-icon-2-white.svg" class="card-img-top mx-auto" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Experience agents</h5>
                        <p class="card-text">Find an agent who knows your market best</p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="card text-center">
                      <img src="img/service-icon-3-white.svg" class="card-img-top mx-auto" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Buy or rent homes</h5>
                        <p class="card-text">Millions of houses and apartements in your favourite cities</p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="card text-center">
                      <img src="img/service-icon-4-white.svg" class="card-img-top mx-auto" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Nice Pictures</h5>
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam, consectetur!</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="slider-container">
              <div class="swiper-button-next"><i class="fas fa-2x fa-arrow-right"></i></div>
              <div class="swiper-button-prev"><i class="fas fa-2x fa-arrow-left"></i></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="agents">
      <div class="container">
        <div class="agents__title">
          Our Featured Agents
        </div>
        <div class="agents__subtitle pb-5">
          Meet the best real estate agents
        </div>
        <div class="row">
          <div class="col-lg-3">
            <div class="agents__wrapper">
              <img src="img/agent-1.jpg" alt="resideo" class="agents__image">
              <div class="agents__text text-center">
                <h5 class="agents__name">Scoot Goodwin</h5>
                <p class="agents__telp"><i class="fas fa-phone"></i> (123) 456-7890</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="agents__wrapper">
              <img src="img/agent-2.jpg" alt="resideo" class="agents__image">
              <div class="agents__text text-center">
                <h5 class="agents__name">Alayna Becker</h5>
                <p class="agents__telp"><i class="fas fa-phone"></i> (123) 456-7890</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="agents__wrapper">
              <img src="img/agent-3.jpg" alt="resideo" class="agents__image">
              <div class="agents__text text-center">
                <h5 class="agents__name">Melvin Blackwell</h5>
                <p class="agents__telp"><i class="fas fa-phone"></i> (123) 456-7890</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="agents__wrapper">
              <img src="img/agent-4.jpg" alt="resideo" class="agents__image">
              <div class="agents__text text-center">
                <h5 class="agents__name">Erika Tillman</h5>
                <p class="agents__telp"><i class="fas fa-phone"></i> (123) 456-7890</p>
              </div>
            </div>
          </div>
        </div>
        <p class="agents__all">SEE ALL AGENTS -----</p>
      </div>
    </section>
    <section class="search">
      <div class="search__text">
        <div class="search__title">
          Search Smarter, From Anywhere
        </div>
        <div class="search__desc">
          Power your search with our Resideo real estate platform, for timely listings and seamless experience.
        </div>
        <p class="search__now">SEARCH NOW -----</p>
      </div>
    </section>
    <section class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="footer__profile">
              <h5 class="footer__title">resideo.</h5>
              <p class="footer__desc">
                90 Fifth Avenue, 3rd Floor <br>
                San Fransisco, CA 1980 <br>
                (123) 456-7890 <br>
              </p>
              <div class="footer__social">
                <a href="/" class="fab fa-instagram mr-4"></a>
                <a href="/" class="fab fa-facebook-square mr-4"></a>
                <a href="/" class="fab fa-twitter mr-4"></a>
              </div>
              <div class="footer__terms">
                <p>Terms & Conditions and Privacy Policy</p>
              </div>
              <div class="footer__copyright">
                © Resideo. All Right Reserved. 2019
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <h6 class="footer__subtitle">Company</h6>
            <p class="footer__desc">
              About Us <br>
              Agents <br>
              Blog <br>
              Demos <br>
              Contact Us
            </p>
          </div>
          <div class="col-lg-3">
            <h6 class="footer__subtitle">Actions</h6>
            <p class="footer__desc">
              Buy Properties <br>
              Rents Properties <br>
              Sell Properties
            </p>
          </div>
          <div class="col-lg-3">
            <h6 class="footer__subtitle">Explore</h6>
            <p class="footer__desc">
              Homes for Rent <br>
              Apartements for Rent <br>
              Homes for Sale <br>
              Apartement for Sale <br>
              CRM
            </p>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer>
  </footer>


  <script src=" https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <!-- BSNAV -->
  <script src="https://cdn.jsdelivr.net/gh/fitodac/bsnav@master/dist/bsnav.min.js"></script>
  <div class="bsnav-mobile">
    <div class="bsnav-mobile-overlay"></div>
    <div class="navbar"></div>
  </div>

  <!-- Swiper -->
  <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>