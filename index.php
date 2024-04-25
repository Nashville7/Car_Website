<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Photo Gallery</title>
</head>
<body>

<!-- Navbar -->
<header class="header">
  <a href="" class="logo">🚗</a>
  <input class="menu-btn" type="checkbox" id="menu-btn" />
  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
  <ul class="menu">
  <li><a href="#about">About</a></li>
    <li><a href="#mustang">Mustang</a></li>
    <li><a href="#porsche">Porsche</a></li>
    <li><a href="#ferrari">Ferrari</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
</header>

<!-- end of navbar  -->


<!-- CAROUSEL BANNER -->
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/Mustang1.jpg" class="d-block w-100" alt="mustang">
      <div class="carousel-caption d-none d-md-block">
        <h5>Mustang</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/Mustang2.jpg" class="d-block w-100" alt="porsche">
      <div class="carousel-caption d-none d-md-block">
        <h5>Porsche</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/Mustang3.jpg" class="d-block w-100" alt="ferrari">
      <div class="carousel-caption d-none d-md-block">
        <h5>Ferrari</h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- End of Carousel Banner -->

<a id="about">
  <section class="my-4">
  <div class="py-4">
    <h2 class="text-center">About Us</h2>
  </div>
  <div class="container-fluid">
    <h3 class="text-center"></h3>
    <p class="text-center"><b> I love Mustang, Porsche and Ferrari cars</p>
  </div>
  </section>
  </a>

<a id="mustang">
<section class="my-4 aboutsection">
  <div class="py-4">
    <h2 class="text-center">Mustang</h2>
  </div>
<div class="container-fluid">
  <div class="row">
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/Mustangone.jpg" alt="" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/Mustangtwo.jpg" alt="" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/Mustangthree.jpg" alt="" class="img-fluid pb-3">
  </div>
  </div>
  </div>
</section>
</a>

<a id="porsche">
<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Porsche</h2>
  </div>
<div class="container-fluid">
  <div class="row">
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/Mustangone.jpg" alt="" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/Mustangtwo.jpg" alt="" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/Mustangthree.jpg" alt="" class="img-fluid pb-3">
  </div>
  </div>
  </div>
</section>
</a>


<a id="ferrari">
<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Ferrari</h2>
  </div>
<div class="container-fluid">
  <div class="row">
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/Mustangone.jpg" alt="" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/Mustangtwo.jpg" alt="" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/Mustangthree.jpg" alt="" class="img-fluid pb-3">
  </div>
  </div>
  </div>
</section>
</a>

<!-- Contact form -->
<a id="contact">
<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Contact Us</h2>
  </div>

  <div class="w-50 m-auto">
    <form action="form.php" method="post">
      <div class="form-group">
        <label>Name:</label>
        <input type="text" name="name" class="form-control">
      </div>
      <div class="form-group">
        <label>Email:</label>
        <input type="email" name="email" class="form-control">
      </div>
      <div class="form-group">
        <label>Number:</label>
        <input type="text" name="number" class="form-control">
      </div>
      <br>
      <button type="submit" class="btn btn-success">Submit</button>
      </form>
  </div>
  </section>
  </a>


<script src="https://ajax.googleapis.com/ajax/libs/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
</body>
</html>