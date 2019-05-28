
@extends ('layouts.base')

    <link rel="stylesheet" href="{{asset('css/belier-contact.css')}}">

@section ('content')

<div id="GGMap"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10546.477133589313!2d6.053583829676449!3d48.63626702464574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4794a6a5f275c345%3A0x9da3b587d3ad0cd1!2sMairie+de+Maron!5e0!3m2!1sfr!2sfr!4v1555511354755!5m2!1sfr!2sfr" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe></div>


<div class="contenu">
    <div class="container">

        <div class="col-md-7">
            <h1 id="contact">Contactez-nous !</h1>
            <p>Rejoignez-nous sur Facebook ! @foreach ($liens as $lien) @if($lien->id_emplacement == 17 )  <a href="{{$lien->FICHIER_LIEN}}" target="_blank">@endif @endforeach<img src="{{asset('images/icon-facebook.png')}}" alt="logo facebook"></a></p>
            <h3>Besoin de renseignements ?</h3>
            <p>N&#39;hesitez pas &agrave; nous contacter par t&eacute;l&eacute;phone ou &agrave; l&#39;aide du formulaire ci-dessous.</p>
            <p><strong class="text-error">*</strong> Champs obligatoires.</p>
        </div>

        <div class="col-md-5 coordonnees">
            <p><strong>Le Bélier-Meulson</strong><br />Place Charles de Gaulle<br />54230 MARON</p>
            <p><a href="tel:0383472623">03 83 47 26 23</a> Accueil</p>
            <p ><a href="tel:0623226917">06 23 22 69 17</a> Romain GUYOT - Directeur </p>
        </div>

        <div class="clearfix"></div>

        <form method="post" action="{!!  url('contact#contact')!!}" id="contact" name="contact" role="form" enctype="multipart/form-data">
            {{ csrf_field() }}
           @include('flash::message')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nom">Nom<span class="text-error">&nbsp;*</span> :</label>
                        <input id="nom" name="nom" class="form-control {!! $errors->has('nom') ? 'has-error' : '' !!}" placeholder="Votre nom" value="{{ old('nom') }}"  />
                        {!! $errors->first('nom', '<small class="help-block text-error">:message</small>') !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="prenom">Prénom<span class="text-error">&nbsp;*</span> :</label>
                        <input id="prenom" name="prenom" class="form-control {!! $errors->has('prenom') ? 'has-error' : '' !!}" placeholder="Votre prénom" value="{{ old('prenom') }}" />
                        {!! $errors->first('prenom', '<small class="help-block text-error">:message</small>') !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="adresse">Adresse :</label>
                        <input id="adresse" name="adresse" title="Adresse" class="form-control {!! $errors->has('adresse') ? 'has-error' : '' !!}" placeholder="Votre adresse" value="{{ old('adresse') }}" type="text" />
                        {!! $errors->first('adresse', '<small class="help-block text-error">:message</small>') !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="code_postal">Code postal :</label>
                        <input id="code_postal" name="code_postal" title="Code postal" class="form-control {!! $errors->has('code_postal') ? 'has-error' : '' !!}" placeholder="Votre code postal" value="{{ old('code_postal') }}" type="text" />
                        {!! $errors->first('code_postal', '<small class="help-block text-error">:message</small>') !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ville">Ville :</label>
                        <input id="ville" name="ville" title="Ville" class="form-control {!! $errors->has('ville') ? 'has-error' : '' !!}" value="{{ old('ville') }}" placeholder="Votre ville" type="text" />
                        {!! $errors->first('ville', '<small class="help-block text-error">:message</small>') !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="telephone">Téléphone<span class="text-error">&nbsp;*</span> :</label>
                        <input id="telephone" name="telephone" class="form-control {!! $errors->has('telephone') ? 'has-error' : '' !!}" value="{{ old('telephone') }}" placeholder="Votre téléphone" type="text" />
                        {!! $errors->first('telephone', '<small class="help-block text-error">:message</small>') !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email<span class="text-error">&nbsp;*</span> :</label>
                        <input id="email" name="email" class="form-control {!! $errors->has('email') ? 'has-error' : '' !!}" value="{{ old('email') }}" placeholder="Votre email" type="text"  />
                        {!! $errors->first('email', '<small class="help-block text-error">:message</small>') !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group ">
                        <label for="commentaire">Message<span class="text-error">&nbsp;*</span> : </label>
                        <textarea id="commentaire" name="commentaire" rows="4" class="form-control {!! $errors->has('commentaire') ? 'has-error' : '' !!}" placeholder="Votre message" >{{ old('commentaire') }}</textarea>
                        {!! $errors->first('commentaire', '<small class="help-block text-error">:message</small>') !!}
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-md-6  ">
                <div class="form-group">
                    <label for="fichier">Inclure une pièce jointe :</label>
                    <input id="fichier" name="fichier" class="form-control {!! $errors->has('fichier') ? 'has-error' : '' !!}" value="{{ old('fichier') }}" type="file"  />
                    {!! $errors->first('fichier', '<small class="help-block text-error">:message</small>') !!}
            </div>
            </div>
            </div>
            <div class="col-md-12 text-right ">
                <button type="submit" class="btn btn-primary btn-sm " >Envoyer</button>
            </div>

        </form>
    </div>

</div>
@endsection


