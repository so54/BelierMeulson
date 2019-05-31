

<div class="site-wrapper">
    <div class="site-wrapper-inner  text-center">
        <i class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></i>
    </div>
</div>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<link rel="stylesheet" href="{{asset('css/belier-galerie.css')}}">
<link rel="stylesheet" href="{{asset('css/app.css')}}">

@extends ('layouts.base')
@section ('content')



    <div class="bandeau">
        <div class="container">
            <h1>Galerie photos</h1>
        </div>
    </div>


    @if (session('ok'))
        <div class="container">
            <div class="alert alert-dismissible alert-success " role="alert">
                {{ session('ok') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    @endif
    @if (session('updated'))
        <div class="container">
            <div class="alert alert-dismissible alert-success " role="alert">
                {{ session('updated') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    @endif
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                @include('partials.administration')
            </div>
        </div>
    </div>

    <main class="container-fluid">

        @isset($evenement)
            <h2 class="text-title mb-3">{{ $evenement->nom_event }}</h2>
        @endif

        <div class="d-flex justify-content-center">
            {{ $photos->links() }}
        </div>
        <div class="card-columns">
            @foreach($photos as $photo)
                <div class="card " id="photo{{ $photo->ID_PHOTO }}">
                    <a href="{{ url('photos/' . $photo->NOM_PHOTO) }}" class="image-link">
                        <img class="card-img-top"
                             src="{{ url('thumbs/' . $photo->NOM_PHOTO) }}"
                             alt="image">
                    </a>

                    <div class="card-footer text-muted">
                        @foreach($evenements as $evenement)
                            @if($evenement->ID_EVENT ===$photo->ID_EVENT)
                                <em>
                                    <a href="{{ route('evenement', $evenement->slug) }}" data-toggle="tooltip"
                                       title="{{ __('Voir les photos de l\'album ') . $evenement->nom_event }}">{{ $evenement->nom_event }}</a>
                                </em>
                            @endif
                        @endforeach
                        <div class="pull-right">
                            <em>
                                {{ $photo->created_at->format('d m Y') }}
                            </em>
                        </div>
                        <div id="{{ $photo->ID_PHOTO }}">
    <span class="pull-right">
        @admin($photo->user_id)
            <a class="toggleIcons"
               href="#">
            <i class="glyphicon glyphicon-cog"></i>
            </a>
            <span class="menuIcons" style="display: none">
                <a class="form-delete text-danger"
                   href="{{ route('photo.destroy', $photo->ID_PHOTO) }}"
                   data-toggle="tooltip"
                   title="Supprimer cette photo">
                    <i class="glyphicon glyphicon-trash"></i>
                </a>
                <a class="evenement-edit"
                   data-id="{{ $photo->ID_EVENT }}"
                   href="{{ route('photo.update', $photo->ID_PHOTO) }}"
                   data-toggle="tooltip"
                   title="Changer d'album">
                    <i class="glyphicon glyphicon-edit"></i>
                </a>
            </span>
            <form action="{{ route('photo.destroy', $photo->ID_PHOTO) }}" method="POST" class="hide">
                {{csrf_field()}}
                @method('DELETE')
            </form>
        @endadmin
    </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center">
            {{ $photos->links() }}
        </div>

    </main>

    <div class="modal " id="changeEvenement" tabindex="-1" role="dialog" aria-labelledby="evenementLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button><br>
                    <h5 class="modal-title orange" id="evenementLabel">Changement de l'évènement</h5>


                </div>
                <div class="modal-body">
                    <form id="editForm" action="" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <select class="form-control" name="ID_EVENT">
                                @foreach($evenements as $evenement)
                                    <option value="{{ $evenement->ID_EVENT }}">{{ $evenement->nom_event }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-default">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script>
        $(() => {


            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
            })
            $('a.form-delete').click((e) => {
                e.preventDefault();
                let href = $(e.currentTarget).attr('href')
                swal.fire({
                    title: '@lang('Voulez-vous vraiment supprimer cette photo ?')',
                    type: 'error',
                    showCancelButton: true,
                    confirmButtonColor: '#DD6B55',
                    confirmButtonText: '@lang('Oui')',
                    cancelButtonText: '@lang('Non')'
                }).then((result) => {
                    if (result.value) {
                        $("form[action='" + href + "'").submit()
                    }
                })
            })

            $('a.evenement-edit').click((e) => {
                e.preventDefault()
                let that = $(e.currentTarget)
                $('select').val(that.attr('data-id'))
                $('#editForm').attr('action', that.attr('href'))
                $('#changeEvenement').modal('show')
            })

            $('a.toggleIcons').click((e) => {
                e.preventDefault();
                let that = $(e.currentTarget)
                that.next().toggle('slow').end().children().toggleClass('glyphicon-cog').toggleClass('glyphicon-play')
            })
            $('.site-wrapper').fadeOut(1000)
            $('[data-toggle="tooltip"]').tooltip()
            $('.card-columns').magnificPopup({
                delegate: 'a.image-link',
                type: 'image',
                tClose: '@lang("Fermer (Esc)")'@if($photos->count() > 1),
                gallery: {
                    enabled: true,
                    tPrev: '@lang("Précédent (Flèche gauche)")',
                    tNext: '@lang("Suivant (Flèche droite)")'
                },
                callbacks: {
                    buildControls: function () {
                        this.contentContainer.append(this.arrowLeft.add(this.arrowRight))
                    }
                }@endif
            })
        })
    </script>




@endsection

