@extends ('layouts.base')

<link rel="stylesheet" href="{{asset('css/belier-galerie.css')}}">

@section ('content')

    <div class="bandeau">
        <div class="container">
            <h1>Connexion</h1>
        </div>
    </div>

    <div class="contenu">
        <div class="container">

            <div >
                <h3>Cet espace est sécurisé</h3>
                <p>Pour une question de confidentialité et de sécurité de vos enfants, cet espace est sécurisé. <br><br><strong class="orange">Dans le cas d'une première connexion,</strong> merci de faire une demande d'inscription à la galerie photos auprès du directeur de l'association <a href="{{url('contact#contact')}}">ICI</a> en précisant le nom et prénom de votre enfant.<br><br>
                    Une fois votre demande acceptée, vous recevrez vos identifiants par mail et vous pourrez vous connecter. Merci de votre compréhension.</p>
                <p>&nbsp;</p>
                <p>En vous connectant, vous acceptez les termes et conditions de la politique de confidentialité.</p>


                    <p><strong class="text-error">*</strong> Champs obligatoires.</p><br>
                    <form method="POST"  action="{{ route('login') }}">
                        @csrf

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                            <label for="email" >{{ __('Email') }}<span class="text-error">&nbsp;*</span> :</label>


                                <input id="email" type="text" class="form-control " {!! $errors->has('email') ? 'has-error' : '' !!} name="email" value="{{ old('email') }}"   autocomplete="email" autofocus>
<br>
                                    {!! $errors->first('email', '<small class="help-block text-error">:message</small>') !!}
                            </div>
                        </div>

                            <div class="col-md-6">
                                <div class="form-group">
                            <label for="password">{{ __('Mot de passe') }}<span class="text-error">&nbsp;*</span> :</label>

                                <input id="password" type="password" class="form-control {!! $errors->has('password') ? 'has-error' : '' !!}" name="password" autocomplete="current-password">
<br>
                                    {!! $errors->first('password', '<small class="help-block text-error">:message</small>') !!}
                            </div>
                            </div>
                            </div>
<div class="row">
                                <div class="col-md-6 ">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Se souvenir de moi') }}
                                    </label>
                                </div>
                            </div>

                                <div class="col-md-6 ">
                                    @if (Route::has('password.request'))
                                        <a  href="{{ route('password.request') }}">
                                            {{ __('Mot de passe oublié?') }}
                                        </a>
                                    @endif
                                </div>
</div>

                        <br>
<br>

                                <button type="submit"  class=" btn btn-default " ><i class="fa fa-lock" aria-hidden="true" ></i>
                                    {{ __('Connexion') }}
                                </button>

                    </form>

            </div>
                </div>
            </div>
        </div>

@endsection
