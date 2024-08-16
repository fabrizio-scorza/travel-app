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
                            <label for="email" class="col-md-4 col-form-label text-md-center">E-mail</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control box @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
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
                                    <input class="form-check-input checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        Ricordami
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4 row justify-content-lg-end">
                            <div class="col-lg-8 d-flex align-items-center gap-3 gap-lg-4">
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
