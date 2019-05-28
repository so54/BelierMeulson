@extends ('layouts.form')

<link rel="stylesheet" href="{{asset('css/belier-galerie.css')}}">
<link rel="stylesheet" href="{{asset('css/form2-layout.css')}}">



@section ('card')
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
   @include('partials.administration')

    @component('components.card')
                        @slot('title')

                                <strong class="white">Gestion des évènements :</strong>

                        @endslot

                    <div class="card-body">

                        <table class="table ">
                            <tbody>
                            @foreach($evenements as $evenement)
                                <tr>
                                    <td>{{ $evenement->nom_event }}</td>
                                    <td>{{ $evenement->date_event->format('d/m/Y')}}</td>
                                    <td>

                                        <a type="button" href="{{ route('evenement.destroy', $evenement->ID_EVENT) }}"
                                           class=" btn-danger btn btn-sm pull-right " data-method="DELETE"  data-toggle="tooltip"
                                           title="Supprimer l'évènement {{ $evenement->nom_event }}"><i
                                                    class="glyphicon glyphicon-remove"></i></a>

                                        <a type="button" href="{{ route('evenement.edit', $evenement->ID_EVENT) }}"
                                           class="btn btn-warning btn-sm pull-right mr-2 " data-toggle="tooltip"
                                           title="Modifier l'évènement {{ $evenement->nom_event }}"><i
                                                    class="glyphicon glyphicon-edit"></i></a>

                                    </td>
                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                        <div class="col-md-6">
                            <p><a href="{{route('galerie')}}" class="btn btn-default marge">ANNULER</a></p>
                        </div>
                    </div>
@endcomponent

@endsection

@section('script')
    <script>
        $(() => {
            $('a').removeClass('invisible')
        })



    </script>
    @include('partials.script-delete', ['text' => __('Vraiment supprimer cet évènement ?'), 'return' => 'removeTr'])


@endsection