@extends('layouts.app')

@section('content')
<style>
    /* El nombre de la clase ahora es .hero-full para no confundir */
    .hero-full {
        position: relative;
        height: calc(100vh - 70px);
        min-height: 500px;
        background-size: cover;
        background-position: center;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }
    .hero-full::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background-color: rgba(13, 41, 80, 0.6); /* Filtro azul oscuro */
        z-index: 1;
    }
    .hero-content {
        position: relative;
        z-index: 2;
    }
    .hero-tag {
        display: inline-block;
        background-color: var(--custom-purple);
        color: white;
        padding: 0.3rem 0.8rem;
        font-size: 0.8rem;
        font-weight: 700;
        margin-bottom: 1rem;
    }
    .btn-custom-purple {
        background-color: var(--custom-purple);
        color: white;
        border: 2px solid white;
        border-radius: 50px;
        padding: 0.8rem 2.5rem;
        font-weight: 700;
        transition: all 0.3s;
    }
    .btn-custom-purple:hover {
        background-color: white;
        color: var(--custom-purple);
    }
</style>

<div class="hero-full" style="background-image: url('{{ asset('images/hero-background.jpg') }}')">
    <div class="hero-content p-5">
        <div class="hero-tag">UN VÍNCULO ESENCIAL</div>
        <h1 class="display-3 fw-bold">Promovemos el entendimiento del Derecho de Familia</h1>
        <p class="lead my-4 col-lg-8 mx-auto">
            Un recurso informativo que brinda asesoramiento claro sobre el proceso de registro, los derechos y deberes, en la conformación y desarrollo de los vínculos familiares.
        </p>
        <a href="{{ route('parentesco') }}" class="btn btn-custom-purple">
            VER MÁS <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</div>
@endsection