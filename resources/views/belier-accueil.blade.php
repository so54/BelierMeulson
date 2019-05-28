@extends ('layouts.base')

<link href={{asset("css/belier-accueil.css")}} rel="stylesheet" type="text/css" />

@section ('content')


<div class="bandeauAcc">
    <div class="container">

        <div class="col-md-6 TitreBandeauAcc">
            <p><strong>HORAIRES</strong></p>
            <h4><strong>Accueil périscolaire :</strong> <br>lundi, mardi, jeudi et vendredi de 07h30 à 08h40 et de 16h00 à 19h00<br><br>
                <strong>Cantine : </strong><br>du lundi au vendredi de 11h30 à 13h15<br><br>
                <strong>Mercredi éducatifs :</strong><br> accueil le matin de 07h30 à 09h00 et l'après-midi à partir de 13h00
                pour les enfants ne mangeant pas à la cantine, départ entre 17h00 et 18h30<br>
            </h4>
        </div>

        <div class="col-md-6 animated fadeInRightBig">
            <div id="carouselNews" class="carousel slide actuAcc" data-ride="carousel">
                <div class="actuAccTitre">Dernières News
                    <div class="navCarousel">
                        <a class="left carousel-control" href="#carouselNews" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        </a>
                        <a class="right carousel-control" href="#carouselNews" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>

                <div class="carousel-inner">

            @foreach($articles as $article)
                    <div class="item   {{ $loop->first ? 'active' : '' }} aligne-justify">

                        <p class="titreActuAcc">{{$article->TITRE_ARTICLE}}  </p>
                        <p >{{str_limit($article->DESCRIPTION_ARTICLE, 110, '...')}} </p>
                        <p class="text-right"><a href="{{route('actualites')}}" class="btn">Lire la suite</a></p>
                        <div class="clearfix"></div>
                    </div>


            @endforeach

             </div>

            </div>
        </div>
    </div>
</div>

<div class="activites">
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-sm-6">
                <a href="{{route('periscolaire')}}" class="lienBlockAcc">
                    <div class="contenuBlockAcc">
                        <strong>Accueil périscolaire </strong><br>
                    </div>
                    <img src="{{asset('images/kids-fille-envers.png')}}" class="img-responsive kids" alt="Garderie ">
                </a>
            </div>

            <div class="col-md-3 col-sm-6">
                <a href="{{route('restauration')}}" class="lienBlockAcc">
                    <div class="contenuBlockAcc">
                        <strong>Restauration</strong><br>
                    </div>
                    <img src="{{asset('images/kids-fille-rouge.png')}}" class="img-responsive kids" alt="Restauration">
                </a>
            </div>

            <div class="col-md-3 col-sm-6">
                <a href="{{route('mercredis')}}" class="lienBlockAcc">
                    <div class="contenuBlockAcc">
                        <strong>Mercredis éducatifs</strong><br>
                    </div>
                    <img src="{{asset('images/kids-garcon.png')}}" class="img-responsive kids" alt="Les Mercredis">
                </a>
            </div>

            <div class="col-md-3 col-sm-6">
                <a href="{{route('vacances')}}" class="lienBlockAcc">
                    <div class="contenuBlockAcc">
                        <strong>Les Vacances</strong><br>
                    </div>
                    <img src="{{asset('images/kids-casquette.png')}}" class="img-responsive kids" alt="Les Vacances">
                </a>
            </div>

        </div>
    </div>
</div>

<div class="contenu">
    <div class="container">
        <div class="col-md-6 col-lg-7">
            <h1 class="aligne-center">Bienvenue sur le site de l'Association <br>Le Bélier-Meulson</h1>
            <p class="aligne-justify">L'association Le Bélier-Meulson prend en charge vos enfants durant le temps périscolaire (Garderie du matin - Cantine - Garderie du soir) ,
                les mercredis et durant toutes les vacances.<br>Nous espèrons que vous trouverez sur ce site toutes les informations qui vous seront nécessaires et nous sommes à
                votre disposition pour toute demande complémentaire.</p>
        </div>
        <div class="col-md-6 col-lg-5">

@include ('partials.belier-galerie-visu')

        </div>
    </div>
</div>

@endsection