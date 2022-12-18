<?php

namespace Database\Factories;

use App\Models\Mensajeria;
use App\Models\TiposMensajerias;
use App\Models\User;
use Faker\Provider\ar_JO\Text;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MensajeriaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mensajeria::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = substr($this->faker->word(),0,255);
        $parrafo = '<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>';
        $articulo = '<article vocab="http://schema.org/" typeof="article"><meta property="datePublished" content="2017-01-16"><h2>Historia del Lorem Ipsum</h2><div class="img-wrapper appear"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="/static/images/cicero2.jpg" width="230" height="230" class="lazy" alt="cicero"></div><div><p>El Lorem Ipsum fue concebido como un texto de relleno, formateado de una cierta manera para permitir la presentación de elementos gráficos en documentos, sin necesidad de una copia formal. El uso de Lorem Ipsum permite a los diseñadores reunir los diseños y la forma del contenido antes de que el contenido se haya creado, dando al diseño y al proceso de producción más libertad.</p><p>Se cree ampliamente que la historia de Lorem Ipsum se origina con <a href="https://es.wikipedia.org/wiki/Cicerón">Cicerón</a> en el siglo I aC y su texto <i>De Finibus bonorum et malorum</i>. Esta obra filosófica, también conocida como En los extremos del bien y del mal, se dividió en cinco libros. El Lorem Ipsum que conocemos hoy se deriva de partes del primer libro <i>Liber Primus</i> y su discusión sobre el hedonismo, cuyas palabras habían sido alteradas, añadidas y eliminadas para convertirlas en un latín sin sentido e impropio. No se sabe exactamente cuándo el texto recibió su forma tradicional actual. Sin embargo, las referencias a la frase "Lorem Ipsum" se pueden encontrar en la Edición de la Biblioteca Clásica Loeb de 1914 del De Finibus en las secciones 32 y 33. Fue en esta edición del De Finibus en la que H. Rackman tradujo el texto. El siguiente fragmento se selecciona de la sección 32:</p><blockquote><p>"qui dolorem ipsum, quia dolor sit amet consectetur adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem".</p></blockquote><p>Esto es reconocible, en parte, como el estándar del Lorem Ipsum de hoy y fue traducido a:</p><blockquote><p>"Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but occasionally circumstances occur in which toil and pain can procure him some great pleasure".</p></blockquote><p>Pasando a la década de 1960, el Lorem Ipsum fue popularizado por el fabricante de tipografía Letraset, que lo utilizó en sus campañas publicitarias. Letraset ofrecía páginas de Lorem Ipsum como hojas de transferencia, que fueron ampliamente utilizadas en la era anterior a los ordenadores para los diseños. Estas páginas de transferencia, conocidas como Letraset Body Type, se incluyeron en la publicidad de la compañía y en su popular catálogo.</p><p>El Lorem Ipsum fue reintroducido en la década de 1980 por Aldus Corporation, una empresa que desarrolló Software de Publicación de Escritorio. Su producto más conocido <a href="https://es.wikipedia.org/wiki/Adobe_PageMaker">PageMaker</a> viene con gráficos y plantillas de procesamiento de textos previamente instaladas que contienen una versión del lenguaje latín falso.</p></div></article>';
        $lista = '<dl><dt>Definition list</dt><dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</dd><dt>Lorem ipsum dolor sit amet</dt><dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</dd> </dl>';
        $pila = '<h1 style="color: blueviolet;">HTML Ipsum Presents</h1><p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p><h2>Header Level 2</h2><ol><li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li><li>Aliquam tincidunt mauris eu risus.</li></ol><blockquote><p style="color: cornflowerblue;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p></blockquote><h3>Header Level 3</h3><ul><li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li><li>Aliquam tincidunt mauris eu risus.</li></ul>';
        $tabla_links = '<table><thead><tr><th>a</th><th>a</th><th>a</th><th>a</th></tr></thead><tbody><tr><td>b</td><td>b</td><td>b</td><td>b</td></tr><tr><td>c</td><td>c</td><td>c</td><td>c</td></tr><tr><td>d</td><td>d</td><td>d</td><td>d</td></tr></tbody></table><nav><ul><li><a href="#">Home</a></li><li><a href="#">About</a></li><li><a href="#">Clients</a></li><li><a href="#">Contact Us</a></li></ul></nav>';

        return [
            'titulo' => $title,
            'cuerpo' => $this->faker->randomElement(['', $parrafo, $articulo, $lista, $pila, $tabla_links]),
            'tipos_mensajeria_id' => TiposMensajerias::all()->random()->id,
            'respuesta_id' => NULL,
            'user_autor_id' => User::all()->random()->id
        ];
    }
}
