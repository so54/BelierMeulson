<link type="text/css" rel="stylesheet" href="{{ asset('css/belier-header.css') }}">

<div class="container">
    <div class="col-md-3">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('home')}}">
                <img class= "img-responsive logo"  alt= "Association Le Bélier Meulson" src={{asset("images/logo2_petit2.png")}}  /></a>
        </div>
    </div>

    <div class="col-md-9">
        <div class="navbar-info">
            <p><a href="tel:0383472623"><strong>03 83 47 26 23</strong></a></p>
            <p>ASSOCIATION LE BELIER MEULSON <br>Place Charles de Gaulle<br>54230 MARON</p>
        </div>

        <div class="navTop hidden-xs">
            <button type="button" data-toggle="modal" data-target="#myModal">Formulaires </button>
            @foreach ($liens as $lien) @if($lien->id_emplacement == 20)  <a href="{{$lien->FICHIER_LIEN}}" target="_blank">{{$lien->NOM_LIEN}}</a>@endif @endforeach

            @admin <a id="admin" class="nav-link" href="{{ route('admin') }}">
                Administration</a> @endadmin
            @maintenance

            <a> class="" href="{{ route('maintenance.index') }}" data-toggle="tooltip" title="Mode maintenance">
                <span class="glyphicon glyphicon-alert" style="color: red;">
                    </span>
            </a>

            @endmaintenance
        </div>
            @guest<a id="login" class="nav-link" href="{{ route('login') }}"><i class="fa fa-lock" aria-hidden="true" ></i>
                Connexion</a>@endguest
        @auth
                <a id="logout" class="nav-link" href="{{ route('logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i>
                Déconnexion</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hide">
                {{ csrf_field() }}
            </form>
            @endauth

        </div>
        <div class="txtHeader">
            Périscolaire<br>Restauration<br>Centre de loisirs
        </div>

        <?php
        function active($url)
        {
            if ($_SERVER["REQUEST_URI"] == $url)
            {
                echo 'active';
            }
        }
        ?>

        <nav class="navbar" role="navigation">
            <div class="navMain">
                <ul class="nav nav-pills nav-main" id="mainMenu">
                    <li class="<?php active("/"); ?>"><a href="{{route('home')}}">Accueil</a></li>
                    <li class="dropdown <?php active("/association/fonctionnement"); active("/association/presentation"); active("/association/lieux"); ?> ">
                        <a  href="#" class="dropdown-toggle " data-toggle="dropdown" >L'association</a>
                        <ul class="dropdown-menu ">
                            <li class="<?php active("/association/presentation"); ?>"><a href="{{route('presentation')}}">Présentation</a></li>
                            <li class="<?php active("/association/fonctionnement"); ?>"><a href="{{route('fonctionnement')}}">Fonctionnement</a></li>
                            <li class="<?php active("/association/lieux"); ?>"><a href="{{route('lieux')}}">Les lieux d'accueil</a></li>
                        </ul>
                    </li>
                    <li class="<?php active("/restauration"); ?>"><a href="{{route('restauration')}}">Restauration</a></li>
                    <li class="dropdown <?php active("/activites/periscolaire"); active("/activites/mercredis"); active("/activites/vacances"); ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Les activités</a>
                        <ul class="dropdown-menu">
                            <li class="<?php active("/activites/periscolaire"); ?>"><a href="{{route('periscolaire')}}"> Accueil périscolaire</a></li>
                            <li class="<?php active("/activites/mercredis"); ?>"><a href="{{route('mercredis')}}"> Mercredis éducatifs</a></li>
                            <li class="<?php active("/activites/vacances"); ?>"><a href="{{route('vacances')}}"> Les vacances</a></li>
                        </ul>
                    </li>
                    <li class="<?php active("/tarifs"); ?>"><a href="{{route('tarifs')}}">Les tarifs</a></li>
                    <li class="<?php active("/contact"); ?>"><a href="{{route('contact')}}"> Contact</a></li>
                </ul>

                <?php
                function select($url)
                {
                    if ($_SERVER["REQUEST_URI"] == $url)
                    {
                        echo 'selected=""';
                    }
                }
                ?>

                <select onchange="document.location.href=this.value" class="selectnav " id="selectnav1">

                    <option <?php select("/"); ?> value="{{route('home')}}"  >ACCUEIL</option>
                    <option value="#">L'ASSOCIATION</option>
                    <option <?php select("/association/presentation"); ?> value="{{route('presentation')}}">→ Présentation</option>
                    <option <?php select("/association/fonctionnement"); ?> value="{{route('fonctionnement')}}">→ Fonctionnement</option>
                    <option <?php select("/association/lieux"); ?> value="{{route('lieux')}}">→ Les lieux d'accueil</option>
                    <option <?php select("/restauration"); ?> value="{{route('restauration')}}">RESTAURATION</option>
                    <option value="#">LES ACTIVITÉS</option>
                    <option <?php select("/activites/periscolaire"); ?> value="{{route('periscolaire')}}">→ Accueil périscolaire </option>
                    <option <?php select("/activites/mercredis"); ?> value="{{route('mercredis')}}">→ Mercredis éducatifs</option>
                    <option <?php select("/activites/vacances"); ?> value="{{route('vacances')}}">→ Les vacances</option>
                    <option <?php select("/tarifs"); ?> value="{{route('tarifs')}}">LES TARIFS</option>
                    <option <?php select("/contact"); ?> value="{{route('contact')}}">CONTACT</option>
                   @admin <option <?php select("/admin"); ?> value="{{route('admin')}}">ADMINISTRATION</option> @endadmin
                </select>
            </div>
        </nav>
    </div>


