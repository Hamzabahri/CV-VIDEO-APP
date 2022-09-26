@extends('app')
@section ("content")
    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" class="site-section services-section bg-light block__62849" style="background-image: url('{{asset('images/hero_1.jpg')}}');" id="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                </div>
            </div>
        </div>
    </section>


    <section class="site-section services-section bg-light block__62849" id="next-section">
        <div class="container">

            <div class="row">
                @foreach($desc1 as $row)
                <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">
                    <a href="{{route('desc1', ["id" => $row->id])}}" class="block__16443 text-center d-block">
                        <img src="{{asset('images/profile/'.$row->logo)}}"class="bagh" alt="Free Website Template by Free-Template.co" class="img-fluid">
                        <h3><br> {{$row->nom_entreprise}}</h3>
                        <p class="divdesc">{{$row->description}}</p>
                        <div class="row mb-5">
                            <div class="col-6">
                                {{$row->secteur}}
                            </div>
                            <div class="col-6">
                                {{\App\Offre_demploi::offre_ste($row->id)}} annonce(s)
                            </div>
                        </div>
                    </a>


                </div>
                @endforeach
            </div>
{{$desc1->links()}}

        </div>
    </section>








    @endsection

