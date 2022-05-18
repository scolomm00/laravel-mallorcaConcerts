<div class="product">
    <div class="mobile-one-column">
        <div class="product-image">
            <div class="column">
                <div class="product-image-main">
                    <img src="images/estopa.webp" alt="">
                </div>
            </div>
        </div>
        <div class="product-text">
            <div class="column">
                <div class="product-text-title">
                    <span>ESTOPA - Gira FUEGO 2022</span>
                </div>
                <div class="product-text-price">
                    <span> 35€ entrada general</span>
                </div>
                
                @include('front.components.mobile.select')
                
                <div class="product-text-day">
                    <div class="desktop-two-columns">
                        <div class="column">
                            <div class="product-text-day-letter">
                                <span>Cantidad de entradas:</span>
                            </div>
                        </div>
                        <div class="column">
                            
                            @include ('front.components.desktop.plus-minus-button')

                        </div>
                    </div>
                </div>
                <div class="product-text-booking">
                    <div class="product-text-booking-button">
                        <button>Comprar entradas</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
