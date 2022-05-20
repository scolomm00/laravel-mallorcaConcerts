@extends('admin.layout.master')

@section('content')


    <div class="admin-panel">
        <div class="desktop-two-columns mobile-one-column">
            <div class="column">
                <div class="admin-panel-table">
                    @yield('table')
                </div>
            </div>
            <div class="column">   
                <div class="admin-panel-form">
                    @yield('form')
                </div>      
            </div>
        </div>
    </div>

@endsection