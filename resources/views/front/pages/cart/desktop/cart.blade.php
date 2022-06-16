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
            <tr>
                <td><img src="images/estopa.webp" alt=""></td>
                @if(isset($product))
                    <td>{{$product->title}}</td>
                    <td>{{$product->price_id}}</td>
                    <td>{{$product->quantity}}</td>
                @endif
                <td>

                    @include ('front.components.desktop.plus_minus_button')

                </td>
            </tr>
        </table>
    </div>
    <div class="cart-resume">
        <table>
            <tr>
                <th colspan="2">Resumen de la compra</th>
            </tr>
            <tr>
                <td>IVA</td>
                <td>20€</td>
            </tr>
            <tr>
                <td>Transporte</td>
                <td>0€</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>120€</td>
            </tr>
        </table>
        <div class="cart-resume-button">
                <div class="cart-resume-button-return">
                    <button>Volver</button>
                </div>
                <div class="cart-resume-button-buy">
                    <button>Comprar</button>
                </div>
            </div>
        </div>
    </div>       
</div>
       