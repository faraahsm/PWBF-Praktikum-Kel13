<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>TPQ BANYU URIP | Dashboard</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">



    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
  </head>
  <body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">TPQ BANYU URIP</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="{{url('/logout')}}">Logout</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
  @include('partials.sidebar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
      </div>
      <form method="POST" action="/ubah-santri/{{$data['id_santri']}}">
          @csrf
              <div class="row">
                  <div class="col-lg-6">
                      <div class="form-group">
                          <label for="name">Nama Santri</label>
                          <input type="text" class="form-control" id="name" name="nama_santri" value="{{$data['nama_santri']}}">
                      </div>
                      <div class="form-group">
                          <label for="tgl_lahir">Tgl Lahir</label>
                          <input type="date" class="form-control" id="tgl_lahir" name="tanggal_lhr" value="{{$data['tanggal_lhr']}}">
                      </div>
                      <div class="form-group">
                      <label for="gender">Gender</label>
                          <select class="form-control" id="gender" name="gender">
                          <option {{ ($data['gender'] === 'L') ? 'selected' : '' }}>L</option>
                          <option{{ ($data['gender'] === 'P') ? 'selected' : '' }}>P</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="kota_lahir">Kota Lahir</label>
                          <input type="text" class="form-control" id="kota_lahir" name="kota_lhr" value="{{$data['kota_lhr']}}">
                      </div>
                      <div class="form-group">
                          <label for="nama_ortu">Nama Ortu</label>
                          <input type="text" class="form-control" id="nama_ortu" aria-describedby="emailHelp" name="nama_ortu" value="{{$data['nama_ortu']}}">
                      </div>
                  </div>

                  <div class="col-lg-6">
                      <div class="form-group">
                          <label for="alamat_ortu">Alamat Ortu</label>
                          <input type="text" class="form-control" id="alamat_ortu" name="alamat_ortu" value="{{$data['alamat_ortu']}}">
                      </div>
                      <div class="form-group">
                          <label for="no_hp">No HP</label>
                          <input type="text" class="form-control" id="hp" name="hp" value="{{$data['hp']}}">
                      </div>

                      <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" id="email" name="email" value="{{$data['email']}}">
                      </div>

                      <div class="form-group">
                          <label for="tgl_masuk">Tgl Masuk</label>
                          <input type="date" class="form-control" id="tgl_masuk" name="tanggal_masuk" value="{{$data['tanggal_masuk']}}">
                      </div>

                      <div class="form-group">
                          <label for="status_aktif">Status AKtif</label>
                          <input type="text" class="form-control" id="status_aktif" name="aktif" value="{{$data['aktif']}}">
                      </div>

                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                    <button type="submit" class="btn mt-2 btn-primary ml-3 btn-sm">Submit</button>
                    </div>
                  </div>

              </div>
          </form>
    </div>
    </main>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="/js/dashboard.js"></script>
  </body>
</html>
