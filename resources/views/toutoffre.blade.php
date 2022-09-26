@extends("app")
@section('filter')
    <!-- HOME -->
    <section class="home-section section-hero overlay bg-image" style="background-image: url('{{asset('images/hero_1.jpg')}}');" id="home-section">

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12">
                    <div class="mb-5 text-center">
                        <h1 class="text-white font-weight-bold"><br><br>La façon la plus simple d'obtenir votre emploi</h1>
                    </div>
                    <form method="get" class="search-jobs-form" action="{{route("search_offre")}}">
                        <div class="row mb-5">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                <input type="text" value="{{$titre}}" name="titre" class="form-control form-control-lg" placeholder="Titre de l'offre..." id="titre">
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Sélectionnez Gouvernorat" name="lieu">
                                    <option value="Ariana"  @if($lieu == "Ariana") selected @endif>Ariana</option>
                                    <option value="Béja" @if($lieu == "Béja") selected @endif>Béja</option>
                                    <option value="Ben Arous" @if($lieu == "Ben Arous") selected @endif >Ben Arous</option>
                                    <option value="Bizerte"  @if($lieu == "Bizerte") selected @endif>Bizerte</option>
                                    <option value="Gabès"  @if($lieu == "Gabès") selected @endif>Gabès</option>
                                    <option value="Gafsa"  @if($lieu == "Gafsa") selected @endif>Gafsa</option>
                                    <option value="Jendouba"  @if($lieu == "Jendouba") selected @endif>Jendouba</option>
                                    <option value="Kairouan"  @if($lieu == "Kairouan") selected @endif>Kairouan</option>
                                    <option value="Kasserine"  @if($lieu == "Kasserine") selected @endif>Kasserine</option>
                                    <option value="Kébili" @if($lieu == "Kébili") selected @endif>Kébili</option>
                                    <option value="Le Kef" @if($lieu == "Le Kef") selected @endif>Le Kef</option>
                                    <option value="Mahdia" @if($lieu == "Mahdia") selected @endif>Mahdia</option>
                                    <option value="La Manouba" @if($lieu == "La Manouba") selected @endif>La Manouba</option>
                                    <option value="Médenine" @if($lieu == "Médenine") selected @endif>Médenine</option>
                                    <option value="Monastir" @if($lieu == "Monastir") selected @endif>Monastir</option>
                                    <option value="Nabeul" @if($lieu == "Nabeul") selected @endif>Nabeul</option>
                                    <option value="Sfax" @if($lieu == "Sfax") selected @endif>Sfax</option>
                                    <option value="Sidi Bouzid" @if($lieu == "Sidi Bouzid") selected @endif>Sidi Bouzid</option>
                                    <option value="Siliana" @if($lieu == "Siliana") selected @endif>Siliana</option>
                                    <option value="Sousse" @if($lieu == "Sousse") selected @endif>Sousse</option>
                                    <option value="Tataouine" @if($lieu == "Tataouine") selected @endif>Tataouine</option>
                                    <option value="Tozeur" @if($lieu == "Tozeur") selected @endif>Tozeur</option>
                                    <option value="Tunis" @if($lieu == "Tunis") selected @endif>Tunis</option>
                                    <option value="Zaghouan" @if($lieu == "Zaghouan") selected @endif>Zaghouan</option>


                                </select>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                <select class="selectpicker" name="secteur" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Secteur d'activité">
                                    <option value>Sélectionnez Secteur d'activité</option>
                                    <option value="Tous secteurs"@if($secteur == "Tous secteurs") selected @endif >Tous secteurs</option>
                                    <option value="Centres d appels"@if($secteur == "Centres d appels") selected @endif>Centres d appels</option>
                                    <option value="Formation"@if($secteur == "Formation") selected @endif>Formation</option>
                                    <option value="Ressources humaines"@if($secteur == "Ressources humaines") selected @endif>Ressources humaines</option>
                                    <option value="Ingenierie"@if($secteur == "Ingenierie") selected @endif>Ingenierie</option>
                                    <option value="Marketing"@if($secteur == "Marketing") selected @endif>Marketing</option>
                                    <option value="Informatique"@if($secteur == "Informatique") selected @endif>Informatique</option>
                                    <option value="Télécommunications"@if($secteur == "Télécommunications") selected @endif>Télécommunications</option>
                                    <option value="Industrie"@if($secteur == "Industrie") selected @endif>Industrie</option>
                                    <option value="Technologie de l'information"@if($secteur == "Technologie de l'information") selected @endif>Technologie de l'information</option>
                                    <option value="Commerce"@if($secteur == "Commerce") selected @endif>Commerce</option>
                                    <option value="Vente"@if($secteur == "Vente") selected @endif>Vente</option>
                                    <option value="Transport"@if($secteur == "Transport") selected @endif>Transport</option>
                                    <option value="Stratégie-Planification"@if($secteur == "Stratégie-Planification") selected @endif>Stratégie-Planification</option>
                                    <option value="Science"@if($secteur == "Science") selected @endif>Science</option>
                                    <option value="Commerce de détail"@if($secteur == "Commerce de détail") selected @endif>Commerce de détail</option>
                                    <option value="Restauration"@if($secteur == "Restauration") selected @endif>Restauration</option>
                                    <option value="Recherche"@if($secteur == "Recherche") selected @endif>Recherche</option>
                                    <option value="Immobilier"@if($secteur == "Immobilier") selected @endif>Immobilier</option>
                                    <option value="Controle Qualite"@if($secteur == "Controle Qualite") selected @endif>Controle Qualite</option>
                                    <option value="Achat - Approvisionnement"@if($secteur == "Achat - Approvisionnement") selected @endif>Achat - Approvisionnement</option>
                                    <option value="Pharmaceutiques"@if($secteur == "Pharmaceutiques") selected @endif>Pharmaceutiques</option>
                                    <option value="Services a la clientele"@if($secteur == "Services a la clientele") selected @endif>Services a la clientele</option>
                                    <option value="Media-Journalisme"@if($secteur == "Media-Journalisme") selected @endif>Media-Journalisme</option>
                                    <option value="Gestion"@if($secteur == "Gestion") selected @endif>Gestion</option>
                                    <option value="Juridique"@if($secteur == "Juridique") selected @endif>Juridique</option>
                                    <option value="Assurances"@if($secteur == "Assurances") selected @endif>Assurances</option>
                                    <option value="Installation-Entretien-Reparation"@if($secteur == "Installation-Entretien-Reparation") selected @endif>Installation-Entretien-Reparation</option>
                                    <option value="Fonction publique"@if($secteur == "Fonction publique") selected @endif>Fonction publique</option>
                                    <option value="Services veterinaires"@if($secteur == "Services veterinaires") selected @endif>Services veterinaires</option>
                                    <option value="Enseignement"@if($secteur == "Enseignement") selected @endif>Enseignement</option>
                                    <option value="Distribution"@if($secteur == "Distribution") selected @endif>Distribution</option>
                                    <option value="Design"@if($secteur == "Design") selected @endif>Design</option>
                                    <option value="Consulting"@if($secteur == "Consulting") selected @endif>Consulting</option>
                                    <option value="Construction"@if($secteur == "Construction") selected @endif>Construction</option>
                                    <option value="Developpement des affaires"@if($secteur == "Developpement des affaires") selected @endif>Developpement des affaires</option>
                                    <option value="Biotechnologie"@if($secteur == "Biotechnologie") selected @endif>Biotechnologie</option>
                                    <option value="Banque"@if($secteur == "Banque") selected @endif>Banque</option>
                                    <option value="Administration"@if($secteur == "Administration") selected @endif>Administration</option>
                                    <option value="Comptabilite"@if($secteur == "Comptabilite") selected @endif>Comptabilite</option>
                                </select>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>rechercher</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </section>

    <section class="py-5 bg-image overlay-primary fixed overlay" id="next" style="background-image: url('{{asset('images/hero_1.jpg')}}');">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="section-title mb-2 text-white">Statistiques du site</h2>
                    <p class="lead text-white"></p>
                </div>
            </div>
            <div class="row pb-0 block__19738 section-counter">

                <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <strong class="number" data-number="{{\App\Condidat::all()->count()}}">0</strong>
                    </div>
                    <span class="caption">Candidates</span>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <strong class="number" data-number="{{\App\Offre_demploi::offre_today()}}">0</strong>
                    </div>
                    <span class="caption">Emplois d'aujourd'hui</span>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <strong class="number" data-number="{{\App\Offre_demploi::all()->count()}}">0</strong>
                    </div>
                    <span class="caption">Offres d'emploi</span>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <strong class="number" data-number="{{\App\Entreprise::all()->count()}}">0</strong>
                    </div>
                    <span class="caption">Entreprises</span>
                </div>


            </div>
        </div>
    </section>


@endsection
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

    <section class="site-section" style="background: #f3eded;">
        <div class="container">

            <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="section-title mb-2">{{COUNT($offreentreprise)}} Offres d'emploi</h2>
                </div>
            </div>

            <div class="container">


                @foreach($offreentreprise as $offre)
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

            {{$offreentreprise->links()}}

        </div>
    </section>



@endsection
