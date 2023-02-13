<nav class="navbar navbar-expand-lg navbar-dark bg-brand">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link text-white" href="{{ route('teacher.courses') }}">{{ __("Cursos") }}</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-white" href="{{ route('teacher.units') }}">{{ __("Unidades") }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('teacher.coupons') }}">{{ __("Cupones") }}</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-white" href="{{ route('teacher.units') }}">{{ __("Unidades") }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('teacher.coupons') }}">{{ __("Cupones") }}</a>
            </li>
        </ul>
        <ul class="navbar-text">
            <a class="nav-link" href="{{ route('welcome') }}">{{ __("Volver al inicio") }}</a>
        </ul>
    </div>
</nav>
