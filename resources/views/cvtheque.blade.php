@extends('app')
@section('filter')
    <!-- HOME -->
    <section class="home-section section-hero overlay bg-image" style="background-image: url('{{asset('images/hero_1.jpg')}}');" id="home-section">

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12">
                    <div class="mb-5 text-center">
                        <h1 class="text-white font-weight-bold"><br><br>La façon la plus simple d'obtenir votre emploi</h1>
                    </div>
                    <form method="get" class="search-jobs-form" action="{{route("cvteque")}}">
                        <div class="row mb-5">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
                                <input type="text" value="{{$tags}}" name="tags" class="form-control form-control-lg" placeholder="Recherche..." id="titre">
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
                                <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Sélectionnez Gouvernorat" name="lieu">
                                    <option value="Ariana"  @if($lieu== "Ariana") selected @endif>Ariana</option>
                                    <option value="Béja" @if($lieu == "Béja") selected @endif>Béja</option>
                                    <option value="Ben Arous" @if($lieu == "Ben Arous") selected @endif >Ben Arous</option>
                                    <option value="Bizerte"  @if($lieu == "Bizerte") selected @endif>Bizerte</option>
                                    <option value="Gabès"  @if($lieu == "Gabès") selected @endif>Gabès</option>
                                    <option value="Gafsa"  @if($lieu == "Gafsa") selected @endif>Gafsa</option>
                                    <option value="Jendouba"  @if($lieu == "Jendouba") selected @endif>Jendouba</option>
                                    <option value="Kairouan"  @if($lieu == "Kairouan") selected @endif>Kairouan</option>
                                    <option value="Kasserine"  @if($lieu == "Kasserine") selected @endif>Kasserine</option>
                                    <option value="Kébili" @if($lieu == "Kébili") selected @endif>Kébili</option>
                                    <option value="Le Kef" @if($lieu == "Le Kef") selected @endif>Le Kef</option>
                                    <option value="Mahdia" @if($lieu == "Mahdia") selected @endif>Mahdia</option>
                                    <option value="La Manouba" @if($lieu == "La Manouba") selected @endif>La Manouba</option>
                                    <option value="Médenine" @if($lieu == "Médenine") selected @endif>Médenine</option>
                                    <option value="Monastir" @if($lieu == "Monastir") selected @endif>Monastir</option>
                                    <option value="Nabeul" @if($lieu == "Nabeul") selected @endif>Nabeul</option>
                                    <option value="Sfax" @if($lieu == "Sfax") selected @endif>Sfax</option>
                                    <option value="Sidi Bouzid" @if($lieu == "Sidi Bouzid") selected @endif>Sidi Bouzid</option>
                                    <option value="Siliana" @if($lieu == "Siliana") selected @endif>Siliana</option>
                                    <option value="Sousse" @if($lieu == "Sousse") selected @endif>Sousse</option>
                                    <option value="Tataouine" @if($lieu == "Tataouine") selected @endif>Tataouine</option>
                                    <option value="Tozeur" @if($lieu == "Tozeur") selected @endif>Tozeur</option>
                                    <option value="Tunis" @if($lieu == "Tunis") selected @endif>Tunis</option>
                                    <option value="Zaghouan" @if($lieu == "Zaghouan") selected @endif>Zaghouan</option>


                                </select>



                            </div>



                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
                                <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>rechercher</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </section>

@endsection
@section ("content")

    <section class="site-section" style="background: #f3eded;">
        <div class="row">
            @if (count($condidat) > 0)
            @foreach($condidat as $row)
                <div class="col-lg-6 mb-4">

                    <div class="block__87154">
                        <h3><a href="{{route('cvteque1', ["id" => $row->id])}}" target="_blank" >{{$row->prenom}} {{$row->nom}}</a></h3>


                        <div class="block__91147 d-flex align-items-center mb-4">
                            <figure class="mr-4"><img src="{{asset('images/profile/'.$row->photo)}}" alt="Image" class="img-fluid"></figure>
                            <div>
                                <h3>Email : {{$row->email}}</h3>
                                <span class="position">Téléphone : {{$row->telephone}}</span>
                            </div>


                        </div>
                        <div>
                            <video class="vid" controls>
                                <source src="{{asset('cv/videos/'.$row->video_cv)}}" type="video/mp4">
                                <source src="{{asset('cv/videos/'.$row->video_cv)}}" type="video/ogg">
                            </video>
                        </div>
                    </div>
                </div>
            @endforeach
           {{$condidat->links()}}
            @else

                <div class="row">
                    <div class="col-lg-12 md-12 mb-4">

                        <p class="alert alert-success  " class="close" data-dismiss="alert" aria-label="Close">Aucun condidat</p>
                    </div>
                </div>

            @endif

        </div>





    </section>
@endsection
