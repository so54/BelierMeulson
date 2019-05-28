@extends ('layouts.base')

    <link rel="stylesheet" href="{{asset('css/belier-plan.css')}}">


@section ('content')

<div class="bandeau">
    <div class="container">


        <h1>Plan du site</h1>
    </div>
</div>

<div class="contenu">
    <div class="container">
        <div class="col-md-7">

            <ul id="sitemap">
                <li >
                    <a class="blue" href="{{route('home')}}">Accueil</a>


                <li><strong class="blue">L'association :</strong>
                    <ul id="sitemap">
                        <li>
                            <a href="{{route('presentation')}}">Présentation</a>
                        </li>
                        <li>
                            <a href="{{route('fonctionnement')}}">Fonctionnement</a>
                        </li>
                        <li>
                            <a href="{{route('lieux')}}">Les lieux d'accueil</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="blue" href="{{route('restauration')}}">Restauration</a>
                </li>
                <li><strong class="blue">Les activités :</strong>

                    <ul id="sitemap">
                        <li>
                            <a href="{{route('periscolaire')}}">Accueil périscolaire </a>
                        </li>
                        <li>
                            <a href="{{route('mercredis')}}">Mercredis éducatifs</a>
                        </li>
                        <li>
                            <a href="{{route('vacances')}}">Les vacances</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="blue" href="{{route('tarifs')}}">Les tarifs</a>
                </li>
                <li>
                    <a class="blue" href="{{route('actualites')}}">Actualités</a>
                </li>
                <li>
                    <a class="blue" href="{{route('galerie')}}">Galerie</a>
                </li>
                <li>
                    <a class="blue" href="{{route('plan')}}">Plan du site</a>
                </li>
                <li>
                    <a class="blue" href="{{route('mentions')}}">Mentions légales</a>
                </li>
                <li>
                    <a class="blue" href="{{route('contact')}}">Contact</a>
                </li>


                </li>
            </ul>

        </div>
        <div class="col-md-5">

          @include ('partials.belier-inscription')

           @include ('partials.belier-galerie-visu')

        </div>

    </div>
</div>


@endsection