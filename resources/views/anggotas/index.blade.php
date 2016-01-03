@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
          @if (count($anggotas) > 0)
            <div class="panel panel-default">
                <div class="panel-heading">Halaman Anggota</div>
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>No.Identitas</th>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>Telepon</th>
                          <th>Pilihan</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($anggotas as $anggota)
                        <tr>
                          <th>{{ $anggota->no_identitas }}</th>
                          <td>{{ $anggota->nama }}</td>
                          <td>{{ $anggota->alamat }}</td>
                          <td>{{ $anggota->telepon }}</td>
                          <td><a href="anggota/{{$anggota->id}}">LIHAT</a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
            @else
            <div class="alert alert-danger" role="alert"><strong>Mohon Maaf, </strong>Data Anggota Tidak Tersedia !</div>
            @endif
        </div>
    </div>
</div>
@endsection
