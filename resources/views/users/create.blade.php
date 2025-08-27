@extends('layouts.app')

@section('title', 'Tambah Data Pengguna')

@section('content')
    <div class="card m-4">
        <div class="card-header">
            <h2 class="card-title text-center">Tambah Data Pengguna</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('users.store') }}" method="post">
                @csrf
                <div class="mb-2">
                    <label for="inputName" class="form-label">Nama</label>
                    <input type="text" name="name" id="inputName" value="{{ old('name') }}"
                        class="form-control @error('name') is-invalid @enderror">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" name="email" id="inputEmail" value="{{ old('email') }}"
                        class="form-control @error('email') is-invalid @enderror">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="inputRole" class="form-label">Peran</label>
                    <select name="role" id="inputRole" class="form-select @error('role') is-invalid @enderror">
                        <option value="">Pilih Peran...</option>
                        <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="petugas" {{ old('role') == 'petugas' ? 'selected' : '' }}>Petugas</option>
                    </select>
                    @error('role')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" name="password" id="inputPassword"
                        class="form-control @error('password') is-invalid @enderror">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="inputPasswordConfirmation" class="form-label">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" id="inputPasswordConfirmation" class="form-control">
                </div>
                <div class="mb-2">
                    <button type="submit" class="btn btn-success me-2">Submit</button>
                    <button type="reset" class="btn btn-outline-secondary me-2">Batal</button>
                </div>
            </form>
        </div>
    </div>
@endsection
