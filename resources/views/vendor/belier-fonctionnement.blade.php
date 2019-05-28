@extends ('layouts.base')

    <link rel="stylesheet" href="{{asset('css/belier-fonctionnement.css')}}">


@section ('content')


<div class="bandeau">
    <div class="container">
        <h1>Fonctionnement de l'association</h1>
    </div>
</div>

<div class="contenu">
    <div class="container">
        <div class="col-md-7">
            <h3 class="aligne-center">Association Le Bélier-Meulson <br><br> Regroupement scolaire Sexey-aux-Forges / Maron</h3><br>
            <p class="aligne-justify">Pour bénéficier de nos services, vous devez être membres de notre association pour l'année : l'adhésion familiale de @foreach($tarifs as $tarif)@if ($tarif->ID_QUOTIENT == 5 && $tarif->ID_PERIODE == 1 && $tarif->ID_CATEGORIE == 1){{$tarif->TARIF}}€@endif @endforeach,
                renouvelable au 1er septembre de chaque année apparaîtra sur votre première facture.<br><strong class="blue">Les enfants sont pris en charge dès leur scolarisation.</strong><br><br>
                <strong class="orange">Assurance : </strong>Les enfants des familles adhérentes sont couverts par l'assurance de l'association. Nous rappelons également l'intérêt de souscrire un contrat d'assurance
                pour couvrir les dommages corporels auxquels sont exposés les enfants pendant les activités de l'association. En effet, la responsabilité civile ne couvre que les dégâts
                occasionnés par l'enfant à un tiers et non ses propres dommages.<br><br>
                <strong class="orange">Fiches sanitaires :</strong> Elles permettent au personnel de l'association de mieux connaître votre enfant. La Direction Régionale de la Jeunesse et des Sports (DRJS) impose
                aux structures d'accueil de disposer de ces fiches signées et datées de moins d'un an. Tout changement intervenant en cours d'année doit être signalé à l'équipe
                d'animation.<br><br>
                <strong class="orange">Activités : </strong>Toutes les activités ci-dessous font l'objet d'une facture récapitulative mensuelle. Chaque début de mois, les parents reçoivent un mail accompagnant
                la facture.<br><br>Par décision du Conseil d'Administration, les familles ayant un arriéré de 2-3 mois ou plus de 300€ de créance ne pourront plus bénéficier de nos
                prestations jusqu'à régularisation de leur situation.<br><br>
                Nous espérons que nos services répondent à vos besoins et attentes. Chaque parent adhérent est invité à venir s'exprimer lors de l'Assemblée Générale annuelle. Les bonnes volontés
                sont également les bienvenues pour prendre part au Conseil d'Administration. L’association ne pourrait pas exister sans les familles, les parents qui donnent de leur temps pour
                accompagner des sorties, participer à la kermesse, les bénévoles qui se rendent disponibles pour la vie de l’association.
            </p>
            @foreach ($liens as $lien)
                @if($lien->id_emplacement == 6 )   <h3 ><a href="../documents/{{$lien->FICHIER_LIEN}}" target="_blank">{{$lien->NOM_LIEN}}</a></h3>@endif
            @endforeach
        </div>

        <div class="col-md-5">

           @include ('partials.belier-inscription')

           @include ('partials.belier-galerie-visu')
        </div>

    </div>
</div>




@endsection


