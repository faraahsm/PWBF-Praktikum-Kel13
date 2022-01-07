@extends('layouts.main')

@section('container')
<div class="testi">
    <div class="container-fluid px-4 mb-5">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2 text-putih">Data Pengurus</h1>
          </div>
    <h3></h3>
    <div class="card mb-4">
        <div class="card-body table-responsive">
            <table id="table_id" class="table text-putih">
                <thead>
                    <tr>
                        <th>Nama Pengurus</th>
                        <th>Jenis Kelamin</th>
                        <th>No HP</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $pengurus)
                    <tr>
                        <td>{{ $pengurus->nama_pengurus}}</td>
                        <td>{{ $pengurus->gender}}</td>
                        <td>{{ $pengurus->hp }}</td>
                        <td>{{ $pengurus->email }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </div>
</div>
@endsection
