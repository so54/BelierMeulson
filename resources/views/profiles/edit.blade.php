@extends('layouts.form')

    <link rel="stylesheet" href="{{asset('css/belier-galerie.css')}}">
    <link rel="stylesheet" href="{{asset('css/form2-layout.css')}}">

@section('card')
    @component('components.card')
        <h4 class="card-header">
            @slot('title')
                <strong class="white">  Modifier le profil :</strong>
            <a href="{{ route('profile.destroy', $user->id) }}" class="btn btn-danger btn-sm pull-right " role="button" aria-disabled="true"><i class="glyphicon glyphicon-warning-sign"></i> Supprimer mon compte</a>
        @endslot
                <div class="card-body">
                    <p><strong class="text-error">*</strong> <span class="white family">Champs obligatoires.</span></p><br>

                <form method="POST" action="{{ route('profile.update', $user->id) }}">
            @csrf
            @method('PUT')
                    <div class="form-group">

                        <label for="email" class="white">Email <span class="text-error">&nbsp;*</span> :</label>
                        <input id="email" name="email" class="form-control {!! $errors->has('email') ? 'has-error' : '' !!}" value="{{$user->email}}"  type="email"  />
                        {!! $errors->first('email', '<small class="help-block text-error">:message</small>') !!}
                    </div><br>

            <a href="{{ route('profile.show', $user->id) }}" class="btn btn-primary " role="button" aria-disabled="true"><i class="glyphicon glyphicon-user "></i> Exporter mes données personnelles</a>
                    <div class="col-md-6"><br>
                        <button type="submit"  class=" btn btn-default marge" >
                            {{ __('Envoyer') }}
                        </button>
                    </div>
                    <div class="col-md-6"><br>
                        <p><a href="{{route('galerie')}}" class="btn btn-default marge">ANNULER</a></p>
                    </div>
        </form>
                </div>
        </h4>
    @endcomponent
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.2.0/bootstrap-slider.min.js"></script>

    @include('partials.script-delete', ['text' => __('Vraiment supprimer votre compte ?'), 'return' => 'home'])
@endsection
