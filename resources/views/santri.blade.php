@extends('layouts.main')


@section('container')
<div class="container-fluid px-4">
    <h1 style="color:white" class="mt-4">Data Santri</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('/')}}">Beranda</a></li>
        <li class="breadcrumb-item active">Santri</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            <table id="datatablesSimple" class="table table-striped">
                <thead>
                    <tr>
                        <th>id_santri</th>
                        <th>Nama Santri</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir </th>
                        <th>Kota Lahir</th>
                        <th>Nama Ortu</th>
                        <th>Alamat Ortu</th>
                        <th>Nomor Telepon</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Tanggal Masuk</th>
                        <th>Aktif</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_santri as $santri)
                    <tr>
                        <td>{{ $santri->id_santri}}</td>
                        <td>{{ $santri->nama_santri}}</td>
                        <td>{{ $santri->gender}}</td>
                        <td>{{ $santri->tanggal_lhr }}</td>
                        <td>{{ $santri->kota_lhr }}</td>
                        <td>{{ $santri->nama_ortu }}</td>
                        <td>{{ $santri->alamat_ortu}}</td>
                        <td>{{ $santri->hp}}</td>
                        <td>{{ $santri->email }}</td>
                        <td>{{ $santri->password}}</td>
                        <td>{{ $santri->tanggal_masuk }}</td>
                        <td>{{ $santri->aktif }}</td>
                        <form action="{{ url('/delete-santri-',$santri->id)" method="POST">
                            @method('delete')
                            @csrf
                            <td><div class="d-grid"><button class="btn btn-danger btn-block" type="submit">Delete</button></div></td>     
                        </form>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->

@endsection
