<div class="checkout">
    
    @include('front.components.mobile.title')

    <div class="checkout-form">
        <div class="mobile-one-column mobile-only">
            <div class="column">
                <div class="checkout-form-data">
                    <form action="">
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
                                        <input type="tel" name="telephone">
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
                                        <select name="city">
                                            <option value="asturias">Asturias</option>
                                            <option value="barcelona">Barcelona</option>
                                            <option value="cadiz">Cádiz</option>
                                            <option value="granada">Granada</option>
                                            <option value="coruna">La Coruña</option>
                                            <option value="madrid">Madrid</option>
                                            <option value="malaga">Málaga</option>
                                            <option value="palma" selected>Palma de Mallorca</option>
                                            <option value="valencia">Valencia</option>
                                            <option value="zaragoza">Zaragoza</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="form-element">
                                    <div class="form-element-label">
                                        <label>Código postal</label>
                                    </div>
                                    <div class="form-element-input">
                                        <input type="number" name="cp">
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
                    </form>
                </div>
            </div>
            <div class="column">
                <div class="checkout-form-payment">
                    <form action="">
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
                        </div>
                        <div class="checkout-form-payment-radio">
                            <div class="checkout-form-payment-radio-item">
                                <input type="radio" id="banco" name="payment">
                                <label for="banco">Transferencia bancaria</label>
                            </div>
                            <div class="checkout-form-payment-radio-item">
                                <input type="radio" id="paypal" name="payment">
                                <label for="paypal">Paypal</label>
                            </div>
                            <div class="checkout-form-payment-radio-item">
                                <input type="radio" id="tarjeta" name="payment">
                                <label for="tarjeta">Tarjeta de crédito</label>
                            </div>
                        </div>
                        <div class="checkout-form-payment-button">
                            <button>Pagar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
