<header>
  <div class="navbar navbar-expand-lg bsnav bsnav-dark bsnav-sticky bsnav-sticky-slide pt-0">
    <div class="container">
      <a class="navbar-brand" href="index.php">resideo.</a>
      <button class="navbar-toggler toggler-spring order-1"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav navbar-mobile mr-0">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="property-listing.php">Properties</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Agents</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Themes</a></li>
          <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
        </ul>
      </div>
      <span class="navbar-text ml-auto">
        <a class="nav-link" href="#"><i class="far fa-2x fa-user-circle navbar__login" data-toggle="modal" data-target="#exampleModal"></i></a>
      </span>
    </div>
  </div>
</header>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-4">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="exampleModalLabel">Welcome back!</h5>
        <button type="button" class="close modal__close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#" method="POST">
          <p class="small mb-1 font-weight-bold">Email</p>
          <input type="email" class="form-control" placeholder="Enter your email address">
          <p class="small mb-1 pt-3 font-weight-bold">Password</p>
          <input type="password" class="form-control" placeholder="Enter your password">
          <button type="submit" class="btn btn-custom--dark w-100 mt-4">SIGN IN</button>
        </form>
        <a href="#" class="modal__forgot text-center">Forgot password</a>
        <span class="modal__create text-center">New to Resideo? <a href="#">Create an account</a></span>
      </div>
    </div>
  </div>
</div>