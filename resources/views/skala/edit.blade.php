@extends('layouts.base')
@section('title')
    Edit skala
@endsection
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edit skala</h1>
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
                <h3 class="card-title">Edit skala</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('skala.update', ['skala'=> $skala->id_skala]) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="value">Value</label>
                        <input type="text" name="value" id="value" class="form-control" value="{{ $skala->value }}">
                    </div>
                    <div class="form-group">
                        <label for="nmskala">Keterangan</label>
                        <input type="text" name="keterangan" id="keterangan" class="form-control" value="{{ $skala->keterangan }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
            </div>
            </div>
        </div>
        @endsection
