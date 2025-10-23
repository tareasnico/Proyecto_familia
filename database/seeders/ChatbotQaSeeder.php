<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ChatbotQa;
use Illuminate\Support\Facades\DB;

class ChatbotQaSeeder extends Seeder
{
    public function run(): void
    {

        if (ChatbotQa::count() == 0) {
            

            DB::table('chatbot_qas')->truncate();


            $preguntas = [

                [
                    'category' => 'Parentesco',
                    'question' => '¿Qué es el parentesco?',
                    'answer' => 'Es el vínculo jurídico existente entre personas en razón de la naturaleza, las técnicas de reproducción humana asistida, la adopción y la afinidad. (Art. 529 CCCN)'
                ],
                [
                    'category' => 'Parentesco',
                    'question' => '¿Qué tipos de parentesco existen?',
                    'answer' => 'Existen tres tipos: por naturaleza (vínculo de sangre), por técnicas de reproducción humana asistida, y por adopción (filiación adoptiva). (Art. 529 CCCN)'
                ],
                [
                    'category' => 'Parentesco',
                    'question' => '¿Qué es el parentesco por afinidad?',
                    'answer' => 'Es el vínculo que existe entre una persona casada y los parientes de su cónyuge, como un suegro/a o cuñado/a. (Art. 536 CCCN)'
                ],
                [
                    'category' => 'Parentesco',
                    'question' => '¿Cómo se cuentan los grados de parentesco?',
                    'answer' => 'Se cuentan por generaciones. En línea recta (padre/hijo) cada generación es un grado. En línea colateral (hermanos, tíos) se sube hasta el tronco común y luego se baja. (Art. 533 CCCN)'
                ],
                [
                    'category' => 'Filiación',
                    'question' => '¿Qué es la filiación?',
                    'answer' => 'Es el vínculo jurídico que une a una persona con sus progenitores (padre y/o madre). Puede ser por naturaleza, por técnicas de reproducción humana asistida, o por adopción. (Art. 558 CCCN)'
                ],
                [
                    'category' => 'Filiación',
                    'question' => '¿Cómo se determina la filiación matrimonial?',
                    'answer' => 'Se presume que los hijos nacidos después del matrimonio y hasta 300 días después de su disolución tienen como padre al (ex)marido de la madre. (Art. 566 CCCN)'
                ],
                [
                    'category' => 'Filiación',
                    'question' => '¿Qué es el reconocimiento de un hijo?',
                    'answer' => 'Es un acto por el cual una persona declara ser el padre o la madre de otra. Es irrevocable y se puede hacer ante el Registro Civil o por testamento. (Art. 570 CCCN)'
                ],
                [
                    'category' => 'Filiación',
                    'question' => '¿Qué son las TRHA?',
                    'answer' => 'Son las Técnicas de Reproducción Humana Asistida. La filiación de los hijos nacidos por TRHA se determina por la "voluntad procreacional" expresada en un consentimiento previo. (Art. 560 CCCN)'
                ],
                [
                    'category' => 'Adopción',
                    'question' => '¿Qué es la adopción?',
                    'answer' => 'Es una institución jurídica que crea un vínculo de filiación (igual al biológico) entre personas que no lo tienen por naturaleza. Otorga al adoptado la condición de hijo. (Art. 594 CCCN)'
                ],
                [
                    'category' => 'Adopción',
                    'question' => '¿Qué tipos de adopción existen?',
                    'answer' => 'Existen tres tipos: Adopción Plena (irrevocable, corta todo vínculo con la familia de origen), Adopción Simple (revocable, no corta vínculos) y Adopción de Integración (adoptar al hijo del cónyuge). (Art. 619, 620, 630 CCCN)'
                ],
                [
                    'category' => 'Adopción',
                    'question' => '¿Qué es la "guarda con fines de adopción"?',
                    'answer' => 'Es el período (no mayor a 6 meses) en que el niño convive con sus futuros adoptantes antes de que se inicie el juicio de adopción. Es otorgada por un juez. (Art. 613 CCCN)'
                ],
                [
                    'category' => 'Matrimonio',
                    'question' => '¿Qué es el matrimonio?',
                    'answer' => 'Es la unión legal de dos personas (del mismo o diferente sexo) que se comprometen a desarrollar un proyecto de vida en común. (Art. 401, 402 CCCN)'
                ],
                [
                    'category' => 'Matrimonio',
                    'question' => '¿Cuáles son los requisitos para casarse?',
                    'answer' => 'Ser mayor de 18 años (o con autorización si es menor), tener consentimiento pleno y no tener impedimentos (como ser parientes directos o estar casado). (Art. 403 CCCN)'
                ],
                [
                    'category' => 'Matrimonio',
                    'question' => '¿Qué es el "régimen de comunidad de ganancias"?',
                    'answer' => 'Es el régimen de bienes más común en el matrimonio. Significa que los bienes adquiridos después de casarse ("gananciales") pertenecen a ambos por igual, sin importar quién los compró. (Art. 464 CCCN)'
                ],
                [
                    'category' => 'Matrimonio',
                    'question' => '¿Qué es el "régimen de separación de bienes"?',
                    'answer' => 'Es un régimen alternativo que se puede elegir antes o durante el matrimonio. Cada cónyuge mantiene la propiedad y administración de los bienes que adquiere. (Art. 505 CCCN)'
                ],
                [
                    'category' => 'Divorcio',
                    'question' => '¿Cómo se inicia un divorcio?',
                    'answer' => 'El divorcio se puede solicitar por uno solo de los cónyuges o por ambos. No es necesario expresar una causa (infidelidad, abandono, etc.) ni haber estado separado antes. (Art. 437 CCCN)'
                ],
                [
                    'category' => 'Divorcio',
                    'question' => '¿Qué es la "propuesta reguladora"?',
                    'answer' => 'Es un documento que se debe presentar junto con la solicitud de divorcio. Detalla cómo se repartirán los bienes, quién tendrá el cuidado de los hijos, la cuota alimentaria, etc. (Art. 438 CCCN)'
                ],
                [
                    'category' => 'Divorcio',
                    'question' => '¿Qué es la "compensación económica"?',
                    'answer' => 'Es un pago (único o en cuotas) que puede recibir el cónyuge que sufrió un desequilibrio económico evidente a causa del matrimonio y el divorcio (ej. por no trabajar para cuidar el hogar). (Art. 441 CCCN)'
                ],
                [
                    'category' => 'Organismos',
                    'question' => '¿Qué es el Registro Civil?',
                    'answer' => 'El Registro de las Personas (o Registro Civil) es la entidad provincial donde se inscriben todos los hechos vitales: nacimientos, matrimonios, uniones convivenciales, divorcios y defunciones.'
                ],
                [
                    'category' => 'Organismos',
                    'question' => '¿Qué es la DNRUA?',
                    'answer' => 'Es la Dirección Nacional del Registro Único de Aspirantes a Guarda con Fines Adoptivos. Es el organismo central que administra la lista de personas que quieren adoptar en Argentina. (Ley 25.854)'
                ],
            ];

            foreach ($preguntas as $pregunta) {
                ChatbotQa::create($pregunta);
            }
        }

    }
}