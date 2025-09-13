@extends('layouts.app')

@section('content')
<style>
    .page-header {
        background-color: var(--custom-light-bg);
        border-bottom: 1px solid #ddd;
    }
    .page-header .icon {
        font-size: 3rem;
        color: var(--custom-purple);
    }
    .info-card-2 {
        border: none;
        border-radius: 0.75rem;
        transition: transform 0.2s, box-shadow 0.2s;
    }
    .info-card-2:hover {
        transform: translateY(-5px);
        box-shadow: 0 .5rem 1.5rem rgba(0,0,0,.1)!important;
    }
    .info-card-2 .card-title i {
        color: var(--custom-purple);
    }
</style>

<div class="page-header py-5">
    <div class="container text-center">
        <i class="bi bi-link-45deg icon mb-3"></i>
        <h1 class="display-4">Filiación</h1>
        <p class="lead col-lg-8 mx-auto text-muted">
            Aquí exploramos el concepto de filiación, el vínculo jurídico fundamental que une a una persona con sus progenitores y que sienta las bases de la estructura familiar.
        </p>
    </div>
</div>

<div class="container my-5">
    <div class="text-center mb-5">
        <h2>Formas de Determinación</h2>
        <p class="lead">El Código Civil y Comercial establece en su Artículo 558 que "la filiación puede tener lugar por naturaleza, mediante técnicas de reproducción humana asistida, o por adopción. Ninguna persona puede tener más de dos vínculos filiales".</p>
    </div>

    <div class="row g-4">
        <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card info-card-2 h-100 shadow-sm">
                <div class="card-body text-center p-4">
                    <h3 class="card-title h4 mb-3"><i class="bi bi-gem me-2"></i>Matrimonial</h3>
                    <p class="card-text">
                        Es la que se determina legalmente por la presunción de que los hijos nacidos después de la celebración del matrimonio y hasta los 300 días posteriores a su disolución o anulación, tienen como progenitores a los cónyuges.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card info-card-2 h-100 shadow-sm">
                <div class="card-body text-center p-4">
                    <h3 class="card-title h4 mb-3"><i class="bi bi-person-check-fill me-2"></i>Extramatrimonial</h3>
                    <p class="card-text">
                        Este vínculo se establece fuera del matrimonio y queda determinado por el reconocimiento voluntario del o los progenitores ante el Registro Civil, o bien por una sentencia judicial firme en un juicio de filiación (también conocido como juicio de paternidad).
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card info-card-2 h-100 shadow-sm">
                <div class="card-body text-center p-4">
                    <h3 class="card-title h4 mb-3"><i class="bi bi-heart-fill me-2"></i>Por Adopción</h3>
                    <p class="card-text">
                        Se constituye a través de una sentencia judicial que crea el vínculo filial entre el adoptado y el o los adoptantes. Otorga los mismos derechos y obligaciones que el vínculo biológico, protegiendo el derecho del niño a vivir en familia.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5">
    <div class="text-center">
        <h4>Fuentes y Más Información</h4>
        <p class="text-muted">La regulación detallada sobre la filiación se encuentra en el Libro Segundo, Título V del Código Civil y Comercial.</p>
        <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/235000-239999/235975/norma.htm" class="btn btn-outline-secondary" target="_blank" rel="noopener noreferrer">
            <i class="bi bi-box-arrow-up-right me-2"></i>Consultar Código Civil y Comercial - InfoLEG
        </a>
    </div>
</div>
@endsection