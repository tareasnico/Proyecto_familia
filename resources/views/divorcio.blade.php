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
        <i class="bi bi-scissors icon mb-3"></i>
        <h1 class="display-4">Divorcio y Mediación</h1>
        <p class="lead col-lg-8 mx-auto text-muted">
            El Código Civil y Comercial modernizó el proceso de divorcio en Argentina, haciéndolo más ágil y centrado en la voluntad de las partes, con la mediación como herramienta clave.
        </p>
    </div>
</div>

<div class="container my-5">
    <div class="row g-4">
        <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card info-card-2 h-100 shadow-sm">
                <div class="card-body p-4">
                    <h3 class="card-title h4 mb-3"><i class="bi bi-file-earmark-text-fill me-2"></i>Proceso Simplificado</h3>
                    <p class="card-text">
                        Con la reforma del código, el proceso ya no requiere una causa. La solicitud puede ser:
                    </p>
                    <ul>
                        <li><strong>Unilateral:</strong> Presentada por uno solo de los cónyuges.</li>
                        <li><strong>Conjunta:</strong> Presentada por ambos en acuerdo.</li>
                    </ul>
                    <p class="card-text">
                        No es necesario esperar un tiempo mínimo desde la celebración del matrimonio para iniciar el trámite.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card info-card-2 h-100 shadow-sm">
                <div class="card-body p-4">
                    <h3 class="card-title h4 mb-3"><i class="bi bi-journal-check me-2"></i>La Propuesta Reguladora</h3>
                    <p class="card-text">
                        Toda petición de divorcio debe ir acompañada de una propuesta que regule sus efectos. Si no hay acuerdo, el juez decidirá sobre estos puntos. Debe incluir temas como:
                    </p>
                    <ul>
                        <li>Atribución de la vivienda familiar.</li>
                        <li>Distribución de los bienes.</li>
                        <li>Responsabilidad parental sobre los hijos.</li>
                        <li>Prestación alimentaria.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card info-card-2 h-100 shadow-sm">
                <div class="card-body p-4">
                    <h3 class="card-title h4 mb-3"><i class="bi bi-people-fill me-2"></i>Rol de la Mediación</h3>
                    <p class="card-text">
                        Aunque el divorcio lo decreta un juez, es obligatoria una etapa de <strong>mediación prejudicial</strong> para acordar sus efectos. El objetivo es que las partes lleguen a una solución consensuada.
                    </p>
                    <p class="card-text">
                        En Misiones, el <strong>Centro Judicial de Mediación (CeJuMe)</strong> ofrece este servicio de forma gratuita y confidencial.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5">
    <div class="text-center">
        <h4>Fuentes y Más Información</h4>
        <p class="text-muted">Consulta los sitios oficiales para obtener guías detalladas sobre el proceso.</p>
        <a href="https://www.argentina.gob.ar/justicia/derechofacil/leysimple/divorcio" class="btn btn-outline-secondary mb-2" target="_blank" rel="noopener noreferrer">
            <i class="bi bi-box-arrow-up-right me-2"></i>Derecho Fácil - Divorcio
        </a>
        <a href="https://www.argentina.gob.ar/justicia/derechofacil/leysimple/mediacion" class="btn btn-outline-secondary mb-2" target="_blank" rel="noopener noreferrer">
            <i class="bi bi-box-arrow-up-right me-2"></i>Derecho Fácil - Mediación
        </a>
        <a href="https://cejume.jusmisiones.gov.ar/" class="btn btn-outline-secondary mb-2" target="_blank" rel="noopener noreferrer">
            <i class="bi bi-box-arrow-up-right me-2"></i>Sitio Oficial del CeJuMe (Misiones)
        </a>
    </div>
</div>
@endsection