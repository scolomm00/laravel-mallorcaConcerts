@extends('admin.layout.table_form')

@section('table')
    <table>
        <tr>
            <th>ID</th>
            <th>Pregunta</th>
            <th>Respuesta</th>
        </tr>
        <tr>
            <td>1</td>
            <td>¿Qué novedades tenemos?</td>
            <td>Esta página está actualizándose continuamente para mejorar los servicios y que el cliente se sienta más cómodo</td>
            <td>
                
                @include('admin.components.desktop.table_button')

            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>¿Qué novedades tenemos?</td>
            <td>Esta página está actualizándose continuamente para mejorar los servicios y que el cliente se sienta más cómodo</td>
            <td>

                @include('admin.components.desktop.table_button')

            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>¿Qué novedades tenemos?</td>
            <td>Esta página está actualizándose continuamente para mejorar los servicios y que el cliente se sienta más cómodo</td>
            <td>

                @include('admin.components.desktop.table_button')

            </td>
        </tr>
    </table>
@endsection

@section('form')

    @include('admin.components.desktop.button')

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

@endsection