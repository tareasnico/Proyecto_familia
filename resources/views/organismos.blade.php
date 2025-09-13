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
        <i class="bi bi-building-fill icon mb-3"></i>
        <h1 class="display-4">Organismos Oficiales</h1>
        <p class="lead col-lg-8 mx-auto text-muted">
            Conoce los roles del Registro Nacional de las Personas (RENAPER) y del Registro Provincial de Misiones, entidades clave en la documentación y registro de los actos más importantes de la vida civil.
        </p>
    </div>
</div>

<div class="container my-5">
    <div class="row g-4 justify-content-center">
        <div class="col-md-6 d-flex align-items-stretch">
            <div class="card info-card-2 h-100 shadow-sm">
                <div class="card-body p-4">
                    <h3 class="card-title h4 mb-3"><i class="bi bi-patch-check-fill me-2"></i>RENAPER (Nacional)</h3>
                    <p class="card-text">
                        El <strong>Registro Nacional de las Personas</strong> es el organismo del Estado Nacional que tiene la responsabilidad exclusiva de la identificación y documentación de todos los ciudadanos argentinos.
                    </p>
                    <p>
                        Su función principal en el derecho de familia es registrar los hechos vitales y emitir los documentos que acreditan la identidad y el estado civil, como el DNI y el Pasaporte. Es el ente que inscribe las sentencias judiciales (divorcios, adopciones) para que tengan efecto legal a nivel nacional.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6 d-flex align-items-stretch">
            <div class="card info-card-2 h-100 shadow-sm">
                <div class="card-body p-4">
                    <h3 class="card-title h4 mb-3"><i class="bi bi-person-vcard-fill me-2"></i>Registro Provincial (Misiones)</h3>
                    <p class="card-text">
                        El <strong>Registro Provincial de las Personas</strong> ejecuta las políticas de registro e identificación en la provincia de Misiones, en línea con el RENAPER.
                    </p>
                    <p>
                        Es la oficina donde los ciudadanos misioneros realizan la inscripción de nacimientos, matrimonios, uniones convivenciales y defunciones, y gestionan trámites de DNI y solicitud de partidas certificadas, documentos esenciales para cualquier trámite familiar.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5">
    <div class="text-center">
        <h4>Fuentes y Más Información</h4>
        <p class="text-muted">Visita los sitios web oficiales para realizar trámites o consultar información específica.</p>
        <a href="https://www.argentina.gob.ar/interior/renaper" class="btn btn-outline-secondary mb-2" target="_blank" rel="noopener noreferrer">
            <i class="bi bi-box-arrow-up-right me-2"></i>Sitio Oficial del RENAPER
        </a>
        <a href="https://www.registrocivil.misiones.gov.ar/" class="btn btn-outline-secondary mb-2" target="_blank" rel="noopener noreferrer">
            <i class="bi bi-box-arrow-up-right me-2"></i>Sitio Oficial del Registro de Misiones
        </a>
    </div>
</div>
@endsection