
<div class="product">
    <div class="desktop-two-columns">
        <div class="product-image">
            <div class="column">
                <div class="product-image-main">
                    <img src="images/estopa.webp" alt="">
                </div>
                <div class="product-image-small">
                    <div class="desktop-five-columns">
                        <div class="column">
                            <img src="images/estopa.webp" alt="">
                        </div>
                        <div class="column">
                            <img src="images/estopa.webp" alt="">
                        </div>
                        <div class="column">
                            <img src="images/estopa.webp" alt="">
                        </div>
                        <div class="column">
                            <img src="images/estopa.webp" alt="">
                        </div>
                        <div class="column">
                            <img src="images/estopa.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-text">
            <div class="column">
                <div class="product-text-title">
                    <h1>ESTOPA - Gira FUEGO 2022</h1>
                </div>
                <div class="product-text-price">
                    <span> 35€ entrada general</span>
                </div>
                
                @include('front.components.desktop.tabs')

                <div class="product-text-day">
                    <div class="desktop-two-columns">
                        <div class="column">
                            <div class="product-text-day-letter">
                                <span>Cantidad de entradas:</span>
                            </div>
                        </div>
                        <div class="column">

                            @include ('front.components.desktop.plus_minus_button')

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