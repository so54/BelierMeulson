
@extends ('layouts.base')

<link rel="stylesheet" href="{{asset('css/belier-lieux.css')}}">


@section ('content')


    <div class="bandeau">
        <div class="container">
            <h1>Les lieux d&#39;accueil</h1>
    
        </div>
    </div>
    
    
    <div class="contenu activites">
        <div class="container">
    
            <!-- Nav tabs -->
            <ul class="nav nav-tabs navLieux" role="tablist">
                <li role="presentation" class="active"><a href="#maternelle" aria-controls="Maternelle" role="tab" data-toggle="tab">L'école maternelle de Maron</a></li>
                <li role="presentation"><a href="#cantine" aria-controls="Cantine" role="tab" data-toggle="tab">La cantine</a></li>
            </ul>
    
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="maternelle">
                    <div class="row lieux">
                        <div class="col-md-6">
    
                            <div id="carouselMaternelle" class="carousel slide " data-ride="carousel">
                                <div class="carousel-inner">
    @foreach($photo_lieux as $photo_lieu)
        @if($photo_lieu->id_emplacement_photo==18)
                                    <div class="item {{ $loop->first ? 'active' : '' }}">
                                        <img src="../images/{{$photo_lieu->fichier_photo_lieux}}" class="img-responsive" alt="{{$photo_lieu->nom_photo_lieux}}">
                                        <div class="caption">{{$photo_lieu->nom_photo_lieux}}</div>
                                    </div>
                                        @endif
    @endforeach


                                </div>
                                <div class="navCarousel">
                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#carouselMaternelle" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    </a>
                                    <a class="right carousel-control" href="#carouselMaternelle" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    </a>
                                </div>
                            </div>
    
    
                        </div>
                        <div class="col-md-6">
                            <h2>L'école maternelle de Maron</h2>
    
                            <h3>Le lieu d&#39;accueil de l'école maternelle</h3>
    
                            <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
                            <hr/>
                            <div class="addLieux">
                                <p>Place Charles de Gaulle<br />
                                        54230 MARON</p>
    
                                    <p>T&eacute;l : 03 83 47 26 23</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="cantine">
                    <div class="row lieux">
                        <div class="col-md-6">
    
                            <div id="carouselCantine" class="carousel slide " data-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach($photo_lieux as $photo_lieu)
                                        @if($photo_lieu->id_emplacement_photo==19)
                                    <div class="item {{ $loop->first ? 'active' : '' }}">
                                        <img src="../images/{{$photo_lieu->fichier_photo_lieux}}" class="img-responsive" alt="{{$photo_lieu->nom_photo_lieux}}">
                                        <div class="caption">{{$photo_lieu->nom_photo_lieux}}</div>
                                    </div>
                                        @endif
                                    @endforeach

                                  
                                </div>
                                <div class="navCarousel">
                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#carouselCantine" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    </a>
                                    <a class="right carousel-control" href="#carouselCantine" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    </a>
                                </div>
                            </div>
    
    
                        </div>
                        <div class="col-md-6">
                            <h2>La cantine</h2>
    
                            <h3>Le lieu d&#39;accueil de la cantine</h3>
    
                            <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
                            <hr/>
                            <div class="addLieux">
                                <p>Place Charles de Gaulle<br />
                                        54230 MARON</p>
    
                                    <p>T&eacute;l : 03 83 47 26 23</p>

                            </div>
                        </div>
                    </div>
                </div>

                </div>
            </div>
    </div>

@endsection














