@extends('admin.layout.table_form')

@section('table')
    @if(isset($faqs))
        @foreach($faqs as $faq_element)
            <div class="table-row swipe-element">
                <div class="table-field-container swipe-front">
                    <div class="table-field"><p><span>Id:</span>{{$faq_element->id}}</p></div>
                    <div class="table-field"><p><span>Nombre:</span> {{$faq_element->name}}</p></div>
                    <div class="table-field"><p><span>Creado el:</span>{{$faq_element->created_at}}</p></div>
                </div>

                @include('admin.components.desktop.table_button')

            </div>
        @endforeach
    @endif
@endsection

@section('form')

    @include('admin.components.desktop.button')

    <form class="admin-form">
        <div class="admin-faqs">
            <div class="box-faqs">
                <div class="faqs-label">
                    <label>Pregunta</label>
                </div>
                <div class="faqs-input">
                    <input type="text" name="title">
                </div>
                <div class="faqs-label">
                    <label>Respuesta</label>
                </div>
                <div class="faqs-ckeditor">
                    <textarea class="ckeditor"></textarea>
                </div>
            </div>      
        </div>
    
    </form>
 
@endsection