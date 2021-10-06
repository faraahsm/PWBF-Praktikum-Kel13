<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #bc8f8f;">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/')}}">TPQ Banyu Urip</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
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