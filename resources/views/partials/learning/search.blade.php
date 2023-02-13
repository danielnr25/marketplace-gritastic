<!-- search section -->
<section class="search-section">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1" style="margin-left: 14rem;">
                <!-- search form -->
                <form class="course-search-form" action="{{ route('courses.search') }}" method="POST">
                    @csrf
                    <input type="text" autocomplete="off" value="{{ session('search[courses]') }}" name="search" placeholder="{{ __("Buscar imágenes") }}">
                    <button style="display:none" type="submit" class="site-btn">{{ __("Busca cualquier cosa") }}</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- search section end -->
