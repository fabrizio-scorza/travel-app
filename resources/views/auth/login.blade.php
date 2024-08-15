@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <img src="logo.png" alt="logo">
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="my-4 row">
                            <label for="email" class="col-md-4 col-form-label text-md-center">Username</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control box @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('usenrame')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <label for="password" class="col-md-4 col-form-label text-md-center">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control box @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        Ricordami
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <div class="col-md-8 offset-md-4 d-flex gap-3 align-items-center">
                                <button type="submit" class="btn btn-sand">
                                    Accedi
                                </button>

                                <span>o</span>
                                @if (Route::has('register'))
                                <a class="btn btn-sand" href="{{ route('register') }}">
                                    Registrati
                                </a>
                                @endif
                                

                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    Password dimenticata?
                                </a>
                                @endif

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
