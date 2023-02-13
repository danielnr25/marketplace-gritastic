<section class="area-course">
    <div class="st-main">
        <div class="row">
            <div class="column">
                <h2 class="web">Curso de {{ $course->title }}</h2>
                <p class="web-p">{{ $course->description }}</p>
                @include('partials.learning.courses.rating', ['rating' => $course->rating])
            </div>
        </div>
    </div>
</section>
