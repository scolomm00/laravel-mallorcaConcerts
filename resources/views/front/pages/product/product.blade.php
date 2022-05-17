<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="192x192" href="https://drop.show/wp-content/uploads/2021/04/logonegro.png">


    <title>Producto</title>
    <meta name="description" content="descripción de la web, se recomienda 90 caracteres">
    <meta name="keywords" content="palabras clave, separadas, por comas">

    @include('front.layout.partials.style')

</head>

<body>
    
    @include('front.layout.partials.header')

    <main>
        <div class="product">
            <div class="desktop-two-columns desktop-only">
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
                        <div class="box-tabs-content">
                            <div class="tabs">
                                <div class="tab active" data-num="one">Descripción</div>
                                <div class="tab" data-num="two">Características</div>
                                <div class="tab" data-num="three">Opiniones</div>
                            </div>
                            <div class="tabs-content">
                                <div class="tab-content active" data-num="one">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy
                                        text ever since the 1500s, when an unknown printer took a galley
                                        of type and scrambled it to make a type specimen book. It has
                                        survived not only five centuries, but also the leap into
                                        electronic typesetting, remaining essentially unchanged.
                                        It was popularised in the 1960s with the release of Letraset
                                        sheets containing Lorem Ipsum passages, and more recently with
                                        desktop publishing software like Aldus PageMaker including
                                        versions of Lorem Ipsum.
                                    </p>
                                </div>
                                <div class="tab-content" data-num="two">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy
                                        text ever since the 1500s, when an unknown printer took a galley
                                        of type and scrambled it to make a type specimen book. It has
                                        survived not only five centuries, but also the leap into
                                        electronic typesetting, remaining essentially unchanged.
                                    </p>
                                </div>
                                <div class="tab-content" data-num="three">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="product-text-day">
                            <div class="desktop-two-columns">
                                <div class="column">
                                    <div class="product-text-day-letter">
                                        <span>Cantidad de entradas:</span>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="box-plus-minus">
                                        <div class="plus-minus-counter rest">
                                            <button>-</button>
                                        </div>
                                        <div class="plus-minus counter">
                                            <input class="plus-minus-input" type="number" value="1">
                                        </div>
                                        <div class="plus-minus-counter sume">
                                            <button>+</button>
                                        </div>
                                    </div>
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
        <div class="product">
            <div class="mobile-one-column mobile-only">
                <div class="product-title">
                    <h3>PRODUCTO</h3>
                </div>
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
                        <div class="box-element">
                            <select class="select-related">
                                <option value="one" selected>Descripción</option>
                                <option value="two">Características</option>
                                <option value="three">Opiniones</option>
                            </select>
                            <div class="box-message">
                                <div class="message active" data-num="one">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy
                                        text ever since the 1500s, when an unknown printer took a galley
                                        of type and scrambled it to make a type specimen book. It has
                                        survived not only five centuries, but also the leap into
                                        electronic typesetting, remaining essentially unchanged.
                                        It was popularised in the 1960s with the release of Letraset
                                        sheets containing Lorem Ipsum passages, and more recently with
                                        desktop publishing software like Aldus PageMaker including
                                        versions of Lorem Ipsum.
                                    </p>
                                </div>
                                <div class="message" data-num="two">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy
                                        text ever since the 1500s, when an unknown printer took a galley
                                        of type and scrambled it to make a type specimen book. It has
                                        survived not only five centuries, but also the leap into
                                        electronic typesetting, remaining essentially unchanged.
                                    </p>
                                </div>
                                <div class="message" data-num="three">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been the industry's standard dummy.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="product-text-day">
                            <div class="desktop-two-columns">
                                <div class="column">
                                    <div class="product-text-day-letter">
                                        <span>Cantidad de entradas:</span>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="box-plus-minus">
                                        <div class="plus-minus-counter rest">
                                            <button>-</button>
                                        </div>
                                        <div class="plus-minus counter">
                                            <input class="plus-minus-input" type="number" value="1">
                                        </div>
                                        <div class="plus-minus-counter sume">
                                            <button>+</button>
                                        </div>
                                    </div>
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
    </main>

    @include('front.layout.partials.footer')

    @include('front.layout.partials.js')

</body>

</html>