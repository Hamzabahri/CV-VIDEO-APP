

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
        <div class="row">
            <div class="col-lg-4 mb-4">

                <div class="block__87154">
                    <h3>{{$cv->prenom}} {{$cv->nom}}</h3>

                    <img src="{{asset("images/profile/".$cv->photo)}}" class="profile_image widthcv" ><br><br>
                    <div class="block__91147 d-flex align-items-center mb-4">

                        <div class="col-lg-12 mb-4">
                            <h3>Email : {{$cv->email}}</h3>
                            <span class="position">Téléphone : {{$cv->telephone}}</span>
                        </div>


                    </div>

                </div>
            </div>

            <div class="col-lg-8 mb-4">

                <div class="block__87154">

                    <div>
                        <h3>vidéo-cv</h3><br>
                        <video class="vid" controls>
                            <source src="{{asset('cv/videos/'.$cv->video_cv)}}" type="video/mp4">
                            <source src="{{asset('cv/videos/'.$cv->video_cv)}}" type="video/ogg">
                        </video>
                    </div>
                </div>
            </div>

        </div>





    </section>

@endsection
