@extends("app")
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

            <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="section-title mb-2">Mes Offres d'emploi</h2>
                </div>
            </div>

            <div class="container">


                @foreach($offres as $offre)
                    <ul class="job-listings mb-5">
                        <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                            <a href="{{route('offre_details', ["id" => $offre->id])}}" target="_blank"></a>
                            <div class="job-listing-logo">
                                <img src="{{asset('images/profile/'.$offre->logo)}}" class="bagh" alt="Free Website Template by Free-Template.co" class="img-fluid">
                            </div>
                            <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">

                                <div class="container">

                                    <div class="row">
                                        <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0 col-md-6">
                                            <h2>{{($offre->titre)}}</h2>
                                            <span class="ml-0 mr-2 mb-2"><span class="icon-briefcase mr-2"></span>{{$offre->nom_entreprise}}</span><br>
                                            <strong>{{($offre->secteur)}}</strong><br>

                                        </div>
                                        <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25 col-md-4">
                                            <span class="icon-room"></span>{{($offre->adresse)}}<br>
                                            <span class="icon-room"></span>{{($offre->lieu)}}
                                        </div>
                                        <div class="job-listing-meta col-md-2">
                                            {{date('Y-m-d', strtotime($offre->created_at))}}<br>

                                            <a href="{{route('offre_details', ["id" => $offre->id])}}" >
                                                <span class="badge badge-success"> Voir plus</span></a>

                                        </div>
                                        <div class="col-md-12">
                                            <p class="divdesc1">{{$offre->description}}</p>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </li>
                    </ul>
                @endforeach



            </div>



        </div>
    </section>



@endsection
