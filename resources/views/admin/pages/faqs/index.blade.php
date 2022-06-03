@extends('admin.layout.table_form')

@section('table')

    @if(isset($faqs))

        @foreach($faqs as $faq_element)
        
            <div class="table-row swipe-element">
                <div class="desktop-two-columns-aside">
                    <div class="column-main">
                        <div class="table-field-container swipe-front">
                            <div class="table-field"><p><span>ID: </span>{{$faq_element->id}}</p></div>
                            <div class="table-field"><p><span>Nombre: </span>{{$faq_element->name}}</p></div>
                            <div class="table-field"><p><span>Creado: </span>{{$faq_element->created_at}}</p></div>
                        </div>
                    </div>
                    <div class="column-aside">

                        <div class="desktop-two-columns">
                            <div class="table-buttons">
                                <div class="column">
                                    <div class="table-button-read" data-url="{{route('faqs_edit', ['faq'=>$faq_element->id])}}">
                                        <svg viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="table-button-delete" data-url="{{route('faqs_destroy', ['faq'=>$faq_element->id])}}">
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

    @if(isset($faq))

        <div class="form-button">
            <div class="form-button-reset" data-url="{{route('faqs_create')}}">
                <button>
                    <svg viewBox="0 0 24 24">
                        <path fill="currentColor" d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
                    </svg>Borrar
                </button>
            </div>
            <div class="form-button-update" data-url="{{route('faqs_store')}}">
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

        <form class="admin-form" action="{{route("faqs_store")}}">
            
            <input type="hidden" name="id">

            <div class="admin-panel">
                <div class="box-panel">
                    <div class="panel-label">
                        <label>Nombre</label>
                    </div>
                    <div class="panel-input">
                        <input type="text" name="name" value="{{isset($faq->name) ? $faq->name : ''}}">
                    </div>
                    <div class="panel-label">
                        <label>Título</label>
                    </div>
                    <div class="panel-input">
                        <input type="text" name="title" value="{{isset($faq->title) ? $faq->title : ''}}">
                    </div>
                    <div class="panel-label">
                        <label>Descripción</label>
                    </div>
                    <div class="panel-ckeditor">
                        <textarea class="ckeditor" name="description">{{isset($faq->description) ? $faq->description : ''}}</textarea>
                    </div>
                </div>      
            </div>
        
        </form>
    
    @endif
 
@endsection