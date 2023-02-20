{{--{{ dd($course, $title) }}--}}


<section class="courses-section spad">
    <div class="section-title mb-3">
        <h2>{{ $title }}</h2>
        <a href="{{ route('teacher.courses') }}" class="crear-btn">
            {{ __("Volver") }}
        </a>
    </div>
    <div class="container">
        @include('partials.form_errors')

        @if($course->picture)
            <div class="row">
                <div class="col-3 offset-9">
                    <img alt="{{ $title }}" class="img-fluid" width="250" src="{{ $course->imagePath() }}">
                </div>
            </div>
        @endif

        {!! Form::model($course, $options) !!}
            @isset($update)
                @method("PUT")
            @endisset

            <input type="hidden" name="orderedUnits">

        <div class="form-group">
            {!! Form::label('title', __("Título de la imagen")) !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('price', __("Escoge un precio para tu imagen")) !!}
            {!! Form::select('price', \App\Models\Course::prices, null, ["class" => "form-control"]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('categories[]', __("Selecciona las categorías de tu imagen")) !!}
            {!! Form::select('categories[]', \App\Models\Category::pluck("name", "id"), null, ["class" => "form-control"]) !!}
        </div>
<!--         <div class="form-group">
            <h2 class="text-muted text-center mb-2">
                {{ __("Organiza las unidades de tu curso") }}
            </h2>
            <ul class="drag-list">
                @forelse($course->units as $unit)
                    <li data-id="{{ $unit->id }}">
                        <span class="title">
                            {{ $unit->title }}
                            @if($unit->free)
                                <span class="badge badge-success float-right">
                                    {{ __("Gratis") }}
                                </span>
                            @endif
                        </span>
                        {{-- se le da esta clase para dependiendo del tipo (video, archivo o section) agarre un estilo--}}
                        <span class="drag-area {{ $unit->unit_type }}">
                            @switch($unit->unit_type)
                                @case(\App\Models\Unit::VIDEO)
                                    <i class="fa fa-file-video-o text-white"></i>
                                @break
                                @case(\App\Models\Unit::SECTION)
                                    <i class="fa fa-list-alt text-white"></i>
                                @break
                                @case(\App\Models\Unit::ZIP)
                                    <i class="fa fa-file-zip-o text-white"></i>
                                @break
                            @endswitch
                        </span>
                    </li>
                @empty
                    <div class="empty-results">
                        {!! __("No tienes ninguna unidad todavía: :link", ["link" => "<a href='".route('teacher.units.create')."'>Añade nuevas unidades para tu curso</a>"]) !!}
                    </div>

                @endforelse
            </ul>
        </div> -->

<!--         <div class="form-group">
            {!! Form::label('description', __("Añade el contenido del curso")) !!}
            {!! Form::textarea('description', old('description') ?? $course->description, ['id' => "summernote"]) !!}
        </div> -->
        <div class="form-group">
            {!! Form::label('description', __("Añade la descripción de tu producto")) !!}
            {!! Form::text('description',null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('picture', __("Añade una imagen para tu curso")) !!}
            <!-- {!! Form::file('picture',['class' => 'custom-file-input', 'id' => 'picture']) !!} -->
            {!! Form::text('picture',null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit($textButton, ['class' => 'crear-btn mt-3 float-left']) !!}

        {!! Form::close() !!}
    </div>
</section>

@push("js")
    <script src="/js/drag-arrange.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        jQuery(document).ready(function () {
            $('#summernote').summernote({
                height: 300,
            });

            $('li').arrangeable({dragSelector: '.drag-area'});
            $('.drag-list').on('drag.end.arrangeable', function () {
                let orderedUnits = [];
                const listItems = $(".drag-list li");
                let order = 1;
                for (let li of listItems) {
                    const id = $(li).data("id");
                    orderedUnits.push({
                        id,
                        order
                    });
                    order++;
                }
                $("input[name=orderedUnits]").val(JSON.stringify(orderedUnits));
            });
        });
    </script>
@endpush
