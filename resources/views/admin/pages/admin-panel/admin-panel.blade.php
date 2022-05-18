<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="192x192" href="http://cdn.onlinewebfonts.com/svg/img_325788.png">
    <link rel="shortcut icon" href="/assets/favicon.ico">

    <title>Panel de administración</title>
    <meta name="description" content="descripción de la web, se recomienda 90 caracteres">
    <meta name="keywords" content="palabras clave, separadas, por comas">

    @include('admin.layout.partials.style')

</head>

<body>
    
    @include('admin.layout.partials.header')

    <main>
        <div id="notify">
            <span id="notification-message"></span>
        </div>
        <div class="filters">
            <div class="filter-button" id="filter-button">
                <svg viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M11 11L16.76 3.62A1 1 0 0 0 16.59 2.22A1 1 0 0 0 16 2H2A1 1 0 0 0 1.38 2.22A1 1 0 0 0 1.21 3.62L7 11V16.87A1 1 0 0 0 7.29 17.7L9.29 19.7A1 1 0 0 0 10.7 19.7A1 1 0 0 0 11 18.87V11M13 16L18 21L23 16Z" />
                </svg>
            </div>
            <div id="filter-bar">
                <h1>Aquí vamos a añadir filtros para facilitar la búsqueda</h1>
            </div>
        </div>
        <div class="admin-panel">
            <div class="desktop-two-columns desktop-only">
                <div class="column">
                    <div class="admin-panel-table">
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
                                    <div class="mobile-two-columns">
                                        <div class="table-buttons">
                                            <div class="column">
                                                <div class="table-button-read">
                                                    <svg viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="column">
                                                <div class="table-button-delete">
                                                    <svg viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Sebas</td>
                                <td>sebastiacolom@gmail.com</td>
                                <td>scolom</td>
                                <td>
                                    <div class="desktop-two-columns">
                                        <div class="table-buttons">
                                            <div class="column">
                                                <div class="table-button-read">
                                                    <svg viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="column">
                                                <div class="table-button-delete">
                                                    <svg viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Sebas</td>
                                <td>sebastiacolom@gmail.com</td>
                                <td>scolom</td>
                                <td>
                                    <div class="desktop-two-columns">
                                        <div class="table-buttons">
                                            <div class="column">
                                                <div class="table-button-read">
                                                    <svg viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="column">
                                                <div class="table-button-delete">
                                                    <svg viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
                <div class="column">
                    <form action="">
                        <div class="admin-panel-form">
                            
                            @include('admin.components.desktop.tabs')

                            <div class="form-button">
                                <div class="form-button-reset">
                                    <button>
                                        <svg viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M19.36,2.72L20.78,4.14L15.06,9.85C16.13,11.39 16.28,13.24 15.38,14.44L9.06,8.12C10.26,7.22 12.11,7.37 13.65,8.44L19.36,2.72M5.93,17.57C3.92,15.56 2.69,13.16 2.35,10.92L7.23,8.83L14.67,16.27L12.58,21.15C10.34,20.81 7.94,19.58 5.93,17.57Z" />
                                        </svg>Limpiar
                                    </button>
                                </div>
                                <div class="form-button-update">
                                    <button class="store-button">
                                        <svg viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M15,9H5V5H15M12,19A3,3 0 0,1 9,16A3,3 0 0,1 12,13A3,3 0 0,1 15,16A3,3 0 0,1 12,19M17,3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V7L17,3Z" />
                                        </svg>Guardar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="mobile-one-column mobile-only">
                <div class="column">
                    <div class="admin-panel-table">
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
                                    <div class="mobile-two-columns">
                                        <div class="table-buttons">
                                            <div class="column">
                                                <div class="table-button-read">
                                                    <svg viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="column">
                                                <div class="table-button-delete">
                                                    <svg viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Sebas</td>
                                <td>sebastiacolom@gmail.com</td>
                                <td>scolom</td>
                                <td>
                                    <div class="desktop-two-columns">
                                        <div class="table-buttons">
                                            <div class="column">
                                                <div class="table-button-read">
                                                    <svg viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="column">
                                                <div class="table-button-delete">
                                                    <svg viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Sebas</td>
                                <td>sebastiacolom@gmail.com</td>
                                <td>scolom</td>
                                <td>
                                    <div class="desktop-two-columns">
                                        <div class="table-buttons">
                                            <div class="column">
                                                <div class="table-button-read">
                                                    <svg viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="column">
                                                <div class="table-button-delete">
                                                    <svg viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
                <div class="column">
                    <form action="">
                        <div class="admin-panel-form">
                            
                            @include('admin.components.mobile.select')

                            <div class="form-button">
                                <div class="form-button-reset">
                                    <button>
                                        <svg viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M19.36,2.72L20.78,4.14L15.06,9.85C16.13,11.39 16.28,13.24 15.38,14.44L9.06,8.12C10.26,7.22 12.11,7.37 13.65,8.44L19.36,2.72M5.93,17.57C3.92,15.56 2.69,13.16 2.35,10.92L7.23,8.83L14.67,16.27L12.58,21.15C10.34,20.81 7.94,19.58 5.93,17.57Z" />
                                        </svg>Limpiar
                                    </button>
                                </div>
                                <div class="form-button-update">
                                    <button class="store-button">
                                        <svg viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M15,9H5V5H15M12,19A3,3 0 0,1 9,16A3,3 0 0,1 12,13A3,3 0 0,1 15,16A3,3 0 0,1 12,19M17,3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V7L17,3Z" />
                                        </svg>Guardar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>

    @include('admin.layout.partials.js')

</body>

</html>