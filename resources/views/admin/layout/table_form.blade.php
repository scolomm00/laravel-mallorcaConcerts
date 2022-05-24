@extends('admin.layout.master')

@section('content')

    <div class="admin-panel">
        <div class="desktop-two-columns-aside mobile-one-column">
            <div class="column-aside">
                <div class="admin-panel-table">
                    @yield('table')
                </div>
            </div>
            <div class="column-main">   
                <div class="admin-panel-form" id="admin-panel-form">
                    @yield('form')
                </div>      
            </div>
        </div>
    </div>

@endsection