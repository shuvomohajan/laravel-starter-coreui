<header class="header header-sticky mb-4">
  <div class="container-fluid">
    <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
      <i class="fa-solid fa-bars"></i>
    </button>
    <a class="header-brand d-md-none" href="#">
      <img src="#" width="118" height="46" alt="Logo">
    </a>
    <ul class="header-nav d-none d-md-flex">
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa-solid fa-earth-asia"></i>
          Web
        </a>
      </li>
    </ul>

    <ul class="header-nav ms-auto">
      <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <div class="avatar avatar-md">
            <i class="fa-regular fa-user"></i>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-end pt-2">
          <a class="dropdown-item" href="#">
            Logout
          </a>
        </div>
      </li>
    </ul>
  </div>
  {{-- @include('layouts.includes.dashboard.breadcrumb') --}}
</header>
