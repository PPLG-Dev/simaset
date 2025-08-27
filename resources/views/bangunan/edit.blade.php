@extends('layouts.app')

@section('title', 'Edit Data Bangunan')

@section('content')
    <div class="card m-4">
        <div class="card-header">
            <h2 class="card-title text-center">Edit Data</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('bangunan.update', $bangunan->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-2">
                    <label for="inputNamaBangunan" class="form-label">Nama Bangunan</label>
                    <input type="text" name="nama_bangunan" id="inputNamaBangunan"
                        value="{{ old('nama_bangunan', $bangunan->nama_bangunan) }}"
                        class="form-control @error('nama_bangunan') is-invalid @enderror">
                    @error('nama_bangunan')
                        <div id="inputNamaBangunanFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="inputKodeBangunan" class="form-label">Kode Bangunan</label>
                    <input type="text" name="kode_bangunan" id="inputKodeBangunan"
                        value="{{ old('kode_bangunan', $bangunan->kode_bangunan) }}"
                        class="form-control @error('kode_bangunan') is-invalid @enderror">
                    @error('kode_bangunan')
                        <div id="inputKodeBangunanFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="inputTanah" class="form-label">Tanah</label>
                    <select name="tanah_id" id="inputTanah" class="form-control @error('tanah_id') is-invalid @enderror">
                        @foreach ($tanah as $tnh)
                            <option value="{{ $tnh->id }}"
                                @if ($bangunan->tanah->id === $tnh->id) {{ __('selected') }} @endif>{{ $tnh->nama_tanah }}
                            </option>
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
