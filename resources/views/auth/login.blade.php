@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="flex-1 row">
        <div class="col-6 mx-auto">
            <div class="card m-4">
                <div class="card-header">
                    <h2 class="card-title text-center">Login</h2>
                </div>
                <div class="card-body">
                    <form action="{{ url('/login') }}" method="post">
                        @csrf
                        <div class="mb-2">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" name="email" id="inputEmail" value="{{ old('email') }}"
                                class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="inputPassword" class="form-label">Password</label>
                            <input type="password" name="password" id="inputPassword" value="{{ old('password') }}"
                                class="form-control">
                        </div>
                        <div class="mb-2 row">
                            <div class="col-6 mx-auto">
                                <button type="submit" class="btn btn-block btn-success me-2">Submit</button>
                                <p class="text-muted">Atau</p>
                                <button type="reset" class="btn btn-outline-secondary me-2">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
