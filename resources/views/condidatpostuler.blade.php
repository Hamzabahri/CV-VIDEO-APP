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
            @if (count($listcondidat) > 0)
            @foreach($listcondidat as $row)

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
        @else

                <div class="row">
                    <div class="col-lg-12 md-12 mb-4">

                <p class="alert alert-success  " class="close" data-dismiss="alert" aria-label="Close">Aucun postuler</p>
                </div>
                </div>

            @endif
        </div>





    </section>
@endsection
