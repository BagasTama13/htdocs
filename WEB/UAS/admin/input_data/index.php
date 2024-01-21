<!-- Header -->
<?php
include "../layout/header.php";
session_start(); 
 ?>

<!-- Body -->
<style>
        .body {
            margin: 0;
            padding: 0;
            min-height: 90vh;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
        }

        footer {
            background-color: #f0f0f0;
            padding: 10px;
            text-align: center;
        }
    </style>

    
<!-- Navbar End -->
<!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-2 bg-image" style="
        background-image: url('../../img/bg.jpg');
        background-size: cover;
        height: 300px;
        "></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin: -100px;
        height:300px;
        background-color:whitesmoke ;
        backdrop-filter: blur(30px);
        border-radius: 20px;
        ">



<div class="body">

<!-- Page Header Start -->
<div class="container-fluid page-header py-3 mb-5 wow fadeIn" data-wow-delay="0.1s">
   
</div>
    <h1 class="text-center">SELAMAT DATANG <?= $_SESSION ["username"] ?></h1>

    <p class="text-center">
      
    </p>
    <div class="container ">
        <form action="view/home.php" method="post">
            <div class="from-group text-center">
                <input type="submit" name="btn btn-primary mt-2" value="Masuk" id="">
            </div>
        </form>
    </div>
</div>

  </div>
</section>

<!-- Footer -->
<?php include "footer.php"?>


    <!-- Spinner End -->

    <!-- Page Header End -->

