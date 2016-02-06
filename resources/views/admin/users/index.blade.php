@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
          @if (count($kepalacabang) > 0)
            <div class="panel panel-default">
                <div class="panel-heading">Halaman Anggota</div>
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Nama</th>
                          <th>Status</th>
                          <th>Pilihan</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($kepalacabang as $kc)
                        <tr>
                          <th>{{ $kc->name }}</th>
                          <td>
                            @if ($kc->role_id == 1)
                              Administrator
                            @else
                              Kepala Cabang
                            @endif
                          </td>
                          <td><a href="anggota">LIHAT</a></td>
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
