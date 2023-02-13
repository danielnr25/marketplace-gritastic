<!-- Hero section -->
<section class="hero-section set-bg" style="margin-bottom: 10rem;">
    <div class="container">
        <div class="hero-banner">
            <img src="/img/banner.png" alt="" width="1340" height="400">
        </div>
        <div class="hero-content">
            <h1 class="hero-title">Las mejores líneas graficas</h1>
            @guest
                <p class="hero-subtitle">
                    {{ __("Inicia sesión para obtener ofertas en Gritastic y obtener contenido de alta calida para todos los negocios.") }}
                </p>
            @else
                <p class="hero-subtitle">
                    {{ __("Accede a todas las imágenes, que necesitas para transformar tus ideas en resultados.") }}
                </p>
            @endguest
        </div>
        @guest

        @else
            <h2 class="welcome">
                {{ __("Bienvenido a Gritastic :user", ['user' => auth()->user()->name]) }}
            </h2>
        @endguest
    </div>
</section>
<!-- Hero section end -->
