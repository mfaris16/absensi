<div class="container-fluid page-body-wrapper">
  <!-- partial:partials/_sidebar.html -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="nav-profile-image">
            <img src="{{url('assets/images/faces/kitri.png')}}" alt="profile">
            <span class="login-status online"></span>
            <!--change to offline or busy as needed-->
          </div>
          <div class="nav-profile-text d-flex flex-column">
            <span class="font-weight-bold mb-2">{{auth()->user()->name}}</span>
            <span class="text-secondary text-small">{{auth()->user()->roles}} {{auth()->user()->level}}</span>
          </div>
          <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('home')}}">
          <span class="menu-title">Dashboard</span>
          <i class="mdi mdi-home menu-icon"></i>
        </a>
      </li>
      @if(auth()->user()->roles == 'Sekretaris')
      <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
            <span class="menu-title">Rekap Absensi</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-medical-bag menu-icon"></i>
          </a>
          <div class="collapse" id="general-pages">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{url('sekretaris/rekap/absensi1')}}"> Ruangan 1 </a></li>
              <li class="nav-item"> <a class="nav-link" href="{{url('sekretaris/rekap/absensi2')}}"> Ruangan 2 </a></li>
              <li class="nav-item"> <a class="nav-link" href="{{url('sekretaris/rekap/absensi3')}}"> Ruangan 3 </a></li>
            </ul>
          </div>
        </li>
        @endif
        @if(auth()->user()->roles == 'Admin')
      <li class="nav-item">
        <a class="nav-link" href="{{url('admin/siswa')}}">
          <span class="menu-title">Data Siswa</span>
          <i class="mdi mdi-contacts menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('admin/sangga')}}">
          <span class="menu-title">Data Sangga</span>
          <i class="mdi mdi-format-list-bulleted menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('admin/jurusan')}}">
          <span class="menu-title">Data Jurusan</span>
          <i class="mdi mdi-chart-bar menu-icon"></i>
        </a>
      </li>
      @else
      <li class="nav-item">
        <a class="nav-link" href="{{url('siswa')}}">
          <span class="menu-title">Data Siswa</span>
          <i class="mdi mdi-contacts menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('sangga')}}">
          <span class="menu-title">Data Sangga</span>
          <i class="mdi mdi-format-list-bulleted menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('jurusan')}}">
          <span class="menu-title">Data Jurusan</span>
          <i class="mdi mdi-chart-bar menu-icon"></i>
        </a>
      </li>
      @endif

      @if(auth()->user()->roles == 'Koordinator' || auth()->user()->roles == 'Sekretaris')
      <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Absen Pramuka AKP</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  @if(auth()->user()->roles == 'Koordinator' && auth()->user()->level == '1')
                  <li class="nav-item"> <a class="nav-link" href="{{url('absensi/ruangan1')}}">Ruangan 1</a></li>
                  @elseif(auth()->user()->roles == 'Koordinator' && auth()->user()->level == '2')
                  <li class="nav-item"> <a class="nav-link" href="{{url('absensi/ruangan2')}}">Ruangan 2</a></li>
                  @elseif(auth()->user()->roles == 'Koordinator' && auth()->user()->level == '3')
                  <li class="nav-item"> <a class="nav-link" href="{{url('absensi/ruangan3')}}">Ruangan 3</a></li>
                  @elseif(auth()->user()->roles == 'Sekretaris')
                  <li class="nav-item"> <a class="nav-link" href="{{url('sekretaris/absensi/ruangan1')}}">Ruangan 1</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('sekretaris/absensi/ruangan2')}}">Ruangan 2</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('sekretaris/absensi/ruangan3')}}">Ruangan 3</a></li>
                  @endif
                </ul>
              </div>
            </li>
        @endif

      {{-- @if(auth()->user()->roles == 'Koordinator' && auth()->user()->level == '1')
      <li class="nav-item">
        <a class="nav-link" href="{{url('absensi/{roles}/{level}')}}">
          <span class="menu-title">Absen Pramuka AKP</span>
          <i class="mdi mdi-chart-bar menu-icon"></i>
        </a>
      </li>
      @elseif(auth()->user()->roles == 'Koordinator' && auth()->user()->level == '2')
      <li class="nav-item">
        <a class="nav-link" href="{{url('absensi/{roles}/{level}')}}">
          <span class="menu-title">Absen Pramuka AKP</span>
          <i class="mdi mdi-chart-bar menu-icon"></i>
        </a>
      </li>
      @elseif(auth()->user()->roles == 'Koordinator' && auth()->user()->level == '3')
      <li class="nav-item">
        <a class="nav-link" href="{{url('absensi/{roles}/{level}')}}">
          <span class="menu-title">Absen Pramuka AKP</span>
          <i class="mdi mdi-chart-bar menu-icon"></i>
        </a>
      </li>--}}
      {{-- @if(auth()->user()->roles == 'Admin')
      <li class="nav-item">
        <a class="nav-link" href="{{url('absensi')}}">
          <span class="menu-title">Absen Pramuka AKP</span>
          <i class="mdi mdi-chart-bar menu-icon"></i>
        </a>
      </li>
      @elseif(auth()->user()->roles == 'Sekretaris')
      <li class="nav-item">
        <a class="nav-link" href="{{url('absensi')}}">
          <span class="menu-title">Absen Pramuka AKP</span>
          <i class="mdi mdi-chart-bar menu-icon"></i>
        </a>
      </li>
      @endif --}}
    </ul>
  </nav>
  <!-- partial -->