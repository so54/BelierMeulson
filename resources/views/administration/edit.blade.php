@extends('layouts.form')

<link rel="stylesheet" href="{{asset('css/belier-galerie.css')}}">
<link rel="stylesheet" href="{{asset('css/form2-layout.css')}}">

@section('card')
   @include('partials.administration')
    @component('components.card')

            @slot('title')
                <strong class="orange">  Modifier un album </strong>

            @endslot

            <p><strong class="text-error">*</strong> <span class=" family">Champs obligatoires.</span></p><br>
        <form method="POST" action="{{ route('evenement.update', $evenement->ID_EVENT) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group">
                <label for="nom_event" class="black">Nom <span class="text-error">&nbsp;*</span> :</label>
                <input id="nom_event" name="nom_event" class="form-control {!! $errors->has('nom_event') ? 'has-error' : '' !!}" value="{{ old('nom_event') }}" placeholder="{{$evenement->nom_event}}" type="text"  />
                {!! $errors->first('nom_event', '<small class="help-block text-error">:message</small>') !!}
            </div>
            <div class="form-group">
                <label for="date_event" class="black">Date <span class="text-error">&nbsp;*</span> :</label>
                <input id="date_event" name="date_event" class="form-control {!! $errors->has('date_event') ? 'has-error' : '' !!}" value="{{ old('date_event') }}" placeholder="{{$evenement->date_event->format('d/m/Y')}}" type="date"  />
                {!! $errors->first('date_event', '<small class="help-block text-error">:message</small>') !!}
            </div>
            <div class="col-md-6">
                <button type="submit"  class=" btn btn-default marge" >
                    {{ __('Envoyer') }}
                </button>
            </div>
            <div class="col-md-6">
                <p class="right"><a href="{{route('evenement.index')}}" class="btn btn-default marge">ANNULER</a></p>
            </div>
        </form>


    @endcomponent
@endsection