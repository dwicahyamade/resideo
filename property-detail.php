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
  <link rel="stylesheet" href="css/pages/property-detail.css">

  <title>Resideo - Property Listing</title>
</head>

<body>
  <?php require_once 'header.php' ?>

  <main>
    <section class="header">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 header-left">
            <h1 class="header-left__title">Beautiful House in Marina</h1>
            <p class="header-left__subtitle">
              542 29th Avenue, Marina District, San Fransisco, CA 94121
            </p>
          </div>
          <div class="col-lg-6 header-right text-right">
            <p class="header-right__prices pr-3">
              $5,198,000
            </p>
            <p class="header-right__desc pr-2">
              5 <span class="header-right__small">BD</span>
            </p>
            <p class="header-right__desc pr-2">
              4 <span class="header-right__small">BA</span>
            </p>
            <p class="header-right__desc pr-2">
              3,945 <span class="header-right__small">SF</span>
            </p>
            <button type="button" class="btn btn-custom"><i class="fas fa-star pr-2"></i>SAVE</button>
            <button type="button" class="btn btn-custom"><i class="fas fa-share-alt pr-2"></i>SHARE</button>
          </div>
        </div>
      </div>
    </section>
    <section class="gallery">
      <div class="row no-gutters">
        <div class="col-lg-6 pr-0 pr-lg-1">
          <img src="img/prop-11-1-big.jpg" alt="resideo" class="gallery__img">
        </div>
        <div class="col-lg-6">
          <div class="row no-gutters">
            <div class="col-lg-6 pr-0 pr-lg-1">
              <img src="img/prop-11-3-big.jpg" alt="resideo" class="gallery__img">
            </div>
            <div class="col-lg-6">
              <img src="img/prop-10-1-gallery.jpg" alt="" class="gallery__img">
            </div>
            <div class="col-lg-6 pr-0 pr-lg-1">
              <img src="img/prop-10-2-big.jpg" alt="" class="gallery__img">
            </div>
            <div class="col-lg-6">
              <img src="img/prop-10-3-big.jpg" alt="" class="gallery__img">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="main-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 main-content__left">
            <h2 class="main-content__title">Key Details</h2>
            <div class="row">
              <div class="col-6">
                <p class="main-content__detail-upper">Status</p>
                <p class="main-content__detail-bottom">Coming Soon</p>
                <hr>
              </div>
              <div class="col-6">
                <p class="main-content__detail-upper">Property Type</p>
                <p class="main-content__detail-bottom">Apartement</p>
                <hr>
              </div>
              <div class="col-6">
                <p class="main-content__detail-upper">Year Built</p>
                <p class="main-content__detail-bottom">1980</p>
                <hr>
              </div>
              <div class="col-6">
                <p class="main-content__detail-upper">Stories</p>
                <p class="main-content__detail-bottom">23</p>
                <hr>
              </div>
              <div class="col-6">
                <p class="main-content__detail-upper">Room Count</p>
                <p class="main-content__detail-bottom">6</p>
                <hr>
              </div>
              <div class="col-6">
                <p class="main-content__detail-upper">Parking Spaces</p>
                <p class="main-content__detail-bottom">2</p>
                <hr>
              </div>
            </div>
            <h2 class="main-content__title">Overview</h2>
            <p class="main-content__overview effect--shimmer">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam incidunt magnam deserunt, ex enim, eaque voluptas fugiat perferendis adipisci pariatur unde atque ipsam rerum obcaecati doloribus deleniti neque consectetur placeat voluptatum nesciunt. Mollitia placeat illo rem numquam sunt, explicabo sit id, eveniet vero commodi voluptatibus eaque? Libero, magni rerum pariatur voluptate architecto ducimus. Non earum minus sunt maxime vel in possimus eos maiores, esse autem numquam quam voluptas amet porro optio nemo illo dolores enim libero doloribus. Similique consequuntur beatae quae quidem itaque optio, delectus ipsam placeat facilis mollitia! Veniam non consequatur distinctio cum eum sed, corporis illo amet dolorum.</p>
            <span class="main-content__continue">Continue Reading <i class="fas fa-angle-down"></i></span>
            <h2 class="main-content__title pt-5">Amenities</h2>
            <div class="row">
              <div class="col-6 col-lg-4">
                <p class="main-content__amenities"><i class="fas fa-wifi pr-1 pt-3"></i>Internet</p>
              </div>
              <div class="col-6 col-lg-4">
                <p class="main-content__amenities"><i class="fas fa-car-alt pr-1 pt-3"></i>Garage</p>
              </div>
              <div class="col-6 col-lg-4">
                <p class="main-content__amenities"><i class="fas fa-sun pr-1 pt-3"></i>Air Conditioning</p>
              </div>
              <div class="col-6 col-lg-4">
                <p class="main-content__amenities"><i class="far fa-dot-circle pr-1 pt-3"></i></i>Dishwasher</p>
              </div>
              <div class="col-6 col-lg-4">
                <p class="main-content__amenities"><i class="fas fa-recycle pr-1 pt-3"></i>Disposal</p>
              </div>
              <div class="col-6 col-lg-4">
                <p class="main-content__amenities"><i class="far fa-square pr-1 pt-3"></i>Balcony</p>
              </div>
              <div class="col-6 col-lg-4">
                <p class="main-content__amenities"><i class="fas fa-cog pr-1 pt-3"></i>Gym</p>
              </div>
              <div class="col-6 col-lg-4">
                <p class="main-content__amenities"><i class="far fa-smile pr-1 pt-3"></i>Playroom</p>
              </div>
              <div class="col-6 col-lg-4">
                <p class="main-content__amenities"><i class="fas fa-glass-martini pr-1 pt-3"></i>Air Bar</p>
              </div>
            </div>
            <h2 class="main-content__title pt-5">Explore the Area</h2>
            <nav class="pt-3">
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="main-content__explore-tab nav-link active" id="nav-transportation-tab" data-toggle="tab" href="#nav-transportation" role="tab" aria-controls="nav-transportation" aria-selected="true">Transportation</a>
                <a class="nav-link main-content__explore-tab" id="nav-restaurants-tab" data-toggle="tab" href="#nav-restaurants" role="tab" aria-controls="nav-restaurants" aria-selected="false">Restaurants</a>
                <a class="nav-link main-content__explore-tab" id="nav-shooping-tab" data-toggle="tab" href="#nav-shooping" role="tab" aria-controls="nav-shooping" aria-selected="false">Shooping</a>
                <a class="nav-link main-content__explore-tab" id="nav-cafe-tab" data-toggle="tab" href="#nav-cafe" role="tab" aria-controls="nav-cafe" aria-selected="false">Cafes & Bars</a>
                <a class="nav-link main-content__explore-tab" id="nav-arts-tab" data-toggle="tab" href="#nav-arts" role="tab" aria-controls="nav-arts" aria-selected="false">Arts & Entertainment</a>
                <a class="nav-link main-content__explore-tab" id="nav-fitness-tab" data-toggle="tab" href="#nav-fitness" role="tab" aria-controls="nav-fitness" aria-selected="false">Fitness</a>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-transportation" role="tabpanel" aria-labelledby="nav-transportation-tab">
                <iframe class="main-content__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.104066007386!2d115.23826581531131!3d-8.68165319376232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240f88bb37a69%3A0xdf8443f1fabfe305!2sPT.Timedoor%20Indonesia!5e0!3m2!1sen!2sid!4v1615433371463!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
              <div class="tab-pane fade" id="nav-restaurants" role="tabpanel" aria-labelledby="nav-restaurants-tab">
                <iframe class="main-content__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.104066007386!2d115.23826581531131!3d-8.68165319376232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240f88bb37a69%3A0xdf8443f1fabfe305!2sPT.Timedoor%20Indonesia!5e0!3m2!1sen!2sid!4v1615433371463!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
              <div class="tab-pane fade" id="nav-shooping" role="tabpanel" aria-labelledby="nav-shooping-tab">
                <iframe class="main-content__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.104066007386!2d115.23826581531131!3d-8.68165319376232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240f88bb37a69%3A0xdf8443f1fabfe305!2sPT.Timedoor%20Indonesia!5e0!3m2!1sen!2sid!4v1615433371463!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
              <div class="tab-pane fade" id="nav-cafe" role="tabpanel" aria-labelledby="nav-cafe-tab">
                <iframe class="main-content__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.104066007386!2d115.23826581531131!3d-8.68165319376232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240f88bb37a69%3A0xdf8443f1fabfe305!2sPT.Timedoor%20Indonesia!5e0!3m2!1sen!2sid!4v1615433371463!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
              <div class="tab-pane fade" id="nav-arts" role="tabpanel" aria-labelledby="nav-arts-tab">
                <iframe class="main-content__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.104066007386!2d115.23826581531131!3d-8.68165319376232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240f88bb37a69%3A0xdf8443f1fabfe305!2sPT.Timedoor%20Indonesia!5e0!3m2!1sen!2sid!4v1615433371463!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
              <div class="tab-pane fade" id="nav-fitness" role="tabpanel" aria-labelledby="nav-fitness-tab">
                <iframe class="main-content__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.104066007386!2d115.23826581531131!3d-8.68165319376232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240f88bb37a69%3A0xdf8443f1fabfe305!2sPT.Timedoor%20Indonesia!5e0!3m2!1sen!2sid!4v1615433371463!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
            <!-- <ul class="main-content__ul">
              <li class="main-content__li">Transportation</li>
              <li class="main-content__li">Restaurants</li>
              <li class="main-content__li">Shopping</li>
              <li class="main-content__li">Cafes & Bars</li>
              <li class="main-content__li">Arts & Entertainment</li>
              <li class="main-content__li">Fitnes</li>
            </ul>
            <iframe class="main-content__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.104066007386!2d115.23826581531131!3d-8.68165319376232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240f88bb37a69%3A0xdf8443f1fabfe305!2sPT.Timedoor%20Indonesia!5e0!3m2!1sen!2sid!4v1615433371463!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
            <h2 class="main-content__title pt-5 pb-3">Payment Calculator</h2>
            <div class="row justify-content-between">
              <div class="col-lg-5 d-flex justify-content-center">
                <div class="main-content__circle">
                  <canvas id="myChart" class="main-content__chart" width="400" height="400"></canvas>
                </div>
              </div>
              <div class="col-lg-7 d-flex flex-column justify-content-around px-5 pt-5 pt-lg-0">
                <div class="row">
                  <div class="col-lg-10">
                    <p class="main-content__payment">Principal and Interest </p>
                  </div>
                  <div class="col-lg-2">
                    <p class="main-content__dollar">$23,565</p>
                  </div>
                  <hr class="w-100">
                  <div class="col-lg-10">
                    <p class="main-content__payment--second">Property Taxes </p>
                  </div>
                  <div class="col-lg-2">
                    <p class="main-content__dollar">$1,068</p>
                  </div>
                  <hr class="w-100">
                  <div class="col-lg-10">
                    <p class="main-content__payment--third">HOA Dues </p>
                  </div>
                  <div class="col-lg-2">
                    <p class="main-content__dollar">$2,036</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 pt-5">
                <p class="small mb-1 font-weight-bold">Term</p>
                <select class="selectpicker w-100" id="term" required data-style="btn-white">
                  <option selected disabled value="">30 Years Fixed</option>
                  <option>...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="col-lg-6 pt-5">
                <p class="small mb-1 font-weight-bold">Interest</p>
                <input type="text" class="form-control" placeholder="4.45%">
              </div>
              <div class="col-lg-6 pt-4">
                <p class="small mb-1 font-weight-bold">Home Prices</p>
                <input type="text" class="form-control" placeholder="$5,198.000">
              </div>
              <div class="col-lg-6 pt-4">
                <p class="small mb-1 font-weight-bold">Down Payment</p>
                <input type="text" class="form-control" placeholder="$5,198.000">
              </div>
            </div>
            <h2 class="main-content__title pt-5">School in Marina District</h2>
            <nav class="pt-3">
              <div class="nav nav-tabs main-content__tabs" id="nav-tab" role="tablist">
                <a class="main-content__school-type nav-link active" id="nav-elementary-tab" data-toggle="tab" href="#nav-elementary" role="tab" aria-controls="nav-elementary" aria-selected="true">Elementary</a>
                <a class="nav-link main-content__school-type" id="nav-middle-tab" data-toggle="tab" href="#nav-middle" role="tab" aria-controls="nav-middle" aria-selected="false">Middle</a>
                <a class="nav-link main-content__school-type" id="nav-high-tab" data-toggle="tab" href="#nav-high" role="tab" aria-controls="nav-high" aria-selected="false">High</a>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-elementary" role="tabpanel" aria-labelledby="nav-elementary-tab">
                <div class="row">
                  <div class="col-5 font-weight-bold pt-4">School</div>
                  <div class="col-2 font-weight-bold pt-4">Type</div>
                  <div class="col-2 font-weight-bold pt-4">Public</div>
                  <div class="col-3 font-weight-bold pt-4">Rating</div>
                  <hr class="w-100">
                  <div class="col-5">Harvest Collegiate High School</div>
                  <div class="col-2">Public</div>
                  <div class="col-2">9-11</div>
                  <div class="col-3">5/5 <i class="fas fa-star pl-4"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                  <hr class="w-100">
                  <div class="col-5">Harvest Collegiate High School</div>
                  <div class="col-2">Public</div>
                  <div class="col-2">9-11</div>
                  <div class="col-3">5/5 <i class="fas fa-star pl-4"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-middle" role="tabpanel" aria-labelledby="nav-middle-tab">
                <div class="row">
                  <div class="col-5 font-weight-bold pt-4">School</div>
                  <div class="col-2 font-weight-bold pt-4">Type</div>
                  <div class="col-2 font-weight-bold pt-4">Public</div>
                  <div class="col-3 font-weight-bold pt-4">Rating</div>
                  <hr class="w-100">
                  <div class="col-5">Harvest Collegiate High School</div>
                  <div class="col-2">Public</div>
                  <div class="col-2">9-11</div>
                  <div class="col-3">5/5 <i class="fas fa-star pl-4"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                  <hr class="w-100">
                  <div class="col-5">Harvest Collegiate High School</div>
                  <div class="col-2">Public</div>
                  <div class="col-2">9-11</div>
                  <div class="col-3">5/5 <i class="fas fa-star pl-4"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-high" role="tabpanel" aria-labelledby="nav-high-tab">
                <div class="row">
                  <div class="col-5 font-weight-bold pt-4">School</div>
                  <div class="col-2 font-weight-bold pt-4">Type</div>
                  <div class="col-2 font-weight-bold pt-4">Public</div>
                  <div class="col-3 font-weight-bold pt-4">Rating</div>
                  <hr class="w-100">
                  <div class="col-5">Harvest Collegiate High School</div>
                  <div class="col-2">Public</div>
                  <div class="col-2">9-11</div>
                  <div class="col-3">5/5 <i class="fas fa-star pl-4"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                  <hr class="w-100">
                  <div class="col-5">Harvest Collegiate High School</div>
                  <div class="col-2">Public</div>
                  <div class="col-2">9-11</div>
                  <div class="col-3">5/5 <i class="fas fa-star pl-4"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-lg-4 side-content pt-5 pt-lg-0">
            <p class="main-content__title">Listed By</p>
            <div class="card side-content__card">
              <div class="row no-gutters">
                <div class="col-3">
                  <img src="img/agent-4.jpg" alt="Agents" class="w-100">
                </div>
                <div class="col-9">
                  <div class="card-body side-content__body">
                    <h5 class="card-title side-content__title">Erika Tillman</h5>
                    <h5 class="card-title side-content__star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></h5>
                    <p class="card-text side-content__text">erika.tillman@resideo.com</p>
                    <p class="card-text side-content__text"><i class="fas fa-phone"></i> (123) 456-7890</p>
                  </div>
                </div>
              </div>
            </div>
            <a href="contact-us.php" class="btn btn-custom--dark"><i class="far fa-envelope pr-1"></i> CONTACT AGENT</a>
            <a href="contact-us.php" class="btn btn-primary btn-custom"><i class="far fa-calendar-check pr-1"></i> REQUEST TOUR</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php require_once 'footer.php' ?>

  <!-- Select Picker -->
  <script src="js/bootstrap-select.js"></script>
  <!-- Chartjs -->
  <script src="js/Chart.js"></script>
  <!-- Timedoor preset -->
  <script src="js/tmdrPreset.js"></script>
  <!-- CUSTOM JS -->
  <script src="js/pages/property-detail.js"></script>
</body>

</html>