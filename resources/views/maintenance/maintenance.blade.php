@extends('layouts.form')
<link rel="stylesheet" href="{{asset('css/belier-galerie.css')}}">
<link rel="stylesheet" href="{{asset('css/form2-layout.css')}}">
@section('card')
    @include('partials.administration')
    @component('components.card')

        @slot('title')
                <strong class="orange">  Mode maintenance </strong>
        @endslot

        <form method="POST" action="{{ route('maintenance.update') }}">
            @csrf
            @method('PUT')
            @component('components.checkbox', [
                    'name' => 'maintenance',
                    'label' => ('  Mode maintenance'),
                    'checked' => $maintenance ? 'checked' : ''
                ])
            @endcomponent
            @component('components.checkbox', [
                    'name' => 'ip',
                    'label' => ('  Autoriser mon IP ') . '(' . $ip . ')',
                    'checked' => $ipChecked ? 'checked' : ''
                ])
            @endcomponent
            <div class="col-md-6 col-xs-6">
                <button type="submit"  class=" btn btn-default marge" >
                    {{ __('Envoyer') }}
                </button>
            </div>
            <div class="col-md-6 col-xs-6">
                <p class="right"><a href="{{route('home')}}" class="btn btn-default marge">ANNULER</a></p>
            </div>
        </form>


    @endcomponent
@endsection