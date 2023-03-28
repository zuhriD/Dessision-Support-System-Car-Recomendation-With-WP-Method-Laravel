@extends('layouts.base')
@section('title')
    Home
@endsection
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Data Ranking</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active">Ranking</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
          <div class="card card-warning card-outline">
            <div class="card-header">
                <h3 class="card-title">Tabel Ranking</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Alternatif</th>
                  <th>Ranking</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($ranking as $data)
                    <tr>
                       <td>{{ $loop->iteration }}</td>
                          <td>{{ $data->nmalternatif }}</td>
                            <td>{{ $data->rangking }}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama Alternatif</th>
                    <th>Ranking</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
  </div><!--/. container-fluid -->

  <div class="container-fluid">
    <div class="row">
        <div class="col-12">
          <div class="card card-warning card-outline">
            <div class="card-header">
                <h3 class="card-title">Tabel Matrix Keputusan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example3" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Alternatif</th>
                  <th>Nama Kriteria</th>
                  <th>Jenis Kriteria</th>
                  <th>Value Bobot</th>
                  <th>Keterangan</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($matrixkeputusan as $data)
                    <tr>
                       <td>{{ $loop->iteration }}</td>
                          <td>{{ $data->nmalternatif }}</td>
                          <td>{{ $data->nm_kriteria }}</td>
                          <td>{{ $data->jenis }}</td>
                          <td>{{ $data->valuebobot }}</td>
                          <td>{{ $data->keterangan }}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>No</th>
                  <th>Nama Alternatif</th>
                  <th>Nama Kriteria</th>
                  <th>Jenis Kriteria</th>
                  <th>Value Bobot</th>
                  <th>Keterangan</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
  </div><!--/. container-fluid -->

  <div class="container-fluid">
    <div class="row">
        <div class="col-12">
          <div class="card card-warning card-outline">
            <div class="card-header">
                <h3 class="card-title">Tabel Normalisasi</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example4" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Alternatif</th>
                  <th>Nama Kriteria</th>
                  <th>Jenis Kriteria</th>
                  <th>Value Bobot</th>
                  <th>Keterangan</th>
                  <th>Normalisasi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($normalisasi as $data)
                    <tr>
                       <td>{{ $loop->iteration }}</td>
                          <td>{{ $data->nmalternatif }}</td>
                          <td>{{ $data->nm_kriteria }}</td>
                          <td>{{ $data->jenis }}</td>
                          <td>{{ $data->valuebobot }}</td>
                          <td>{{ $data->keterangan }}</td>
                            <td>{{ $data->normalisasi }}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>No</th>
                  <th>Nama Alternatif</th>
                  <th>Nama Kriteria</th>
                  <th>Jenis Kriteria</th>
                  <th>Value Bobot</th>
                  <th>Keterangan</th>
                    <th>Normalisasi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
  </div><!--/. container-fluid -->

       
@endsection