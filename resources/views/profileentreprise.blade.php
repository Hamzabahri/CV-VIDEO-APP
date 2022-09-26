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
            <div class="row">
                <div class="col-md-6 col-lg-6 mb-5" >

                    <div class="col-6">
                        <a href="{{route("mesoffres1")}}" class="btn btn-block btn-primary btn-md">Mes Offres</a>
                    </div>

                </div>


            </div>
            <div class="row">


                <div class="col-md-6 col-lg-6 mb-5" >


                    @if(Session::has('Success'))
                        <p class="alert alert-success  " class="close" data-dismiss="alert" aria-label="Close">{{ Session::get('Success') }}</p>

                    @endif
                    @if(Session::has('filed'))
                        <p class="alert alert-success mydiv "  class="close" data-dismiss="alert" aria-label="Close">{{ Session::get('filed') }}</p>
                    @endif
                    <h2 class="mb-4">Mon profil</h2>

                    <form action="{{route("profile2")}}" method="POST" class="p-4 border rounded" id="registration" name="registration">
                        {{csrf_field()}}


                        <div class="row form-group">

                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Nom *</label>
                                <input type="text" id="nom" name="nom" class="form-control" value="{{$user->nom}}">
                            </div>

                        </div>

                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Prénom *</label>
                                <input type="text" id="prenom" name="prenom" class="form-control" value="{{$user->prenom}}">
                            </div>

                        </div>

                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Email *</label>
                                <input type="text" id="email" name="email" class="form-control" value="{{$user->email}}" >
                            </div>

                        </div>

                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Nom de l'entreprise *</label>
                                <input type="text" id="nomentreprise" name="nomentreprise" class="form-control" placeholder="" value="{{$user->nom_entreprise}}">
                            </div>

                        </div>

                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">site</label>
                                <input type="text" class="form-control input-date" name="site" value="{{$user->site}}">

                            </div>

                     </div>
                     <div class="row form-group mb-4">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">CNSS *</label>
                                <input type="text" class="form-control input-date" name="cnss" value="{{$user->cnss}}">
                            </div>
                        </div>
                        <div class="row form-group mb-4">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Numéro juridique *</label>
                                <input type="text" class="form-control input-date" name="numj" value="{{$user->	num_juridique}}">
                            </div>
                        </div>
                        <div class="row form-group mb-4">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Téléphone *</label>
                                <input type="text" class="form-control input-date" name="telephone" value="{{$user->telephone}}">
                            </div>
                        </div>

                        <div class="row form-group mb-4">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Emplacement (Adresse) *</label>
                                <input type="text" class="form-control input-date" name="adresse" value="{{$user->adresse}}">
                            </div>
                        </div>


                        <div class="row form-group mb-4">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Description de l'entreprise </label>
                                <textarea class="form-control" rows="4" cols="57" id="description" name="description">{{$user->description}}</textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Secteur d'activité  *</label>
                                <select class="form-control" name="secteur" id="secteur">
                                    <option value>Sélectionnez Secteur d'activité</option>
                                    <option value="1" @if($user->secteur == 1) selected @endif>Tous secteurs</option>
                                    <option value="2"@if($user->secteur == 2) selected @endif>Centres d appels</option>
                                    <option value="3"@if($user->secteur == 3) selected @endif>Formation</option>
                                    <option value="4"@if($user->secteur == 4) selected @endif>Ressources humaines</option>
                                    <option value="5"@if($user->secteur == 5) selected @endif>Ingenierie</option>
                                    <option value="6"@if($user->secteur == 6) selected @endif>Marketing</option>
                                    <option value="7"@if($user->secteur == 7) selected @endif>Informatique</option>
                                    <option value="8"@if($user->secteur == 8) selected @endif>Télécommunications</option>
                                    <option value="9"@if($user->secteur == 9) selected @endif>Industrie</option>
                                    <option value="10"@if($user->secteur ==10) selected @endif>Technologie de l'information</option>
                                    <option value="11"@if($user->secteur ==11) selected @endif>Commerce</option>
                                    <option value="12"@if($user->secteur ==12) selected @endif>Vente</option>
                                    <option value="13"@if($user->secteur ==13) selected @endif>Transport</option>
                                    <option value="14"@if($user->secteur ==14) selected @endif>Stratégie-Planification</option>
                                    <option value="15"@if($user->secteur ==15) selected @endif>Science</option>
                                    <option value="16"@if($user->secteur ==16) selected @endif>Commerce de détail</option>
                                    <option value="17" @if($user->secteur == 17) selected @endif>Restauration</option>
                                    <option value="18"@if($user->secteur ==18) selected @endif>Recherche</option>
                                    <option value="19"@if($user->secteur ==19) selected @endif>Immobilier</option>
                                    <option value="20"@if($user->secteur ==20) selected @endif>Controle Qualite</option>
                                    <option value="21"@if($user->secteur ==21) selected @endif>Achat - Approvisionnement</option>
                                    <option value="22"@if($user->secteur ==22) selected @endif>Pharmaceutiques</option>
                                    <option value="23"@if($user->secteur ==23) selected @endif>Services a la clientele</option>
                                    <option value="24"@if($user->secteur ==24) selected @endif>Media-Journalisme</option>
                                    <option value="25"@if($user->secteur ==25) selected @endif>Gestion</option>
                                    <option value="26"@if($user->secteur ==26) selected @endif>Juridique</option>
                                    <option value="27"@if($user->secteur ==27) selected @endif>Assurances</option>
                                    <option value="28"@if($user->secteur ==28) selected @endif>Installation-Entretien-Reparation</option>
                                    <option value="29"@if($user->secteur ==29) selected @endif>Fonction publique</option>
                                    <option value="30"@if($user->secteur ==30) selected @endif>Services veterinaires</option>
                                    <option value="31"@if($user->secteur == 31) selected @endif>Enseignement</option>
                                    <option value="32"@if($user->secteur == 32) selected @endif>Distribution</option>
                                    <option value="33"@if($user->secteur == 33) selected @endif>Design</option>
                                    <option value="34"@if($user->secteur == 34) selected @endif>Consulting</option>
                                    <option value="35"@if($user->secteur == 35) selected @endif>Construction</option>
                                    <option value="36"@if($user->secteur == 36) selected @endif>Developpement des affaires</option>
                                    <option value="37"@if($user->secteur == 37) selected @endif>Biotechnologie</option>
                                    <option value="38"@if($user->secteur == 38) selected @endif>Banque</option>
                                    <option value="39"@if($user->secteur == 39) selected @endif>Administration</option>
                                    <option value="40"@if($user->secteur == 40) selected @endif>Comptabilite</option>
                                </select>
                            </div>
                            </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="SAUVGARDER" class="btn px-4 btn-primary text-white"
                                >
                            </div>
                        </div>

                    </form>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-md-12">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>

                            @endif
                            <h2 class="mb-4">Votre Logo</h2>
                            <form action="{{ route('upload_image1') }}" class="p-4 border rounded" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="file" name="file" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn px-4 btn-primary text-white">Upload</button>
                                    </div>
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        @if(isset($user->logo))
                                            <img src="{{asset("images/profile/".$user->logo)}}" class="profile_image">
                                        @endif
                                    </div>
                                </div>
                            </form>

                                @if(Session::has('Success'))
                                <p class="alert alert-success  " class="close" data-dismiss="alert" aria-label="Close">{{ Session::get('Success') }}</p>

                            @endif
                            @if(Session::has('filed'))
                                <p class="alert alert-success mydiv "  class="close" data-dismiss="alert" aria-label="Close">{{ Session::get('filed') }}</p>
                            @endif
                            <h2 class="mb-4"><br>Modifier password</h2>
                            <form action="{{route("changepass")}}" class="p-4 border rounded" method="POST" name="registration2">
                                {{csrf_field()}}

                                <div class="row form-group">
                                    <div class="col-md-12 mb-3 mb-md-0">
                                        <label class="text-black" for="fname">Mot de passe actuel *</label>
                                        <input type="password" id="password" name="password" class="form-control" >
                                    </div>
                                    <div class="col-md-12 mb-3 mb-md-0">
                                        <label class="text-black" for="fname">Nouveau mot de passe *</label>
                                        <input type="password" id="password1" name="password1" class="form-control" >
                                    </div>
                                    <div class="col-md-12 mb-3 mb-md-0">
                                        <label class="text-black" for="fname">Confirmer mot de passe  *</label>
                                        <input type="password" id="rpassword" name="rpassword" class="form-control">
                                    </div>
                                    <span id="confirm_password_msg"></span>
                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <input type="submit" value="SAUVGARDER" class="btn px-4 btn-primary text-white " style="margin: 30px;"
                                            >
                                        </div>
                                    </div>
                                </div>

                            </form>


                        </div>

                    </div>

                </div>

            </div>
        </div>

    </section>


@endsection
@section("script")


    <script>

                        window.setTimeout(function() {
                            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                                $(this).remove();
                            });
                        }, 10000);
                        $(function() {
                            // Initialize form validation on the registration form.
                            // It has the name attribute "registration"
                            $("form[name='registration2']").validate({
                                // Specify validation rules
                                rules: {

                                    password: {
                                        required: true,
                                    },
                                    password1: {
                                        required: true,
                                        minlength: 5
                                    },
                                    rpassword: {
                                        required: true,
                                        equalTo : "#password1",
                                        minlength: 5
                                    },



                                },
                                // Specify validation error messages
                                messages: {

                                    password: {
                                        required: "Veuillez saisir votre 'actuel Mot de Passe'",

                                    },
                                    password1: {
                                        required: "Veuillez saisir votre 'Nouveau Mot de Passe'",
                                        minlength: "Votre mot de passe doit contenir au moins 6 caractères"
                                    },
                                    rpassword: {
                                        required: "Veuillez confirmé votre 'Mot de Passe'",
                                        minlength: "Votre mot de passe doit contenir au moins 6 caractères"
                                    },

                                },
                                // Make sure the form is submitted to the destination defined
                                // in the "action" attribute of the form when valid
                                submitHandler: function(form) {
                                    form.submit();
                                }
                            });
                        });
    </script>
@endsection
