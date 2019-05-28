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
        <h4 class="card-header">
            @slot('title')
                <strong class="white">  Ajouter une photo :</strong>

        @endslot
                <div class="card-body">
                    <form method="POST" action="{{ route('photo.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group{{ $errors->has('photo') ? 'has-error'  : '' }}">
                            <div class="custom-file">
                                <input type="file" id="photo" name="photo"
                                       class="{{ $errors->has('photo') ? 'has-error'  : '' }} custom-file-input form-control" >
                                {!! $errors->first('photo', '<small class="help-block text-error">:message</small>') !!}
                                @if ($errors->has('photo'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('photo') }}
                                    </div>
                                @endif
                            </div>
                            <br>
                        </div>
                        <div class="form-group">
                            <img id="preview" class="img-fluid white" src="#"  alt="">
                        </div>
                        <div class="form-group">
                            <label for="ID_EVENT" class="white">Evènement :</label>
                            <select id="ID_EVENT" name="ID_EVENT" class="form-control">
                                @foreach($evenements as $evenement)
                                    <option value="{{ $evenement->ID_EVENT }}">{{ $evenement->nom_event }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6">
                            <button type="submit"  class=" btn btn-default marge" >
                                {{ __('Envoyer') }}
                            </button>
                        </div>
                        <div class="col-md-6">
                            <p><a href="{{route('galerie')}}" class="btn btn-default marge">ANNULER</a></p>
                        </div>
                    </form>
        </div>
        </h4>
    @endcomponent
@endsection

@section('script')
    <script>
        $(() => {
            $('input[type="file"]').on('change', (e) => {
                let that = e.currentTarget
                if (that.files && that.files[0]) {
                    $(that).next('.custom-file-label').html(that.files[0].name)
                    let reader = new FileReader()
                    reader.onload = (e) => {
                        $('#preview').attr('src', e.target.result)
                    }
                    reader.readAsDataURL(that.files[0])
                }
            })
        })


    </script>
@endsection