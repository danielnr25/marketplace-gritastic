@extends('layouts.learning')

@section('hero')
    @include('partials.learning.hero_cart')
@endsection

@section('content')
    @inject("cart", "App\Services\Cart)
    {{--{{ $cart->getContent() }}--}}
    <div class="container">
        @include('partials.learning.cart_content')

        @if($cart->hasProducts())
            <div class="row">
                <div class="col-12 mb-5">
                    <a href="{{ route('checkout-form') }}" class="crear-btn float-right">
                        {{ __("Procesar compra") }}
                    </a>
                </div>
            </div>
        @endif
    </div>

@endsection
