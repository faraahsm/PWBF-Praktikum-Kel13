@extends('layouts.main')

@section('container')
    <div class="container-fluid px-4 mb-5">
    <h3 class="mt-4">Data Detail Pengurus</h3>
    <div class="card mb-4">
        <div class="card-body table-responsive">
            <table id="table_id" class="table">
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
@endsection
