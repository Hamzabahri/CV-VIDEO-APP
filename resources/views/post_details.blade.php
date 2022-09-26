@extends('app')

@section('partenaire')
    <section class="site-section coleur">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-12 text-center mt-4 mb-5">
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <h2 class="section-title mb-2">Entreprise que nous avons aidée</h2>
                        </div>
                    </div>

                </div>

                @foreach(\App\Entreprise::getStePartenaire() as $ste)
                    <div class="col-6 col-lg-3 col-md-6 text-center">
                        <img src="{{asset('images/profile/'.$ste->logo)}}" alt="Image" class="img-fluid logo-1">
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection


@section('content')
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

            <div class="row align-items-center mb-5">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    @if(Session::has('Success'))
                        <p class="alert alert-success  " class="close" data-dismiss="alert" aria-label="Close">{{ Session::get('Success') }}</p>

                    @endif
                    <div class="d-flex align-items-center">

                        <div class="border p-2 d-inline-block mr-3 rounded">
                            <img src="{{asset('images/profile/'.$offre->logo)}}" style="width: 162px; height: 137px;}" alt="Image">
                        </div>
                        <div>
                            <h2>{{$offre->titre}}</h2>
                            <div>
                                <span class="ml-0 mr-2 mb-2"><span class="icon-briefcase mr-2"></span>{{$offre->nom_entreprise}}</span>
                                <span class="m-2"><span class="icon-room mr-2"></span>{{$offre->adresse}} {{$offre->lieu}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        @if(Auth::guard('condidat')->check())
                            @if(\App\Postuler::checkuserpostuled(Auth::guard('condidat')->user()->id, $offre->id))
                                <div class="col-6">
                                    <a href="{{route('dispostuler',['id'=>$offre->id])}}" class="btn btn-block btn-primary btn-md">Dispostuler</a>
                                </div>
                            @else
                                <div class="col-6">
                                    <a href="{{route('postuler',['id_offre'=>$offre->id])}}" class="btn btn-block btn-primary btn-md">Postuler</a>
                                </div>
                            @endif

                        @else
                            <div class="col-6">
                                <a href="{{ route("log1") }}" class="btn btn-block btn-primary btn-md">Connexion</a>
                            </div>
                            @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-5">

                        <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-align-left mr-3"></span>Description</h3>
                        {{$offre->description}}
                    </div>


                    <div class="mb-5">
                        <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-book mr-3"></span>Niveau d'étude + Experience</h3>
                        <ul class="list-unstyled m-0 p-0">
                            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>{{$offre->experience}}</span></li>
                            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>{{$offre->niveau}}</span></li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-turned_in mr-3"></span>secteur d'activité </h3>
                        <ul class="list-unstyled m-0 p-0">
                            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>{{$offre->secteur}}</span></li>

                        </ul>
                    </div>
                    <div class="mb-5">
                        <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-turned_in mr-3"></span>Type de contrat</h3>
                        <ul class="list-unstyled m-0 p-0">
                            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>{{$offre->type_contrat}}</span></li>

                        </ul>
                    </div>
                    <div class="mb-5">
                        <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-turned_in mr-3"></span>Langue</h3>
                        <ul class="list-unstyled m-0 p-0">
                            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>{{$offre->lange}}</span></li>

                        </ul>
                    </div>
                    <div class="mb-5">
                        <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-rocket mr-3"></span>Profil du candidat</h3>
                        <ul class="list-unstyled m-0 p-0">
                            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>{{$offre->profil}}</span></li>

                        </ul>
                    </div>







                    <div class="row mb-5">

                        @if(Auth::guard('condidat')->check())
                            @if(\App\Postuler::checkuserpostuled(Auth::guard('condidat')->user()->id, $offre->id))
                                <div class="col-6">
                                    <a href="{{route('dispostuler',['id'=>$offre->id])}}" class="btn btn-block btn-primary btn-md">Dispostuler</a>
                                </div>
                            @else
                                <div class="col-6">
                                    <a href="{{route('postuler',['id_offre'=>$offre->id])}}" class="btn btn-block btn-primary btn-md">Postuler</a>
                                </div>
                            @endif

                        @else
                            <div class="col-6">
                                <a href="{{ route("log1") }}" class="btn btn-block btn-primary btn-md">Connexion</a>
                            </div>
                        @endif
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="bg-light p-3 border rounded mb-4">
                        <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Résumé du travail</h3>
                        <ul class="list-unstyled pl-3 mb-0">
                            <li class="mb-2"><strong class="text-black">Publié le :</strong> {{date('Y-m-d', strtotime($offre->created_at))}}</li>
                            <li class="mb-2"><strong class="text-black">Postes vacants :</strong> {{$offre->postes}}</li>
                            <li class="mb-2"><strong class="text-black">Experience :</strong> {{$offre->experience}}</li>
                            <li class="mb-2"><strong class="text-black">Adresse :</strong> {{$offre->adresse}} {{$offre->lieu}}</li>
                            <li class="mb-2"><strong class="text-black">rémunération :</strong> {{$offre->rémunération}}</li>
                            <li class="mb-2"><strong class="text-black">Le genre :</strong> {{$offre->gendre}}</li>
                            <li class="mb-2"><strong class="text-black">Date début de l'inscription :</strong> {{date('Y-m-d', strtotime($offre->date_debut))}}</li>
                            <li class="mb-2"><strong class="text-black">Date limite d'inscription :</strong> {{date('Y-m-d', strtotime($offre->date_fin))}}</li>
                        </ul>
                    </div>

                    <div class="bg-light p-3 border rounded">
                        <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Share</h3>
                        <div class="px-3">
                            <a href="https://www.facebook.com" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-facebook"></span></a>
                            <a href="https://www.twitter.com" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-twitter"></span></a>
                            <a href="https://fr.linkedin.com" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-linkedin"></span></a>
                            <a href="https://www.pinterest.fr" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-pinterest"></span></a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
@section("script")


    <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
    <script>

        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 10000);
    </script>


@endsection


