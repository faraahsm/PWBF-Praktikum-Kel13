@extends('layouts.main')

@section('container')
    <div class="container-fluid px-4 mb-5">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2 text-putih">Detail Bab</h1>
          </div>
    <h3></h3>
    <div class="card mb-4">
        <div class="card-body table-responsive">
            <table id="table_id" class="table text-putih">
                <thead>
                    <tr>
                        <th>Buku</th>
                        <th>Bab</th>
                        <th>Judul</th>
                        <th>Keterangan</th>
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
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
            </table>
        </div>
    </div>
  </div>

 
@endsection
