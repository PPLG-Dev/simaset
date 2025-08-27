@extends('layouts.app')

@section('title', 'Tambah Data Bangunan')

@section('content')
    <div class="card m-4">
        <div class="card-header">
            <h2 class="card-title text-center">Tambah Data</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('bangunan.store') }}" method="post">
                @csrf
                <div class="mb-2">
                    <label for="inputNamaBangunan" class="form-label">Nama Bangunan</label>
                    <input type="text" name="nama_bangunan" id="inputNamaBangunan" aria-describedby="inputNamaBangunanFeedback"
                        value="{{ old('nama_bangunan') }}"
                        class="form-control @error('nama_bangunan') is-invalid @enderror">
                    @error('nama_bangunan')
                        <div id="inputNamaBangunanFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="inputKodeBangunan" class="form-label">Kode Bangunan</label>
                    <input type="text" name="kode_bangunan" id="inputKodeBangunan" aria-describedby="inputKodeBangunanFeedback" value="{{ old('kode_bangunan') }}"
                        class="form-control @error('kode_bangunan') is-invalid @enderror">
                    @error('kode_bangunan')
                        <div id="inputKodeBangunanFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="inputTanah" class="form-label">Tanah</label>
                    <select name="tanah_id" id="inputTanah" class="form-control @error('tanah_id') is-invalid @enderror" aria-describedby="iinputTanahFeedback">
                        @foreach ($tanah as $tnh)
                            <option value="{{ $tnh->id }}">{{ $tnh->nama_tanah }}</option>
                        @endforeach
                    </select>
                    @error('tanah_id')
                        <div id="iinputTanahFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-2">
                    <button type="submit" class="btn btn-success me-2">Submit</button>
                    <button type="reset" class="btn btn-outline-secondary me-2">Batal</button>
                </div>
            </form>
        </div>
    </div>
@endsection
