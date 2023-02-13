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
                "title" => "Algebra",
                "description" => "Aprende todo sobre Algebra desde cero.",
                "price" => 9.99,
                "featured" => 1,
                "bg" => "F35144",
                "categories" => [1],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Geometría",
                "description" => "Compre la Geometría desde cero.",
                "price" => 11.99,
                "bg" => "F35144",
                "categories" => [1],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Raz. Matemática",
                "description" => "Compren la Raz. Matemática desde cero.",
                "price" => 19.99,
                "bg" => "F35144",
                "categories" => [1]
            ],
            [
                "title" => "Economía y Finanzas",
                "description" => "Todo lo que necesitas saber sobre economía y finanzas en este curso completo.",
                "price" => 14.99,
                "bg" => "41B881",
                "categories" => [3],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Redacción de Textos",
                "description" => "Aprenderás todo acerca de la redacción de textos desde cero.",
                "price" => 9.99,
                "bg" => "0CC1E9",
                "categories" => [2]
            ],
            [
                "title" => "Comprensión Lectora",
                "price" => 19.99,
                "description" => "Aprende a desarrrollar aplicaciones móviles con React Native y Expo paso a paso con este súper curso",
                "featured" => 1,
                "bg" => "0CC1E9",
                "categories" => [2],
                "status" => Course::PUBLISHED
            ],

            [
                "title" => "Literatura",
                "description" => "Aprenderás todo acerca de la literatura desde sus orígenes hasta la actualidad",
                "price" => 9.99,
                "bg" => "0098B6",
                "categories" => [2]
            ],
            [
                "title" => "Geometría Analítica",
                "description" => "Comprenderás todo acerca de la Geometría Analítica desde sus orígenes hasta la actualidad",
                "price" => 9.99,
                "featured" => 1,
                "bg" => "FF9733",
                "categories" => [1],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Economía",
                "description" => "Aprenderás todo acerca de la economía desde sus orígenes hasta la actualidad",
                "price" => 14.99,
                "bg" => "FF9733",
                "categories" => [3]
            ],
            [
                "title" => "Historia Universal",
                "description" => "Aprenderás todo acerca de la historia universal desde sus orígenes hasta la actualidad",
                "price" => 19.99,
                "featured" => 1,
                "bg" => "FF9733",
                "categories" => [3],
                "status" => Course::PUBLISHED
            ],
            [
                "title" => "Historia del Perú",
                "description" => "Aprenderás todo acerca de la historia del Perú desde sus orígenes hasta la actualidad",
                "price" => 19.99,
                "bg" => "FF9733",
                "categories" => [3]
            ],
        ];

        foreach ($courses as $course) {
            $categories = $course['categories'];
            $course['picture'] = Image::image(
                storage_path('app/public/courses'),
                $course['title'],
                $course['bg'],
                850,
                350,
                false
            );
            $course['user_id'] = User::whereRole(User::TEACHER)->get()->random()->id;
            unset($course['categories']);
            unset($course['bg']);
            $model = Course::create($course);
            $model->categories()->sync($categories);
        }
    }
}
