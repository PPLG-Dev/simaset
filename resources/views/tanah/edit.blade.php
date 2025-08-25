@extends('layouts.app')

@section('title', 'Edit Data Tanah')

@section('content')
    <div>
        <a href="{{ route('tanah.index') }}">Kembali</a>
    </div>
    <form action="{{ route('tanah.update', $tanah->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="inputNamaTanah">Nama Tanah</label>
            <input type="text" name="nama_tanah" id="inputNamaTanah" value="{{ old('nama_tanah', $tanah->nama_tanah) }}">
        </div>
        <div>
            <label for="inputKodeTanah">Kode Tanah</label>
            <input type="text" name="kode_tanah" id="inputKodeTanah" value="{{ old('kode_tanah', $tanah->kode_tanah) }}">
        </div>
        <div>
            <label for="inputLuasTanah">Luas</label>
            <input type="text" name="luas" id="inputLuasTanah" value="{{ old('luas', $tanah->luas) }}">
        </div>
        <div>
            <label for="inputNoSertifikat">No Sertifikat</label>
            <input type="text" name="no_sertifikat" id="inputNoSertifikat" value="{{ old('no_sertifikat', $tanah->no_sertifikat) }}">
        </div>
        <div>
            <button type="submit">Submit</button>
            <button type="reset">Batal</button>
        </div>
    </form>
@endsection
