@extends('layouts.base')
@section('title')
    Edit kriteria
@endsection
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edit kriteria</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active">kriteria</li>
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
                <h3 class="card-title">Edit kriteria</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('kriteria.update', ['kriterium'=> $kriterium->id_kriteria]) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="nmkriteria">Nama kriteria</label>
                        <input type="text" name="nm_kriteria" id="nm_kriteria" class="form-control" value="{{ $kriterium->nm_kriteria }}">
                    </div>
                    <div class="form-group">
                        <label for="bobot">Jenis</label>
                        <select class="form-control" name="jenis" id="jenis">
                            <option value="benefit" {{ $kriterium->jenis == 'benefit' ? 'selected' : '' }}>Benefit</option>
                            <option value="cost" {{ $kriterium->jenis == 'cost' ? 'selected' : '' }}>Cost</option>
                        </select>
                            
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
            </div>
            </div>
        </div>
        @endsection
