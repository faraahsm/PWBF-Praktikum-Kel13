<!-- Fixed navbar -->
<div class="navbar navbar-inverse">
  <div class="container">

     
      
      <div class="navbar-header">
          <!-- Button for smallest screens -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          <a class="navbar-brand" href="{{ url('/')}}">
              <img src="public/assets/images/logo1.png" alt="TPQ Banyu Urip"></a>
      </div>

      <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
              <li class="nav-item">
                  <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="{{ url('/')}}">Beranda</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="{{ url('/about')}}">Tentang</a>
              </li>
              <li class="dropdown">
                  <a href="{{ url('/')}}" class="dropdown-toggle" data-toggle="dropdown">Pengguna<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                      <li><a class="nav-link {{ ($title === "Santri") ? 'active' : '' }}" href="{{ url('/pengguna')}}">Santri</a></li>
                      <li><a class="nav-link {{ ($title === "Pengurus") ? 'active' : '' }}" href="{{ url('/pengguna/pengurus')}}">Pengurus</a></li>
                      <li><a class="nav-link {{ ($title === "Buku") ? 'active' : '' }}" href="{{ url('/pengguna/buku')}}">Buku</a></li>
                      <li><a class="nav-link {{ ($title === "Bab") ? 'active' : '' }}" href="{{ url('/pengguna/bab')}}">Bab</a></li>
                  </ul>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ ($title === "Akun") ? 'active' : '' }}" href="{{ url('/akun')}}">Akun</a>
              </li>

          </ul>
      </div>
      <!--/.nav-collapse -->
  </div>
</div>
<!-- /.navbar -->