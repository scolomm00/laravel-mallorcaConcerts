@extends('admin.layout.table_form')

@section('table')

    @if(isset($sales))

        @foreach($sales as $sale_element)
        
            <div class="table-row swipe-element">
                <div class="desktop-two-columns-aside">
                    <div class="column-main">
                        <div class="table-field-container swipe-front">
                            <div class="table-field"><p><span>ID: </span>{{$sale_element->id}}</p></div>
                            <div class="table-field"><p><span>Nombre: </span>{{$sale_element->sale_num}}</p></div>
                            <div class="table-field"><p><span>Creado: </span>{{$sale_element->created_at}}</p></div>
                        </div>
                    </div>
                    <div class="column-aside">
                        <div class="desktop-two-columns">
                            <div class="table-buttons">
                                <div class="column">
                                    <div class="table-button-read" data-url="{{route('sales_edit', ['sale'=>$sale_element->id])}}">
                                        <svg viewBox="0 0 24 24">
                                            <path fill="currentColor" 
                                            d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="table-button-delete" data-url="{{route('sales_destroy', ['sale'=>$sale_element->id])}}">
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

    @if(isset($sales))

        <div class="form-button">
            <div class="form-button-reset" data-url="{{route('sales_create')}}">
                <button>
                    <svg viewBox="0 0 24 24">
                        <path fill="currentColor" d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
                    </svg>Borrar
                </button>
            </div>
            <div class="form-button-update" data-url="{{route('sales_store')}}">
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

        <form class="admin-form" action="{{route("sales_store")}}">
            
            <input type="hidden" name="id" value="{{$sale->id}}">

            <div class="sales-panel">
                <div class="box-panel">
                    <div class="box-panel-title">
                        <h3>Datos de la venta</h3>
                    </div>
                    <div class="desktop-two-columns">
                        <div class="column">
                            <div class="panel-label-sales">
                                <label class="data">Total base:</label>
                                <label>{{isset($sale->total_base_price) ? $sale->total_base_price . '€' : ''}}</label>
                            </div>
                            <div class="panel-label-sales">
                                <label class="data">Total IVA:</label>
                                <label>{{isset($sale->total_tax_price) ? $sale->total_tax_price . '€' : ''}}</label>
                            </div>
                            <div class="panel-label-sales">
                                <label class="data">Total:</label>
                                <label>{{isset($sale->total_price) ? $sale->total_price . '€' : ''}}</label>
                            </div>
                        </div>
                        <div class="column">
                            <div class="panel-label-sales">
                                <label class="data">Numero de ticket:</label>
                                <label>{{$sale->sale_num}}</label>
                            </div>
                            <div class="panel-label-sales">
                                <label class="data">Metodo de pago:</label>
                                <label>{{isset($sale->payment_method->title) ? $sale->payment_method->title : ''}}</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-panel">
                    <div class="box-panel-title">
                        <h3>Datos del cliente</h3>
                    </div>
                    <div class="desktop-two-columns">
                        <div class="column">
                            <div class="panel-label-sales">
                                <label class="data">Nombre:</label>
                                <label>{{isset($sale->customer->name) ? $sale->customer->name : ''}}</label>
                            </div>
                            <div class="panel-label-sales">
                                <label class="data">Apellido:</label>
                                <label>{{isset($sale->customer->surname) ? $sale->customer->surname : ''}}</label>
                            </div>
                            <div class="panel-label-sales">
                                <label class="data">Telefono:</label>
                                <label>{{isset($sale->customer->phone) ? $sale->customer->phone : ''}}</label>
                            </div>
                            <div class="panel-label-sales">
                                <label class="data">Email:</label>
                                <label>{{isset($sale->customer->email) ? $sale->customer->email : ''}}</label>
                            </div>
                        </div>
                        <div class="column">
                            <div class="panel-label-sales">
                                <label class="data">Ciudad:</label>
                                <label>{{isset($sale->customer->city) ? $sale->customer->city : ''}}</label>
                            </div>
                            <div class="panel-label-sales">
                                <label class="data">Dirección:</label>
                                <label>{{isset($sale->customer->address) ? $sale->customer->address : ''}}</label>
                            </div>
                            <div class="panel-label-sales">
                                <label class="data">CP:</label>
                                <label>{{isset($sale->customer->postal_code) ? $sale->customer->postal_code : ''}}</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart-table">
                    <table>
                        <tr>
                            <th>Imagen</th>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                        </tr>
                        @if(isset($sale))
                            @foreach($sales as $sale)
                                <tr>
                                    <td><img src="" alt=""></td>
                                    <td>{{isset($sale->carts->price->product->title) ? $sale->carts->price->product->title : ''}}</td>
                                    <td>{{isset($sale->carts->price->base_price) ? $sale->carts->price->base_price : ''}}</td>
                                    <td>{{isset($sale->carts->price->product->quantity) ? $sale->carts->price->product->quantity : ''}}</td>
                                </tr>
                            @endforeach
                        @endif
                    </table>
                </div>
            </div>
        
        </form>

    @endif
 
@endsection