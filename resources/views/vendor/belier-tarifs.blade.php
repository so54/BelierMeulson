@extends ('layouts.base')

    <link rel="stylesheet" href="{{asset('css/belier-tarifs.css')}}">

@section ('content')

<div class="bandeau">
    <div class="container">

        <div class="col-md-6 ">
            <h1>Tarifs </h1>
            <h2>Frais d&#39;adh&eacute;sion</h2>
            <ul>
                @foreach($tarifs as $tarif)@if ($tarif->ID_QUOTIENT == 5 && $tarif->ID_PERIODE == 1 && $tarif->ID_CATEGORIE == 1)<li>Frais d&#39;adh&eacute;sion à l'association / an : {{$tarif->TARIF}}€</li>@endif @endforeach
            </ul>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </div>

        <div class="col-md-6">
            <h2>Modes de paiements</h2>
            <ul>
                <li>Esp&egrave;ces</li>
                <li>Ch&egrave;que</li>
                <li>Ch&egrave;ques vacances (uniquement pour le r&egrave;glement des p&eacute;riodes de vacances)</li>
                <li>CESU&nbsp;</li>
                @foreach ($liens as $lien) @if($lien->id_emplacement == 3)<li><a href="../documents/{{$lien->FICHIER_LIEN}}" target="_blank"> Virement bancaire</a></li>@endif @endforeach
            </ul>
        </div>
    </div>
</div>

<div class="contenu">
    <div class="container">

        <h2>Centre de loisirs</h2>
        <div class="table-responsive">

            <table border="1" cellpadding="1" cellspacing="1" class="table table-striped" height="253" width="1321">
                <tbody>
                <tr>
                    <td colspan="1">Quotient familial</td>
                    <td>Semaine</td>
                    <td>Journ&eacute;e (repas inclus)</td>
                </tr>
                <tr>
                    <td>Aide aux temps libres</td>
                    @foreach($tarifs as $tarif)  @if ($tarif->ID_QUOTIENT == 1 && $tarif->ID_PERIODE == 2 && $tarif->ID_CATEGORIE == 2) <td>{{$tarif->TARIF}}</td>@endif @endforeach
                    @foreach($tarifs as $tarif)  @if ($tarif->ID_QUOTIENT == 1 && $tarif->ID_PERIODE == 3 && $tarif->ID_CATEGORIE == 2)<td>{{$tarif->TARIF}}</td>@endif @endforeach
                </tr>
                <tr>
                    <td>QF &lt; 800</td>
                    @foreach($tarifs as $tarif)  @if ($tarif->ID_QUOTIENT == 2 && $tarif->ID_PERIODE == 2 && $tarif->ID_CATEGORIE == 2)<td>{{$tarif->TARIF}}</td>@endif @endforeach
                    @foreach($tarifs as $tarif)  @if ($tarif->ID_QUOTIENT == 2 && $tarif->ID_PERIODE == 3 && $tarif->ID_CATEGORIE == 2)<td>{{$tarif->TARIF}}</td>@endif @endforeach
                </tr>
                <tr>
                    <td>QF &gt; 800</td>
                    @foreach($tarifs as $tarif)  @if ($tarif->ID_QUOTIENT == 3 && $tarif->ID_PERIODE == 2 && $tarif->ID_CATEGORIE == 2)<td>{{$tarif->TARIF}}</td>@endif @endforeach
                    @foreach($tarifs as $tarif)  @if ($tarif->ID_QUOTIENT == 3 && $tarif->ID_PERIODE == 3 && $tarif->ID_CATEGORIE == 2)<td>{{$tarif->TARIF}}</td>@endif @endforeach
                </tr>
                <tr>
                    <td>Non adhérent CAF</td>
                    @foreach($tarifs as $tarif)  @if ($tarif->ID_QUOTIENT == 4 && $tarif->ID_PERIODE == 2 && $tarif->ID_CATEGORIE == 2)<td>{{$tarif->TARIF}}</td>@endif @endforeach
                    @foreach($tarifs as $tarif)  @if ($tarif->ID_QUOTIENT == 4 && $tarif->ID_PERIODE == 3 && $tarif->ID_CATEGORIE == 2)<td>{{$tarif->TARIF}}</td>@endif @endforeach
                </tr>
                </tbody>
            </table>

        </div>

        <h2>Mercredis éducatifs</h2>
        <div class="table-responsive">

            <table border="1" cellpadding="1" cellspacing="1" class="table table-striped" height="253" width="1321">
                <tbody>
                <tr>
                    <td colspan="1">Quotient familial</td>
                    <td>Demi-journée</td>
                    <td>Journ&eacute;e (repas inclus)</td>
                </tr>
                <tr>
                    <td>QF &lt; 800</td>
                    @foreach($tarifs as $tarif)  @if ($tarif->ID_QUOTIENT == 2 && $tarif->ID_PERIODE == 4 && $tarif->ID_CATEGORIE == 3)<td>{{$tarif->TARIF}}</td>@endif @endforeach
                    @foreach($tarifs as $tarif)  @if ($tarif->ID_QUOTIENT == 2 && $tarif->ID_PERIODE == 3 && $tarif->ID_CATEGORIE == 3)<td>{{$tarif->TARIF}}</td>@endif @endforeach
                </tr>
                <tr>
                    <td>QF &gt; 800</td>
                    @foreach($tarifs as $tarif)  @if ($tarif->ID_QUOTIENT == 3 && $tarif->ID_PERIODE == 4 && $tarif->ID_CATEGORIE == 3)<td>{{$tarif->TARIF}}</td>@endif @endforeach
                    @foreach($tarifs as $tarif)  @if ($tarif->ID_QUOTIENT == 3 && $tarif->ID_PERIODE == 3 && $tarif->ID_CATEGORIE == 3)<td>{{$tarif->TARIF}}</td>@endif @endforeach
                </tr>
                <tr>
                    <td>Non adhérent CAF</td>
                    @foreach($tarifs as $tarif)  @if ($tarif->ID_QUOTIENT == 4 && $tarif->ID_PERIODE == 4 && $tarif->ID_CATEGORIE == 3)<td>{{$tarif->TARIF}}</td>@endif @endforeach
                    @foreach($tarifs as $tarif)  @if ($tarif->ID_QUOTIENT == 4 && $tarif->ID_PERIODE == 3 && $tarif->ID_CATEGORIE == 3)<td>{{$tarif->TARIF}}</td>@endif @endforeach
                </tr>
                </tbody>
            </table>

        </div>

        <h2>Accueil périscolaire </h2>

        <div class="table-responsive"><table border="1" cellpadding="1" cellspacing="1" class="table table-striped" height="248" width="1289">
                <tbody>
                <tr>
                    <td>Quotient familial</td>
                    <td>1/4 d'heure</td>
                    <td>30 minutes</td>
                    <td>1 heure</td>
                </tr>
                <tr>
                    <td>QF &lt; 800</td>
                    @foreach($tarifs as $tarif)  @if ($tarif->ID_QUOTIENT == 2 && $tarif->ID_PERIODE == 5 && $tarif->ID_CATEGORIE == 4)<td>{{$tarif->TARIF}}</td>@endif @endforeach
                    @foreach($tarifs as $tarif)  @if ($tarif->ID_QUOTIENT == 2 && $tarif->ID_PERIODE == 6 && $tarif->ID_CATEGORIE == 4)<td>{{$tarif->TARIF}}</td>@endif @endforeach
                    @foreach($tarifs as $tarif)  @if ($tarif->ID_QUOTIENT == 2 && $tarif->ID_PERIODE == 7 && $tarif->ID_CATEGORIE == 4)<td>{{$tarif->TARIF}}</td>@endif @endforeach
                </tr>
                <tr>
                    <td>QF &gt; 800</td>
                    @foreach($tarifs as $tarif)  @if ($tarif->ID_QUOTIENT == 3 && $tarif->ID_PERIODE == 5 && $tarif->ID_CATEGORIE == 4)<td>{{$tarif->TARIF}}</td>@endif @endforeach
                    @foreach($tarifs as $tarif)  @if ($tarif->ID_QUOTIENT == 3 && $tarif->ID_PERIODE == 6 && $tarif->ID_CATEGORIE == 4)<td>{{$tarif->TARIF}}</td>@endif @endforeach
                    @foreach($tarifs as $tarif)  @if ($tarif->ID_QUOTIENT == 3 && $tarif->ID_PERIODE == 7 && $tarif->ID_CATEGORIE == 4)<td>{{$tarif->TARIF}}</td>@endif @endforeach
                </tr>
                <tr>
                    <td>Non adhérent CAF</td>
                    @foreach($tarifs as $tarif)  @if ($tarif->ID_QUOTIENT == 4 && $tarif->ID_PERIODE == 5 && $tarif->ID_CATEGORIE == 4)<td>{{$tarif->TARIF}}</td>@endif @endforeach
                    @foreach($tarifs as $tarif)  @if ($tarif->ID_QUOTIENT == 4 && $tarif->ID_PERIODE == 6 && $tarif->ID_CATEGORIE == 4)<td>{{$tarif->TARIF}}</td>@endif @endforeach
                    @foreach($tarifs as $tarif)  @if ($tarif->ID_QUOTIENT == 4 && $tarif->ID_PERIODE == 7 && $tarif->ID_CATEGORIE == 4)<td>{{$tarif->TARIF}}</td>@endif @endforeach
                </tr>
                </tbody>
            </table>

            <p>&nbsp;</p>
        </div>
        <h2>Restaurant scolaire</h2>
        <p>Le repas est au prix fixe de @foreach($tarifs as $tarif)  @if ($tarif->ID_QUOTIENT == 5 && $tarif->ID_PERIODE == 8 && $tarif->ID_CATEGORIE == 5){{$tarif->TARIF}}€.@endif @endforeach A cela, sont rajoutés les frais de garderie pour la tranche méridienne.</p>

        <div class="table-responsive">
            <table border="1" cellpadding="1" cellspacing="1" class="table table-striped" style="width: 100%;">
                <tbody>
                <tr>
                    <td>Quotient familial</td>
                    <td>Prix par enfant</td>
                </tr>
                <tr>
                    <td>QF &lt; 800</td>
                    @foreach($tarifs as $tarif)  @if ($tarif->ID_QUOTIENT == 2 && $tarif->ID_PERIODE == 9 && $tarif->ID_CATEGORIE == 5)<td>{{$tarif->TARIF}}</td>@endif @endforeach
                </tr>
                <tr>
                    <td>QF &gt; 800</td>
                    @foreach($tarifs as $tarif)  @if ($tarif->ID_QUOTIENT == 3 && $tarif->ID_PERIODE == 9 && $tarif->ID_CATEGORIE == 5)<td>{{$tarif->TARIF}}</td>@endif @endforeach
                </tr>
                <tr>
                    <td>Non adhérent CAF</td>
                    @foreach($tarifs as $tarif)  @if ($tarif->ID_QUOTIENT == 4 && $tarif->ID_PERIODE == 9 && $tarif->ID_CATEGORIE == 5)<td>{{$tarif->TARIF}}</td>@endif @endforeach
                </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>


@endsection
