@extends('layouts.app')

@section('content')
<div class="container spark-screen">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h5>Informasi <strong>{{$anggotas->nama}}</strong></h5>
        </div>
        <div class="panel-body">
          <h6>No. Identitas : {{$anggotas->no_identitas}}</h6>
          <h6>Nama : {{$anggotas->nama}}</h6>
          <h6>Tmpt/Tgl Lahir : {{$anggotas->tempat_lahir}} / {{$anggotas->tanggal_lahir}}</h6>
          <h6>Jenis Kelamin :
            @if ($anggotas->jenis_kelamin == 1)
              Laki-Laki
            @else
              Perempuan
            @endif
          </h6>
          <h6>Alamat : {{$anggotas->alamat}}</h6>
          <h6>Pekerjaan : {{$anggotas->pekerjaan}}</h6>
          <h6>Telepon : {{$anggotas->telepon}}</h6>
          <h6>Tanggal Pendaftaran : {{$anggotas->tanggal_daftar}}</h6>
          <h6>Total Simpanan Wajib : {{$simpananswajib}}</h6>
          <h6>Total Simpanan Sukarela : {{$simpananssukarela}}</h6>
          <h6>Total Pijaman : Rp. 20.000, -</h6>
          <br><br>
          <h4>Data Simpanan {{$anggotas->nama}}</h4>
          <hr>
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Tanggal Pembayaran</th>
                  <th>Simpanan Wajib</th>
                  <th>Simpanan Sukarela</th>
                  <th>Pinjaman</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($simpanans as $simpanan)
                <tr>
                  <td>{{$simpanan->tanggal_pembayaran}}</td>
                  <td>Rp. {{number_format($simpanan->simpanan_wajib)}}</td>
                  <td>Rp. {{number_format($simpanan->simpanan_sukarela)}}</td>
                  <td>Rp. 20.000,-</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <a href="/administrator/anggota"><button type="button" class="btn btn-default">Kembali</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
