@extends('layouts.base')
@section('title')
    Edit Bobot
@endsection
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edit Bobot</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active">Bobot</li>
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
                <h3 class="card-title">Edit Bobot</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('bobot.update', ['bobot'=> $bobot->id_bobot]) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="id_kriteria">Nama Kriteria</label>
                        <select name="id_kriteria" id="id_kriteria" class="form-control">
                            <option value="">Pilih Kriteria</option>
                            @foreach ($kriteria as $data)
                                <option value="{{ $data->id_kriteria }}" {{ $data->id_kriteria == $bobot->id_kriteria 
                                 ? 'selected' : ''
                                }}>{{ $data->nm_kriteria }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nmbobot">Nama bobot</label>
                        <input type="text" name="valuebobot" id="valuebobot" class="form-control" value="{{ $bobot->valuebobot }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
            </div>
            </div>
        </div>
        @endsection
