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
        <!-- Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Electronic.in</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link " aria-current="page" href="<?php echo base_url()?>index.php/home">Home</a></li>
                        <li class="nav-item"><a class="nav-link " href="<?php echo base_url()?>index.php/smartphone">Smartphone</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>index.php/computer">Computer</a></li>
                         <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>index.php/television">Televison</a></li>
                          <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>index.php/refrigerator">Refrigerator</a></li>
                           <li class="nav-item"><a class="nav-link " href="<?php echo base_url()?>index.php/airconditioner">Air Conditioner</a></li>
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
        <div class="container mt-5">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb py-4 bg-light text-light px-4" >
              <li class="breadcrumb-item"><a href="#" style="text-decoration: none;">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Keranjang</li>
         </ol>
        </nav>
        </div>
        
        <!--awal keranjang-->
        <div class="container">
            <div class="row">
                <div class="col">
                    <table class="table">
                 <thead>
                <tr>
                   <th scope="col">No</th>
                   <th scope="col">Produk</th>
                   <th scope="col">Jumlah</th>
                   <th scope="col">Harga</th>
                   <th scope="col">Subtotal</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Photocard</td>
                <td>1</td>
                <td>Rp 50.000</td>
                <td>Rp 50.000</td>
                <td>
                    <a href="<?php echo base_url()?>index.php/pembayaran">
                        <button type="submit" class="btn btn btn-sm btn-primary">Checkout</button>
                    </a>
                    
                    <button type="button" class="btn btn btn-sm btn-danger">Delete</button>
                </td>
               </tr>
              </tbody>
            </table>
                </div>
            </div>
        </div>
         <!--akhir keranjang-->
        <!-- Footer-->
        <footer class="bg-light text-center text-white w-100" style="position: absolute; bottom:0;">
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
    ?? 2020 Copyright:
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
