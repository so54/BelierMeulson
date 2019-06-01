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
            <li class="dropdown {{currentRoute(route('profile.edit', auth()->id()))}} {{ request()->route()->getName() === 'profile.show' ? 'active' : '' }} ">
                <a   href="#" class="dropdown-toggle hover" data-toggle="dropdown" >Profil</a>
                <ul class="dropdown-menu ">
                    <li class="{{currentRoute(route('profile.edit', auth()->id()))}} {{ request()->route()->getName() === 'profile.show' ? 'active' : '' }} "><a href="{{ route('profile.edit', auth()->id()) }}">  <i class="fa fa-id-card "></i> Modifier mon profil</a></li>
                   <li class="<?php active2("/evenement"); ?>"><a href="{{ route('evenement.index') }}">  <i class="fa fa-user-secret "></i> Modifier mon mot de passe</a></li>

                </ul>
            <li class="dropdown @isset($evenement){{currentRoute(route('evenement', $evenement->slug))}} @endisset">
                <a class="dropdown-toggle hover " href="#"  data-toggle="dropdown" >
                    Albums
                </a>
                <ul class="dropdown-menu">
                    @foreach($evenements as $evenement)
                        <li class="{{currentRoute(route('evenement', $evenement->slug))}}" ><a href="{{ route('evenement', $evenement->slug) }}">{{ $evenement->nom_event }}</a></li>
                    @endforeach
                </ul>
            </li>

    @admin        <li class="dropdown {{ request()->route()->getName() === 'evenement.edit' ? 'active' : '' }} {{ request()->route()->getName() === 'user.edit' ? 'active' : '' }} {{currentRoute(route('evenement.create'))}} <?php active2("/evenement") ;active2("/photo/create");  active2("/maintenance"); active2("/user"); active2("evenement/edit"); active2('/register');?>">
                <a   href="#" class="dropdown-toggle hover styly"  data-toggle="dropdown" >Administration</a>
                <ul class="dropdown-menu styly">
                    <li class="<?php active2("/evenement/create"); ?> "><a href="{{ route('evenement.create') }}" >  <i class="glyphicon glyphicon-plus"></i> Ajouter un album</a></li>
                    <li class="<?php active2("/evenement"); ?> {{ request()->route()->getName() === 'evenement.edit' ? 'active' : '' }}"><a href="{{ route('evenement.index') }}">  <i class="glyphicon glyphicon-wrench"></i> Gérer les albums</a></li>
                    <li class="<?php active2("/photo/create"); ?>" ><a href="{{ route('photo.create') }}"> <i class="glyphicon glyphicon-picture"></i> Ajouter une photo</a></li>
                    <li class="<?php active2("/maintenance"); ?>"><a href="{{ route('maintenance.index') }}"><i class="glyphicon glyphicon-eye-close"></i> Mode maintenance</a></li>
                    <li class="<?php  active2("/user");active2("/register"); ?> {{ request()->route()->getName() === 'user.edit' ? 'active' : '' }} "> <a  href="{{ route('user.index') }}"><i class="fa fa-users "></i> Utilisateurs</a></li>
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

       <select onchange="document.location.href=this.value" class="selectnav " id="selectnav2">

          <option <?php select2("/galerie"); ?> value="{{route('galerie')}}"  >Photos</option>
            <option value="#"  >Profil</option>
           <option  {{currentSelect(route('profile.edit', auth()->id()))}} {{ request()->route()->getName() === 'profile.show' ? 'selected' : '' }} value=" {{route('profile.edit', auth()->id())}}">→ Modifier mon profil</option>
           <option {{currentSelect (route('evenement.index') )}} value="{{ route('evenement.index') }}">→ Modifier mon mot de passe </option>
           <option value="#"  >Albums</option>
           @foreach($evenements as $evenement)  <option  {{currentSelect(route('evenement', $evenement->slug))}} value=" {{route('evenement', $evenement->slug)}}">→ {{ $evenement->nom_event }}</option>@endforeach

           @admin   <option value="#">Administration</option>
            <option <?php select2("/evenement/create"); ?> value="{{route('evenement.create')}}">→ Ajouter un album</option>
            <option <?php select2("/evenement"); ?> {{ request()->route()->getName() === 'evenement.edit' ? 'selected' : '' }} value="{{route('evenement.index')}}">→ Gérer les albums</option>
            <option <?php select2("/photo/create"); ?> value="{{route('photo.create')}}">→ Ajouter une photo</option>
           <option <?php select2("/maintenance"); ?> value="{{ route('maintenance.index') }}">→ Mode maintenance</option>
           <option <?php  select2("/user");select2("/register"); ?> {{ request()->route()->getName() === 'user.edit' ? 'selected' : '' }} value="{{ route('user.index') }}">→ Utilisateurs</option>

       </select>@endadmin
    </div>
</nav>

