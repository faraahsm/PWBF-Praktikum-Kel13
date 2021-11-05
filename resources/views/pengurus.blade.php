@extends('layouts.main')


@section('container')
<div class="container-fluid px-4">
    <h1 style="color:white" class="mt-4">Data Pengurus</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('/')}}">Beranda</a></li>
        <li class="breadcrumb-item active">Pengurus</li>
    </ol>
    <div class="card mb-4">
      
        <div class="card-body">
            <table id="datatablesSimple" class="table table-striped">
                <thead>
                    <tr>
                        <th>id_pengurus</th>
                        <th>nama_pengurus</th>
                        <th>email</th>
                        <th>hp </th>
                        <th>gender</th>
                        <th>password</th>
                        <th>aktif </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_pengurus as $pengurus)
                    <tr>
                        <td>{{ $pengurus->id_pengurus}}</td>
                        <td>{{ $pengurus->nama_pengurus}}</td>
                        <td>{{ $pengurus->email}}</td>
                        <td>{{ $pengurus->hp }}</td>
                        <td>{{ $pengurus->gender }}</td>
                        <td>{{ $pengurus->password}}</td>
                        <td>{{ $pengurus->aktif}}</td>
                        <form action="{{ url('/delete-pengurus-',$pengurus->id)" method="POST">
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
