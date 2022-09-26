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
                <div class="col-lg-6 mb-5">
                    <h2 class="mb-4">Créer votre profil candidat</h2>

                    <form action="{{Route('inscri1')}}" method="post" class="p-4 border rounded" id="registration" name="registration">
                        {{csrf_field()}}

                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Nom *</label>
                                <input type="text" id="nom" name="nom" class="form-control" placeholder="taper votre Nom">
                            </div>

                        </div>

                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Prénom *</label>
                                <input type="text" id="prenom" name="prenom" class="form-control" placeholder="taper votre Prénom">
                            </div>

                        </div>

                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Email *</label>
                                <input type="text" id="email" name="email" class="form-control" placeholder="taper votre Email">
                            </div>

                        </div>

                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Mot de Passe *</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="taper votre Mot de Passe">
                            </div>

                        </div>

                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Confirmer le mot de passe *</label>
                                <input type="password" id="rpassword" name="rpassword" class="form-control" placeholder="Confirmer votre Mot de Passe">
                            </div>

                        </div>
                        <span id="confirm_password_msg"></span>

                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Date de Naissance *</label>
                                <input type="date" class="form-control input-date" name="birth" value>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Télephone *</label>
                                <input type="text" class="form-control input-date" name="tel" value>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Civilité *</label>
                                <select class="form-control" name="gender">
                                    <option value>Sélectionnez Civilité</option>
                                    <option value="M">M</option>
                                    <option value="Mme">Mme</option>
                                    <option value="Mlle">Mlle</option>
                                </select>

                            </div>

                        </div>

                        <div class="row form-group mb-4">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Gouvernorat *</label>
                                <select class="form-control" name="gender1">
                                    <option value>Sélectionnez Gouvernorat</option>
                                    <option value="Ariana">Ariana</option>
                                    <option value="Béja">Béja</option>
                                    <option value="Ben Arous">Ben Arous</option>
                                    <option value="Bizerte">Bizerte</option>
                                    <option value="Gabès">Gabès</option>
                                    <option value="Gafsa">Gafsa</option>
                                    <option value="Jendouba">Jendouba</option>
                                    <option value="Kairouan">Kairouan</option>
                                    <option value="Kasserine">Kasserine</option>
                                    <option value="Kébili">Kébili</option>
                                    <option value="Le Kef">Le Kef</option>
                                    <option value="Mahdia">Mahdia</option>
                                    <option value="La Manouba">La Manouba</option>
                                    <option value="Médenine">Médenine</option>
                                    <option value="Monastir">Monastir</option>
                                    <option value="Nabeul">Nabeul</option>
                                    <option value="Sfax">Sfax</option>
                                    <option value="Sidi Bouzid">Sidi Bouzid</option>
                                    <option value="Siliana">Siliana</option>
                                    <option value="Sousse">Sousse</option>
                                    <option value="Tataouine">Tataouine</option>
                                    <option value="Tozeur">Tozeur</option>
                                    <option value="Tunis">Tunis</option>
                                    <option value="Zaghouan">Zaghouan</option>

                                </select>
                            </div>
                        </div>
                        <div class="row form-group mb-4">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Description </label>
                                <textarea class="form-control" rows="4" cols="57" id="description" name="description" ></textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Sign Up" class="btn px-4 btn-primary text-white"
                                >
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </section>

@endsection


@section ("script")

    <script>
        $(function() {
            // Initialize form validation on the registration form.
            // It has the name attribute "registration"
            $("form[name='registration']").validate({
                // Specify validation rules
                rules: {
                    // The key name on the left side is the name attribute
                    // of an input field. Validation rules are defined
                    // on the right side
                    nom: "required",
                    prenom: "required",
                    birth:"required",
                    tel:"required",
                    gender:"required",
                    gender1:"required",


                    email: {
                        required: true,
                        // Specify that email should be validated
                        // by the built-in "email" rule
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 5
                    },
                    rpassword: {
                        required: true,
                        equalTo : "#password",
                        minlength: 5
                    },



                },
                // Specify validation error messages
                messages: {
                    nom: "Veuillez saisir votre 'Nom'",
                    prenom: "Veuillez saisir votre 'Prénom'",
                    birth:"Veuillez saisir votre 'Date de Naissance'",
                    tel:"Veuillez saisir votre 'Téléphone'",
                    gender:"Veuillez saisir votre 'Civilité'",
                    gender1:"Veuillez saisir votre 'Gouvernorat'",

                    password: {
                        required: "Veuillez saisir votre 'Mot de Passe'",
                        minlength: "Votre mot de passe doit contenir au moins 6 caractères"
                    },
                    rpassword: {
                        required: "Veuillez confirmé votre 'Mot de Passe'",
                        minlength: "Votre mot de passe doit contenir au moins 6 caractères"
                    },
                    email: "Veuillez saisir votre 'Email'"
                },
                // Make sure the form is submitted to the destination defined
                // in the "action" attribute of the form when valid
                submitHandler: function(form) {
                    form.submit();
                }
            });
        });
        $(document).ready(function(){


        })


    </script>

@endsection
