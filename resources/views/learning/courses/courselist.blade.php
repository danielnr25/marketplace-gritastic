<!-- course section -->
<section class="course-section">
    <div class="cards">
        <div class="rows">
            @forelse($courses as $course)
            <a class="card" href="{{ route('courses.show', ['course' => $course]) }}">
                <div class="dimmable">
                    <div class="dimmer">
                        <div class="content">
                            <div class="center open">
                                <div class="button">{{ __("Ver") }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="img">
                        <img class=" lazyloaded" src="{{ $course->picture }}">
                    </div>
                </div>
                <div class="description">
                    <div class="name-course">
                        <h4>{{ $course->title }}</h4>

                    </div>
                    <div class="name-course">
                        <p>Autor: {{ $course->teacher->name }}</p>
                    </div>
                    <div class="name-course" style="font-family: Arial, Helvetica, sans-serif;">
                        <p>Precio: {{ $course->price }}</p>
                    </div>
                    <div class="name-subcategory">
                        <h5>{{ __(":category", ["category" => $category->name]) }}</h5>
                    </div>
                </div>
            </a>
            @empty
            <div class="col-12">
                <div class="empty-results">
                    {!! __("No hay productos para mostrar") !!}
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>
<!-- course section end -->
