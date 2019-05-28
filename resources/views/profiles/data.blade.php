@extends('layouts.form')

<link rel="stylesheet" href="{{asset('css/belier-galerie.css')}}">
<link rel="stylesheet" href="{{asset('css/form2-layout.css')}}">
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 offset-md-3">
    @include('partials.administration')
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <main class="container-fluid">
        <h1>Export des données personnelles</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">A propos</h5>
                <table class="table">
                    <tr>
                        <td>Rapport généré pour : </td>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <td>Pour le site :</td>
                        <td>{{ env('APP_NAME') }}</td>
                    </tr>
                    <tr>
                        <td>A l'url :</td>
                        <td>{{ env('APP_URL') }}</td>
                    </tr>
                    <tr>
                        <td>Le :</td>
                        <td>{{ now()->format('d/m/Y') }}</td>
                    </tr>
                </table>
                <em>Vous pouvez enregistrer cette page pour conserver vos données en utilisant le menu de votre navigateur.</em>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Utilisateur</h5>
                <table class="table">
                    <tr>
                        <td>ID : </td>
                        <td>{{ $user->id }}</td>
                    </tr>
                    <tr>
                        <td>Nom de connexion : </td>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <td>Email :</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <td>Date d'inscription : </td>
                        <td>{{ $user->created_at->format('d/m/Y') }}</td>
                    </tr>
                </table>
            </div>
        </div>

<br>
    </main>
@endsection
