<div class="products-container">

    <div class="desktop-two-columns-aside">

        <div class="column-aside">
            <div class="categories-menu">
                <div class="categories-menu-title">
                    <h2>Categorías</h2>
                </div>
                <div class="categories-menu-elements">
                    <ul>
                        <li class="buttons-category" data-url="{{route('front_products')}}">Todas</li>
                        @if(isset($product_categories))
                            @foreach($product_categories as $category_element)
                                <li class="buttons-category {{isset($category) && $category->id == $category_element->id ? 'active' : ''}}" data-url="{{route('front_product_category', ['category'=>$category_element->id])}}">{{$category_element->title}}</li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>

        <div class="column-main">

            <div class="products">

                <div class="products-menu">
                    <div class="desktop-two-columns">
                        <div class="column">
                            <div class="products-menu-counter-items">
                                <span>Enseñando 20 conciertos de 100</span>
                            </div>
                        </div>
                        <div class="column">
                            <div class="products-menu-filter">
                                <select class="menu-filter">
                                    <option selected disabled>Ordenar por precio</option>
                                    <option value="{{route('front_product_price_desc', ['price'=>'desc'])}}">Mayor a menor</option>
                                    <option value="{{route('front_product_price_asc', ['price'=>'asc'])}}">Menor a mayor</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="products-gallery">

                    @if(isset($products))
                        @foreach($products as $product)
                            <div class="products-element">
                                <div class="products-element-image"></div>
                                <div class="products-element-title">
                                    <span>{{$product->title}}</span>
                                </div>
                                <div class="products-element-day">
                                    <span>
                                        <svg viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M9,10V12H7V10H9M13,10V12H11V10H13M17,10V12H15V10H17M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5C3.89,21 3,20.1 3,19V5A2,2 0 0,1 5,3H6V1H8V3H16V1H18V3H19M19,19V8H5V19H19M9,14V16H7V14H9M13,14V16H11V14H13M17,14V16H15V14H17Z" />
                                        </svg>{{$product->day}}
                                    </span>
                                </div>
                                <div class="products-element-address">
                                    <span>
                                        <svg viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M12,2C15.31,2 18,4.66 18,7.95C18,12.41 12,19 12,19C12,19 6,12.41 6,7.95C6,4.66 8.69,2 12,2M12,6A2,2 0 0,0 10,8A2,2 0 0,0 12,10A2,2 0 0,0 14,8A2,2 0 0,0 12,6M20,19C20,21.21 16.42,23 12,23C7.58,23 4,21.21 4,19C4,17.71 5.22,16.56 7.11,15.83L7.75,16.74C6.67,17.19 6,17.81 6,18.5C6,19.88 8.69,21 12,21C15.31,21 18,19.88 18,18.5C18,17.81 17.33,17.19 16.25,16.74L16.89,15.83C18.78,16.56 20,17.71 20,19Z" />
                                        </svg>{{$product->address}}
                                    </span>
                                </div>
                                <div class="products-element-show" data-url="{{route('products_show', ['product'=>$product->id])}}">
                                    <button>Ver producto</button>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>