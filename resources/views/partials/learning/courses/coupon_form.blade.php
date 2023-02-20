<form action="{{route('apply_coupon')}}" class="cart-newslatter" method="POST">
    @csrf
    <input type="text"
       name="coupon"
       placeholder="{{ __("¿Coloca tu cupón de descuento?") }}"
       value="{{ session("coupon") }}"
    >
    <button type="submit" class="crear-btn">
        {{ __("Canjear") }}
    </button>
</form>
