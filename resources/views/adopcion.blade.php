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
        <i class="bi bi-heart-fill icon mb-3"></i>
        <h1 class="display-4">Adopción</h1>
        <p class="lead col-lg-8 mx-auto text-muted">
            La adopción es una institución jurídica que protege el derecho fundamental de niños, niñas y adolescentes a vivir y desarrollarse en una familia.
        </p>
    </div>
</div>

<div class="container my-5">
    <div class="row g-4">
        <div class="col-md-6 d-flex align-items-stretch">
            <div class="card info-card-2 h-100 shadow-sm">
                <div class="card-body p-4">
                    <h3 class="card-title h4 mb-3"><i class="bi bi-building-check me-2"></i>Inscripción y DNRUA</h3>
                    <p class="card-text">
                        El primer paso para adoptar es inscribirse en el <strong>Registro Único de Aspirantes a Guarda con Fines Adoptivos</strong> de la jurisdicción correspondiente.
                    </p>
                    <p class="card-text">
                        Todos los registros locales están interconectados por la <strong>Dirección Nacional del Registro Único de Aspirantes a Guarda con Fines Adoptivos (DNRUA)</strong>, que administra una base de datos nacional para conectar a los postulantes con los niños en situación de adoptabilidad de todo el país.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6 d-flex align-items-stretch">
            <div class="card info-card-2 h-100 shadow-sm">
                <div class="card-body p-4">
                    <h3 class="card-title h4 mb-3"><i class="bi bi-list-check me-2"></i>Requisitos Generales</h3>
                    <p class="card-text">
                        Según los Art. 599 y 600 del CCyCN, los requisitos básicos son:
                    </p>
                    <ul>
                        <li>Tener 25 años de edad cumplidos.</li>
                        <li>Ser al menos 16 años mayor que el adoptado.</li>
                        <li>Puede adoptar una persona sola, un matrimonio o ambos integrantes de una unión convivencial.</li>
                        <li>Estar inscripto en el registro de adoptantes y haber sido evaluado y admitido como idóneo por el equipo técnico.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6 d-flex align-items-stretch">
            <div class="card info-card-2 h-100 shadow-sm">
                <div class="card-body p-4">
                    <h3 class="card-title h4 mb-3"><i class="bi bi-collection-fill me-2"></i>Tipos de Adopción</h3>
                    <p class="card-text">
                        El Código Civil y Comercial establece tres tipos de adopción:
                    </p>
                    <ul>
                        <li><strong>Plena (Art. 624):</strong> Confiere al adoptado la condición de hijo y extingue los vínculos jurídicos con la familia de origen.</li>
                        <li><strong>Simple (Art. 627):</strong> Otorga el estado de hijo, pero no crea vínculos jurídicos con los parientes del adoptante.</li>
                        <li><strong>De Integración (Art. 630):</strong> Se configura cuando se adopta al hijo del cónyuge o conviviente.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6 d-flex align-items-stretch">
            <div class="card info-card-2 h-100 shadow-sm">
                <div class="card-body p-4">
                    <h3 class="card-title h4 mb-3"><i class="bi bi-file-earmark-text-fill me-2"></i>Marco Legal</h3>
                    <p class="card-text">
                        El régimen de adopción en Argentina está detallado principalmente en el <strong>Título VI del Libro Segundo del Código Civil y Comercial de la Nación</strong>, entre los Artículos 594 y 637.
                    </p>
                    <p class="card-text">
                        Estos artículos regulan desde los principios generales, la declaración de situación de adoptabilidad, la guarda con fines de adopción, el juicio de adopción y los tipos de adopción.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5">
    <div class="text-center">
        <h4>Fuentes y Más Información</h4>
        <p class="text-muted">Consulta los sitios oficiales para obtener guías detalladas y acceso a la legislación vigente.</p>
        <a href="https://www.argentina.gob.ar/justicia/adopcion" class="btn btn-outline-secondary mb-2" target="_blank" rel="noopener noreferrer">
            <i class="bi bi-box-arrow-up-right me-2"></i>Sitio de Adopción - Argentina.gob.ar
        </a>
        <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/235000-239999/235975/norma.htm" class="btn btn-outline-secondary mb-2" target="_blank" rel="noopener noreferrer">
            <i class="bi bi-box-arrow-up-right me-2"></i>Consultar Código Civil y Comercial - InfoLEG
        </a>
    </div>
</div>
@endsection