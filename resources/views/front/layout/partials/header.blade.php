<header>
    <div class="mobile-menu mobile-only" id="menuList">
        <ul>
            <li class="buttons-menu" data-url="{{route('front_home')}}">INICIO</li>
            <li class="buttons-menu" data-url="{{route('front_products')}}">CONCIERTOS</li>
            <li class="buttons-menu" data-url="{{route('front_contact')}}">CONTACTO</li>
            <li class="buttons-menu" data-url="{{route('front_faqs')}}">FAQS</li>
        </ul>
    </div>
    <div class="desktop-two-columns mobile-two-columns-aside">
        <div class="column column-main">
            <div class="header-logo">
                <img src="images/logo_footer.webp" alt="">
            </div>
        </div>
        <div class="column column-aside">
            <div class="header-menu desktop-only">
                <ul>
                    <li class="buttons-menu" data-section="home" data-url="{{route('front_home')}}">INICIO</li>
                    <li class="buttons-menu" data-section="products" data-url="{{route('front_products')}}">CONCIERTOS</li>
                    <li class="buttons-menu" data-section="contact" data-url="{{route('front_contact')}}">CONTACTO</li>
                    <li class="buttons-menu" data-section="faqs" data-url="{{route('front_faqs')}}">FAQS</li>
                </ul>
            </div>
            <div class="mobile-header-button-menu mobile-only">
                <div class="hamburger" id="menuButton">
                    <div class="line line1"></div>
                    <div class="line line2"></div>
                    <div class="line line3"></div>
                </div>
            </div>
        </div>
    </div>
</header>