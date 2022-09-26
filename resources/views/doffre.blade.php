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
                    @if(Session::has('Success'))
                        <p class="alert alert-success  " class="close" data-dismiss="alert" aria-label="Close">{{ Session::get('Success') }}</p>

                    @endif
                    @if(Session::has('filed'))
                        <p class="alert alert-success mydiv "  class="close" data-dismiss="alert" aria-label="Close">{{ Session::get('filed') }}</p>
                    @endif
                    <h2 class="mb-4">Déposer un offre d'emploi</h2>

                    <form action="{{route("offre1")}}" method="POST" class="p-4 border rounded" id="reg" name="reg">
                        {{csrf_field()}}

                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Titre de l'offre / intitulé du poste *</label>
                                <input type="text" id="titre" name="titre" class="form-control" value="">
                            </div>

                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Situation geographique du poste *</label>
                                <select class="form-control"  name="adrr" id="adrr">
                                    <option value>Sélectionnez Gouvernorat</option>
                                    <option value="Ariana"  >Ariana</option>
                                    <option value="Béja"  >Béja</option>
                                    <option value="Ben Arous"  >Ben Arous</option>
                                    <option value="Bizerte"  >Bizerte</option>
                                    <option value="Gabès"  >Gabès</option>
                                    <option value="Gafsa"  >Gafsa</option>
                                    <option value="Jendouba"  >Jendouba</option>
                                    <option value="Kairouan"  >Kairouan</option>
                                    <option value="Kasserine"  >Kasserine</option>
                                    <option value="Kébili" >Kébili</option>
                                    <option value="Le Kef" >Le Kef</option>
                                    <option value="Mahdia" >Mahdia</option>
                                    <option value="La Manouba" >La Manouba</option>
                                    <option value="Médenine" >Médenine</option>
                                    <option value="Monastir" >Monastir</option>
                                    <option value="Nabeul" >Nabeul</option>
                                    <option value="Sfax" >Sfax</option>
                                    <option value="Sidi Bouzid" >Sidi Bouzid</option>
                                    <option value="Siliana" >Siliana</option>
                                    <option value="Sousse" >Sousse</option>
                                    <option value="Tataouine" >Tataouine</option>
                                    <option value="Tozeur" >Tozeur</option>
                                    <option value="Tunis" >Tunis</option>
                                    <option value="Zaghouan" >Zaghouan</option>


                                </select>
                            </div>

                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Adresse *</label>
                                <input type="text" id="lieu" name="lieu" class="form-control" value="" >
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Secteur d'activité  *</label>
                                <select class="form-control" name="secteur" id="secteur">
                                    <option value>Sélectionnez Secteur d'activité</option>
                                    <option value="Tous secteurs" >Tous secteurs</option>
                                    <option value="Centres d appels">Centres d appels</option>
                                    <option value="Formation">Formation</option>
                                    <option value="Ressources humaines">Ressources humaines</option>
                                    <option value="Ingenierie">Ingenierie</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Informatique7">Informatique</option>
                                    <option value="Télécommunications">Télécommunications</option>
                                    <option value="Industrie">Industrie</option>
                                    <option value="Technologie de l'information">Technologie de l'information</option>
                                    <option value="Commerce">Commerce</option>
                                    <option value="Vente">Vente</option>
                                    <option value="Transport">Transport</option>
                                    <option value="Stratégie-Planification">Stratégie-Planification</option>
                                    <option value="Science">Science</option>
                                    <option value="Commerce de détail">Commerce de détail</option>
                                    <option value="Restauration">Restauration</option>
                                    <option value="Recherche">Recherche</option>
                                    <option value="Immobilier">Immobilier</option>
                                    <option value="Controle Qualite">Controle Qualite</option>
                                    <option value="Achat - Approvisionnement">Achat - Approvisionnement</option>
                                    <option value="Pharmaceutiques">Pharmaceutiques</option>
                                    <option value="Services a la clientele">Services a la clientele</option>
                                    <option value="Media-Journalisme">Media-Journalisme</option>
                                    <option value="Gestion">Gestion</option>
                                    <option value="Juridique">Juridique</option>
                                    <option value="Assurances">Assurances</option>
                                    <option value="Installation-Entretien-Reparation">Installation-Entretien-Reparation</option>
                                    <option value="Fonction publique">Fonction publique</option>
                                    <option value="Services veterinaires">Services veterinaires</option>
                                    <option value="Enseignement">Enseignement</option>
                                    <option value="Distribution">Distribution</option>
                                    <option value="Design">Design</option>
                                    <option value="Consulting">Consulting</option>
                                    <option value="Construction">Construction</option>
                                    <option value="Developpement des affaires">Developpement des affaires</option>
                                    <option value="Biotechnologie">Biotechnologie</option>
                                    <option value="Banque">Banque</option>
                                    <option value="Administration">Administration</option>
                                    <option value="Comptabilite">Comptabilite</option>
                                </select>
                            </div>
                        </div>




                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Type de contrat:</label>
                                <select class="form-control" name="type" id="type">
                                    <option value>Sélectionnez le Type de contrat </option>
                                    <option value="100" >Contrat à durée déterminée</option>
                                    <option value="101">Contrat à durée indéterminée</option>
                                    <option value="102">Alternance (contrat d'apprentissage)</option>
                                    <option value="103">Alternance (contrat de professionalisation ou de qualification)</option>
                                    <option value="104">Stage</option>
                                </select>
                            </div>
                        </div>



                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Formation:</label>
                                <input type="text" id="formation" name="formation" class="form-control" value="" >
                            </div>

                        </div>


                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Expérience:</label>
                                <input type="text" class="form-control input-date" name="experience" value="">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Profil du candidat:</label>
                                <textarea class="form-control" rows="4" cols="57" id="profil" name="profil"></textarea>
                            </div>

                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Langue:</label>
                                <input type="text" id="langue" name="langue" class="form-control" value="" >
                            </div>

                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Rémunération proposée:</label>
                                <input type="text" id="rem" name="rem" class="form-control" value="" >
                            </div>

                        </div>


                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Date de début: *</label>
                                <input type="date" class="form-control input-date" name="dated" value>

                            </div>


                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Date de fin: *</label>
                                <input type="date" class="form-control input-date" name="datef" value>

                            </div>


                        </div>



                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Postes vacants:</label>
                                <input type="text" id="pvacant" name="pvacant" class="form-control" value="" >
                            </div>

                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Genre:</label>
                                <input type="text" id="genre" name="genre" class="form-control" value="" >
                            </div>

                        </div>


                        <div class="row form-group mb-4">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Description du l'offre : *</label>
                                <textarea class="form-control" rows="4" cols="57" id="description" name="description"></textarea>
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

            </div>
        </div>



    </section>


@endsection


@section('script')
    <script>
        $(function() {
            // Initialize form validation on the registration form.
            // It has the name attribute "registration"
            $("form[name='reg']").validate({
                // Specify validation rules
                rules: {
                    // The key name on the left side is the name attribute
                    // of an input field. Validation rules are defined
                    // on the right side
                    titre: "required",
                    adrr: "required",
                    lieu:"required",
                    secteur:"required",
                    dated:"required",
                    datef:"required",
                    description:"required",

                },
                // Specify validation error messages
                messages: {
                    titre: "Veuillez saisir votre 'Nom'",
                    adrr: "Veuillez saisir votre 'Prénom'",
                    lieu:"Veuillez saisir votre 'Date de Naissance'",
                    secteur:"Veuillez saisir votre 'Téléphone'",
                    dated:"Veuillez saisir votre 'Civilité'",
                    datef:"Veuillez saisir votre 'Gouvernorat'",
                    description:"Veuillez saisir votre 'Gouvernorat'",

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





