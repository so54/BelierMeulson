@extends('layouts.admin-layout')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 offset-md-3">
                @yield('card')
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection