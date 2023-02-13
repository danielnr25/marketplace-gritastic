<div class="academy">
    <div class="row">
        <div class="column">
            <h2>Calidad academica con TEACH ME</h2>
            <h3>Encuentra miles de cursos gratis sobre diferentes temáticas diseñados por expertos en pedagogía, a partir de contenidos académicos con licencia abierta provenientes de YouTube e instituciones prestigiosas como Harvard University o MIT.</h3>

            <a href="#" id="register-button" class="register-btn regis-btn">{{ __("Registrarse") }}</a>
            @include('partials.learning.modals.register')
        </div>
        <div class="column">
            <img src="img/img-academy.png" alt="">
        </div>
    </div>
</div>


<script>
    @if(session('error-register'))
    $("#register-modal").modal();
    @endif
    jQuery("#register-button").on("click", function(e) {
        e.preventDefault();
        $("#register-modal").modal();
    })
</script>
