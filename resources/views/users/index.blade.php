@extends('layouts.form-wide')

<link rel="stylesheet" href="{{asset('css/belier-galerie.css')}}">
<link rel="stylesheet" href="{{asset('css/form2-layout.css')}}">

@section('card')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 offset-md-3">
                @if (session('ok'))
                    <div class="contenu">

                        <div class="alert alert-dismissible alert-success " role="alert">
                            {{ session('ok') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>

                @endif
                    @if (session('ajout'))
                        <div class="contenu">

                            <div class="alert alert-dismissible alert-success " role="alert">
                                {{ session('ajout') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>

                    @endif
                @include('partials.administration')
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    @component('components.card')

            @slot('title')

                <strong class="orange">  Gestion des utilisateurs (administrateurs en rouge)</strong>
                <a href="{{ route('register') }}" class="btn btn-success btn-sm pull-right " role="button" aria-disabled="true"><i class="fa fa-user-plus fa-lg "></i> Ajouter un utilisateur</a>
            @endslot

                <div class="table-responsive">
                    <table class="table black">
                        <thead>
                        <tr class="white">
                            <th scope="col">Nom</th>
                            <th scope="col">Email</th>
                            <th scope="col">Inscription</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr @if($user->admin) style="color: red" @endif>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at->format('d/m/Y') }}</td>
                                <td>@if($user->email_verified_at){{ $user->email_verified_at->format('d/m/Y') }}@endif</td>
                                <td>
                                    <a type="button" href="{{ route('user.edit', $user->id) }}"
                                       class="btn btn-warning btn-sm pull-right mr-2 " data-toggle="tooltip"
                                       title="Modifier l'utilisateur {{ $user->name }}"><i
                                                class="fa fa-edit fa-lg black"></i></a>
                                </td>
                                <td>
                                    @unless($user->admin)
                                        <a type="button" href="{{ route('user.destroy', $user->id) }}"
                                           class="btn btn-danger btn-sm pull-right " data-toggle="tooltip"
                                           title="Supprimer l'utilisateur {{ $user->name }}"><i
                                                    class="fa fa-trash fa-lg"></i></a>
                                    @endunless
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

    @endcomponent
@endsection

@section('script')
    <script>
        $(() => {
            $('a').removeClass('invisible')
        })
    </script>
    @include('partials.script-delete', ['text' => __('Vraiment supprimer cet utilisateur ?'), 'return' => 'removeTr'])
@endsection