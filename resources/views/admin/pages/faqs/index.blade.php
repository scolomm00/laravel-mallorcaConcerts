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

                        @include('admin.components.desktop.table_button')

                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endsection

@section('form')

    @include('admin.components.desktop.button')

    <form class="admin-form" action="{{route("faqs_store")}}">
        
        <input type="hidden" name="id">

        <div class="admin-faqs">
            <div class="box-faqs">
                <div class="faqs-label">
                    <label>Nombre</label>
                </div>
                <div class="faqs-input">
                    <input type="text" name="name">
                </div>
                <div class="faqs-label">
                    <label>Título</label>
                </div>
                <div class="faqs-input">
                    <input type="text" name="title">
                </div>
                <div class="faqs-label">
                    <label>Descripción</label>
                </div>
                <div class="faqs-ckeditor">
                    <textarea class="ckeditor" name="description"></textarea>
                </div>
            </div>      
        </div>
    
    </form>
 
@endsection