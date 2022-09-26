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
                    <h2 class="mb-4">Créer votre espace employeur</h2>

                    <form action="{{Route('inscri3')}}" method="post" class="p-4 border rounded" id="registration" name="registration">
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
                                <label class="text-black" for="fname">Nom de l'entreprise *</label>
                                <input type="text" id="nomentreprise" name="nomentreprise" class="form-control" placeholder="">
                            </div>

                        </div>




                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Secteur d'activité  *</label>
                                <select class="form-control" name="secteur" id="secteur">
                                    <option value>Sélectionnez Secteur d'activité</option>
                                    <option value="1">Tous secteurs</option>
                                    <option value="2">Centres d appels</option>
                                    <option value="3">Formation</option>
                                    <option value="4">Ressources humaines</option>
                                    <option value="5">Ingenierie</option>
                                    <option value="6">Marketing</option>
                                    <option value="7">Informatique</option>
                                    <option value="8">Télécommunications</option>
                                    <option value="9">Industrie</option>
                                    <option value="10">Technologie de l'information</option>
                                    <option value="11">Commerce</option>
                                    <option value="12">Vente</option>
                                    <option value="13">Transport</option>
                                    <option value="14">Stratégie-Planification</option>
                                    <option value="15">Science</option>
                                    <option value="16">Commerce de détail</option>
                                    <option value="17">Restauration</option>
                                    <option value="18">Recherche</option>
                                    <option value="19">Immobilier</option>
                                    <option value="20">Controle Qualite</option>
                                    <option value="21">Achat - Approvisionnement</option>
                                    <option value="22">Pharmaceutiques</option>
                                    <option value="23">Services a la clientele</option>
                                    <option value="24">Media-Journalisme</option>
                                    <option value="25">Gestion</option>
                                    <option value="26">Juridique</option>
                                    <option value="27">Assurances</option>
                                    <option value="28">Installation-Entretien-Reparation</option>
                                    <option value="29">Fonction publique</option>
                                    <option value="30">Services veterinaires</option>
                                    <option value="31">Enseignement</option>
                                    <option value="32">Distribution</option>
                                    <option value="33">Design</option>
                                    <option value="34">Consulting</option>
                                    <option value="35">Construction</option>
                                    <option value="36">Developpement des affaires</option>
                                    <option value="37">Biotechnologie</option>
                                    <option value="38">Banque</option>
                                    <option value="39">Administration</option>
                                    <option value="40">Comptabilite</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group mb-4">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Téléphone *</label>
                                <input type="text" class="form-control input-date" name="telephone" value>
                            </div>
                        </div>

                        <div class="row form-group mb-4">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Emplacement (Adresse) *</label>
                                <input type="text" class="form-control input-date" name="adresse" value>
                            </div>
                        </div>
                        <div class="row form-group mb-4">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">CNSS *</label>
                                <input type="text" class="form-control input-date" name="cnss" value>
                            </div>
                        </div>
                        <div class="row form-group mb-4">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Numéro juridique *</label>
                                <input type="text" class="form-control input-date" name="numj" value>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">site</label>
                                <input type="text" class="form-control input-date" name="site" value>

                            </div>

                        </div>
                        <div class="row form-group mb-4">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Description de l'entreprise</label>
                                <textarea rows="4" cols="57" id="description" class="form-control" name="description" ></textarea>
                            </div>
                        </div>



                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Sign Up" class="btn px-4 btn-primary text-white"

                                      style="margin: 32px;">
                            </div>
                        </div>

                    </form>
                </div>
                <div class="col-lg-6">








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
                    nomentreprise:"required",
                    telephone:"required",
                    adresse:"required",
                    secteur:"required",
                    cnss:"required",
                    numj:"required",


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
                    nomentreprise:"Veuillez saisir votre 'Nom de l'entreprise'",
                    telephone:"Veuillez saisir votre 'Téléphone'",
                    adresse:"Veuillez saisir votre 'Adresse'",
                    secteur:"Veuillez entre votre 'Secteur'",
                    cnss:"Veuillez saisir votre 'code cnss'",
                    numj:"Veuillez entre votre 'Numéro juridique'",




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
        $(document).ready(function() {

        })
    </script>


@endsection
