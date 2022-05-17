<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" sizes="192x192" href="https://drop.show/wp-content/uploads/2021/04/logonegro.png">


		<title>Carrito de compra</title>
		<meta name="description" content="descripción de la web, se recomienda 90 caracteres">
        <meta name="keywords" 	 content="palabras clave, separadas, por comas">

        @include('front.layout.partials.style')
        
    </head>
    <body>
        
        @include('front.layout.partials.header')

        <main>
            <div class="cart">
                <div class="cart-title">
                    <h1 class="desktop-only">Carrito de la compra</h1>
                    <h3 class="mobile-only">CARRITO DE LA COMPRA</h3>
                </div>
                <div class="cart-table desktop-only">
                    <table>
                        <tr>
                            <th></th>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                        </tr>
                        <tr>
                            <td><img src="images/estopa.webp" alt=""></td>
                            <td>ESTOPA - Gira FUEGO</td>
                            <td>35€</td>
                            <td>
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
                            </td>
                        </tr>
                        <tr>
                            <td><img src="images/fito.webp" alt=""></td>
                            <td>Fito & Fitipaldis - Cada vez cadaver</td>
                            <td>30€</td>
                            <td>
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
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="cart-table mobile-only">
                    <table>
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                        </tr>
                        <tr>
                            <td><img src="images/estopa.webp" alt=""></td>
                            <td>35€</td>
                            <td>
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
                            </td>
                        </tr>
                        <tr>
                            <td><img src="images/fito.webp" alt=""></td>
                            <td>30€</td>
                            <td>
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
        </main>
        
        @include('front.layout.partials.footer')

        @include('front.layout.partials.js')

    </body>
</html>