@guest
    <a href="{{ route("welcome") }}"
       class="btn btn-lg btn-block" style="background:#000; color:#fff">
        {{ __("Registrate") }}
    </a>
@else
    @can("purchaseCourse", $course)
        <a style="font-family: Arial, Helvetica, sans-serif;" href="{{ route("add_course_to_cart", ["course" => $course]) }}"
            class="crear-btn btn-block">
            {{ __("Adquiere por :price", ["price" => $course->formatted_price]) }}
        </a>
    @else
        <a href="{{ route('courses.learn', ["course" => $course]) }}"
           class="crear-btn btn-block">
            {{ __("Revisa tu correo") }}
        </a>
    @endcan
@endguest
