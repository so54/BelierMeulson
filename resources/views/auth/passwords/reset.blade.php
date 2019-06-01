@extends('layouts.form')

<link rel="stylesheet" href="{{asset('css/belier-galerie.css')}}">
<link rel="stylesheet" href="{{asset('css/form2-layout.css')}}">

@section('card')



    @component('components.card')


        @slot('title')
            <strong class="orange">  Modification du mot de passe </strong>

        @endslot
        <p><strong class="text-error">*</strong> <span class=" family">Champs obligatoires.</span></p><br>

        <form method="POST" action="{{ route('password.request') }}">
            {{ csrf_field() }}

            <div class="form-group">
            <input type="hidden" name="token" value="{{ $token }}">
            <label for="email" class="black">Email <span class="text-error">&nbsp;*</span> :</label>
            <input id="email" name="email" class="form-control {!! $errors->has('email') ? 'has-error' : '' !!}" type="email" value="{{ old('email') }}"   />
            {!! $errors->first('email', '<small class="help-block text-error">:message</small>') !!}
            </div><br>

            <div class="form-group ">

                <label for="password" class="black">Mot de passe <span class="text-error">&nbsp;*</span> :</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror {!! $errors->has('password') ? 'has-error' : '' !!}" name="password" >
                {!! $errors->first('password', '<small class="help-block text-error">:message</small>') !!}
                <br><br>


                <label for="password-confirm" class="black">Confirmation du mot de passe <span class="text-error">&nbsp;*</span> :</label>
                <input id="password-confirm" type="password" class="form-control {!! $errors->has('password-confirm') ? 'has-error' : '' !!}" name="password_confirmation" >
                {!! $errors->first('password-confirm', '<small class="help-block text-error">:message</small>') !!}
            </div>


            <div class="col-md-6 col-xs-6"><br>
                <button type="submit"  class=" btn btn-default marge" >
                    {{ __('Modifier ') }}
                </button>
            </div>
            <div class="col-md-6 col-xs-6"><br>
                <p class="right"><a href="{{route('login')}}" class="btn btn-default  marge">ANNULER</a></p>
            </div>

        </form>
    @endcomponent
@endsection