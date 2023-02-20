<!-- Header section -->
<header class="header-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="site-logo">
                    <img src="/img/panel.png" alt="">
                </div>
                <div class="nav-switch">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                @guest
                <a href="#" id="register-button" class="register-btn regis-btn">{{ __("Regístrate") }}</a>
                @include('partials.learning.modals.register')

                <a href="#" id="login-button" class="login-btn regis-btn">{{ __("Iniciar sesión") }}</a>
                @include('partials.learning.modals.login')

                @else
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="logout-btn header-btn">
                    {{ __("Salir") }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @endguest
                <nav class="main-menu">
                    <ul>
                        <li><a href="{{ route('welcome') }}" class="">{{ __("Inicio") }}</a></li>
                        <li><a href="{{ route('courses.index') }}">{{ __("Productos") }}</a></li>
                        <li><a href="blog.html">Nosotros</a></li>
                        <li><a href="#" id="instructor-button">{{ __("Vender") }}</a>
                            @include('partials.learning.modals.instructor')
                        </li>
                        @teacher
                        <li><a class="brand-text" href="{{ route('teacher.index') }}">{{ __("Dashboard") }}
                            </a></li>
                        @endteacher
                        @auth
                        <li><a class="brand-text" href="{{ route('student.index') }}">{{ __("Almacen") }}</a></li>
                        @endauth
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</header>
<!-- Header section end -->

@push("js")
<script>
    @if(session('error-login'))
    $("#login-modal").modal();
    @endif
    jQuery("#login-button").on("click", function(e) {
        e.preventDefault();
        $("#login-modal").modal();
    })
</script>
<script>
    @if(session('error-register'))
    $("#register-modal").modal();
    @endif
    jQuery("#register-button").on("click", function(e) {
        e.preventDefault();
        $("#register-modal").modal();
    })
</script>
<script>
    @if(session('error-instructor'))
    $("#instructor-modal").modal();
    @endif
    jQuery("#instructor-button").on("click", function(e) {
        e.preventDefault();
        $("#instructor-modal").modal();
    })
</script>
@endpush
