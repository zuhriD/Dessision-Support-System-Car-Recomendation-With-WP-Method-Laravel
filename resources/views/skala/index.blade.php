@extends('layouts.base')
@section('title')
    Home
@endsection
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Data Skala</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active">skala</li>
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
                <h3 class="card-title">Tabel skala</h3>
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
                  <th>Keterangan Skala</th>
                  <th>Value skala</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($skala as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->keterangan }}</td> 
                        <td>{{ $data->value }}</td>
                        <td>
                          <a href="{{ route('skala.edit', ['skala' => $data->id_skala]) }}" class="btn btn-warning" >
                            <i class="fa fa-edit mr-2"></i>
                            Edit
                        </a>
                            <form action="{{ route('skala.destroy', ['skala'=> $data->id_skala]) }}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                               <button class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                <i class="fa fa-trash mr-2"></i>
                                Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>No</th>
                    <th>Keterangan Skala</th>
                    <th>Value skala</th>
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
          <h4 class="modal-title">Input skala</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('skala.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="value_skala">Value skala</label>
                    <input type="number" name="value_skala" id="value_skala" class="form-control" placeholder="Value skala" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="Keterangan" aria-describedby="helpId">
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