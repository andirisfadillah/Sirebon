<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
                <img src="assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand"
                    height="20" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                @if( auth()->user()->level =="admin" )
                <li class="nav-item">
                    <a href="{{ route('home') }}">
                      <i class="fas fa-home"></i>
                      <p>Beranda</p>
                      <span class="badge badge-success">4</span>
                    </a>
                  </li>
                <li class="nav-item">
                    <a href="{{ route('rekening.index') }}">
                      <i class="fas fa-wallet"></i>
                      <p>Rekening Pembayaran</p>
                      <span class="badge badge-success">4</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('kategori-retribusi.index') }}">
                      <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                      <p>Kategori Retribusi</p>
                      <span class="badge badge-success">4</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('wajib-retribusi.index') }}">
                      <i class="fa fa-user-times" aria-hidden="true"></i>
                      <p>Wajib Retribusi</p>
                      <span class="badge badge-success">4</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('kapal.index') }}">
                      <i class="fas fa-ship"></i>
                      <p>Kapal Wajib Retribusi</p>
                      <span class="badge badge-success">4</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('pembayaran.index') }}">
                      <i class="fa fa-address-card" aria-hidden="true"></i>
                      <p>Pembayaran Retribusi</p>
                      <span class="badge badge-success">4</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('laporan.index') }}">
                      <i class="fas fa-star"></i>
                      <p>Laporan</p>
                      <span class="badge badge-success">4</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('logout') }}">
                      <i class="fas fa-desktop"></i>
                      <p>Logout</p>
                      <span class="badge badge-success">4</span>
                    </a>
                  </li>
                @endif

                {{-- batas admin --}}

                @if( auth()->user()->level =="wajib" )
                <li class="nav-item">
                    <a href="widgets.html">
                      <i class="fas fa-desktop"></i>
                      <p>Profil</p>
                      <span class="badge badge-success">4</span>
                    </a>
                  </li>
                <li class="nav-item">
                    <a href="widgets.html">
                      <i class="fas fa-desktop"></i>
                      <p>Kategori Retribusi</p>
                      <span class="badge badge-success">4</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="widgets.html">
                      <i class="fas fa-desktop"></i>
                      <p>Kapalku</p>
                      <span class="badge badge-success">4</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="widgets.html">
                      <i class="fas fa-desktop"></i>
                      <p>Kapal Wajib Retribusi</p>
                      <span class="badge badge-success">4</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="widgets.html">
                      <i class="fas fa-desktop"></i>
                      <p>Konfirmasi Pembayaran Retribusi</p>
                      <span class="badge badge-success">4</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="widgets.html">
                      <i class="fas fa-desktop"></i>
                      <p>Laporan</p>
                      <span class="badge badge-success">4</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="logout">
                      <i class="fas fa-desktop"></i>
                      <p>Logout</p>
                      <span class="badge badge-success">4</span>
                    </a>
                  </li>
                @endif
            </ul>
        </div>
    </div>
  </div>