@extends('layouts.app')

@section('body_class','hold-transition skin-blue sidebar-mini')

@section('content')
    <div class="wrapper">
        @section('header')
            @include('admin.sections.header')
        @show
        @section('navigationBar')
            @include('admin.sections.navigation')
        @show
        <div class="content-wrapper">

            @section('contentPage')
                @include('admin.entities.layout')
            @show

        </div>
        @section('footer')
            @include('admin.sections.footer')
        @show
        @section('sidebar')
            @include('admin.sections.sidebar')
        @show
    </div>
    <div class="modals">
        @stack('modals')
    </div>
@endsection


@section('styles')
    <!-- Custom Theme Style -->
    <link href="{{asset('css/template-skin-blue.css')}}" rel="stylesheet">


    @stack('stylesForAc')

@endsection

@section('scripts')

    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <!-- AdminLTE App -->
    <script src="{{asset('js/main.js')}}"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>

    @stack('scriptsForAc')


@endsection