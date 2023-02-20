<!-- course section -->
<section class="course-section spad">
    <div class="container">
        <div class="section-title mb-3 mt-0">
            <h2>{{ __("Empieza a vender") }}</h2>
            <a href="{{ route('teacher.courses.create') }}" class="crear-btn">
                {{ __("Sube tu producto") }}
            </a>
        </div>
    </div>
    <div class="course-warp">
        <div class="row course-items-area">
            @forelse($courses as $course)
            <!-- course -->
            <div class="mix col-lg-4 col-md-6 col-sm-6">
                <div class="course-item">
                    <div class="course-info">
                        <div class="img">
                            <img id="imagen" src="{{ $course->picture }}" alt="">
                        </div>
                        <div class="course-text">
                            <h5>{{ $course->title }}</h5>
                        </div>
                        <div class="price">Precio: {{ $course->price }}€</div>
                        <div class="course-author">
                            <a href="{{ route("teacher.courses.update", ["course" => $course]) }}">
                                {{ __("Gestionar producto") }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- course end -->
            @empty
            <div class="container">
                <div class="empty-results">
                    {!! __("No tienes ningún producto todavía: :link", ["link" => "<a href='".route(' teacher.courses.create')."'>Crear mi producto</a>"]) !!}
                </div>
            </div>
            @endforelse
        </div>

        <div class="row">
            @if(count($courses))
            {{ $courses->links() }}
            @endif
        </div>
    </div>
</section>
<!-- course section end -->
