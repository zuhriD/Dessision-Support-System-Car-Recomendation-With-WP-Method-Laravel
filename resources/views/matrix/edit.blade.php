@extends('layouts.base')
@section('title')
    Edit penilaian
@endsection
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edit penilaian</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active">penilaian</li>
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
                <h3 class="card-title">Edit penilaian</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('penilaian.update', ['penilaian'=> $penilaian->id_nilai]) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="idalternatif">Nama alternatif</label>
                        <select name="idalternatif" id="idalternatif" class="form-control">
                            <option value="">Pilih alternatif</option>
                            @foreach ($alternatif as $data)
                                <option value="{{ $data->idalternatif }}" {{ $data->idalternatif == $penilaian->idalternatif 
                                 ? 'selected' : ''
                                }}>{{ $data->nmalternatif }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group" >
                        <label for="id_bobot">Bobot </label>
                        <select name="id_bobot" id="id_bobot" class="form-control">
                            <option value="">Pilih Bobot</option>
                            @foreach ($bobot as $data)
                                <option value="{{ $data->id_bobot }}" {{ $data->id_bobot == $penilaian->id_bobot 
                                 ? 'selected' : ''
                                }}>{{ $data->valuebobot }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group ">
                        <label for="skala">Skala</label>
                        <select name="skala" id="skala" class="form-control">
                            <option value="">Pilih Skala</option>
                            @foreach ($skala as $data)
                                <option value="{{ $data->id_skala }}" {{ $data->id_skala == $penilaian->id_skala 
                                 ? 'selected' : ''
                                }}>{{ $data->value }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
            </div>
            </div>
        </div>
        @endsection
