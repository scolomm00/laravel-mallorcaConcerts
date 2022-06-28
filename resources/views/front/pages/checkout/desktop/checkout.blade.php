<div class="checkout">
    
    @include('front.components.desktop.title')
    
    <div class="checkout-form">
        <form class="front-form" action="{{route('front_purchase')}}">
            <input type="hidden" name="total_base_price" value="{{$base_total}}">
            <input type="hidden" name="total_tax_price" value="{{$tax_total}}">
            <input type="hidden" name="total_price" value="{{$total}}">
            <input type="hidden" name="fingerprint" value="{{$fingerprint}}">

            <div class="desktop-two-columns">
                <div class="column">
                    <div class="checkout-form-data">
                        
                        <div class="desktop-two-columns">
                            <div class="column">
                                <div class="form-element">
                                    <div class="form-element-label">
                                        <label>Nombre</label>
                                    </div>
                                    <div class="form-element-input">
                                        <input type="text" name="name">
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="form-element">
                                    <div class="form-element-label">
                                        <label>Apellidos</label>
                                    </div>
                                    <div class="form-element-input">
                                        <input type="text" name="surname">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="desktop-two-columns">
                            <div class="column">
                                <div class="form-element">
                                    <div class="form-element-label">
                                        <label>Teléfono</label>
                                    </div>
                                    <div class="form-element-input">
                                        <input type="tel" name="phone">
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="form-element">
                                    <div class="form-element-label">
                                        <label>Email</label>
                                    </div>
                                    <div class="form-element-input">
                                        <input type="email" name="email">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="desktop-two-columns">
                            <div class="column">
                                <div class="form-element">
                                    <div class="form-element-label">
                                        <label>Ciudad</label>
                                    </div>
                                    <div class="form-element-input">
                                        <input type="text" name="city">
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="form-element">
                                    <div class="form-element-label">
                                        <label>Código postal</label>
                                    </div>
                                    <div class="form-element-input">
                                        <input type="number" name="postal_code">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="desktop-one-column">
                            <div class="column">
                                <div class="form-element">
                                    <div class="form-element-label">
                                        <label>Dirección</label>
                                    </div>
                                    <div class="form-element-input-address">
                                        <input type="text" name="address">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="checkout-form-payment">
                        <div class="cart-resume">
                            <table>
                                <tr>
                                    <th colspan="2">Resumen de la compra</th>
                                </tr>
                                <tr>
                                    <td>Base imponible</td>
                                    <td>{{$base_total}}€</td>
                                </tr>
                                <tr>
                                    <td>IVA</td>
                                    <td>{{$tax_total}}€</td>
                                </tr>
                                <tr class="total">
                                    <td>Total</td>
                                    <td>{{$total}}€</td>
                                </tr>
                            </table>
                        </div>

                        <div class="checkout-form-payment-radio">
                            <div class="checkout-form-payment-radio-item">
                                <input type="radio" name="payment_method_id" value="1">
                                <label>Trasferencia bancaria</label>
                            </div>
                            <div class="checkout-form-payment-radio-item">
                                <input type="radio" name="payment_method_id" value="2">
                                <label>Paypal</label>
                            </div>
                            <div class="checkout-form-payment-radio-item">
                                <input type="radio" name="payment_method_id" value="3">
                                <label>Tarjeta de crédito</label>
                            </div>
                        </div>
                        <div class="checkout-form-payment-button" data-url="{{route('front_purchase')}}">
                            <button>Pagar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>