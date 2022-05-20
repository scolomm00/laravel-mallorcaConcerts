@extends('admin.layout.table_form')

@section('table')
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Usuario</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Sebas</td>
            <td>sebastiacolom@gmail.com</td>
            <td>scolom</td>
            <td>
                
                @include('admin.components.desktop.table_button')

            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Sebas</td>
            <td>sebastiacolom@gmail.com</td>
            <td>scolom</td>
            <td>

                @include('admin.components.desktop.table_button')

            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Sebas</td>
            <td>sebastiacolom@gmail.com</td>
            <td>scolom</td>
            <td>

                @include('admin.components.desktop.table_button')

            </td>
        </tr>
    </table>
@endsection

@section('form')

    <form action="">

        @include('admin.components.desktop.button')
        

        <div class="form-content">
            <div class="form-element">
                <div class="form-element-label">
                    <label>Nombre</label>
                </div>
                <div class="form-element-input">
                    <input type="text" name="name">
                </div>
            </div>
            <div class="desktop-two-columns">
                <div class="column">
                    <div class="form-element">
                        <div class="form-element-label">
                            <label>Usuario</label>
                        </div>
                        <div class="form-element-input">
                            <input type="text" name="user">
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="form-element">
                        <div class="form-element-label">
                            <label>Email</label>
                        </div>
                        <div class="form-element-input">
                            <input type="email" name="email">
                        </div>
                    </div>
                </div>
            </div>
            <div class="desktop-two-columns">
                <div class="column">
                    <div class="form-element">
                        <div class="form-element-label">
                            <label>Contraseña</label>
                        </div>
                        <div class="form-element-input">
                            <input type="password" name="password">
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="form-element">
                        <div class="form-element-label">
                            <label>Repetir contraseña</label>
                        </div>
                        <div class="form-element-input">
                            <input type="password" name="password">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="box-tabs-content">
            <div class="tabs">
                <div class="tab active" data-num="one">Contenido</div>
                <div class="tab" data-num="two">Imagen</div>
                <div class="tab" data-num="three">CKEditor</div>
            </div>
            <div class="tabs-content">
                <div class="tab-content active" data-num="one">
                    <div class="form-element">
                        <div class="form-element-label">
                            <label>Nombre</label>
                        </div>
                        <div class="form-element-input">
                            <input type="text" name="name">
                        </div>
                    </div>
                    <div class="desktop-two-columns">
                        <div class="column">
                            <div class="form-element">
                                <div class="form-element-label">
                                    <label>Usuario</label>
                                </div>
                                <div class="form-element-input">
                                    <input type="text" name="user">
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="form-element">
                                <div class="form-element-label">
                                    <label>Email</label>
                                </div>
                                <div class="form-element-input">
                                    <input type="email" name="email">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="desktop-two-columns">
                        <div class="column">
                            <div class="form-element">
                                <div class="form-element-label">
                                    <label>Contraseña</label>
                                </div>
                                <div class="form-element-input">
                                    <input type="password" name="password">
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="form-element">
                                <div class="form-element-label">
                                    <label>Repetir contraseña</label>
                                </div>
                                <div class="form-element-input">
                                    <input type="password" name="password">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content" data-num="two">
                    <div class="content-image">
                        <div class="drop-zone">
                            <span class="drop-zone__prompt">Subir imagen
                                <svg viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M2 12H4V17H20V12H22V17C22 18.11 21.11 19 20 19H4C2.9 19 2 18.11 2 17V12M12 2L6.46 7.46L7.88 8.88L11 5.75V15H13V5.75L16.13 8.88L17.55 7.45L12 2Z" />
                                </svg>
                            </span>
                            <input type="file" name="myFile" class="drop-zone__input">
                        </div>
                    </div>
                </div>
                <div class="tab-content" data-num="three">
                    <div class="message">
                        <div class="form-element-textarea">
                            <textarea class="ckeditor"></textarea>
                        </div>
                        <div class="form-element-textarea">
                            <textarea class="ckeditor"></textarea>
                        </div>
                    </div>
                </div>
        
            </div>
        </div> --}}

    </form>
@endsection