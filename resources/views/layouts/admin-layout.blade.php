<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width = device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href={{asset("css/animate.css")}} rel="stylesheet" type="text/css" />

    <link href="https://fonts.googleapis.com/css?family=Neucha" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title> Association Le Bélier-Meulson </title>

</head>

<header>

    @include ('partials.header')

</header>

<body>

<div class="clearfix"></div>
<div class="bandeau">
    <div class="container">
        <div class="col-md-7 ">
            <h1> Administration du site  </h1>
        </div>
    </div>
</div>

@yield ('content')

@include ('partials.belier-inscription-modal')

</body>

<footer id="footer">

    @include ('partials.footer')

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ url('app/public/resources/js/app.js')}}"></script>
    @yield('script')

</footer>

</html>

