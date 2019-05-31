<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width = device-width, initial-scale=1">
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{asset('css/belier-admin.css')}}">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css" />

    <link href="https://fonts.googleapis.com/css?family=Neucha" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title> Association Le Bélier-Meulson </title>

</head>

<header>

    <div class="container">
        <div class="col-md-12">
            <div class="navbar-header">
                <p><a href="{{route('home')}}" class="btn bouton">Retour au site</a></p>
                <h1><a class="navbar-brand" href="{{route('home')}}">
                        <img src="{{asset('images/logo2_petit2.png')}}" class="img-responsive logo"
                             alt="Association Le Bélier Meulson"></a> ASSOCIATION LE BELIER-MEULSON</h1>
            </div>
        </div>
    </div>

</header>

<body>

<div class="clearfix"></div>

<div class="bandeau">
    <div class="container">
        <div class="col-md-7 ">
            <h1 class="titre">Administration du site</h1>
        </div>
    </div>
</div>

<div class="contenu">
    <div class="container">

        <h2>Liste des items</h2>
        <h3>Formulaires - Page Accueil<a href="#" class="btn btn-success "><span
                        class="glyphicon glyphicon-plus"></span>
                Ajouter</a></h3>
        <div class="table-responsive">

            <table border="1" cellpadding="1" cellspacing="1" class="table table-striped" height="253" width="1321">
                <tbody>
                <tr>
                    <td colspan="1">Nom du lien</td>
                    <td>Description</td>
                    <td>Fichier</td>
                    <td width="350">Actions</td>
                </tr>
                <tr>
                    <td>Dossier Inscription 2018-2019</td>
                    <td>Lien vers l'inscription à l'association</td>
                    <td>1er fichier.pdf</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                <tr>
                    <td>RIB de l'association</td>
                    <td>Lien vers le rib</td>
                    <td>2eme fichier.pdf</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                <tr>
                    <td>Inscription Centre aéré Février 2019</td>
                    <td>Lien vers l'inscription au centre aéré</td>
                    <td>PLAQUETTE-ACM-2019.docx</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                <tr>
                    <td>Inscription Camps Ski 2018</td>
                    <td>Lien vers l'inscription au camp</td>
                    <td>Plaquette.docx</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                </tbody>
            </table>

        </div>

        <h3>Equipe animation - Page L'Association / Présentation<a href="#" class="btn btn-success "><span
                        class="glyphicon glyphicon-plus"></span>
                Ajouter</a></h3>
        <div class="table-responsive">

            <table border="1" cellpadding="1" cellspacing="1" class="table table-striped" height="253" width="1321">
                <tbody>
                <tr>
                    <td colspan="1">Nom</td>
                    <td>Fonction</td>
                    <td>Photo</td>
                    <td width="350">Actions</td>
                </tr>
                <tr>
                    <td>Romain GUYOT</td>
                    <td>Directeur</td>
                    <td>directeur.jpg</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                <tr>
                    <td>Dimitri OUDET</td>
                    <td>Adjoint</td>
                    <td>adjoint.png</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                <tr>
                    <td>Corinne KOENIG</td>
                    <td>Cantinière</td>
                    <td>cantiniere.png</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                <tr>
                    <td>Julie KAROTSCH</td>
                    <td>Animatrice</td>
                    <td>anim1.jpg</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                <tr>
                    <td>Faustine MAUFROY</td>
                    <td>Animatrice</td>
                    <td>anim2.jpg</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                <tr>
                    <td>Véronique HOPP</td>
                    <td>Animatrice</td>
                    <td>anim3.png</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                </tbody>
            </table>

        </div>

        <h3>Liens - Page L'association / Fonctionnement<a href="#" class="btn btn-success "><span
                        class="glyphicon glyphicon-plus"></span>
                Ajouter</a></h3>
        <div class="table-responsive">

            <table border="1" cellpadding="1" cellspacing="1" class="table table-striped" height="100" width="1321">
                <tbody>
                <tr>
                    <td colspan="1">Nom du lien</td>
                    <td>Description</td>
                    <td>Fichier</td>
                    <td width="350">Actions</td>
                </tr>
                <tr>
                    <td>Plaquette d'informations générales</td>
                    <td>Lien vers la plaquette d'informations</td>
                    <td>Belier-Meulson-2018-2019.pdf</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                </tbody>
            </table>

        </div>

        <h3>Liens - Page Restauration<a href="#" class="btn btn-success "><span
                        class="glyphicon glyphicon-plus"></span>
                Ajouter</a></h3>
        <div class="table-responsive">

            <table border="1" cellpadding="1" cellspacing="1" class="table table-striped" height="253" width="1321">
                <tbody>
                <tr>
                    <td colspan="1">Nom du lien</td>
                    <td>Description</td>
                    <td>Fichier</td>
                    <td width="350">Actions</td>
                </tr>
                <tr>
                    <td>La société API</td>
                    <td>Lien du site fournisseur API</td>
                    <td>lorrainescolaire.apimobile.fr</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                <tr>
                    <td>Réservez ici!</td>
                    <td>Lien de réservation</td>
                    <td>logicielcantine.fr/beliermeulson</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                <tr>
                    <td>Menus Mai-Juin-Juillet 2019</td>
                    <td>Lien des menus</td>
                    <td>menus-mai-juin-2019.pdf</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                <tr>
                    <td>Goûters Mai-Juin-Juillet 2019</td>
                    <td>Lien des goûters</td>
                    <td>Gouters-Mai-Juin-2019.pdf</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                </tbody>
            </table>

        </div>

        <h3>Liens - Page Les activités / Accueil périscolaire<a href="#" class="btn btn-success "><span
                        class="glyphicon glyphicon-plus"></span>
                Ajouter</a></h3>
        <div class="table-responsive">

            <table border="1" cellpadding="1" cellspacing="1" class="table table-striped" height="100" width="1321">
                <tbody>
                <tr>
                    <td colspan="1">Nom du lien</td>
                    <td>Description</td>
                    <td>Fichier</td>
                    <td width="350">Actions</td>
                </tr>
                <tr>
                    <td>Réservez ici!</td>
                    <td>Lien vers le site de réservation</td>
                    <td>logicielcantine.fr/beliermeulson</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                </tbody>
            </table>

        </div>
        <h3>Liens - Page Les activités / Mercredis éducatifs<a href="#" class="btn btn-success "><span
                        class="glyphicon glyphicon-plus"></span>
                Ajouter</a></h3>
        <div class="table-responsive">

            <table border="1" cellpadding="1" cellspacing="1" class="table table-striped" height="100" width="1321">
                <tbody>
                <tr>
                    <td colspan="1">Nom du lien</td>
                    <td>Description</td>
                    <td>Fichier</td>
                    <td width="350">Actions</td>
                </tr>
                <tr>
                    <td>Programme des activités Avril 2019</td>
                    <td>Lien vers le programme des mercredis</td>
                    <td>mercredis-recreatifs.docx</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                <tr>
                    <td>Réservez ici!</td>
                    <td>Lien vers le site de réservation</td>
                    <td>logicielcantine.fr/beliermeulson</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                </tbody>
            </table>

        </div>
        <h3>Liens - Page Les activités / Les vacances<a href="#" class="btn btn-success "><span
                        class="glyphicon glyphicon-plus"></span>
                Ajouter</a></h3>
        <div class="table-responsive">

            <table border="1" cellpadding="1" cellspacing="1" class="table table-striped" height="253" width="1321">
                <tbody>
                <tr>
                    <td colspan="1">Nom du lien</td>
                    <td>Description</td>
                    <td>Fichier</td>
                    <td width="350">Actions</td>
                </tr>
                <tr>
                    <td>Programme des activités Février 2019</td>
                    <td>Lien du programme du centre aéré</td>
                    <td>PLAQUETTE-ACM-2019.docx</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                <tr>
                    <td>Réservez ici!</td>
                    <td>Lien vers le formulaire de contact</td>
                    <td>#formulaire</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                <tr>
                    <td>Programme Camp Ski 2018</td>
                    <td>Lien du programme du camp</td>
                    <td>Plaquette.docx</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                <tr>
                    <td>Réservez ici!</td>
                    <td>Lien vers le formulaire de contact </td>
                    <td>#formulaire</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                </tbody>
            </table>

        </div>
        <h3>Tarifs - Page Les tarifs / Adhésion<a href="#" class="btn btn-success "><span
                        class="glyphicon glyphicon-plus"></span>
                Ajouter</a></h3>
        <div class="table-responsive">

            <table border="1" cellpadding="1" cellspacing="1" class="table table-striped" height="100" width="1321">
                <tbody>
                <tr>
                    <td colspan="1">Description du tarif</td>
                    <td>Tarif</td>
                    <td width="350">Actions</td>
                </tr>
                <tr>
                    <td>Frais d'adhésion à l'association / an</td>
                    <td>15</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>

                </tbody>
            </table>
        </div>
        <h3>Tarifs - Page Les tarifs / Centre de loisirs<a href="#" class="btn btn-success "><span
                        class="glyphicon glyphicon-plus"></span>
                Ajouter</a></h3>
        <div class="table-responsive">

            <table border="1" cellpadding="1" cellspacing="1" class="table table-striped" height="253" width="1321">
                <tbody>
                <tr>
                    <td colspan="1">Quotient familial</td>
                    <td>Semaine</td>
                    <td>Journée (repas inclus)</td>
                    <td width="350">Actions</td>
                </tr>
                <tr>
                    <td>Aide aux temps libres</td>
                    <td>54.85</td>
                    <td>12.77</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                <tr>
                    <td>QF &lt; 800</td>
                    <td>73.85</td>
                    <td>16.57</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                <tr>
                    <td>QF &gt; 800</td>
                    <td>74.85</td>
                    <td>16.77</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                <tr>
                    <td>Non adhérent CAF</td>
                    <td>96</td>
                    <td>21</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                </tbody>
            </table>

        </div>
        <h3>Tarifs - Page Les tarifs / Mercredis éducatifs<a href="#" class="btn btn-success "><span
                        class="glyphicon glyphicon-plus"></span>
                Ajouter</a></h3>
        <div class="table-responsive">

            <table border="1" cellpadding="1" cellspacing="1" class="table table-striped" height="253" width="1321">
                <tbody>
                <tr>
                    <td colspan="1">Quotient familial</td>
                    <td>Demi-journée</td>
                    <td>Journée (repas inclus)</td>
                    <td width="350">Actions</td>
                </tr>
                <tr>
                    <td>QF &lt; 800</td>
                    <td>6.50</td>
                    <td>15.95</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                <tr>
                    <td>QF &gt; 800</td>
                    <td>7</td>
                    <td>16.95</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                <tr>
                    <td>Non adhérent CAF</td>
                    <td>8.50</td>
                    <td>18.45</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                </tbody>
            </table>

        </div>
        <h3>Tarifs - Page Les tarifs / Accueil périscolaire<a href="#" class="btn btn-success "><span
                        class="glyphicon glyphicon-plus"></span>
                Ajouter</a></h3>
        <div class="table-responsive">

            <table border="1" cellpadding="1" cellspacing="1" class="table table-striped" height="253" width="1321">
                <tbody>
                <tr>
                    <td colspan="1">Quotient familial</td>
                    <td>1/4 d'heure</td>
                    <td>30 minutes</td>
                    <td>1 heure</td>
                    <td width="350">Actions</td>
                </tr>
                <tr>
                    <td>QF &lt; 800</td>
                    <td>0.58</td>
                    <td>1.16</td>
                    <td>2.32</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                <tr>
                    <td>QF &gt; 800</td>
                    <td>0.60</td>
                    <td>1.20</td>
                    <td>2.40</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                <tr>
                    <td>Non adhérent CAF</td>
                    <td>0.65</td>
                    <td>1.30</td>
                    <td>2.60</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                </tbody>
            </table>

        </div>
        <h3>Tarifs - Page Les tarifs / Restauration Prix repas<a href="#" class="btn btn-success "><span
                        class="glyphicon glyphicon-plus"></span>
                Ajouter</a></h3>
        <div class="table-responsive">

            <table border="1" cellpadding="1" cellspacing="1" class="table table-striped" height="100" width="1321">
                <tbody>
                <tr>
                    <td colspan="1">Description</td>
                    <td>Tarif</td>
                    <td width="350">Actions</td>
                </tr>
                <tr>
                    <td>prix fixe</td>
                    <td>3.45</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                </tbody>
            </table>

        </div>
        <h3>Tarifs - Page Les tarifs / Restauration<a href="#" class="btn btn-success "><span
                        class="glyphicon glyphicon-plus"></span>
                Ajouter</a></h3>
        <div class="table-responsive">

            <table border="1" cellpadding="1" cellspacing="1" class="table table-striped" height="253" width="1321">
                <tbody>
                <tr>
                    <td colspan="1">Quotient familial</td>
                    <td>Prix par enfant</td>
                    <td width="350">Actions</td>
                </tr>
                <tr>
                    <td>QF &lt; 800</td>
                    <td>6.35</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                <tr>
                    <td>QF &gt; 800</td>
                    <td>6.40</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                <tr>
                    <td>Non adhérent CAF</td>
                    <td>6.50</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                </tbody>
            </table>

        </div>
        <h3>Tarifs - Page Contact<a href="#" class="btn btn-success "><span
                        class="glyphicon glyphicon-plus"></span>
                Ajouter</a></h3>
        <div class="table-responsive">

            <table border="1" cellpadding="1" cellspacing="1" class="table table-striped" height="253" width="1321">
                <tbody>
                <tr>
                    <td colspan="1">Description du lien</td>
                    <td>Fichier</td>
                    <td width="350">Actions</td>
                </tr>
                <tr>
                    <td>Lien vers la page Facebook</td>
                    <td>facebook.com/beliermeulson</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                <tr>
                    <td>Lien vers adresse mail</td>
                    <td>belier.meulson@mairie-maron.fr</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                </tbody>
            </table>

        </div>
        <h3>Actualités - Page Actualités<a href="#" class="btn btn-success "><span
                        class="glyphicon glyphicon-plus"></span>
                Ajouter</a></h3>
        <div class="table-responsive">

            <table border="1" cellpadding="1" cellspacing="1" class="table table-striped" height="253" width="1321">
                <tbody>
                <tr>
                    <td colspan="1">Titre</td>
                    <td>Date</td>
                    <td>Article</td>
                    <td width="350">Actions</td>
                </tr>
                <tr>
                    <td>Partenariat Association "Mets le son"</td>
                    <td>18/04/2019</td>
                    <td>Un projet en partenariat avec l'assocation "Mets le son" est en réflexion pour la création d'un
                        petit jardin et la plantation de fleurs sur le site de la Palette ainsi qu'à proximité de
                        l'école.</td>

                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                <tr>
                    <td>Dispositif Handiloisirs 54</td>
                    <td>18/04/2019</td>
                    <td>Le Bélier-Meulson s'engage dans le cadre du dispositif Handiloisirs 54 d'accueillir des enfants
                        en situation de handicap. L'association des FRANCAS accompagnera les familles ainsi que les
                        centres d'accueil dans cette démarche.</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                <tr>
                    <td>Course d'orientation</td>
                    <td>18/04/2019</td>
                    <td>Dans le but de créer des liens avec les familles et de partager un bon moment l'équipe organise
                        une course d'orientation sur le site de la forêt de Haye le samedi 13 avril avec repas
                        pique-nique.</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                <tr>
                    <td>Actu 4</td>
                    <td>18/04/2019</td>
                    <td>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant
                        impression.</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                </tbody>
            </table>

        </div>
        <h3>Photos - Page Galerie<a href="#" class="btn btn-success "><span
                        class="glyphicon glyphicon-plus"></span>
                Ajouter</a></h3>
        <div class="table-responsive">

            <table border="1" cellpadding="1" cellspacing="1" class="table table-striped" height="253" width="1321">
                <tbody>
                <tr>
                    <td colspan="1">Evénement</td>
                    <td>Date</td>
                    <td>Fichier</td>
                    <td width="350">Actions</td>
                </tr>
                <tr>
                    <td>Pâques 2019</td>
                    <td>18/04/2019</td>
                    <td>enfant1.jpg</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                <tr>
                    <td>Noël 2018</td>
                    <td>18/12/2019</td>
                    <td>enfant-noel.jpg</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                <tr>
                    <td>Centre aéré Février 2019</td>
                    <td>18/02/2019</td>
                    <td>centre1.jpg</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                <tr>
                    <td>Camp Ski 2018</td>
                    <td>18/12/2019</td>
                    <td>camp1.jpg</td>
                    <td width="350"><a class="btn btn-default" href="#"><span
                                    class="glyphicon glyphicon-eye-open"></span> Voir</a> <a class="btn btn-primary"
                                                                                             href="#"><span class="glyphicon glyphicon-pencil"></span>
                            Modifier</a> <a class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>

</body>

<footer id="footer">
    @include ('partials.footer')

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</footer>

</html>