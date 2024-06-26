@extends('layouts.app')
@section('content')
<div class="container">
    <h1>{{ __('Prodi') }}</h1>
    <form method="post" action="{{ url('/prodi/update/' . $prodi->id) }}">
        @csrf
        <div class="row mb-3">
            <label for="nama_prodi" class="col-3 col-form-label">Prodi</label>
            <div class="col-9">
                <input type="text" class="form-control" id="nama_prodi" name="nama_prodi"
                    value="{{ old('nama_prodi') ?? $prodi->nama_prodi }}" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-large btn-primary">
                    Simpan
                </button>
            </div>
        </div>
    </form>
</div>
@endsection