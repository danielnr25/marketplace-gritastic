<?php

use Illuminate\Database\Seeder;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                "name" => "Arte",
                "description" => "El arte es una expresión de la creatividad humana, que se manifiesta en una variedad de formas, incluyendo la pintura, la escultura, la arquitectura, la música, la literatura, la danza, el teatro.",
                "picture" => "https://images.ctfassets.net/hrltx12pl8hq/2R1nDTrRheK6ae2IWAgGwW/e879fceb983dd133702ecdbfb560d4cd/Aerial?fit=fill&w=480&h=270&fm=webp",
            ],
            [
                "name" => "Bellezas / Modas",
                "description" => "La belleza es una cualidad o característica de una persona, animal, lugar, objeto o idea que proporciona un placer estético o un sentido de satisfacción.",
                "picture" => "https://images.ctfassets.net/hrltx12pl8hq/29slzVZfucEQwKoKc8QcEA/ed7ceb74525e822dd3eb888f570f0d52/adventure?fit=fill&w=480&h=270&fm=webp"
            ],
            [
                "name" => "Ciencia",
                "description" => "La ciencia es un sistema de conocimiento ordenado que se basa en la observación sistemática de la naturaleza y en la experimentación, y que se caracteriza por la búsqueda de la verdad.",
                "picture" => "https://images.ctfassets.net/hrltx12pl8hq/3m3UgmEedOyY4OmoCuUoGi/48b4d1a57ffb2aea198cc2f1aac77aea/b8ef92f83dd7c134323628382507b0895fcc747e-science_physics-min.jpg?fit=fill&w=480&h=270&fm=webp"
            ],
            [
                "name" => "Deportes",
                "description" => "El deporte es una actividad física que se realiza con un fin competitivo o recreativo. El deporte es una actividad física que se realiza con un fin competitivo o recreativo.",
                "picture" => "https://images.ctfassets.net/hrltx12pl8hq/29DjKkaXC8McSOko6wEwSq/d80a6ca81da3628ed55c0d320dfb863a/91859f11ae6ae225036368030de984605c7b4e00-sports-recreation_water-sports-min.jpg?fit=fill&w=480&h=270&fm=webp"
            ],
            [
                "name" => "Educación",
                "description" => "La educación es el proceso mediante el cual se desarrollan las capacidades y habilidades de una persona para que pueda aprender a vivir de forma autónoma y participativa en la sociedad.",
                "picture" => "https://images.ctfassets.net/hrltx12pl8hq/3mzYTpejiw8EiWA2y0gOOS/f9040e2687788ce01841559648e44055/cf5bec3d20472cdf8374661dd75b924adfe7a3c5-education_school.jpg?fit=fill&w=480&h=270&fm=webp"
            ],
            [
                "name" => "Medicina / Salud",
                "description" => "En un momento en que el mundo entero se ve dramáticamente afectado por las pandemias y los brotes de enfermedades, el mantenimiento de la salud y el bienestar personales está a la vanguardia de la mente de todos.",
                "picture" => "https://images.ctfassets.net/hrltx12pl8hq/2oxH4OnN7OsyWga4KMW88U/d78905a83a7378c61f2ecec6a7f419fc/963ffb472488c4a3f3fb1fef80e2dbc15e09f6a8-healthcare-medical_medical-professionals-min.jpg?fit=fill&w=480&h=270&fm=webp"
            ],
            [
                "name" => "Negocios / Finanzas",
                "description" => "Las imágenes de negocios sólidas son un elemento crucial en el sitio web, la estrategia de medios sociales o el plan de marketing de cualquier negocio en auge.",
                "picture" => "https://images.ctfassets.net/hrltx12pl8hq/1QHuKhHQsUc60OIYu8WmMe/abf8f4f062b51a195164795b21861d14/d6598597b7dcf6da4261f444ab184b8ca298eec0-business-finance_economics-min.jpg?fit=fill&w=480&h=270&fm=webp"
            ],
            [
                "name" => "Gaming",
                "description" => "Los juegos de video son una forma de entretenimiento que se ha vuelto muy popular en los últimos años. Los juegos de video son una forma de entretenimiento que se ha vuelto muy popular en los últimos años.",
                "picture" => "https://i.seadn.io/gcs/files/c1276694100af8f0cbf5185aa9bc43e2.gif?auto=format&w=500&h=500"
            ],
            [
                "name" => "NFT",
                "description" => "Los NFT son activos digitales únicos que se pueden comprar, vender y comerciar en la cadena de bloques. Los NFT son activos digitales únicos que se pueden comprar, vender y comerciar en la cadena de bloques.",
                "picture" => "https://i.seadn.io/gcs/files/0e79f4cf0fbfcb7c03920d357aa33a24.jpg?auto=format&w=500&h=500&fr=1"
            ]

        ];
        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}
