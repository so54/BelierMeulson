@extends ('layouts.base')

    <link rel="stylesheet" href="{{asset('css/belier-actualites.css')}}">

@section ('content')

<div class="bandeau">
    <div class="container">
        <h1>Actualités</h1>
    </div>
</div>

<div class="contenu">
    <div class="container">

        @foreach($articles as $article)
        <div class="listeActus">
            <div class="col-md-5">
                <h2>{{$article->TITRE_ARTICLE}}</h2>
            </div>
            <div class="col-md-7">
                <h3>{{$article->DATE_ARTICLE->format('d/m/Y')}}</h3>
                <p class="aligne-justify">{{$article->DESCRIPTION_ARTICLE}}</p>
            </div>
            <div class="clearfix"></div>
        </div>



@endforeach
    </div>
</div>

@endsection