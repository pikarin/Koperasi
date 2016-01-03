@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <h4>Tambah Simpanan</h4>
          <hr>
    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Simpanan Form -->
        <form action="simpanan" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Nama Anggota -->
            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">Nama Anggota</label>

                <div class="col-sm-6">
                    <select class="form-control" name="nama">
                      @foreach($anggotas as $anggota)
                      <option value="{{$anggota->id}}">{{$anggota->nama}}</option>
                      @endforeach
                    </select>
                </div>
            </div>
            <!-- Simpanan Wajib -->
            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">Simpanan Wajib</label>

                <div class="col-sm-6">
                    <input type="text" name="simpanan_wajib" id="category-name" class="form-control">
                </div>
            </div>
            <!-- Simpanan Sukarela -->
            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">Simpanan Sukarela</label>

                <div class="col-sm-6">
                    <input type="text" name="simpanan_sukarela" id="category-name" class="form-control">
                </div>
            </div>

            <!-- Button Simpan -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Simpan
                    </button>
                </div>
            </div>
        </form>
    </div>
    <center><h2><strong>DATA SIMPANAN <?php echo date('Y/m/d').'<br>';?></strong></h2></center>
<hr>
          <a href="simpanan/export"><button type="button" class="btn btn-default"><i class="fa fa-circle-o-notch"></i> Export Excel</button></a>
          <a href="simpanan/create"><button type="button" class="btn btn-default"><i class="fa fa-circle-o-notch"></i> Export PDF</button></a>
          <br><br>
          <strong>Lihat Berdasarkan</strong><small> Bulan | Tahun</small>
          <a href="simpanan/create"><button type="button" class="btn btn-default"><i class="fa fa-circle-o-notch"></i> Cari</button></a>
          <br><br>
          @if (count($simpanans) > 0)
            <div class="panel panel-default">
                <div class="panel-heading">Halaman Simpanan</div>
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Anggota</th>
                          <th>Simpanan Wajib</th>
                          <th>Simpanan Sukarela</th>
                          <th>Tanggal Pembayaran</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($simpanans as $simpanan)
                        <tr>
                          <th>{{ $simpanan->anggotas->nama }}</th>
                          <td>Rp. {{ number_format($simpanan->simpanan_wajib) }}</td>
                          <td>Rp. {{ number_format($simpanan->simpanan_sukarela) }}</td>
                          <td>{{ $simpanan->tanggal_pembayaran}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
            @else
            <div class="alert alert-danger" role="alert"><strong>Mohon Maaf, </strong>Data Simpanan Tidak Tersedia !</div>
            @endif
        </div>
    </div>
</div>
@endsection
