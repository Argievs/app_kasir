<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }
        .sidebar {
            min-width: 250px;
            max-width: 250px;
            min-height: 100vh;
            background-color: #343a40;
            color: white;
            transition: all 0.3s;
        }
        .sidebar .nav-link {
            color: white;
            font-size: 16px;
            padding: 15px;
            display: flex;
            align-items: center;
        }
        .sidebar .nav-link i {
            margin-right: 10px;
        }
        .sidebar .nav-link:hover {
            background-color: #495057;
            border-radius: 5px;
        }
        .sidebar .nav-item.active .nav-link {
            background-color: #495057;
            border-radius: 5px;
        }
        .collapse-menu {
            padding-left: 30px;
        }
        .sidebar-heading {
            padding: 15px;
            font-size: 14px;
            color: #ced4da;
            text-transform: uppercase;
        }
    </style>
<div class="sidenav-header">
  <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
  <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
    <!-- <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo"> -->
    <span class="ms-1 font-weight-bold text-white">Viestore</span>
  </a>
</div>


<hr class="horizontal light mt-0 mb-2">

<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
  <ul class="navbar-nav">
    

    
      

        

        

<li class="nav-item">
<a class="nav-link text-white " href="/">
  
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="material-icons opacity-10">dashboard</i>
    </div>
  
  <span class="nav-link-text ms-1">Dashboard</span>
</a>
</li>
@if (auth()->user()->role == 'admin')
<li class="nav-item">
<a class="nav-link text-white " href="user">
  
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="material-icons opacity-10">table_view</i>
    </div>
  
  <span class="nav-link-text ms-1">User</span>
</a>
</li>
@endif

<li class="nav-item">
<a class="nav-link text-white " href="/pelanggan">
  
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="material-icons opacity-10">receipt_long</i>
    </div>
  
  <span class="nav-link-text ms-1">Pelanggan</span>
</a>

<li class="nav-item">
<a class="nav-link text-white " href="/produk">
  
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="material-icons opacity-10">receipt_long</i>
    </div>
  
  <span class="nav-link-text ms-1">Produk</span>
</a>
</li>

<li class="nav-item">
                <a class="nav-link collapsed" href="#transaksiSubmenu" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="transaksiSubmenu">
                    <i class="fas fa-cash-register"></i> Transaksi
                    
                </a>
                <ul class="collapse collapse-menu list-unstyled" id="transaksiSubmenu">
                    <li class="nav-item">
                        <a class="nav-link" href="/penjualan">Penjualan</a>
                    </li>
                </ul>
            </li>

  <li class="nav-item mt-3">
    <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
  </li>

<li class="nav-item">
<a class="nav-link text-white " href="./pages/profile.html">
  
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="material-icons opacity-10">person</i>
    </div>
  
  <span class="nav-link-text ms-1">Profile</span>
</a>
</li>


<li class="nav-item">
<a class="nav-link text-white " href="/logout">
  
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="material-icons opacity-10">logout</i>
    </div>
  
  <span class="nav-link-text ms-1">Logout</span>
</a>
</li>


     
    
  </ul>
</div>

<div class="sidenav-footer position-absolute w-100 bottom-0 ">
  <div class="mx-3">
    <a class="btn btn-outline-primary mt-4 w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard?ref=sidebarfree" type="button">Documentation</a>
    <a class="btn bg-gradient-primary w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
  </div>
  
</div>

</aside>