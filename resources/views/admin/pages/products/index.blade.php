@extends('admin.layout.table_form')

@section('table')

    @if(isset($products))

        @foreach($products as $product_element)
        
            <div class="table-row swipe-element">
                <div class="desktop-two-columns-aside">
                    <div class="column-main">
                        <div class="table-field-container swipe-front">
                            <div class="table-field"><p><span>ID: </span>{{$product_element->id}}</p></div>
                            <div class="table-field"><p><span>Nombre: </span>{{$product_element->name}}</p></div>
                            <div class="table-field"><p><span>Creado: </span>{{$product_element->created_at}}</p></div>
                        </div>
                    </div>
                    <div class="column-aside">

                        <div class="desktop-two-columns">
                            <div class="table-buttons">
                                <div class="column">
                                    <div class="table-button-read" data-url="{{route('products_edit', ['product'=>$product_element->id])}}">
                                        <svg viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="table-button-delete" data-url="{{route('products_destroy', ['product'=>$product_element->id])}}">
                                        <svg viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        @endforeach

    @endif

@endsection

@section('form')

    @if(isset($product))

    <div class="form-button">
        <div class="form-button-reset" data-url="{{route('products_create')}}">
            <button>
                <svg viewBox="0 0 24 24">
                    <path fill="currentColor" d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
                </svg>Borrar
            </button>
        </div>
        <div class="form-button-update" data-url="{{route('products_store')}}">
            <button class="store-button">
                <svg viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M15,9H5V5H15M12,19A3,3 0 0,1 9,16A3,3 0 0,1 12,13A3,3 0 0,1 15,16A3,3 0 0,1 12,19M17,3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V7L17,3Z" />
                </svg>Guardar
            </button>
        </div>
        <div class="form-button-on-off">
            <label class="button">
                <input type="checkbox" class="switch ios">
            </label>
        </div>
    </div>

        <form class="admin-form" action="{{route("products_store")}}">
            
            <input type="hidden" name="id">

            <div class="admin-faqs">
                <div class="box-faqs">
                    <div class="desktop-two-columns">
                        <div class="column">
                            <div class="faqs-label">
                                <label>Nombre</label>
                            </div>
                            <div class="faqs-input">
                                <input type="text" name="name" value="{{isset($product->name) ? $product->name : ''}}">
                            </div>
                        </div>
                        <div class="column">
                            <div class="faqs-label">
                                <label>Título</label>
                            </div>
                            <div class="faqs-input">
                                <input type="text" name="title" value="{{isset($product->title) ? $product->title : ''}}">
                            </div>
                        </div>
                    </div>
                    <div class="desktop-two-columns">
                        <div class="column">
                            <div class="faqs-label">
                                <label>Categoría</label>
                            </div>
                            <div class="faqs-input">
                                <select name="categoria_id">
                                    <option value="">-- Selecciona una categoría --</option>
                                </select>
                            </div>     
                        </div>
                        <div class="column">
                            <div class="faqs-label">
                                <label>Precio</label>
                            </div>
                            <div class="faqs-input">
                                <input type="text" name="price" value="{{isset($product->price) ? $product->price : ''}}">
                            </div>
                        </div>
                    </div>
                    
                    <div class="faqs-label">
                        <label>Descripción</label>
                    </div>
                    <div class="faqs-ckeditor">
                        <textarea class="ckeditor" name="description">{{isset($product->description) ? $product->description : ''}}</textarea>
                    </div>
                    <div class="faqs-label">
                        <label>Caracteristicas</label>
                    </div>
                    <div class="faqs-ckeditor">
                        <textarea class="ckeditor" name="features">{{isset($product->features) ? $product->features : ''}}</textarea>
                    </div>

                </div>      
            </div>
        
        </form>
    
    @endif
 
@endsection