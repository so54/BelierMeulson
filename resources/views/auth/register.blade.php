@extends('layouts.form')

<link rel="stylesheet" href="{{asset('css/belier-galerie.css')}}">
<link rel="stylesheet" href="{{asset('css/form2-layout.css')}}">

@section('card')


    @include('partials.administration')
    @component('components.card')

        <h4 class="card-header">
            @slot('title')
                <strong class="white">  Ajouter un utilisateur :</strong>

            @endslot
            <div class="card-body">
                <p><strong class="text-error">*</strong> <span class="white family">Champs obligatoires.</span></p><br>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">

                            <label for="name" class="white">Nom <span class="text-error">&nbsp;*</span> :</label>
                            <input id="name" name="name" class="form-control {!! $errors->has('name') ? 'has-error' : '' !!}"  type="text"  value="{{ old('name') }}" autofocus />
                            {!! $errors->first('name', '<small class="help-block text-error">:message</small>') !!}


                            <br>


                            <label for="email" class="white">Email <span class="text-error">&nbsp;*</span> :</label>
                            <input id="email" name="email" class="form-control {!! $errors->has('email') ? 'has-error' : '' !!}" type="email" value="{{ old('email') }}"   />
                            {!! $errors->first('email', '<small class="help-block text-error">:message</small>') !!}
                        </div><br>

                        <div class="form-group ">

                            <label for="password" class="white">Mot de passe <span class="text-error">&nbsp;*</span> :</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror {!! $errors->has('password') ? 'has-error' : '' !!}" name="password" >
                                {!! $errors->first('password', '<small class="help-block text-error">:message</small>') !!}
                            <br><br>


                            <label for="password-confirm" class="white">Confirmation du mot de passe <span class="text-error">&nbsp;*</span> :</label>
                                <input id="password-confirm" type="password" class="form-control {!! $errors->has('password-confirm') ? 'has-error' : '' !!}" name="password_confirmation" >
                                {!! $errors->first('password-confirm', '<small class="help-block text-error">:message</small>') !!}
                            </div>


                        <div class="col-md-6"><br>
                            <button type="submit"  class=" btn btn-default marge" >
                                {{ __('Envoyer') }}
                            </button>
                        </div>
                        <div class="col-md-6"><br>
                            <p><a href="{{route('user.index')}}" class="btn btn-default marge">ANNULER</a></p>
                        </div>

                    </form>
                </div>




        </h4>
    @endcomponent
@endsection
