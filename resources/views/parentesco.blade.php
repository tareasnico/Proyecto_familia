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
        <i class="bi bi-people-fill icon mb-3"></i>
        <h1 class="display-4">Parentesco</h1>
        <p class="lead col-lg-8 mx-auto text-muted">
            Es el pilar sobre el que se construyen las relaciones familiares. Aquí detallamos los tipos, cómo se miden y las responsabilidades que conllevan.
        </p>
    </div>
</div>

<div class="container my-5">
    <div class="row g-4">
        <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card info-card-2 h-100 shadow-sm">
                <div class="card-body p-4">
                    <h3 class="card-title h4 mb-3"><i class="bi bi-journal-text me-2"></i>Definición y Tipos</h3>
                    <p class="card-text">
                        El Código Civil y Comercial define al parentesco como el vínculo jurídico entre personas. Este lazo puede originarse por:
                    </p>
                    <ul>
                        <li><strong>Naturaleza:</strong> Vínculos de sangre.</li>
                        <li><strong>Adopción:</strong> Creado por sentencia judicial.</li>
                        <li><strong>TRHA:</strong> Técnicas de Reproducción Humana Asistida.</li>
                        <li><strong>Afinidad:</strong> El que surge con la familia del cónyuge.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card info-card-2 h-100 shadow-sm">
                <div class="card-body p-4">
                    <h3 class="card-title h4 mb-3"><i class="bi bi-diagram-3-fill me-2"></i>Líneas y Grados</h3>
                    <p class="card-text">
                        La proximidad del parentesco se mide en grados y se organiza en líneas para entender la descendencia y las relaciones colaterales.
                    </p>
                    <ul>
                        <li><strong>Línea Recta:</strong> Une a ascendientes y descendientes (abuelo-padre-hijo).</li>
                        <li><strong>Línea Colateral:</strong> Une a personas con un ancestro en común (hermanos, primos).</li>
                        <li><strong>Grado:</strong> Cada generación representa un grado. Por ejemplo, los hermanos son parientes en segundo grado de la línea colateral.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card info-card-2 h-100 shadow-sm">
                <div class="card-body p-4">
                    <h3 class="card-title h4 mb-3"><i class="bi bi-shield-check me-2"></i>Responsabilidad Parental</h3>
                    <p class="card-text">
                        Regulada entre los Art. 638 y 704 del CCyCN, es el conjunto de deberes y derechos de los progenitores sobre sus hijos menores para su protección, desarrollo y formación integral. Sus principios rectores son:
                    </p>
                    <ul>
                        <li>El interés superior del niño.</li>
                        <li>La autonomía progresiva del hijo.</li>
                        <li>El derecho del niño a ser oído.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5">
    <div class="text-center">
        <h4>Fuentes y Más Información</h4>
        <p class="text-muted">La regulación sobre el parentesco se encuentra en el Libro Segundo, Título IV del Código Civil y Comercial.</p>
        <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/235000-239999/235975/norma.htm" class="btn btn-outline-secondary" target="_blank" rel="noopener noreferrer">
            <i class="bi bi-box-arrow-up-right me-2"></i>Consultar Código Civil y Comercial - InfoLEG
        </a>
    </div>
</div>
@endsection