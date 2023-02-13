<!-- categories section -->
<section class="categories-section">
    <div class="container">
        <div class="section-title">
            <h2 class="categories">{{ __("Categoría de imágenes populares") }}</h2>
        </div>
        <div class="row">
            <!-- categorie -->
            @forelse($categories as $category)

            <div class="col-lg-3 col-md-6">
                <div class="categorie-item">
                    <div class="ci-thumb set-bg" data-setbg="{{$category->picture }}"></div>
                    <div class="ci-text">
                        <h5>{{ $category->name }}</h5>
                        <!-- <p>{{ $category->description }}</p> -->
                      <!--   <span>{{ __(":total cursos", ['total' => $category->courses_count]) }}</span> -->
                    </div>
                    <div class="course-author" style="text-align: center;">
                        <a class="ver-btn btn-block" style="width: 2rem; margin-bottom: 2rem" href="{{ route("courses.category", ["category" => $category]) }}">
                            {{ __("Ver más") }}
                        </a>
                    </div>
                </div>
            </div>
            <!-- categorie -->
            @empty
            <div class="container">
                <div class="empty-results">
                    {{ __("Actualmente no tenemos nada, pero estamos trabajando duro para...") }}
                </div>
            </div>
            @endforelse

            <!-- categorie -->
        </div>
    </div>
</section>
<!-- categories section end -->
