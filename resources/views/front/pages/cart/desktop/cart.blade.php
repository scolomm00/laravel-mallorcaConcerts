<div class="cart">

    @include('front.components.desktop.title')

    <div class="cart-table">
        <table>
            <tr>
                <th></th>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
            </tr>
            @if(isset($carts))
                @foreach($carts as $cart)
                    <tr>
                        <td><img src="images/estopa.webp" alt=""></td>
                        <td>{{$cart->price->product->title}}</td>
                        <td>{{$cart->price->base_price}}€</td>
                        <td>
                            <div class="box-plus-minus">
                                <div class="plus-minus-counter rest plus-minus-button" data-url="{{route('minus_cart', ['fingerprint'=>$fingerprint, 'price_id'=>$cart->price_id])}}">
                                    <button class="plus-minus-counter">-</button>
                                </div>
                                <div class="plus-minus counter">
                                    <input class="quantity" name="quantity" type="number" value="{{$cart->quantity}}">
                                </div>
                                <div class="plus-minus-counter sume plus-minus-button" data-url="{{route('plus_cart', ['fingerprint'=>$fingerprint, 'price_id'=>$cart->price_id])}}">
                                    <button>+</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @endif
        </table>
    </div> 
    @if(isset($carts))
        <div class="cart-resume">
            <table>
                <tr>
                    <th colspan="2">Resumen de la compra</th>
                </tr>
                <tr>
                    <td>Base imponible</td>

                    @php
                        $total_base = 0;
                        foreach($carts as $cart){
                            $total_base += $cart->price->base_price * $cart->quantity;
                        }
                    @endphp

                    <td>{{$total_base}}€</td>
                </tr>
                <tr>
                    <td>IVA</td>

                    @php
                        $total_tax = 0;
                        foreach($carts as $cart){
                            $total_tax += $cart->price->base_price * $cart->quantity * $cart->price->tax->type/100;
                        }
                    @endphp

                    <td>{{$total_tax}}€</td>
                </tr>
                <tr class="total">
                    <td>Total</td>

                    @php
                        $total = 0;
                        foreach($carts as $cart){
                            $total += $cart->price->base_price * $cart->quantity + $cart->price->base_price * $cart->quantity * $cart->price->tax->type/100;
                        }
                    @endphp

                    <td>{{$total}}€</td>
                </tr>
            </table>
            <div class="cart-resume-button">
                    <div class="cart-resume-button-return">
                        <button>Volver</button>
                    </div>
                    <div class="cart-resume-button-buy" data-url="{{route('front_checkout')}}">
                        <button>Pagar</button>
                    </div>
                </div>
            </div>
        </div>
    @endif      
</div>