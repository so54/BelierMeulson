<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h2 class="modal-title" id="myModalLabel">Formulaires</h2>
            </div>
            <div class="modal-body">
                <h3>Comment s’inscrire ?</h3>
                <p>Pour vous inscrire, merci de télécharger, remplir et nous renvoyer les documents ci-dessous :</p>
                <p>&nbsp;</p>
                <ul>
                    @foreach ($liens as $lien) @if($lien->id_emplacement == 1) <li><a href="../documents/{{$lien->FICHIER_LIEN}}" target="_blank">{{$lien->NOM_LIEN}}</a></li>@endif @endforeach
                    @foreach ($liens as $lien) @if($lien->id_emplacement == 2) <li><a href="../documents/{{$lien->FICHIER_LIEN}}" target="_blank">{{$lien->NOM_LIEN}}</a></li>@endif @endforeach
                    @foreach ($liens as $lien) @if($lien->id_emplacement == 3)<li><a href="../documents/{{$lien->FICHIER_LIEN}}" target="_blank">{{$lien->NOM_LIEN}}</a></li>@endif @endforeach
                    @foreach ($liens as $lien) @if($lien->id_emplacement == 13)<li><a href="../documents/{{$lien->FICHIER_LIEN}}" target="_blank">{{$lien->NOM_LIEN}}</a></li>@endif @endforeach
                    @foreach ($liens as $lien) @if($lien->id_emplacement == 15)<li><a href="../documents/{{$lien->FICHIER_LIEN}}"  target="_blank">{{$lien->NOM_LIEN}}</a></li>@endif @endforeach
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
