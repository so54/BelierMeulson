@extends ('layouts.base')

    <link rel="stylesheet" href="{{asset('css/belier-restauration.css')}}">

@section ('content')

<div class="bandeau">
    <div class="container">
        <div class="col-md-7 ">
            <h1>Restauration</h1>
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


            <h2 class="aligne-justify">Une restauration est proposée sur le site de la salle polyvalente de Maron.</h2>
                @foreach ($liens as $lien)  @if($lien->id_emplacement == 7 )  <h3 class="aligne-center">Notre prestataire : <a href="{{$lien->FICHIER_LIEN}}" target="_blank">{{$lien->NOM_LIEN}}</a></h3><br>
@endif @endforeach
            <p class="aligne-justify">API prend en charge les repas de midi des enfants scolarisés au groupe scolaire Maron / Sexey-aux-Forges.<br><br> L’engagement de ce prestataire est de cuisiner plus de local et de bio. Les fromages et les fruits de saisons sont de qualité et les laitages sont locaux.
                Le pain est acheté et fourni par le boulanger de Maron.<br><br>Le service de midi s'effectue en deux temps, les enfants de la maternelle commencent leur repas à 11h45
                puis les enfants de l'école élémentaire à 12h30.
            </p><br>
            @foreach ($liens as $lien)       @if($lien->id_emplacement == 8 )
            <p  class="aligne-center"><a href="{{$lien->FICHIER_LIEN}}"  target="_blank" class="btn">{{$lien->NOM_LIEN}}</a></p><br> @endif @endforeach
            @foreach ($liens as $lien)         @if($lien->id_emplacement == 9 )
            <h3 ><a href="../documents/{{$lien->FICHIER_LIEN}}" target="_blank">{{$lien->NOM_LIEN}}</a></h3>@endif @endforeach


        </div>

        <div class="col-md-5">

           @include ('partials.belier-inscription')

            @include ('partials.belier-galerie-visu')

        </div>

    </div>
</div>


@endsection
