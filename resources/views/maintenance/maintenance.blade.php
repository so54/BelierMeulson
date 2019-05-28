@extends('layouts.form')
<link rel="stylesheet" href="{{asset('css/belier-galerie.css')}}">
<link rel="stylesheet" href="{{asset('css/form2-layout.css')}}">
@section('card')
    @include('partials.administration')
    @component('components.card')
        <h4 class="card-header">
        @slot('title')
                <strong class="white">  Mode maintenance </strong>
        @endslot
            <div class="card-body">
        <form method="POST" action="{{ route('maintenance.update') }}">
            @csrf
            @method('PUT')
            @component('components.checkbox', [
                    'name' => 'maintenance',
                    'label' => __('Mode maintenance'),
                    'checked' => $maintenance ? 'checked' : ''
                ])
            @endcomponent
            @component('components.checkbox', [
                    'name' => 'ip',
                    'label' => __('Autoriser mon IP ') . '(' . $ip . ')',
                    'checked' => $ipChecked ? 'checked' : ''
                ])
            @endcomponent
            <div class="col-md-6">
                <button type="submit"  class=" btn btn-default marge" >
                    {{ __('Envoyer') }}
                </button>
            </div>
            <div class="col-md-6">
                <p><a href="{{route('home')}}" class="btn btn-default marge">ANNULER</a></p>
            </div>
        </form>
            </div>
        </h4>
    @endcomponent
@endsection