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
            
            <input type="hidden" name="id" value="{{$product->id}}">

            <div class="admin-panel">
                <div class="box-panel">
                    <div class="desktop-two-columns">
                        <div class="column">
                            <div class="panel-label">
                                <label>Nombre</label>
                            </div>
                            <div class="panel-input">
                                <input type="text" name="name" value="{{isset($product->name) ? $product->name : ''}}">
                            </div>
                        </div>
                        <div class="column">
                            <div class="panel-label">
                                <label>Título</label>
                            </div>
                            <div class="panel-input">
                                <input type="text" name="title" value="{{isset($product->title) ? $product->title : ''}}">
                            </div>
                        </div>
                    </div>
                    <div class="desktop-two-columns">
                        <div class="column">
                            <div class="panel-label">
                                <label>Categoría</label>
                            </div>
                            <div class="panel-input">
                                <select name="category_id">

                                    <option value="" disabled>--Selecciona una categoría--</option>

                                    @if(isset($product_categories))
                                        @foreach($product_categories as $category)
                                            <option value="{{$category->id}}" {{ isset($product->category->id) && $product->category->id == $category->id ? 'selected' : ''}}>{{$category->title}}</option>
                                        @endforeach
                                    @endif
                                    
                                </select>
                            </div>
                        </div>
                        <div class="column">
                            <div class="panel-label">
                                <label>Ubicación</label>
                            </div>
                            <div class="panel-input">
                                <input type="text" name="address" value="{{isset($product->address) ? $product->address : ''}}">
                            </div>
                        </div>
                    </div>
                    <div class="desktop-four-columns">
                        <div class="column">
                            <div class="panel-label">
                                <label>Día</label>
                            </div>
                            <div class="panel-input">
                                <input type="date" name="day" value="{{isset($product->day) ? $product->day : ''}}">
                            </div>     
                        </div>
                        <div class="column">
                            <div class="panel-label">
                                <label>Hora</label>
                            </div>
                            <div class="panel-input">
                                <input type="time" name="hour" value="{{isset($product->hour) ? $product->hour : ''}}">
                            </div>
                        </div>
                        <div class="column">
                            <div class="panel-label">
                                <label>Precio</label>
                            </div>
                            <div class="panel-input">
                                <input type="number" name="price" value="{{isset($product->prices->first()->base_price) ? $product->prices->first()->base_price : ''}}">
                            </div>
                        </div>

                        <div class="column">
                            <div class="panel-label">
                                <label>IVA</label>
                            </div>
                            <div class="panel-input">
                                <select name="tax_id">
                                    <option value="" disabled>--Selecciona un IVA--</option>

                                    @if(isset($taxes))
                                        @foreach($taxes as $tax)
                                            <option value="{{$tax->id}}" {{ isset($product->prices->first()->tax->id)  && $product->prices->first()->tax->id == $tax->id ? 'selected' : ''}}>{{$tax->type}}</option>
                                        @endforeach
                                    @endif
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="panel-label">
                        <label>Descripción</label>
                    </div>
                    <div class="panel-ckeditor">
                        <textarea class="ckeditor" name="description">{{isset($product->description) ? $product->description : ''}}</textarea>
                    </div>
                    <div class="panel-label">
                        <label>Caracteristicas</label>
                    </div>
                    <div class="panel-ckeditor">
                        <textarea class="ckeditor" name="features">{{isset($product->features) ? $product->features : ''}}</textarea>
                    </div>

                </div>      
            </div>
        
        </form>

    @endif
 
@endsection