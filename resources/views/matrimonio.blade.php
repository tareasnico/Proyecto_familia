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
        <i class="bi bi-gem icon mb-3"></i>
        <h1 class="display-4">Matrimonio</h1>
        <p class="lead col-lg-8 mx-auto text-muted">
            Una guía sobre la unión legal entre dos personas, los requisitos necesarios para celebrarlo y los principales efectos jurídicos que de él se derivan.
        </p>
    </div>
</div>

<div class="container my-5">
    <div class="text-center mb-5">
        <h2>Requisitos y Efectos del Matrimonio</h2>
        <p class="lead">El Código Civil y Comercial define al matrimonio como un proyecto de vida en común basado en la cooperación y la asistencia mutua.</p>
    </div>

    <div class="row g-4 justify-content-center">
        <div class="col-md-6 d-flex align-items-stretch">
            <div class="card info-card-2 h-100 shadow-sm">
                <div class="card-body p-4">
                    <h3 class="card-title h4 mb-3"><i class="bi bi-card-checklist me-2"></i>Requisitos Legales</h3>
                    <p class="card-text">
                        Para que el matrimonio sea válido, los contrayentes deben cumplir con los siguientes requisitos establecidos en el Art. 403 del CCyCN:
                    </p>
                    <ul>
                        <li><strong>Mayoría de edad</strong> (18 años).</li>
                        <li><strong>Consentimiento</strong> libre y pleno expresado personalmente.</li>
                        <li><strong>Ausencia de impedimentos</strong> como el parentesco cercano o un matrimonio anterior no disuelto.</li>
                        <li>Presentar <strong>Documento Nacional de Identidad</strong> (DNI) vigente.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6 d-flex align-items-stretch">
            <div class="card info-card-2 h-100 shadow-sm">
                <div class="card-body p-4">
                    <h3 class="card-title h4 mb-3"><i class="bi bi-bank2 me-2"></i>Efectos y Régimen Patrimonial</h3>
                    <p class="card-text">
                        El matrimonio genera una serie de derechos y deberes, entre ellos la <strong>asistencia mutua</strong>. Además, establece un régimen para los bienes:
                    </p>
                    <ul>
                        <li><strong>Comunidad de Ganancias:</strong> Es el régimen por defecto. Los bienes adquiridos durante el matrimonio pertenecen a ambos por igual.</li>
                        <li><strong>Separación de Bienes:</strong> Se puede optar por este régimen mediante una convención matrimonial. Cada cónyuge conserva la propiedad y administración de sus bienes.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5">
    <div class="text-center">
        <h4>Fuentes y Más Información</h4>
        <p class="text-muted">La regulación sobre el matrimonio se encuentra en el Libro Segundo, Título I del Código Civil y Comercial.</p>
        <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/235000-239999/235975/norma.htm" class="btn btn-outline-secondary" target="_blank" rel="noopener noreferrer">
            <i class="bi bi-box-arrow-up-right me-2"></i>Consultar Código Civil y Comercial - InfoLEG
        </a>
    </div>
</div>
@endsection