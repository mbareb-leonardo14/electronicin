<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Electronic.in | <?= $title; ?></title>
   <!-- plugins:css -->
   <link rel="stylesheet" href="<?= base_url('assets/majestic/') ?>vendors/mdi/css/materialdesignicons.min.css">
   <link rel="stylesheet" href="<?= base_url('assets/majestic/') ?>vendors/base/vendor.bundle.base.css">
   <!-- endinject -->
   <!-- plugin css for this page -->
   <link rel="stylesheet"
      href="<?= base_url('assets/majestic/') ?>vendors/datatables.net-bs4/dataTables.bootstrap4.css">
   <!-- End plugin css for this page -->
   <!-- inject:css -->
   <link rel="stylesheet" href="<?= base_url('assets/majestic/') ?>css/style.css">
   <!-- endinject -->
   <link rel="shortcut icon" href="<?= base_url('assets/majestic/') ?>images/favicon.png" />
</head>

<body>

   <!-- partial:partials/_navbar.html -->
   <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
         <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
            <a class="navbar-brand brand-logo" href="index.html"><img
                  src="<?= base_url('assets/majestic/') ?>images/logo.svg" alt="logo" /></a>
            <a class="navbar-brand brand-logo-mini" href="index.html"><img
                  src="<?= base_url('assets/majestic/') ?>images/logo-mini.svg" alt="logo" /></a>
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
               <span class="mdi mdi-sort-variant"></span>
            </button>
         </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
         <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
               <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                  <span class="nav-profile-name">Louis Barnett</span>
               </a>
               <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                  <a class="dropdown-item" href="<?= base_url('login/logout'); ?>">
                     <i class="mdi mdi-logout text-primary"></i>
                     Logout
                  </a>
               </div>
            </li>
         </ul>
         <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
         </button>
      </div>
   </nav>
   <!-- partial -->
   <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
         <ul class="nav">
            <li class="nav-item">
               <a class="nav-link" href="<?= site_url('Adminpanel/statistik') ?>">
                  <i class="mdi mdi-home menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?= site_url('Adminpanel/kategori') ?>">
                  <i class="mdi mdi-view-headline menu-icon"></i>
                  <span class="menu-title">Kategori</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?= site_url('produk') ?>">
                  <i class="mdi mdi-chart-pie menu-icon"></i>
                  <span class="menu-title">Produk</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?= site_url('Adminpanel/transaksi') ?>">
                  <i class="mdi mdi-grid-large menu-icon"></i>
                  <span class="menu-title">Transaksi</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?= site_url('Adminpanel/metode_pembayaran') ?>">
                  <i class="mdi mdi-emoticon menu-icon"></i>
                  <span class="menu-title">Metode Pembayaran</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?= site_url('kurir') ?>">
                  <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                  <span class="menu-title">Kurir</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?= site_url('user') ?>">
                  <i class="mdi mdi-account  menu-icon"></i>
                  <span class="menu-title">Member</span>
               </a>
            </li>
         </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
         <div class="content-wrapper">
            <?= $contents ?>
         </div>
         <!-- content-wrapper ends -->
         <!-- partial:partials/_footer.html -->
         <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
               <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a
                     href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2021</span>
               <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a
                     href="https://www.bootstrapdash.com/" target="_blank"> Bootstrap dashboard </a> templates</span>
            </div>
         </footer>
         <!-- partial -->
      </div>
      <!-- main-panel ends -->
   </div>
   <!-- page-body-wrapper ends -->
   </div>
   <!-- container-scroller -->

   <!-- plugins:js -->
   <script src="<?= base_url('assets/majestic/') ?>vendors/base/vendor.bundle.base.js"></script>
   <!-- endinject -->
   <!-- Plugin js for this page-->
   <script src="<?= base_url('assets/majestic/') ?>vendors/chart.js/Chart.min.js"></script>
   <script src="<?= base_url('assets/majestic/') ?>vendors/datatables.net/jquery.dataTables.js"></script>
   <script src="<?= base_url('assets/majestic/') ?>vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
   <!-- End plugin js for this page-->
   <!-- inject:js -->
   <script src="<?= base_url('assets/majestic/') ?>js/off-canvas.js"></script>
   <script src="<?= base_url('assets/majestic/') ?>js/hoverable-collapse.js"></script>
   <script src="<?= base_url('assets/majestic/') ?>js/template.js"></script>
   <!-- endinject -->
   <!-- Custom js for this page-->
   <script src="<?= base_url('assets/majestic/') ?>js/dashboard.js"></script>
   <script src="<?= base_url('assets/majestic/') ?>js/data-table.js"></script>
   <script src="<?= base_url('assets/majestic/') ?>js/jquery.dataTables.js"></script>
   <script src="<?= base_url('assets/majestic/') ?>js/dataTables.bootstrap4.js"></script>
   <!-- End custom js for this page-->

   <script src="<?= base_url('assets/majestic/') ?>js/jquery.cookie.js" type="text/javascript"></script>
</body>

</html>