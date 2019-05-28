<?php
function active2($url)
{
    if ($_SERVER["REQUEST_URI"] == $url)
    {
        echo 'active';
    }
}
?>




<nav class="navbar fixed-top navbar-expand-lg bg-blue">
    <div  id="navbarSupportedContent" >
        <ul class="nav navbar-nav mr-auto" >
           <li class="<?php active2("/galerie"); ?>"><a class="navbar-brand hover " href="{{ route('galerie') }}">Photos</a></li>
            <li class="dropdown <?php active2('/profile/{id}/edit'); active2("/profile/{id}");  ?> ">
                <a   href="#" class="dropdown-toggle hover" data-toggle="dropdown" >Profil</a>
                <ul class="dropdown-menu ">
                    <li class="<?php active2("/profile/{id}/edit"); ?>"><a href="{{ route('profile.edit', auth()->id()) }}">  <i class="glyphicon glyphicon-envelope"></i> Modifier mon profil</a></li>
                   <li class="<?php active2("/evenement"); ?>"><a href="{{ route('evenement.index') }}">  <i class="glyphicon glyphicon-ok"></i> Modifier mon mot de passe</a></li>

                </ul>
            <li class="dropdown @isset($evenement) <?php active2("/evenement/{slug}"); ?>@endisset">
                <a class="dropdown-toggle hover" href="#"  data-toggle="dropdown" >
                    Evènements
                </a>
                <ul class="dropdown-menu">
                    @foreach($evenements as $evenement)
                        <li class="<?php active2("/evenement/{slug}"); ?>" ><a href="{{ route('evenement', $evenement->slug) }}">{{ $evenement->nom_event }}</a></li>
                    @endforeach
                </ul>
            </li>

    @admin        <li class="dropdown <?php active2('/evenement/create'); active2("/evenement"); active2("/photo/create"); ?> ">
                <a   href="#" class="dropdown-toggle hover" data-toggle="dropdown" >Administration</a>
                <ul class="dropdown-menu ">
                    <li class="<?php active2("/evenement/create"); ?>"><a href="{{ route('evenement.create') }}">  <i class="glyphicon glyphicon-plus"></i> Ajouter un évènement</a></li>
                    <li class="<?php active2("/evenement"); ?>"><a href="{{ route('evenement.index') }}">  <i class="glyphicon glyphicon-wrench"></i> Gérer les évènements</a></li>
                    <li class="<?php active2("/photo/create"); ?>" ><a href="{{ route('photo.create') }}"> <i class="glyphicon glyphicon-picture"></i> Ajouter une photo</a></li>
                    <li class="<?php active2("/maintenance"); ?>"><a href="{{ route('maintenance.index') }}"><i class="glyphicon glyphicon-eye-close"></i> Mode maintenance</a></li>
                </ul>
            </li>@endadmin

        </ul>

        <?php
        function select2($url)
        {
            if ($_SERVER["REQUEST_URI"] == $url)
            {
                echo 'selected=""';
            }
        }
        ?>

    @admin    <select onchange="document.location.href=this.value" class="selectnav " id="selectnav2">

            <option <?php select2("/galerie"); ?> value="{{route('galerie')}}"  >Photos</option>
            <option value="#">Administration</option>
            <option <?php select2("/evenement/create"); ?> value="{{route('evenement.create')}}">→ Ajouter un évènement</option>
            <option <?php select2("/evenement"); ?> value="{{route('evenement.index')}}">→ Gérer les évènements</option>
            <option <?php select2("/photo/create"); ?> value="{{route('photo.create')}}">→ Ajouter une photo</option>
        </select>@endadmin
    </div>
</nav>

