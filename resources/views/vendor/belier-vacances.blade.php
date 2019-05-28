@extends ('layouts.base')

    <link rel="stylesheet" href="{{asset('css/belier-vacances.css')}}">

@section ('content')

<div class="bandeau">
    <div class="container">
        <div class="col-md-7 ">
            <h1>Les vacances</h1>
        </div>
        <div class="col-md-5 flex">
            <div class="containerImgActivite center ">
            </div>
        </div>
    </div>
</div>

<div class="contenu">
    <div class="container">

        <div class="col-md-12">

            <div class="col-md-7 ">

                <h3 class="aligne-center">Les centres aérés pour les enfants de 3 à 11 ans à l'école
                    maternelle de Maron (place Charles de Gaulle) :</h3>
                <p> Le centre aéré c'est des sorties pédagogiques, des activités autour des arts plastiques,
                    de la nature, du sport, du cinéma, des grands jeux… <br><br>Les petits faisant la sieste
                    pourront la faire au centre, à la demande des parents, et rejoindre les activités une fois
                    reposés.<br><br>Pour le bien-être et la sécurité de vos enfants, pensez à les
                    habiller en fonction du temps et à leur fournir chaque jour : un sac à dos avec une
                    bouteille d'eau, des baskets, une casquette et un k-way ainsi que du change pour
                    certaines activités.<br><br><strong class="orange">Les inscriptions se font au plus tard le mercredi de
                        la semaine précédente.</strong><br><br>
                    <strong class="blue">Déroulement d'une journée type :</strong><br><br>
                    <strong class="orange">07h30-09h00 : </strong>accueil échelonné des enfants<br>
                    <strong class="orange">09h00-11h30 :</strong> activités<br>
                    <strong class="orange">11h30-12h00 :</strong> temps libre<br>
                    <strong class="orange">12h00-14h00 :</strong> repas et temps calme<br>
                    <strong class="orange">14h00-16h30 :</strong> activités sportives<br>
                    <strong class="orange">16h30-17h00 :</strong> goûter<br>
                    <strong class="orange">17h00-18h30 :</strong> départ échelonné des enfants
                </p>
                @foreach ($liens as $lien)
                    @if($lien->id_emplacement == 13 )          <h3><a href="../documents/{{$lien->FICHIER_LIEN}}"  target="_blank">{{$lien->NOM_LIEN}}</a></h3><br>@endif @endforeach
                    @foreach ($liens as $lien)
                        @if($lien->id_emplacement == 14 )

                        <p class="flex" ><a href="{{url('contact#contact')}}" target="_blank" class="btn">{{$lien->NOM_LIEN}}</a></p>  <br>@endif @endforeach
                <h3 class="aligne-center">Les camps de vacances été et hiver pour les enfants de 7 à 15 ans :</h3><br>
                <p>Le camp hiver (ski) se déroule pendant la première semaine des vacances scolaires d'hiver, le camp
                    été pendant les 2 premières semaines des vacances d'été.<br><br> Les camps de vacances c'est
                    la garantie de vacances dynamiques et hautes en couleurs, où la complicité entre les jeunes est
                    à son comble. Lors de l'ouverture des inscriptions, dépêchez-vous...les places sont limitées!
                </p>
                @foreach ($liens as $lien)
                    @if($lien->id_emplacement == 15 ) <h3><a href="../documents/{{$lien->FICHIER_LIEN}}"  target="_blank">{{$lien->NOM_LIEN}}</a></h3><br>@endif @endforeach
                @foreach ($liens as $lien)
                    @if($lien->id_emplacement == 16 )  <p class="flex" ><a href="{{url('contact#contact')}}" target="_blank" class="btn">{{$lien->NOM_LIEN}}</a></p>@endif @endforeach
            </div>

            <div class="col-md-5">

                @include ('partials.belier-inscription')

                @include ('partials.belier-galerie-visu')
            </div>

        </div>
    </div>
</div>

    @endsection