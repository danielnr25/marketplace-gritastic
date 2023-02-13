<!-- course section -->
<section class="course-section mb-5">
    <div class="container">
        <div class="section-title mb-3">
            <h2>{{ __("Cursos destacados") }}</h2>
        </div>
    </div>
    <div class="course-warp">

        <div class="row course-items-area" style="margin-top: 4rem;">

            @forelse($courses as $course)
                <div class="mix col-lg-3 col-md-4 col-sm-6">
                    <div class="course-item">
                        <div class="course-info">
                            <div class="course-text">
                                <h5>{{ $course->title }}</h5>
                                <div class="docente">Docente: {{ $course->teacher->name }}</div>
                            </div>
                            <div class="course-author">
                                <a class="insc-btn btn-block" href="{{ route('courses.show', ['course' => $course]) }}">
                                    {{ __("Inscribirse") }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="empty-results">
                        {!! __("No hay cursos para mostrar") !!}
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
