
<div class="product">
    <div class="desktop-two-columns">
        <div class="column">
            <div class="product-image">
            
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
        <div class="column">
            <div class="product-text">
            
                <div class="product-text-title">
                    <h1>{{$product->title}}</h1>
                </div>

                <div class="product-text-category">
                    <h3>{{$product->category->title}}</h3>
                </div>

                <div class="product-text-price">
                    <svg viewBox="0 0 24 24">
                        <path fill="currentColor" d="M13,8.5H11V6.5H13V8.5M13,13H11V11H13V13M13,17.5H11V15.5H13V17.5M22,10V6C22,4.89 21.1,4 20,4H4A2,2 0 0,0 2,6V10C3.11,10 4,10.9 4,12A2,2 0 0,1 2,14V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V14A2,2 0 0,1 20,12A2,2 0 0,1 22,10Z" />
                    </svg><span>{{$product->price}}€</span>
                </div>
                
                @include('front.components.desktop.tabs')

                <div class="desktop-two-columns">
                    <div class="column">
                        <div class="product-text-tickets">
                            <span>Cantidad de entradas:</span>
                        </div>
                    </div>
                    <div class="column">

                        @include ('front.components.desktop.plus_minus_button')

                    </div>
                </div>
                
                <div class="product-text-date">
                    <div class="product-text-day">
                        <svg viewBox="0 0 24 24">
                            <path fill="currentColor"
                            d="M9,10V12H7V10H9M13,10V12H11V10H13M17,10V12H15V10H17M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5C3.89,21 3,20.1 3,19V5A2,2 0 0,1 5,3H6V1H8V3H16V1H18V3H19M19,19V8H5V19H19M9,14V16H7V14H9M13,14V16H11V14H13M17,14V16H15V14H17Z" />
                        </svg><span>{{$product->day}}</span>
                    </div>
                    <div class="product-text-hour">
                        <svg viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22C6.47,22 2,17.5 2,12A10,10 0 0,1 12,2M12.5,7V12.25L17,14.92L16.25,16.15L11,13V7H12.5Z" />
                        </svg><span>{{$product->hour}}</span>
                    </div>
                </div>
                <div class="product-text-address">
                    <svg viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M12,2C15.31,2 18,4.66 18,7.95C18,12.41 12,19 12,19C12,19 6,12.41 6,7.95C6,4.66 8.69,2 12,2M12,6A2,2 0 0,0 10,8A2,2 0 0,0 12,10A2,2 0 0,0 14,8A2,2 0 0,0 12,6M20,19C20,21.21 16.42,23 12,23C7.58,23 4,21.21 4,19C4,17.71 5.22,16.56 7.11,15.83L7.75,16.74C6.67,17.19 6,17.81 6,18.5C6,19.88 8.69,21 12,21C15.31,21 18,19.88 18,18.5C18,17.81 17.33,17.19 16.25,16.74L16.89,15.83C18.78,16.56 20,17.71 20,19Z" />
                    </svg><span>{{$product->address}}</span>
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