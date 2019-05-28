<link rel="stylesheet" href="{{asset('css/belier-accueil.css')}}">

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Formulaire de Contact - Site Le Bélier-Meulson</h2>
<p>Réception d'une prise de contact avec les éléments suivants :</p>
<ul>
    <li><strong>Nom</strong> : {{ $contact['nom'] }}</li>
    <li><strong>Prénom</strong> : {{ $contact['prenom'] }}</li>
    <li><strong>Adresse</strong> : {{ $contact['adresse'] }}</li>
    <li><strong>Code postal</strong> : {{ $contact['code_postal'] }}</li>
    <li><strong>Ville</strong> : {{ $contact['ville'] }}</li>
    <li><strong>Téléphone</strong> : {{ $contact['telephone'] }}</li>
    <li><strong>Email</strong> : {{ $contact['email'] }}</li>
    <li><strong>Message</strong> : {{ $contact['commentaire'] }}</li>
</ul>
</body>
</html>
