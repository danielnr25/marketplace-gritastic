<!-- course section -->
<section class="course-section mb-5">
    <div class="container">
        <div class="tendencias mb-3">
            <h2>{{ __("Explora las colecciones nuevas") }}</h2>
        </div>
    </div>
    <div class="course-warp">

        <div class="row course-items-area" style="margin-top: 4rem;">

            @forelse($courses as $course)
            <div class="mix col-lg-3 col-md-4 col-sm-6">
                <div class="course-item">
                    <div class="course-info">
                        <div class="img">
                            <img src="{{ $course->picture }}" alt="{{ $course->title }}" style="border-radius: 12px;">
                        </div>
                        <div class="course-text">
                            <h5>{{ $course->title }}</h5>
                            <div class="docente">Autor: {{ $course->teacher->name }}</div>
                            <div class="docente" style="font-family:Arial, Helvetica, sans-serif;"  >Precio: {{ $course->price }}</div>
                        </div>
                        <div class="course-author">
                            <a class="crear-btn btn-block" href="{{ route('courses.show', ['course' => $course]) }}">
                                {{ __("Comprar") }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="empty-results">
                    {!! __("No hay productos para mostrar") !!}
                </div>
            </div>
            @endforelse
        </div>

        <div class="row justify-content-center mt-2">
            @if(count($courses))
            {{ $courses->links() }}
            @endif
            <!-- course -->
        </div>
    </div>
</section>
<!-- course section end -->
