@extends ('layouts.base')

    <link rel="stylesheet" href="{{asset('css/belier-asso-presentation.css')}}">


   @section ('content')
<div class="bandeau">
    <div class="container">
        <h1>Présentation de l'association</h1>
    </div>
</div>

<div class="contenu">
    <div class="container">
        <div class="col-md-7">
            <h3>L'association Le Bélier-Meulson est régie par la loi de 1901.</h3>
            <p class="aligne-justify">Elle est gérée d'une part par des parents bénévoles élus en Assemblée Générale et
                d'autre part par des membres des conseils municipaux de Maron et Sexey-aux-Forges. <br><br>Le Bélier Meulson, ce sont toutes ces personnes entourées, épaulées,
                et aidées par différents partenaires, prestataires comme les mairies de Maron et de Sexey-aux-Forges, la CCM, la société API, Pôle emploi….<br><br>
                L'objectif de l'association est d'assurer la garderie et la cantine des enfants scolarisés au groupe scolaire Maron / Sexey-aux-Forges, animer les mercredis,
                organiser les centres aérés et mini-séjours durant les vacances scolaires. <br><br>Elle emploie des animateurs professionnels permanents et saisonniers pour l'encadrement
                des enfants.
            </p>

            <div class="row colonne-width">
@foreach ($photo_equipes as $photo_equipe)
                <div class="col-md-4  col-sm-6">
                    <div class=" @if ($photo_equipe->FONCTION_EMPLOYE=="Directeur" || $photo_equipe->FONCTION_EMPLOYE== "Adjoint" || $photo_equipe->FONCTION_EMPLOYE=="Cantinière") aligne-center nom orange  @else aligne-center nom blue @endif">
                        <strong >{{$photo_equipe->NOM_EMPLOYE}}<br>{{$photo_equipe->FONCTION_EMPLOYE}}</strong><br>
                    </div>
                    <div class=" @if ($photo_equipe->FONCTION_EMPLOYE=="Directeur" || $photo_equipe->FONCTION_EMPLOYE== "Adjoint" || $photo_equipe->FONCTION_EMPLOYE=="Cantinière") portrait portrait-border-orange @else  portrait portrait-border-blue @endif" style ="background-image:url('../images/{{$photo_equipe->IMAGE_EMPLOYE}}');">
                    </div>
                </div>
@endforeach

            </div>
        </div>

        <div class="col-md-5">

           @include ('partials.belier-inscription')

           @include ('partials.belier-galerie-visu')

        </div>

    </div>
</div>

<
   @endsection