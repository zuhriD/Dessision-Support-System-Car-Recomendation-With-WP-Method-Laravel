<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">DSS Showroom</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link {{ (request()->segment(1) == 'kriteria' || request()->segment(1) == 'alternatif' || request()->segment(1) == 'bobot' || request()->segment(1) == 'skala' || request()->segment(1) == 'penilaian') ? 'active' : '' }}"> 
              <i class="nav-icon fas fa-copy"></i>
              <p>
                View Data
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('kriteria.index') }}" class="nav-link {{ (request()->segment(1) == 'kriteria') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kriteria</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('alternatif.index') }}" class="nav-link {{ (request()->segment(1) == 'alternatif') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Alternatif</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('bobot.index') }}" class="nav-link {{ (request()->segment(1) == 'bobot') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bobot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('skala.index') }}" class="nav-link {{ (request()->segment(1) == 'skala') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Skala</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('penilaian.index') }}" class="nav-link {{ (request()->segment(1) == 'penilaian') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Matrix Keputusan</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('ranking.index') }}" class="nav-link {{ (request()->segment(1) == 'ranking') ? 'active' : '' }}" class="nav-link">
              <i class="nav-icon fas fa-poll"></i>
              <p>
                Result
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
