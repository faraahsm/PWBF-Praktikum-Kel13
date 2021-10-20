<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/')}}"><img src="img/logo.png" alt="logo"/></a>
      </div>
      <div class="navbar-collapse collapse ">
        <ul class="nav navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="{{ url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="{{ url('/about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Register") ? 'active' : '' }}" href="{{ url('/register')}}">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Login") ? 'active' : '' }}" href="{{ url('/login')}}">Login</a>
          </li>
        </ul>
      </div>
    </div>
</nav>