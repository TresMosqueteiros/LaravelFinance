<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--<title>{{ config('app.name', 'Rhaphs Company') }}</title>--}}
    <title>@yield('title') - Finance</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="{{ asset('js/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href=="{{ asset('css/bootstrap-checkbox.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

    <!-- BEGIN CSS for this page -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
    <!-- END CSS for this page -->
<body style="">

<div class="login-menu">

</div>

<div class="container h-100">
	<div class="row h-100 justify-content-center align-items-center">
		<div class="card">
            @yield('content')
		</div>
	</div>	
</div>
	
<!-- Core Scripts -->
<script src="{{ asset('js/js/bootstrap.min.js') }}" defer></script>
<script src="{{ asset('js/js/moment.min.js') }}" defer></script>
