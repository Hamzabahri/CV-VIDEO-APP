@extends('app')
@section ("content")
    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('{{asset('images/hero_1.jpg')}}');" id="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                </div>
            </div>
        </div>
    </section>


    <section class="site-section" style="background: #f3eded;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 blog-content">
                    <h3 class="mb-4">{{$desc->nom_entreprise}}</h3>
                    <p> <img src="{{asset('images/profile/'.$desc->logo)}}" style="width: 200px; height: 200px;}" alt="Image"></p>
                    <br><h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-align-left mr-3"></span>Description</h3>
                    <p>{{$desc->description}}</p>
                    <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-turned_in mr-3"></span>secteur d'activité </h3>
                    {{$desc->secteur}}
                </div>
                    <div class="col-lg-4">
                        <div class="bg-light p-3 border rounded mb-4">
                            <h3 class="text-primary  mt-3 h5 pl-3 mb-3 "></h3>
                            <ul class="list-unstyled pl-3 mb-0">
                                <li class="mb-2"><strong class="text-black">Directeur général :</strong> {{$desc->prenom}} {{$desc->nom}}</li>
                                <li class="mb-2"><strong class="text-black">Email :</strong> {{$desc->email}}</li>
                                <li class="mb-2"><strong class="text-black">Nom de l'entreprise :</strong> {{$desc->nom_entreprise}}</li>
                                <li class="mb-2"><strong class="text-black">site web :</strong> {{$desc->site}}</li>
                                <li class="mb-2"><strong class="text-black">Téléphone :</strong> {{$desc->telephone}}</li>
                                <li class="mb-2"><strong class="text-black">Adresse :</strong> {{$desc->adresse}}</li>

                            </ul>
                        </div>
                    </div>



                </div>
            </div>

    </section>



@endsection
