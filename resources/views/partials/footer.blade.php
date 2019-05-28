<link type="text/css" rel="stylesheet" href="{{ asset('css/belier-footer.css') }}">

<div class="container">
        <div class="navTop visible-xs">
            <button type="button" data-toggle="modal" data-target="#myModal"> Formulaires </button>
            @foreach ($liens as $lien) @if($lien->id_emplacement == 20)  <a href="{{$lien->FICHIER_LIEN}}" target="_blank"><i class="fa fa-lock" aria-hidden="true" ></i> {{$lien->NOM_LIEN}}</a>@endif @endforeach
            @admin <a id="admin" class="nav-link" href="{{ route('admin') }}">
                Administration</a> @endadmin
            @guest<a id="login" class="nav-link" href="{{ route('login') }}"><i class="fa fa-lock" aria-hidden="true" ></i>
                Connexion</a>@endguest
        @auth <a id="logout" class="nav-link" href="{{ route('logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i>
                Déconnexion</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hide">
                {{ csrf_field() }}
            </form>
            @endauth        </div>
        <div class="col-md-3 addFooter">
            <p><strong>Le Bélier-Meulson</strong><br>Place de Charles de Gaulle<br>54230 MARON</p>
            <p><a href="tel:0383472623">03 83 47 26 23</a></p>
        </div>
        <div class="col-md-9">
            <ul class="footer-links">
                <li><a href="{{route('home')}}">Accueil</a></li>
                <li><a href="{{route('actualites')}}">Actualités</a></li>
                <li><a href="{{route('galerie')}}">Galerie</a></li>
                <li><a href="{{route('plan')}}">Plan du site</a></li>
                <li><a href="{{route('mentions')}}">Mentions légales</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
            </ul>
        </div>
</div>



