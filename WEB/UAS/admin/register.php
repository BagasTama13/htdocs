<?php
include "proses.php";
include "../admin/layout/header.php";
?>


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
    <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <div>
        <h1 class="m-0 text-primary" style="padding-top: 10px;"><i class="fa fa-heartbeat "></i>CKD</h1>
        <p style="font-size: 10px;">Cronical Kidney Desease</P></div>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="../index.php" class="nav-item nav-link ">Beranda</a>
            <a href="../about.php" class="nav-item nav-link">Pengertian</a>
                <a href="./pedoman.php" class="nav-item nav-link">Pedoman</a>
                <a href="../Resep.php" class="nav-item nav-link">Resep masakan</a>
            <a href="../UAS/Admin/login.php" class="nav-item nav-link"><i class="bi bi-person-fill"></i>login</a>
        </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->
<!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-image: url('../img/header.jpg');
        background-size: cover;
        height: 200px;
        "></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background-color:whitesmoke ;
        backdrop-filter: blur(30px);
        ">



    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Register</h2>
          <form action="login.php" method="POST">
            <!-- Email input -->
            <div class="form-outline mb-4">
            <label class="form-label" for="username">username</label>
            
              <input type="username" name="username" class="form-control" />
              </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <?php $massage?>
            <label class="form-label" for="password">Password</label>
              <input type="password" name="password" class="form-control" />

            </div>

            <!-- Submit button -->
            <button type="submit" name="register" class="btn btn-primary btn-block mb-4">
              Login
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include "layout/footer.php" ?>

<!-- Section: Design Block -->