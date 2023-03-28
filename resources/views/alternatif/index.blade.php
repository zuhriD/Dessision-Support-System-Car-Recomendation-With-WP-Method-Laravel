@extends('layouts.base')
@section('title')
    Home
@endsection
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Data Alternatif</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active">Alternatif</li>
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
                <h3 class="card-title">Tabel Alternatif</h3>
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
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($alternatif as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nmalternatif }}</td> 
                        <td>
                            <a href="{{ route('alternatif.edit', ['alternatif' => $data->idalternatif]) }}" class="btn btn-warning" >
                                <i class="fa fa-edit mr-2"></i>
                                Edit
                            </a>
                            <form action="{{ route('alternatif.destroy', ['alternatif'=> $data->idalternatif]) }}" method="post" class="d-inline">
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
                    <th>Nama alternatif</th>
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
          <h4 class="modal-title">Input Alternatif</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('alternatif.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nmalternatif">Nama alternatif</label>
                    <input type="text" name="nmalternatif" id="nmalternatif" class="form-control" placeholder="Nama alternatif" aria-describedby="helpId">
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
          <h4 class="modal-title">Edit Alternatif</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="" method="post">
                @csrf
                <div class="form-group">
                    <label for="nm_kriteria">Nama Alternatif</label>
                    <input type="text" name="nmalternatif" id="nmalternatif" class="form-control" placeholder="Nama Kriteria" aria-describedby="helpId">
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