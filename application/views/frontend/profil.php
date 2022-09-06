<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Electronic.in</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url()?>assets/startbootstrap/css/styles.css" rel="stylesheet" />
    </head>
    <body>
         <!-- icon -->
        <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #25D366; border-radius: 50%; position: fixed; right:50px; top:150px; z-index: 99;"
        href="#!"
        role="button"
        ><i class="bi bi-whatsapp"></i
      ></a>
        <!-- Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Electronic.in</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo base_url()?>index.php/home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>index.php/smartphone">Smartphone</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>index.php/computer">Computer</a></li>
                         <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>index.php/television">Televison</a></li>
                          <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>index.php/refrigerator">Refrigerator</a></li>
                           <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>index.php/airconditioner">Air Conditioner</a></li>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-fill"></i>
                         </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="<?php echo base_url()?>index.php/login">Sign in/Sign up</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url()?>index.php/home/profil">Profile</a></li>
                         </ul>
                        </div>
                        <a href="<?php echo base_url()?>index.php/keranjang" class="nav-link text-dark">
                            <i class="bi bi-cart-fill"></i>
                        </a>
                        
                    </form>
                </div>
            </div>
        </nav>

<link href="<?php echo base_url()?>assets/startbootstrap/css/styles.css" rel="stylesheet" />

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h2>Profil</h2>
      <p class="lead"></p>
    </div>

    <div class="row g-5">
      <div class="card mx-auto col-8" >
        <table class="table table-borderless">
  <tbody>
    <tr>
      <td>Nama Lengkap</td>
      <td></td>
    </tr>
    <tr>
      <td>Email</td>
      <td></td>
    </tr>
    <tr>
      <td>Username</td>
      <td></td>
    </tr>
    <tr>
      <td>Password</td>
      <td></td>
    </tr>
  </tbody>
</table>
  
      </div>
    </div>
          <div class="d-flex justify-content-center col-8 mx-auto mt-4">
            <a href="<?php echo base_url()?>index.php/editprofil" class="mb-4 mx-2">
              <button class="btn btn-sm btn-primary" type="submit">Edit Account</button>
           </a>
            </a>
           <a href="" class="mb-4 mx-2">
             <button class="btn btn-sm btn-primary" type="submit">Delete Account</button>
           </a>
          </div>

         
        </form>
      </div>
    </div>
  </main>
        <!-- Footer-->
        <footer class="bg-light text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #3b5998; border-radius: 50%;"
        href="#!"
        role="button"
        ><i class="bi bi-facebook"></i
      ></a>

      <!-- wa -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #25D366; border-radius: 50%;"
        href="#!"
        role="button"
        ><i class="bi bi-whatsapp"></i
      ></a>


      <!-- Instagram -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #ac2bac; border-radius: 50%;"
        href="#!"
        role="button"
        ><i class="bi bi-instagram"></i
      ></a>

    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
