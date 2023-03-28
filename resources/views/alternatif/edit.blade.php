@extends('layouts.base')
@section('title')
    Edit Alternatif
@endsection
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edit Alternatif</h1>
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
                <h3 class="card-title">Edit Alternatif</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('alternatif.update', ['alternatif'=> $alternatif->idalternatif]) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="nmalternatif">Nama Alternatif</label>
                        <input type="text" name="nmalternatif" id="nmalternatif" class="form-control" value="{{ $alternatif->nmalternatif }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
            </div>
            </div>
        </div>
        @endsection
