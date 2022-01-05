<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>TPQ BANYU URIP | {{ $title }}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">


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
  @include('partials.guru-sidebar')


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container-fluid px-4">
    <h3 class="mt-4">Data Buku</h3>
     @if (session()->get( 'err'))
     <div class="alert alert-danger" role="alert">
        Buku ini berelasi dengan data kemajuan !!!
      </div>
      @endif
    <a href="/form-buku" class="btn btn-primary btn-sm mb-2">Tambah Data Buku</a>
    @if ($data->isNotEmpty())
        <a href="/form-bab" class="btn btn-primary btn-sm mb-2">Tambah Data Bab</a>
    @endif
    <div class="card mb-4">
        <div class="card-body table-responsive">
            <table id="table_id" class="table">
                <thead>
                    <tr>
                        <th>Buku</th>
                        <th>Keterangan</th>
                        <th>Gambar</th>
                        <th>Bab</th>
                        <th>Hapus</th>
                        <th>Ubah</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                    <tr>
                        <td>{{ $row->buku}}</td>
                        <td>{{ $row->keterangan}}</td>
                        <td><img class="img-thumbnail" src="uploads/{{ $row->gambar }}" style="width:300px;"></td>
                        <td>
                        <a href="/show-bab/<?=$row->id ?>" class="btn btn-sm btn-primary">Detail</a>
                        </td>
                        <td>
                        <a href="/hapus-buku/<?=$row->id ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                        <td>
                        <a href="/ubah-buku/<?=$row->id ?>" class="btn btn-sm btn-warning">Ubah</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @if (Request::is('show-bab/*'))
    <h3 class="mt-4">Data Bab</h3>
    <div class="card mb-4">
        <div class="card-body table-responsive">
            <table id="table_id" class="table">
                <thead>
                    <tr>
                        <th>Buku</th>
                        <th>Bab</th>
                        <th>Judul</th>
                        <th>Keterangan</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bab as $row)
                    <tr>
                        <td>{{ $row->Buku->buku }}</td>
                        <td>{{ $row->bab }}</td>
                        <td>{{ $row->judul }}</td>
                        <td>{{ $row->keterangan }}</td>
                        <td>
                        <a href="/hapus-bab/<?=$row->id ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif

  </div>
    </main>
  </div>
</div>


<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>


<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>


<script src="/js/dashboard.js"></script>

<script>
  $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>

  </body>
</html>
