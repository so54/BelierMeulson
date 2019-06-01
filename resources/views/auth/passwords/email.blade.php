@extends('layouts.form')

<link rel="stylesheet" href="{{asset('css/belier-galerie.css')}}">
<link rel="stylesheet" href="{{asset('css/form2-layout.css')}}">

@section('card')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif


    @component('components.card')


        @slot('title')
            <strong class="orange">  Modification du mot de passe </strong>

        @endslot
        <p><strong class="text-error">*</strong> <span class=" family">Champs obligatoires.</span></p><br>


        <form method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}

            <div class="form-group">
            <label for="email" class="black">Email <span class="text-error">&nbsp;*</span> :</label>
            <input id="email" name="email" class="form-control {!! $errors->has('email') ? 'has-error' : '' !!}" type="email" value="{{ old('email') }}"   />
            {!! $errors->first('email', '<small class="help-block text-error">:message</small>') !!}
            </div><br>

            <div class="col-md-6 col-xs-6"><br>
                <button type="submit"  class=" btn btn-default marge" >
                    {{ __('Envoyer') }}
                </button>
            </div>
            <div class="col-md-6 col-xs-6"><br>
                <p class="right"><a href="{{route('login')}}" class="btn btn-default  marge">ANNULER</a></p>
            </div>
        </form>
    @endcomponent
@endsection