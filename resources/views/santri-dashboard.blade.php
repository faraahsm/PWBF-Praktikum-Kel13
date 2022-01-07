@extends('layouts.main')

@section('container')
<div class="testi">
    <div class="container-fluid px-4 mb-5">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2 text-putih">Data Kemajuan</h1>
          </div>
    <h3></h3>
    <div class="card mb-4">
        <div class="card-body table-responsive">
            <table id="table_id" class="table text-putih">
                <thead>
                    <tr>
                        <th>Nama Santri</th>
                        <th>Nama guru</th>
                        <th>Buku</th>
                        <th>Bab</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $kemajuan)
                    <tr>
                        <td>{{ $kemajuan->kemajuanSantris->nama_santri }}</td>
                        <td>{{ $kemajuan->kemajuanGurus->nama_guru }}</td>
                        <td>{{ $kemajuan->detailKemajuans[0]->detailKemajuanBabs->Buku->buku }}</td>
                        <td>{{ $kemajuan->detailKemajuans[0]->detailKemajuanBabs->bab }}</td>
                        <td>{{ $kemajuan->tanggal }}</td>
                        <td>{{ $kemajuan->status }}</td>
                        <td>{{ $kemajuan->detailKemajuans[0]->keterangan }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
</div>
@endsection
