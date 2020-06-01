    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-hotel"></i>
        </div>
        <div class="sidebar-brand-text mx-3">One Ninght</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Thống Kê</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item {{ Request::is('admin/loaibaiviet/*') ? 'active' : null}} {{ Request::is('admin/baiviet/*') ? 'active' : null}} {{ Request::is('admin/slide/*') ? 'active' : null}}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-newspaper"></i>
          <span>Bài Viết</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="admin/loaibaiviet/danhsach">Loại Bài Viết</a>
            <a class="collapse-item" href="admin/baiviet/danhsach">Bài Viết</a>
            <a class="collapse-item" href="admin/slide/danhsach">Slide</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item {{ Request::is('admin/loaiphong/*') ? 'active' : null}} {{ Request::is('admin/phong/*') ? 'active' : null}} {{ Request::is('admin/tang/*') ? 'active' : null}}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-hotel"></i>
          <span>Phòng</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="admin/tang/danhsach">Tầng</a>
            <a class="collapse-item" href="admin/loaiphong/danhsach">Loại phòng</a>
            <a class="collapse-item" href="admin/phong/danhsach">Phòng</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Thông tin khách sạn
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item {{ Request::is('admin/thongtinkhachsan/thongtin') ? 'active' : null}}">
        <a class="nav-link" href="{{route('thongtin')}}">
          <i class="fas fa-fw fa-folder"></i>
          <span>Thông tin</span></a>
      </li>

      <li class="nav-item {{ Request::is('admin/thongtinkhachsan/gioithieu') ? 'active' : null}}">
        <a class="nav-link" href="{{route('gioithieu')}}">
          <i class="fas fa-fw fa-folder"></i>
          <span>Giới Thiệu</span></a>
      </li>
       <li class="nav-item {{ Request::is('admin/anhkhachsan/gioithieu') ? 'active' : null}}">
        <a class="nav-link" href="{{route('anhkhachsan')}}">
          <i class="fas fa-fw fa-folder"></i>
          <span>Ảnh khách sạn</span></a>
      </li>

      <!-- Nav Item - Charts -->

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>