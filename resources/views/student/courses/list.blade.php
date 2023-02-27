<!-- course section -->
<section class="course-section spad">
    <div class="container">
        <div class="section-title mb-3 mt-0">
            <h2>{{ __("Tus imagenes compradas") }}</h2>
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
                            <div class="students">{{ __(":count", ['count' => $course->teacher->name]) }}</div>
                        </div>
                        <div class="course-author">
                            <a onclick="descargar()" >
                                {{ __("Descagar") }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- course end -->
            @empty
            <div class="container">
                <div class="empty-results">
                    {!! __("No tienes has realizado ninguna compra: :link", ["link" => "<a href='".route('courses.index')."'>Ver productos</a>"]) !!}
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

@push('js')
<script>
    function descargar() {
        var imagen = document.getElementById("imagen").src;
        var link = document.createElement("a");
        link.download = "imagen.png";
        link.href = imagen;
        link.click();
    }
</script>

@endpush
