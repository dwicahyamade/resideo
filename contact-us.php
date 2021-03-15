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
  <link rel="stylesheet" href="css/pages/contact-us.css">

  <title>Resideo - Property Listing</title>
</head>

<body>
  <?php require_once 'header.php' ?>

  <main>
    <section class="header">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 header-left">
            <h1 class="header-left__title">Contact Us</h1>
            <p class="header-left__subtitle">
              Say hello. Tell us how we can guide you
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="gallery">
      <div class="row no-gutters gallery__wrapper">
        <div class="gallery__bg">
          <img src="img/contact-bg-2.jpg" alt="resideo" class="gallery__img">
        </div>
        <!-- <div class="gallery__text">
          <p class="gallery__title">Our Offices</p>
          <div class="row">
            <div class="col-lg-4">
              <p class="gallery__subtitle">Los Angeles</p>
              <p class="gallery__desc">
                90 Fifth Avenue, 3rd Floor <br>
                San Fransisco, CA 1980 <br>
                <span class="gallery__desc--small">
                  (123) 456-7890 <br>
                  office-la@resideo.com </span>
              </p>
            </div>
            <div class="col-lg-4">
              <p class="gallery__subtitle">New York</p>
              <p class="gallery__desc">
                90 Fifth Avenue, 3rd Floor <br>
                San Fransisco, CA 1980 <br>
                <span class="gallery__desc--small">
                  (123) 456-7890 <br>
                  office-la@resideo.com </span>
              </p>
            </div>
            <div class="col-lg-4">
              <p class="gallery__subtitle">San Fransisco</p>
              <p class="gallery__desc">
                90 Fifth Avenue, 3rd Floor <br>
                San Fransisco, CA 1980 <br>
                <span class="gallery__desc--small">
                  (123) 456-7890 <br>
                  office-la@resideo.com </span>
              </p>
            </div>
          </div>
        </div> -->
      </div>
    </section>

    <section class="address">
      <div class="container address__bg">
        <p class="address__title">Our Offices</p>
        <div class="row">
          <div class="col-md-4">
            <p class="address__subtitle">Los Angeles</p>
            <p class="address__desc">
              90 Fifth Avenue, 3rd Floor <br>
              San Fransisco, CA 1980 <br>
              <span class="address__desc--small">
                (123) 456-7890 <br>
                office-la@resideo.com </span>
            </p>
          </div>
          <div class="col-md-4">
            <p class="address__subtitle">New York</p>
            <p class="address__desc">
              90 Fifth Avenue, 3rd Floor <br>
              San Fransisco, CA 1980 <br>
              <span class="address__desc--small">
                (123) 456-7890 <br>
                office-la@resideo.com </span>
            </p>
          </div>
          <div class="col-md-4">
            <p class="address__subtitle">San Fransisco</p>
            <p class="address__desc">
              90 Fifth Avenue, 3rd Floor <br>
              San Fransisco, CA 1980 <br>
              <span class="address__desc--small">
                (123) 456-7890 <br>
                office-la@resideo.com </span>
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="form">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <p class="form__title">Send Us A Message</p>
            <form action="" method="POST">
              <div class="row">
                <div class="col-lg-6 pt-3">
                  <input type="text" name="name" class="form-control form__input" placeholder="Name">
                </div>
                <div class="col-lg-6 pt-3">
                  <input type="email" name="email" class="form-control form__input" placeholder="Email">
                </div>
                <div class="col-lg-6 pt-3 form__input">
                  <select class="selectpicker w-100 border" id="what" required data-style="btn-white form__input">
                    <option selected disabled value="">What is this regarding?</option>
                    <option>...</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="col-lg-6 pt-3">
                  <input type="tel" name="phone" class="form-control form__input" placeholder="Phone (optional)">
                </div>
                <div class="col-lg-12 pt-3">
                  <textarea class="w-100 form__textarea border" name="messages" id="messages" rows="6"></textarea>
                </div>
                <div class="col-lg-6 pt-3">
                  <button type="submit" class="btn btn-custom--dark">SEND MESSAGE</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-6">
            <div class="row pt-5">
              <p class="col-lg-6 form__title">Our Locations</p>
              <div class="col-lg-6">
                <select class="selectpicker" id="Buy" required data-style="btn-white">
                  <option selected value="">Los Angeles</option>
                  <option>...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="col-lg-12 pt-3">
                <iframe class="form__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.104066007386!2d115.23826581531131!3d-8.68165319376232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240f88bb37a69%3A0xdf8443f1fabfe305!2sPT.Timedoor%20Indonesia!5e0!3m2!1sen!2sid!4v1615433371463!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php require_once 'footer.php' ?>

  <!-- Select Picker -->
  <script src="js/bootstrap-select.js"></script>
  <!-- CUSTOM JS -->
</body>

</html>