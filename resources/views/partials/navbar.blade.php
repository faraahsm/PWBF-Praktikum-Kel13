<!-- Fixed navbar -->
<div class="navbar navbar-inverse">
  <div class="container">

     
      
      <div class="navbar-header">
          <!-- Button for smallest screens -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          <a class="navbar-brand" href="{{ url('/')}}">
              <img src="assets/images/logo2.png" widht="250" height="100" alt="TPQ Banyu Urip"></a>
      </div>

      <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
              <li class="nav-item">
                  <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="{{ url('/')}}">Beranda</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="{{ url('/tentang')}}">Tentang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="{{ url('/pendaftaran')}}">Pendaftaran</a>
            </li>
              <li class="dropdown">
                  <a href="{{ url('/')}}" class="dropdown-toggle" data-toggle="dropdown">Pengguna<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                      <li><a class="nav-link {{ ($title === "Santri") ? 'active' : '' }}" href="{{ url('/penggunasantri')}}">Santri</a></li>
                      <li><a class="nav-link {{ ($title === "Pengurus") ? 'active' : '' }}" href="{{ url('/penggunapengurus')}}">Pengurus</a></li>
                      <li><a class="nav-link {{ ($title === "Buku") ? 'active' : '' }}" href="{{ url('/pengguna/buku')}}">Buku</a></li>
                      <li><a class="nav-link {{ ($title === "Bab") ? 'active' : '' }}" href="{{ url('/pengguna/bab')}}">Bab</a></li>
                  </ul>
              </li>
              
              @auth
              <li class="dropdown">
                <a href="{{ url('/')}}" class="dropdown-toggle" data-toggle="dropdown">Hello, {{ auth()->user()->name }}<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link {{ ($title === "Dashboard") ? 'active' : '' }}" href="{{ url('/dashboard')}}">Dashboard</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
                </ul>
            </li>
              @else    
              <li class="nav-item">
                <a class="nav-link {{ ($title === "Login") ? 'active' : '' }}" href="{{ url('/login')}}">Login</a>
              </li>
              @endauth

          </ul>
      </div>
      <!--/.nav-collapse -->
      
  </div>
</div>
<!-- /.navbar -->