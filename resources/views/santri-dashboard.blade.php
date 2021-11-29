@extends('layouts.main')

@section('container')
    <div class="container-fluid px-4 mb-5">
    <h3 class="mt-4">Data Kemajuan</h3>
    <div class="card mb-4">
        <div class="card-body table-responsive">
            <table id="table_id" class="table">
                <thead>
                    <tr>
                        <th>Nama Santri</th>
                        <th>Nama Pengurus</th>
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
                        <td>{{ $kemajuan->kemajuanPenguruses->nama_pengurus }}</td>
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
@endsection
