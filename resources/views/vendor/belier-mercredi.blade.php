@extends ('layouts.base')

    <link rel="stylesheet" href="{{asset('css/belier-mercredi.css')}}">

@section ('content')

<div class="bandeau">
    <div class="container">

        <div class="col-md-7 ">
            <h1>Mercredis éducatifs</h1>
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

            <h3 class="aligne-justify">Les mercredis éducatifs c'est :</h3><br>
            <h4 class="aligne-center orange">Pour les enfants de 3 à 11 ans à l'école maternelle de Maron<br>
                (place Charles de Gaulle)</h4><br>
            <p class="aligne-justify">L'équipe d'animation propose des mercredis "à la carte" : matin, après-midi ou journée entière. <br><br>Le matin, 3 activités sont proposées, comme par exemple sport collectif, breakdance et activités à thèmes.<br><br>L'après-midi, ce sont des activités uniques
                souvent en extérieur : jardin botanique, patinoire, aquarium de Nancy, loto de Sexey, ferme des Alpagas, nature au fil des saisons lors de
                balades champêtres. Les enfants peuvent s'amuser lors de différentes activités sportives, d'inter-centres, d'activités manuelles, de divers jeux de coopération,
                de société etc...<br><br>Nous profitons des mercredis éducatifs pour célébrer nos rois lors de la Galette, décorer la garderie pour Noël,
                fabriquer du pain d’épices pour les fêtes et organiser une crêpe party.
                <br><br>Pour le bien-être et la sécurité de vos
                enfants, pensez à les habiller en fonction du temps et à leur fournir chaque mercredi : un sac
                à dos avec une bouteille d'eau, des baskets, une casquette et un k-way ainsi que du change pour
                certaines activités.<br><br>Les petits faisant la sieste pourront la faire au centre, à la
                demande des parents, et rejoindre les activités une fois reposés.<br><br>
                <strong class="orange">Les inscriptions se font au plus tard le mercredi de la semaine précédente.</strong><br><br>
                <strong class="blue">Déroulement d'une journée type :</strong><br><br>
                <strong class="orange">07h30-09h30 : </strong>accueil échelonné des enfants<br>
                <strong class="orange">09h30-11h30 :</strong> activités<br>
                <strong class="orange">11h30-12h00 :</strong> temps libre<br>
                <strong class="orange">12h00-13h00 :</strong> repas<br>
                <strong class="orange">13h00-13h30 :</strong> temps libre<br>
                <strong class="orange">13h30-16h30 : </strong>sieste et activités<br>
                <strong class="orange">16h30-17h00 :</strong> goûter<br>
                <strong class="orange">17h00-18h30 :</strong> départ échelonné des enfants
            </p>      <br>
            @foreach ($liens as $lien)
                @if($lien->id_emplacement == 11 )    <h3><a href="../documents/{{$lien->FICHIER_LIEN}}"  target="_blank">{{$lien->NOM_LIEN}}</a></h3><br><br>@endif @endforeach
                @foreach ($liens as $lien)
                    @if($lien->id_emplacement == 12 )          <p class="flex" ><a href="{{$lien->FICHIER_LIEN}}" target="_blank" class="btn">{{$lien->NOM_LIEN}}</a></p>@endif @endforeach
        </div>

        <div class="col-md-5">

           @include ('partials.belier-inscription')

           @include ('partials.belier-galerie-visu')
        </div>

    </div>
</div>

@endsection