<?php

use App\Content;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** Home  */
        /** Slider */
        for ($i=0; $i <= 2; $i++) { 
            Content::create([
                'section_id' => 1,
                'order'     => 'AA',
                'image'     => 'images/home/Mask_Group_209.png',
                'content_1' => 'images/home/Image_333.png',
                'content_2' => 'CADENAS DE TRANSMISIÓN A RODILLOS',
                'content_2' => 'Simples y múltiples.',
            ]);
        }

        Content::create([
            'section_id' => 2,
            'image'     => 'images/home/Mask_Group_227.png',
            'content_1' => '¿QUE HACEMOS?',
            'content_2' => '<p>Nuestro principal objetivo es la calidad, y por eso tenemos como fabricación normal cadenas de altas exigencias con rodillos y bujes enterizos y para casos extremos de alta velocidad, con bujes perforados para mejorar la lubricación.</p>',
        ]);

        /** Fin home page */

        /** Empresa  */
       for ($i=0; $i <= 2; $i++) { 
            Content::create([
                'section_id'    => 3,
                'order'         => 'AA',
                'image'         => 'images/company/Mask_Group_209.png',
            ]);
        }

        Content::create([
            'section_id' => 4,
            'content_1' => 'TRANSMICIONES MECÁNICAS S.A.',
            'content_2' => 'Fabricamos cadenas de transmisión a rodillos desde 1983.',
        ]);

        Content::create([
            'section_id' => 5,
            'order'     => 'AA',
            'content_1' => '37 años',
            'content_2' => 'de trayectoria en el mercado',
        ]);

        Content::create([
            'section_id' => 5,
            'order'     => 'BB',
            'content_1' => '2004',
            'content_2' => 'recibimos el “Sello Baires de Reconocimiento a laCalidad”',
        ]);

        Content::create([
            'section_id' => 5,
            'order'     => 'CC',
            'content_1' => '2006',
            'content_2' => 'desde el 2006 somos empresa certificada',
        ]);

        Content::create([
            'section_id' => 5,
            'order'     => 'DD',
            'content_1' => 'ISO 9001-2015',
            'content_2' => 'asegura la certificación y control de nuestros procesos productivos',
        ]);


        Content::create([
            'section_id' => 6,
            'content_1' => '<p>TRANSMISIONES MECANICAS S.A., fabrica e importa cadenas a rodillo y especiales, 25 años en el mercado, nos convierte en una de las únicas empresas capaces de brindar un servicio de asesoramiento, postventa y garantía en el rubro.</p><p> Nuestra producción está Certificada por la norma ISO 9001-2000 y recibimos el “Sello Baires de Reconocimiento a la Calidad” otorgado por el Ministerio de la Producción del Gobierno de la Pcia. de Bs. As, en Septiembre de 2005. TRANSMISIONES MECÁNICAS S.A. fabrica cadenas de transmisión a rodillos desde 1983.</p><p>Dentro de la gama de nuestra producción se encuentran:</p><ul>
            <li>Cadenas de transmisión a rodillos: Standard y especiales, simples y múltiples para máquinas viales, asfaltadotas, agrícolas, para la industria alimenticia, aceitera, petrolera, siderúrgica, cementera, azucarera, etc.</li>
            <li>Cadenas de transporte y especiales fabricadas bajo plano.</li>
            <li>Cadenas tipo Fleyer: para autoelevadores, estibajes portuarios, etc.</li>
            <li>Cadenas para máquinas zanjadoras: nacionales e importadas.</li>
            </ul>',
        ]);

        Content::create([
            'section_id'    => 7,
            'image'         => 'images/quality/Mask_Group_234.png',
            'content_1'     => 'CALIDAD',
            'content_2'     => '<p>« Poseemos la certificación ISO 9001-2008 lo que asegura la certificación y control de nuestros procesos productivos»</p> <p>Nuestra producción abarca cadenas según normas IRAM 5184, IRAM 5360, ANSI B29.1, DIN 8187, DIN 8188 e ISO R606. Somos distribuidores de M.W. de China continental, todas con Certificación ISO 9001</p>',
            'content_3'     => 'images/quality/Image_333.png',
        ]);

        Content::create([
            'section_id'    => 8,
            'order'         => 'AA',
            'content_1'     => 'Políticas de calidad',
            'image'     => 'images/quality/Image_333.png',
        ]);

        Content::create([
            'section_id'    => 8,
            'order'         => 'BB',
            'content_1'     => 'Empresa certificada bajo norma ISO 9001:2015',
            'image'         => 'images/quality/Image_333.png',
        ]);

        Content::create([
            'section_id'    => 9,
            'image'         => 'images/laboratory/Mask_Group_227.png',
            'content_1'     => 'LABORATORIO',
            'content_2'     => '<p>En complemento de nuestra planta propia de más de 7000 m² contamos con un laboratorio propio de Investigación y Desarrollo, con un énfasis especial en la mejora continua y la trazabilidad de los procesos productivos.</p> <p> Somos concientes que las exigencias de calidad y servicio que el mercado impone son cada vez más estrictas. Por lo tanto, debemos proponernos un desafío para seguir siendo competitivos en el mercado de alambres comunes, especiales y servicios de recocido, trefilado, fosfatado y bonderizado.</p>',
        ]);
    }
}






