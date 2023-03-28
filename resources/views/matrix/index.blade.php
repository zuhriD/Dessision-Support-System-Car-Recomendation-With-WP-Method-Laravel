@extends('layouts.base')
@section('title')
    Home
@endsection
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Data Penilaian</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active">Penilaian</li>
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
                <h3 class="card-title">Tabel Penilaian</h3>
               <div class="float-sm-right">
                <button class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                    <i class="fa fa-plus mr-2"></i>
                    Tambah Data</button>
                </button>
               </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Alternatif</th>
                  <th>Nama Kriteria</th>
                  <th>Bobot</th>
                  <th>Skala</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($penilaian as $data)
                    <tr>
                       <td>{{ $loop->iteration }}</td>
                          <td>{{ $data->alternatif->nmalternatif }}</td>
                            <td>{{ $data->bobot->kriteria->nm_kriteria }}</td>
                            <td>{{ $data->bobot->valuebobot }}</td>
                            <td>{{ $data->skala->keterangan }}</td>
                            <td>
                                <a href="{{ route('penilaian.edit', $data->id_nilai) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                <form action="{{ route('penilaian.destroy', $data->id_nilai) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama Alternatif</th>
                    <th>Nama Kriteria</th>
                    <th>Bobot</th>
                    <th>Skala</th>
                    <th>Aksi</th>
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

    <!-- Modal Input-->
  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Input penilaian</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('penilaian.store') }}" method="post">
                @csrf
                <div class="form-group row">
                    <label for="alternatif_id" class="col-sm-4 col-form-label">Nama Alternatif</label>
                    <div class="col-sm-8">
                        <select name="alternatif_id" id="alternatif_id" class="form-control">
                            <option value="">-- Pilih Alternatif --</option>
                            @foreach ($alternatif as $data)
                                <option value="{{ $data->idalternatif }}">{{ $data->nmalternatif }}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="bobot_id" class="col-sm-4 col-form-label">Nama Kriteria</label>
                        <div class="col-sm-8">
                            <select name="bobot_id" id="bobot_id" class="form-control">
                                <option value="">-- Pilih Kriteria --</option>
                                @foreach ($bobot as $data)
                                    <option value="{{ $data->id_bobot }}">{{ $data->kriteria->nm_kriteria }}</option>
                                @endforeach
                            </select>
                        </div>
                        </div>
                        <div class="form-group row">
                            <label for="skala_id" class="col-sm-4 col-form-label">Skala</label>
                            <div class="col-sm-8">
                                <select name="skala_id" id="skala_id" class="form-control">
                                    <option value="">-- Pilih Skala --</option>
                                    @foreach ($skala as $data)
                                        <option value="{{ $data->id_skala }}">{{ $data->keterangan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            </div> 
             
               
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <div class="form-group">
            <button type="submit" class="btn btn-primary float-sm-right">Simpan</button>
        </div>
    </form>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

      <!-- Modal Input-->
  <div class="modal fade" id="modal-edit">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Input Kriteria</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('kriteria.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nm_kriteria">Nama Kriteria</label>
                    <input type="text" name="nm_kriteria" id="nm_kriteria" class="form-control" placeholder="Nama Kriteria" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="jenis">Jenis Kriteria</label>
                    <select class="form-control" name="jenis" id="jenis">
                        <option value="benefit">Benefit</option>
                        <option value="cost">Cost</option>
                    </select>
                </div>
               
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <div class="form-group">
            <button type="submit" class="btn btn-primary float-sm-right">Simpan</button>
        </div>
    </form>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
@endsection