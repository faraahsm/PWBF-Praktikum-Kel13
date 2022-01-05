@extends('layouts.main')

@section('container')
    <div class="container-fluid px-4 mb-5">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2 text-putih">Data Buku</h1>
          </div>
    <h3></h3>
    <div class="card mb-4">
        <div class="card-body table-responsive">
            <table id="table_id" class="table text-putih">
                <thead>
                    <tr>
                        <th>Buku</th>
                        <th>Keterangan</th>
                        <th>Gambar</th>
                        <th>Bab</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $buku)
                    <tr>
                        <td>{{ $buku->buku }}</td>
                        <td>{{ $buku->keterangan }}</td>
                        <td><img class="img-thumbnail" src="uploads/{{ $buku->gambar }}" style="width:300px;"></td>
                        <td>
                            <a href="/user-show-bab/<?=$buku->id ?>" class="btn btn-sm btn-primary">Detail</a>
                        </td>
                        {{-- <td>{{ $buku->bab[0] }}</td>
                        <td>{{ $buku->bab[0]->judul}}</td>
                        <td>{{ $buku->bab[0]->keterangan}}</td> --}}
                        {{-- <td>{{ $kemajuan->detailKemajuans[0]->detailKemajuanBabs->Buku->buku }}</td>
                        <td>{{ $kemajuan->detailKemajuans[0]->detailKemajuanBabs->bab }}</td>
                        <td>{{ $kemajuan->tanggal }}</td>
                        <td>{{ $kemajuan->status }}</td>
                        <td>{{ $kemajuan->detailKemajuans[0]->keterangan }}</td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </div>

  {{-- @if (Request::is('/user-show-bab/*'))
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
    @endif --}}
 
@endsection
