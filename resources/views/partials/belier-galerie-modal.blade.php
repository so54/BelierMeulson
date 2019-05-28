<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h2 class="modal-title" id="myModalLabel">Galerie photos</h2>
            </div>
            <div class="modal-body">
                <h3>Cet espace est sécurisé</h3>
                <p>Pour une question de confidentialité et de sécurité de vos enfants, cet espace est sécurisé. <br><br><strong class="orange">Dans le cas d'une première connexion,</strong> merci de faire une demande d'inscription à la galerie photos auprès du directeur de l'association <a href="{{url('contact#contact')}}">ICI</a> en précisant le nom et prénom de votre enfant.<br><br>
               Une fois votre demande acceptée, vous recevrez vos identifiants par mail et vous pourrez vous connecter. Merci de votre compréhension.</p>
                <p>&nbsp;</p>
                <p><strong class="text-error">*</strong> Champs obligatoires.</p><br>
                <form method="post" action="{!!  route('galerie')!!}" id="connexion" name="connexion" role="form">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <label for="identifiant">Identifiant<span class="text-error">&nbsp;*</span> :</label>
                                <input id="identifiant" name="identifiant" class="form-control {!! $errors->has('identifiant') ? 'has-error' : '' !!}" placeholder="Votre identifiant" value="{{ old('identifiant') }}"  />
                                {!! $errors->first('identifiant', '<small class="help-block text-error">:message</small>') !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mdp">Mot de passe<span class="text-error">&nbsp;*</span> :</label>
                                <input id="mdp" name="mdp" class="form-control {!! $errors->has('mdp') ? 'has-error' : '' !!}" placeholder="Votre mot de passe" value="{{ old('mdp') }}" />
                                {!! $errors->first('mdp', '<small class="help-block text-error">:message</small>') !!}
                            </div>
                        </div>

                    <div class="col-md-6 ">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="remember"> Se rappeler de moi</label>
                    </div>
                    </div>
                    <div class="col-md-6 ">
                    <a class="" href="{{ route('password.request') }}">
                        Mot de passe oublié ?
                    </a><br>
                    </div>
                    </div>
                </form><br>
                <a href="" class=" btn btn-default " target="_blank" ><i class="fa fa-lock" aria-hidden="true" ></i> Connexion</a>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
