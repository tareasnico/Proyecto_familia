@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            
            <div class="card shadow-sm border-0">
                <div class="card-header fw-bold text-center" style="background-color: #f8f9fa; font-size: 1.2rem;">
                    Panel de Control
                </div>

                <div class="card-body p-4">
                    
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                        </div>

                        <div class="mb-3 form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember">
                            <label class="form-check-label" for="remember">
                                Recordarme
                            </label>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary fw-bold" style="background-color: var(--custom-purple); border-color: var(--custom-purple);">
                                Iniciar Sesión
                            </button>
                        </div>
                        
                        @if (Route::has('password.request'))
                            <div class="text-center mt-3">
                                <a class="btn btn-link btn-sm" href="{{ route('password.request') }}" style="color: var(--custom-purple);">
                                    ¿Olvidaste tu contraseña?
                                </a>
                            </div>
                        @endif
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection