<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

  <!-- Fontawesome css -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

  <!-- UNIVERSAL CSS -->
  <link rel="stylesheet" href="css/layout.css">

  <!--  THIS PAGE ONLY CSS -->
  <link rel="stylesheet" href="css/pages/property-listing.css">

  <title>Resideo - Property Listing</title>
</head>

<body>
  <?php require_once 'pages/property-header.php' ?>

  <main>
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6">
          <div class="left-content">
            <div class="row search">
              <div class="col-3">
                <select class="selectpicker" id="Buy" required data-style="btn-white">
                  <option selected disabled value="">Buy</option>
                  <option>...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="col-7 px-0">
                <div class="form-group search__form">
                  <input type="text" class="form-control" placeholder="Search by City, Neighbothood, or Adress">
                  <span class="fa fa-search search__icon"></span>
                </div>
              </div>
              <div class="col-2">
                <div class="dropdown text-right">
                  <button class="btn btn-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-sliders-h"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">...</a>
                    <a class="dropdown-item" href="#">...</a>
                    <a class="dropdown-item" href="#">...</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row results">
              <div class="col-7">
                <span class="results__result">1,684 Results</span>
              </div>
              <div class="col-3 px-0">
                <select class="selectpicker" id="sort" required data-style="btn-white">
                  <option selected disabled value="">Default Sort</option>
                  <option>...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="col-2">
                <div class="dropdown text-right">
                  <button class="btn btn-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-map"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">...</a>
                    <a class="dropdown-item" href="#">...</a>
                    <a class="dropdown-item" href="#">...</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row properties">
              <div class="col-lg-6 d-flex align-items-stretch pb-3 pb-lg-3">
                <a href="#" class="card properties__card text-white">
                  <img src="img/prop-4-1-gallery.jpg" class="card-img properties__img" alt="Apartement">
                  <div class="card-img-overlay properties__img-overlay">
                    <div class="card-text-container properties__text-container">
                      <h3 class="properties__title">Chic Apartement In Downtown</h3>
                      <p class="properties__prices">$890,000</p>
                      <p class="properties__text">2 BD | 2 BA | 920 SF</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-6 d-flex align-items-stretch pb-3 pb-lg-3">
                <a href="#" class="card properties__card text-white">
                  <img src="img/prop-5-1-gallery.jpg" class="card-img properties__img" alt="Apartement">
                  <div class="card-img-overlay properties__img-overlay">
                    <div class="card-text-container properties__text-container">
                      <h3 class="properties__title">Colorful Little Apartement</h3>
                      <p class="properties__prices">$2,675</p>
                      <p class="properties__text">1 BD | 2 BA | 500 SF</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-6 d-flex align-items-stretch pb-3 pb-lg-3">
                <a href="#" class="card properties__card text-white">
                  <img src="img/prop-6-1-gallery.jpg" class="card-img properties__img" alt="Apartement">
                  <div class="card-img-overlay properties__img-overlay">
                    <div class="card-text-container properties__text-container">
                      <h3 class="properties__title">Cozy Two Bedroom Apartement</h3>
                      <p class="properties__prices">$960,000</p>
                      <p class="properties__text">2 BD | 2 BA | 870 SF</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-6 d-flex align-items-stretch pb-3 pb-lg-3">
                <a href="#" class="card properties__card text-white">
                  <img src="img/prop-10-1-gallery.jpg" class="card-img properties__img" alt="Apartement">
                  <div class="card-img-overlay properties__img-overlay">
                    <div class="card-text-container properties__text-container">
                      <h3 class="properties__title">Cozy Two Bedroom Apartement</h3>
                      <p class="properties__prices">$960,000</p>
                      <p class="properties__text">2 BD | 2 BA | 870 SF</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-6 d-flex align-items-stretch pb-3 pb-lg-3">
                <a href="#" class="card properties__card text-white">
                  <img src="img/prop-11-1-gallery.jpg" class="card-img properties__img" alt="Apartement">
                  <div class="card-img-overlay properties__img-overlay">
                    <div class="card-text-container properties__text-container">
                      <h3 class="properties__title">Cozy Two Bedroom Apartement</h3>
                      <p class="properties__prices">$960,000</p>
                      <p class="properties__text">2 BD | 2 BA | 870 SF</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-6 d-flex align-items-stretch pb-3 pb-lg-3">
                <a href="#" class="card properties__card text-white">
                  <img src="img/prop-12-1-gallery.jpg" class="card-img properties__img" alt="Apartement">
                  <div class="card-img-overlay properties__img-overlay">
                    <div class="card-text-container properties__text-container">
                      <h3 class="properties__title">Cozy Two Bedroom Apartement</h3>
                      <p class="properties__prices">$960,000</p>
                      <p class="properties__text">2 BD | 2 BA | 870 SF</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <span class="pagination">
              <ul class="pagination__link">
                <li class="pagination__items"><a href="#">1</a></li>
                <li class="pagination__items"><a href="#">2</a></li>
                <li class="pagination__items"><a href="#">3</a></li>
                <li class="pagination__items"><a href="#">NEXT ></a></li>
              </ul>
          </div>
        </div>
        <div class="col-12 col-lg-6 right-content">
          <iframe class="right-content__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.104066007386!2d115.23826581531131!3d-8.68165319376232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240f88bb37a69%3A0xdf8443f1fabfe305!2sPT.Timedoor%20Indonesia!5e0!3m2!1sen!2sid!4v1615433371463!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </main>

  <?php require_once 'pages/property-footer.php' ?>

  <!-- Select Picker -->
  <script src="js/bootstrap-select.js"></script>
  <!-- CUSTOM JS -->
  <script src="js/pages/property-listing.js"></script>
</body>

</html>