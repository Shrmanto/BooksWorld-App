<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #227C9D;">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">BooksWorld</div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  
  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="#">
    <i class="fa-solid fa-gauge" style="color: #ffffff;"></i>
      <span>Dashboard</span></a>
  </li>

  <hr class="sidebar-divider my-0">

  <!-- <p class="text-muted nav-heading mb-0 mx-auto mt-3">
    <span style="color: #ffffff;">Users</span>
  </p> -->
  <li class="nav-item">
    <a class="nav-link" href="{{route('admin')}}">
    <i class="fa-solid fa-user" style="color: #ffffff;"></i>
      <span>Admin</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">
    <i class="fa-solid fa-users" style="color: #ffffff;"></i>
      <span>Peminjam</span></a>
  </li>
  <hr class="sidebar-divider my-0">

  <!-- <p class="text-muted nav-heading mb-0 mx-auto mt-3">
    <span style="color: #ffffff;">Users</span>
  </p> -->
  <li class="nav-item">
    <a class="nav-link" href="{{route('kategori')}}">
      <i class="fa-solid fa-bookmark" style="color: #ffffff;"></i>
      <span>Kategori Buku</span></a>
    </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('buku')}}">
      <i class="fa-solid fa-book" style="color: #ffffff;"></i>
      <span>Buku</span></a>
  </li>
      
      <hr class="sidebar-divider my-0">
      
  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="fa-solid fa-receipt" style="color: #ffffff;"></i>
    <span>Transaksi</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">
    <i class="fa-sharp fa-solid fa-list" style="color: #fafafa;"></i>
    <span>List Buku</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  
  
</ul>