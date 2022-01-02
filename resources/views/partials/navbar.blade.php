<!-- Fixed navbar -->
<div class="navbar navbar-inverse">
  <div class="container">



      <div class="navbar-header">
          <!-- Button for smallest screens -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          <a class="navbar-brand" href="{{ url('/')}}">
              <img src="assets/images/logo2.png" class="img-logo" widht="250" height="100" alt="TPQ Banyu Urip"></a>
      </div>

      <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
              <li class="nav-item">
                  <a class="nav-link text-putih {{ ($title === "Beranda") ? 'active' : '' }}" href="{{ url('/')}}">Beranda</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-putih {{ ($title === "Tentang") ? 'active' : '' }}" href="{{ url('/tentang')}}">Tentang</a>
              </li>
              @auth
              <li class="dropdown">
                <a href="{{ url('/')}}" class="dropdown-toggle" data-toggle="dropdown">Hello, {{ __(Auth::user()->nama_santri) }}<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link text-putih {{ ($title === "Dashboard-santri") ? 'active' : '' }}" href="{{ url('/user-dashboard')}}">Dashboard</a></li>
                    <li><a class="nav-link text-putih {{ ($title === "Detail-Pengurus") ? 'active' : '' }}" href="{{ url('/detail-pengurus')}}">Detail Pengurus</a></li>
                    <li>
                        <a href="/logout">Logout</a>
                    </li>
                </ul>
            </li>
              @else
              <li class="nav-item">
                <a class="nav-link text-putih {{ ($title === "Login") ? 'active' : '' }}" href="{{route('login')}}">Login</a>
              </li>
              @endauth
              

          </ul>
      </div>
      <!--/.nav-collapse -->

  </div>
</div>
<!-- /.navbar -->
