<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Dashboard") ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Santri") ? 'active' : '' }}" href="/santri">
              <span data-feather="file"></span>
              Santri
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Pengurus") ? 'active' : '' }}" href="/pengurus">
              <span data-feather="shopping-cart"></span>
              Pengurus
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Buku") ? 'active' : '' }}" href="/buku">
              <span data-feather="users"></span>
              Buku
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Kemajuan") ? 'active' : '' }}" href="/kemajuan">
              <span data-feather="users"></span>
              Kemajuan
            </a>
          </li>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ ($title === "guru") ? 'active' : '' }}" href="/guru">
          <span data-feather="file"></span>
          Guru
        </a>
      </li>
        </ul>
      </div>
    </nav>
