@extends('layouts.main')


@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4">Data Santri</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('/')}}">Beranda</a></li>
        <li class="breadcrumb-item active">pengurus</li>
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
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</se
@endsection
