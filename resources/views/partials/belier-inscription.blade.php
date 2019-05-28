<div class="blockInscription">
    <h3>Comment s&rsquo; inscrire ?</h3>
    <p>Pour vous inscrire, merci de t&eacute;l&eacute;charger, remplir et nous renvoyer les documents ci-dessous :</p>
    <p>&nbsp;</p>
    <ul>
        @foreach ($liens as $lien) @if($lien->id_emplacement == 1) <li><a href="../documents/{{$lien->FICHIER_LIEN}}" target="_blank">{{$lien->NOM_LIEN}}</a></li>@endif @endforeach
        @foreach ($liens as $lien) @if($lien->id_emplacement == 2)<li><a href="../documents/{{$lien->FICHIER_LIEN}}" target="_blank">{{$lien->NOM_LIEN}}</a></li>@endif @endforeach
        @foreach ($liens as $lien) @if($lien->id_emplacement == 3)<li><a href="../documents/{{$lien->FICHIER_LIEN}}" target="_blank">{{$lien->NOM_LIEN}}</a></li>@endif @endforeach
        @foreach ($liens as $lien) @if($lien->id_emplacement == 13)<li><a href="../documents/{{$lien->FICHIER_LIEN}}" target="_blank">{{$lien->NOM_LIEN}}</a></li>@endif @endforeach
        @foreach ($liens as $lien) @if($lien->id_emplacement == 15) <li><a href="../documents/{{$lien->FICHIER_LIEN}}"  target="_blank">{{$lien->NOM_LIEN}}</a></li>@endif @endforeach
    </ul>
</div>
