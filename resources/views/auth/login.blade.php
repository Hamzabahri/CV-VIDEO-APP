@extends("app")
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


    <section class="site-section" style="background: #f3eded;"  >
    <div class="container">
        <div class="card mx-auto border-0">
            <div class="card-header border-bottom-0 bg-transparent">
                <ul class="nav nav-tabs justify-content-center pt-4" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active text-primary" id="pills-login-tab" data-toggle="pill"  aria-controls="pills-login"
                           aria-selected="true">Connexion</a>
                    </li>

                </ul>
            </div>

            <div class="card-body pb-4">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
                        @isset($url)
                            <form method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
                            @else
                                <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                            @endisset
                            @csrf

                            <div class="form-group">
                                <label class="text-black" for="fname">{{ __('E-Mail') }}</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"  value="{{ old('email') }}" placeholder="taper votre Email" required autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



                            <div class="form-group ">
                                <label class="text-black" for="fname">  {{ __('Mot de Passe') }}</label>
                                <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="taper votre Mot de Passe ">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                            </div>


                            <div class="form-group ">
                                <div >
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Souviens de moi') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group ">
                                <div class="col-md-8 offset-md-3">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Connexion') }}
                                    </button>


                                </div>
                                @if (Route::has('password.request'))

                                    <a class="btn btn-link " href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié?') }}
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="pills-register-tab">
                        <form>
                            <div class="form-group">
                                <input type="text" name="username" id="name" class="form-control" placeholder="Username" required autofocus>
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Set a password" required>
                            </div>

                            <div class="form-group">
                                <input type="password" name="password_confirmation" id="password-confirm" class="form-control" placeholder="Confirm password" required>
                            </div>

                            <div class="text-center pt-2 pb-1">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </section>
@endsection
