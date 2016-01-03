@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Beranda</div>

                <div class="panel-body">
                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <center>Total Anggota</center>
                      </div>
                      <div class="panel-body">
                        <h1><center><strong>{{$anggotas}}</strong></center></h1>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <center>Total Simpanan Wajib</center>
                      </div>
                      <div class="panel-body">
                        <h3><center><strong>Rp. {{number_format($simpanans_wajib)}}</strong></center></h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <center>Total Simpanan Sukarela</center>
                      </div>
                      <div class="panel-body">
                        <h3><center><strong>Rp. {{number_format($simpanans_sukarela)}}</strong></center></h3>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
