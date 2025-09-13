<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class FamiliaController extends Controller
{
    private function getChatbotData(): array
    {
        return [
            'Parentesco' => [
                'preguntas' => [
                    ['pregunta' => '¿Qué es el parentesco?', 'respuesta' => 'Es el vínculo jurídico que existe entre personas por naturaleza (sangre), adopción, técnicas de reproducción asistida o afinidad (familia política).'],
                    ['pregunta' => 'Tipos de parentesco', 'respuesta' => 'Existen el parentesco por naturaleza, por adopción, por técnicas de reproducción humana asistida y por afinidad.'],
                    ['pregunta' => '¿Qué es la línea recta?', 'respuesta' => 'La línea recta de parentesco une a ascendientes y descendientes: abuelos, padres, hijos, nietos.'],
                    ['pregunta' => '¿Qué es la línea colateral?', 'respuesta' => 'La línea colateral une a personas que descienden de un tronco común, como hermanos, tíos y primos.'],
                    ['pregunta' => '¿Qué es la responsabilidad parental?', 'respuesta' => 'Es el conjunto de deberes y derechos de los progenitores sobre sus hijos menores para su protección, desarrollo y formación integral.'],
                    ['pregunta' => 'Deberes de los padres', 'respuesta' => 'Incluyen el cuidado personal, la educación, la alimentación adecuada, la asistencia general y la representación legal de los hijos.'],
                ],
                'fuente' => 'Puedes encontrar la información oficial en el <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/235000-239999/235975/norma.htm" target="_blank" rel="noopener noreferrer">Código Civil y Comercial de la Nación</a>.'
            ],
            'Adopción' => [
                'preguntas' => [
                    ['pregunta' => '¿Cómo empiezo el trámite de adopción?', 'respuesta' => 'El primer paso es inscribirse en el Registro Único de Aspirantes a Guarda con Fines Adoptivos de tu jurisdicción. Allí te evaluarán y te informarán sobre los pasos a seguir.'],
                    ['pregunta' => 'Requisitos para adoptar', 'respuesta' => 'Los requisitos generales son: tener 25 años cumplidos, ser 16 años mayor que el adoptado y estar inscripto y admitido como idóneo en el registro de adoptantes.'],
                    ['pregunta' => '¿Una persona sola puede adoptar?', 'respuesta' => 'Sí, la ley argentina permite la adopción a una persona sola, a un matrimonio o a ambos integrantes de una unión convivencial.'],
                    ['pregunta' => '¿Qué es la DNRUA?', 'respuesta' => 'La DNRUA es la Dirección Nacional del Registro Único de Aspirantes a Guarda con Fines Adoptivos, el organismo que nuclea la red de registros de todo el país.'],
                    ['pregunta' => 'Tipos de adopción', 'respuesta' => 'Existen tres tipos: Plena (extingue vínculos con familia de origen), Simple (no crea vínculos con parientes del adoptante) y de Integración (se adopta al hijo del cónyuge).'],
                ],
                'fuente' => 'La información oficial se encuentra en la página de <a href="https://www.argentina.gob.ar/justicia/adopcion" target="_blank" rel="noopener noreferrer">Adopción del Ministerio de Justicia</a> y en el Código Civil.'
            ],
            'Matrimonio' => [
                'preguntas' => [
                    ['pregunta' => '¿Qué es el matrimonio?', 'respuesta' => 'Es la unión legal entre dos personas que se comprometen a desarrollar un proyecto de vida en común basado en la cooperación y la asistencia mutua.'],
                    ['pregunta' => 'Requisitos para casarse', 'respuesta' => 'Ser mayor de 18 años, tener DNI vigente, dar el consentimiento libre y pleno, y no tener impedimentos legales como un matrimonio anterior vigente.'],
                    ['pregunta' => 'Régimen de bienes', 'respuesta' => 'Existen dos regímenes: el de "comunidad de ganancias" (los bienes adquiridos durante el matrimonio son de ambos) y el de "separación de bienes" (cada uno conserva lo suyo). Si no se elige, se aplica el de comunidad.'],
                    ['pregunta' => '¿Qué es una unión convivencial?', 'respuesta' => 'Es la unión entre dos personas que conviven y comparten un proyecto de vida en común. Para que tenga efectos jurídicos, debe ser inscripta en el registro público.'],
                ],
                'fuente' => 'Puedes encontrar la información oficial en el <a href="https://servicios.infoleg.gob.ar/infolegInternet/anexos/235000-239999/235975/norma.htm" target="_blank" rel="noopener noreferrer">Código Civil y Comercial de la Nación</a>.'
            ],
            'Divorcio y Mediación' => [
                'preguntas' => [
                    ['pregunta' => '¿Cómo me divorcio?', 'respuesta' => 'El divorcio se solicita judicialmente con la asistencia de un abogado. Puede pedirlo uno o ambos cónyuges, presentando una propuesta que regule los efectos de la disolución.'],
                    ['pregunta' => '¿Necesito el consentimiento de mi pareja?', 'respuesta' => 'No, el divorcio puede ser solicitado por una sola de las partes (unilateral) sin necesidad del consentimiento del otro cónyuge.'],
                    ['pregunta' => '¿Hay que tener una causa para divorciarse?', 'respuesta' => 'No, desde la reforma del Código Civil y Comercial, no es necesario invocar ni probar una causa o motivo para el divorcio.'],
                    ['pregunta' => '¿Qué es la mediación?', 'respuesta' => 'Es una etapa prejudicial obligatoria donde las partes, con ayuda de un mediador, intentan llegar a un acuerdo sobre las consecuencias del divorcio (bienes, hijos, etc.) para evitar un juicio contencioso.'],
                    ['pregunta' => '¿Dónde está el CeJuMe en Misiones?', 'respuesta' => 'El Centro Judicial de Mediación de Misiones tiene varias sedes. La principal en Posadas se encuentra en el Palacio de Justicia, y hay otras en diferentes localidades de la provincia.'],
                ],
                'fuente' => 'Consulta más en <a href="https://www.argentina.gob.ar/justicia/derechofacil/leysimple/divorcio" target="_blank" rel="noopener noreferrer">Derecho Fácil sobre Divorcio</a> y en el sitio del <a href="https://cejume.jusmisiones.gov.ar/" target="_blank" rel="noopener noreferrer">CeJuMe de Misiones</a>.'
            ]
        ];
    }

    public function inicio(): View
    {
        return view('inicio', ['chatbotData' => $this->getChatbotData()]);
    }

    public function parentesco(): View { return view('parentesco'); }
    public function filiacion(): View { return view('filiacion'); }
    public function adopcion(): View { return view('adopcion'); }
    public function matrimonio(): View { return view('matrimonio'); }
    public function divorcio(): View { return view('divorcio'); }
    public function organismos(): View { return view('organismos'); }

}