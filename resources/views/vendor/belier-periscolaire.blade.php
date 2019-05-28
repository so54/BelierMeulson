@extends ('layouts.base')

    <link rel="stylesheet" href="{{asset('css/belier-periscolaire.css')}}">

@section ('content')

<div class="bandeau">
    <div class="container">
        <div class="col-md-7 ">
            <h1>Accueil périscolaire</h1>
        </div>
        <div class="col-md-5 flex">
            <div class="containerImgActivite center ">
            </div>
        </div>
    </div>
</div>

<div class="contenu">
    <div class="container">

        <div class="col-md-7 ">

            <h3 class="aligne-justify">Le temps dit périscolaire accueille les enfants :</h3><br>
            <h4 class="aligne-justify orange">Le lundi, mardi, jeudi et vendredi :</h4><br>
            <p class="aligne-justify"><strong class="orange">Le matin :</strong> de 07h30 à 08h40<br>
                <strong class="orange">Le soir :</strong> de 16h00 à 19h00<br><br>
                L'accueil est situé à l'école maternelle de Maron pour tous les enfants, un bus scolaire faisant la navette entre l'école maternelle
                de Maron et l'école élémentaire de Sexey-aux-Forges. <br><br>A partir de 8h, les enfants de l'école élémentaire sont accompagnés par des animateurs
                jusqu'au bus. Le soir, les animateurs prennent en charge les maternelles à la sortie de leur classe et les primaires à l'arrivée du bus. Deux salles
                accueillent les enfants pour le goûter, une pour les maternelles, l'autre pour les primaires.<br><br>La garderie du matin permet au enfants un réveil
                en douceur autour d'activités calmes, voire petit-déjeuner. <br><br>Celle du soir permet aux enfants de s'amuser autour de diverses activités ou jeux. Ils peuvent
                aussi commencer leurs devoirs en attendant patiemment l'arrivée de leurs parents.
            </p>      <br>  <br>
            @foreach ($liens as $lien)
                @if($lien->id_emplacement == 10 )   <p class="flex" ><a href="{{$lien->FICHIER_LIEN}}"  target="_blank"  class="btn">{{$lien->NOM_LIEN}}</a></p> @endif @endforeach
        </div>

        <div class="col-md-5">

           @include ('partials.belier-inscription')

           @include ('partials.belier-galerie-visu')

        </div>

    </div>
</div>

@endsection
