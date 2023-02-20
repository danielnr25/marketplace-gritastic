<?php

use App\Helpers\Image;
use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            [
                "title" => "Clases de Fotografía",
                "description" => "Banner de tonalidades turquesa con fotografía de joven usando una cámara. Se puede editar el titulo principal, agregar una descripción y un numero de celular para contactos.",
                "price" => 19.99,
                "featured" => 1,
                "picture" => "https://i.postimg.cc/VNQztQbc/Imagen-01-Arte-1.jpg",
                "categories" => [1],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Fiesta de Arte - Primavera",
                "description" => "Descripción: Banner con fondo blanco con una mezcla de colores en el centro y una imagen que representa la primera.",
                "price" => 19.99,
                "picture" => "https://i.postimg.cc/pdfRYGD5/Imagen-02-Arte-1.jpg",
                "categories" => [1],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Tutor de Dibujo",
                "description" => "Banner con fondo en tonalidad piel, con una imagen de manchas en el centro. Se puede editar la descripción del banner, agregar el nombre del tutor y la pagina web en caso tenga.",
                "price" => 9.99,
                "picture" => "https://i.postimg.cc/pXrVbBt3/Imagen-03-Arte-1.jpg",
                "categories" => [1],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Exhibición Arte y Fotografía",
                "description" => "Banner que tiene como fondo una fotografía y en el centro una imagen donde se encuentra la información requería para el evento la cual es editable. Incluye espacios para datos como fecha, dia, galería, entre otros.",
                "price" => 19.99,
                "picture" => "https://i.postimg.cc/wv9HWXVf/Imagen-04-Arte-1.jpg",
                "categories" => [1],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Diseño de Interiores",
                "description" => "Banner para empresa de diseño de interiores donde se puede incluir el año de la edición y la página web de la empresa.",
                "price" => 19.99,
                "picture" => "https://i.postimg.cc/52FxjNy3/Imagen-05-Arte-1.jpg",
                "categories" => [1],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Diseño de Interiores",
                "description" => "Banner para empresa de diseño de interiores donde se puede incluir el año de la edición y la página web de la empresa.",
                "price" => 29.99,
                "picture" => "https://i.postimg.cc/5Nr4xF4y/Imagen-06-Arte-1.jpg",
                "categories" => [1],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Certamen Miss y Mister",
                "price" => 29.99,
                "description" => "Banner elaborado para concursos de belleza, echo con fondo negros y tonalidades bajas para darle un tono formal y elegante.",
                "featured" => 1,
                "picture" => "https://i.postimg.cc/BZNwX9hF/BANNER-REINADO.jpg",
                "categories" => [2],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Certamen Miss y Mister",
                "description" => "Elaborado con un fondo tipo collage de cuatro participantes en este tipo de concursos. Tiene un efecto de sombra negra a la mitad del diseño, en la cual se ubica la información relacionada a la caratula.",
                "price" => 9.99,
                "featured" => 1,
                "picture" => "https://i.postimg.cc/FKZ0Dmkg/CARATULA-REINADO.jpg",
                "categories" => [2],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Tratamiento de Belleza",
                "description" => "Elaborado para promocionar los diferentes tratamientos que ofrece un centro de belleza. El color principal del banner es una tonalidad de marrón y se acompaña con diseños rosas y blancas de flores.",
                "price" => 34.99,
                "picture" => "https://i.postimg.cc/bJjctGKw/Imagen-03-Belleza-1.jpg",
                "categories" => [2],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Salón de Belleza",
                "description" => "Elaborado para promocionar los diferentes tratamientos que ofrece un centro de belleza y los precios que ofrece. El color principal del banner es una tonalidad del crema, pagina web en el caso tuviera.",
                "price" => 19.99,
                "picture" => "https://i.postimg.cc/PTfCf6Mk/Imagen-04-Belleza-1.jpg",
                "categories" => [2],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Salón de Uñas",
                "description" => "Elaborado para promocionar los diferentes tratamientos que ofrece un salón de uñas. El color principal del banner se una mezcla entre distintos colores de tonalidad clara.",
                "price" => 19.99,
                "picture" => "https://i.postimg.cc/zDtmxM0s/05-Banner-Belleza-1.jpg",
                "categories" => [2],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Banner Salón de Belleza",
                "description" => ": Elaborado para promocionar los diferentes tratamientos que ofrece un centro de belleza y la oferta que esta ofrece al público. El color principal del banner es una tonalidad entre una tonalidad de verde y tonalidad de crema.",
                "price" => 19.99,
                "picture" => "https://i.postimg.cc/RZtjV04m/Imagen-07-Belleza-1.jpg",
                "categories" => [2],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Tratamientos Faciales",
                "description" => "En este curso de alemán aprenderás a utilizar el idioma alemán en diferentes situaciones de la vida cotidiana, para comunicarte con otras personas y desarrollar tu capacidad de expresión oral y escrita.",
                "price" => 19.99,
                "picture" => "https://i.postimg.cc/rsFkD2gJ/Imagen-08-Belleza-1.jpg",
                "categories" => [2],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Contratación de Personal",
                "description" => "Banner para empresas que necesiten contratar personal en cualquier área, donde se especifican las características que necesitan para el puesto en mención y dirección de correo electrónico.",
                "price" => 39.99,
                "picture" => "https://i.postimg.cc/XvVW5xBY/Imagen-01-Negocios-1.jpg",
                "categories" => [7],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Temática San Valentín",
                "description" => "Banner para hoteles que ofrezcan promociones para la fecha. Contiene información relacionada a los precios, la fecha y hora que se aplicara la promoción entre otros datos. ",
                "price" => 39.99,
                "picture" => "https://i.postimg.cc/0yGxrhQ4/Imagen-02-Negocios-1.jpg",
                "categories" => [7],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Empresa de Publicidad",
                "description" => "Banner elaborado para empresas de publicidad, donde se describe el servicio que esta brinda, el nombre de la empresa y la ubicación física del local.",
                "price" => 39.99,
                "picture" => "https://i.postimg.cc/g2bmzGYR/Imagen-03-Negocios-1.jpg",
                "categories" => [7],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Empresa de Sistemas",
                "description" => "Banner elaborado para empresas de sistemas donde se describe los servicios que esta brinda, el nombre de la empresa y la ubicación física del local. Además de diferentes medios de contacto.",
                "price" => 39.99,
                "picture" => "https://i.postimg.cc/RC8vYcyg/Imagen-05-Negocios-1.jpg",
                "categories" => [7],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Agencia de Negocios",
                "description" => "Banner elaborado para agencia de negocios donde se describe los servicios que esta brinda, el nombre de la empresa y la ubicación física del local. Además de diferentes medios de contacto.",
                "price" => 39.99,
                "picture" => "https://i.postimg.cc/Y04M99GN/Imagen-07-Negocios-1.jpg",
                "categories" => [7],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Plan digital",
                "description" => "Banner para profesional en planes digitales, donde aparece la descripción del profesional su foto y los servicios que ofrece.",
                "price" => 39.99,
                "picture" => "https://i.postimg.cc/GtZrsCGW/Imagen-10-Negocios-1.jpg",
                "categories" => [7],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Clínica",
                "description" => "Banner simple para centros clínicos donde se muestra un slogan y el numero de contacto del centro médico.",
                "price" => 39.99,
                "picture" => "https://i.postimg.cc/HnKb1LR8/Imagen-01-Medicina.jpg",
                "categories" => [6],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Clínica",
                "description" => "Banner simple para centros clínicos donde se muestra un slogan, el número de contacto del centro médico, página web y ubicación física del local.",
                "price" => 39.99,
                "picture" => "https://i.postimg.cc/9fjtfrMG/Imagen-02-Medicina.jpg",
                "categories" => [6],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Hospital",
                "description" => "Banner para centros hospitalarios donde se muestra los servicios que este ofrece, el número de contacto del centro médico, página web y ubicación física del local.",
                "price" => 39.99,
                "picture" => "https://i.postimg.cc/Kvknrn3P/Imagen-03-Medicina.jpg",
                "categories" => [7],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Centro Medico",
                "description" => "Banner para centros médicos donde se muestra los servicios que este ofrece, el número de contacto del centro médico, página web y ubicación física del local.",
                "price" => 39.99,
                "picture" => "https://i.postimg.cc/mDmQVjSw-/Imagen-04-Medicina.jpg",
                "categories" => [6],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Fútbol Masculino",
                "description" => "Futbol masculino es un deporte mundialmente conocido.",
                "price" => 39.99,
                "picture" => "https://i.postimg.cc/L66wT6qv/1.jpg",
                "categories" => [4],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Torneo Fútbol Masculino",
                "description" => "Torneo de fútbol masculino, donde se muestra el logo del torneo, el nombre de los equipos participantes, el lugar y la fecha en la que se llevara a cabo el evento.",
                "price" => 39.99,
                "picture" => "https://i.postimg.cc/CxRCh9tw/2-1.jpg",
                "categories" => [4],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Torneo Fútbol Feminino",
                "description" => "Torneo de fútbol Femenino, donde se muestra el logo del torneo, el nombre de los equipos participantes, el lugar y la fecha en la que se llevara a cabo el evento.",
                "price" => 39.99,
                "picture" => "https://i.postimg.cc/k4sw-6KyC/f2.jpg",
                "categories" => [4],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Tematica SuperCampeones",
                "description" => "Los superCampeones es una serie de anime y manga creada por Yōichi Takahashi. La serie se centra en el fútbol y en la amistad. La serie se centra en el fútbol y en la amistad.",
                "price" => 39.99,
                "picture" => "https://i.postimg.cc/MHRT3br2/f3.jpg",
                "categories" => [4],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Voley Mixto - Haikyuu",
                "description" => "La tematica Haikyuu es un manga y anime creado por Haruichi Furudate. La serie se centra en el voley y en la amistad. La serie se centra en el voley y en la amistad.",
                "price" => 39.99,
                "picture" => "https://i.postimg.cc/6pPYZgmp/5.jpg",
                "categories" => [4],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Banner Free Fire",
                "description" => "Free Fire es un videojuego de disparos en tercera persona y supervivencia desarrollado por 111dots Studio y publicado por Garena para dispositivos móviles.",
                "price" => 39.99,
                "picture" => "https://i.postimg.cc/1tQDKXzz/2-BANNER-FREE-FIRE-1.jpg",
                "categories" => [8],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Valorant",
                "description" => "Valorant es un videojuego de disparos en primera persona desarrollado y publicado por Riot Games.",
                "price" => 39.99,
                "picture" => "https://i.postimg.cc/Kj9LF5DK/1-BANNER-VALORANT-INTERSYS.jpg",
                "categories" => [8],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Forntite",
                "description" => "Forntite es un videojuego de disparos en tercera persona y supervivencia desarrollado por 111dots Studio y publicado por Garena para dispositivos móviles.",
                "price" => 39.99,
                "picture" => "https://i.postimg.cc/BZhMJ56c/3-BANNER-FORTNITE-INTERSYS.jpg",
                "categories" => [8],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Clash Royale",
                "description" => "Clash Royale es un videojuego de estrategia en tiempo real desarrollado y publicado por Supercell.",
                "price" => 39.99,
                "picture" => "https://i.postimg.cc/CLPNy9Ys/5-Banner-Clash-Royale.jpg",
                "categories" => [8],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Triviador",
                "description" => "Triviador es un videojuego de preguntas y respuestas desarrollado por Outplay Entertainment.",
                "price" => 39.99,
                "picture" => "https://i.postimg.cc/HkrtT3kD/BANNER-TRIVIADOR.jpg",
                "categories" => [8],
                "status" => Course::PUBLISHED
            ],
        ];

        foreach ($courses as $course) {
            $categories = $course['categories'];
            $course['user_id'] = User::whereRole(User::TEACHER)->get()->random()->id;
            unset($course['categories']);
            $model = Course::create($course);
            $model->categories()->sync($categories);
        }
    }
}
