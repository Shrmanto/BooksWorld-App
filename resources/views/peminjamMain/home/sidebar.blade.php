<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #227C9D;">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-icon">
    <img src="{{asset('assets/img/logo.png')}}" width="70%" alt="">
    </div>
    <div class="sidebar-brand-text" style="margin-right: 1rem;">BooksWorld</div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  
  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('home') }}">
    <i class="fa-solid fa-gauge" style="color: #ffffff;"></i>
      <span>Dashboard</span></a>
  </li>

  <hr class="sidebar-divider my-0">
      
      
  <li class="nav-item">
    <a class="nav-link" href="{{route('Listbuku')}}">
      <i class="fa-sharp fa-solid fa-list" style="color: #fafafa;"></i>
      <span>List Buku</span></a>
    </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('keranjang')}}">
    <i class="fa-sharp fa-solid fa-basket-shopping" style="color: #ffffff;"></i>
      <span>Keranjang</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('peminjamanUser')}}">
      <i class="fa-solid fa-receipt" style="color: #ffffff;"></i>
    <span>Peminjaman</span></a>
  </li>
    
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  
  
</ul>