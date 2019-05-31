@extends('layouts.form')

<link rel="stylesheet" href="{{asset('css/belier-galerie.css')}}">
<link rel="stylesheet" href="{{asset('css/form2-layout.css')}}">

@section('card')


    @include('partials.administration')
    @component('components.card')


        @slot('title')

                <strong class="orange"> Modifier un utilisateur </strong>

        @endslot

            <p><strong class="text-error">*</strong> <span class=" family">Champs obligatoires.</span></p><br>

            <form method="POST" action="{{ route('user.update', $user->id) }}">
                {{csrf_field()}}
                @method('PUT')
                <div class="form-group">

                    <label for="name" class="black">Nom <span class="text-error">&nbsp;*</span> :</label>
                    <input id="name" name="name" class="form-control {!! $errors->has('name') ? 'has-error' : '' !!}"
                           value="{{$user->name}}" type="text"/>
                    {!! $errors->first('name', '<small class="help-block text-error">:message</small>') !!}


                    <br>


                    <label for="email" class="black">Email <span class="text-error">&nbsp;*</span> :</label>
                    <input id="email" name="email" class="form-control {!! $errors->has('email') ? 'has-error' : '' !!}"
                           value="{{$user->email}}" type="email"/>
                    {!! $errors->first('email', '<small class="help-block text-error">:message</small>') !!}
                </div>
                <br>

                <div class="col-md-6 col-xs-6"><br>
                    <button type="submit" class=" btn btn-default marge">
                        {{ __('Envoyer') }}
                    </button>
                </div>
                <div class="col-md-6 col-xs-6"><br>
                    <p class="right"><a href="{{route('user.index')}}" class="btn btn-default marge">ANNULER</a></p>
                </div>
            </form>


    @endcomponent
@endsection

