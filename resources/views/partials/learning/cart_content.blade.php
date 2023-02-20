<div class="row">
    <div class="table-responsive pt-5">
        <table class="table table-hover">
            <thead class="border-1" style="text-align:center">
            <tr>
                <th>{{ __("Producto") }}</th>
                <th>{{ __("Precio") }}</th>
                <th>{{ __("Acciones") }}</th>
            </tr>
            </thead>
            <tbody style="text-align: center;">
            @forelse($cart->getContent() as $course)
                <tr class="title-cart">
                    <td>{{ $course->title }}</td>
                    <td>{{ $course->formatted_price }}</td>
                    <td>
                        <a href="{{ route("remove_course_from_cart", ["course" => $course]) }}"
                           class="btn btn-outline-danger"
                        >
                           <img src="https://cdn-icons-png.flaticon.com/128/2907/2907762.png" alt="Eliminar" width="20px" height="20px">
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">
                        <div class="empty-results">
                            {!! __("No tienes ningun producto en el carrito.") !!}
                        </div>
                    </td>
                </tr>
            @endforelse
            </tbody>
            <tfoot class="brand-text font-weight-bold">
            <tr>
                <td colspan="2">
                    @include("partials.learning.courses.coupon_form")
                </td>
                <td>
                    <div class="pt-2 total-card">
                        {{ __("Total: :total", ["total" => $cart->totalAmount()]) }}
                    </div>
                </td>
            </tr>
            @if(session()->has("coupon"))
                <tr>
                    <td colspan="2">&nbsp;</td>
                    <td>
                        <div class="pt-2" style="font-size: 25px">
                            {{ __("Con descuento total :total", ["total" => $cart->totalAmountWithDiscount()]) }}
                        </div>
                    </td>
                </tr>
            @endif
            </tfoot>
        </table>
    </div>
</div>

