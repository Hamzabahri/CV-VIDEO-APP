<?php $__env->startSection('filter'); ?>
    <!-- HOME -->








    <section class="home-section section-hero overlay bg-image" style="background-image: url('<?php echo e(asset('images/hero_1.jpg')); ?>');" id="home-section">

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12">
                    <div class="mb-5 text-center">
                          <h1 class="text-white font-weight-bold" class="jumbotron-heading"  ><br><br>La façon la plus simple d'obtenir votre emploi</h1>
                    </div>
                    <form method="get" class="search-jobs-form" action="<?php echo e(route("search_offre")); ?>">
                        <div class="row mb-5 flstbubble">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                <input type="text" name="titre" class="form-control form-control-lg" placeholder="Titre de l'offre..." id="titre">
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0" class="s0">
                                <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Sélectionnez Gouvernorat" name="lieu">
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

                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                <select class="selectpicker" name="secteur" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Secteur d'activité">
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

                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>rechercher</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </section>

    <section class="py-5 bg-image overlay-primary fixed overlay" id="next" style="background-image: url('<?php echo e(asset('images/hero_1.jpg')); ?>');">
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
                        <strong class="number" data-number="<?php echo e(\App\Condidat::all()->count()); ?>">0</strong>
                    </div>
                    <span class="caption">Candidates</span>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <strong class="number" data-number="<?php echo e(\App\Offre_demploi::offre_today()); ?>">0</strong>
                    </div>
                    <span class="caption">Emplois d'aujourd'hui</span>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <strong class="number" data-number="<?php echo e(\App\Offre_demploi::all()->count()); ?>">0</strong>
                    </div>
                    <span class="caption">Offres d'emploi</span>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <strong class="number" data-number="<?php echo e(\App\Entreprise::all()->count()); ?>">0</strong>
                    </div>
                    <span class="caption">Entreprises</span>
                </div>


            </div>
        </div>
    </section>


<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
    <section class="site-section" style="background-image: url(<?php echo e(Asset('images/imgg.jpg')); ?>);">

            <div class="container">


                <?php $__currentLoopData = \App\Offre_demploi::get_offre(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $offre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <ul class="job-listings mb-5">
                    <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                        <a href="<?php echo e(route('offre_details', ["id" => $offre->id])); ?>" target="_blank"></a>
                        <div class="job-listing-logo">
                            <img src="<?php echo e(asset('images/profile/'.$offre->logo)); ?>" class="bagh" alt="Free Website Template by Free-Template.co" class="img-fluid">
                        </div>
                        <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">

                            <div class="container">

                            <div class="row">
                                    <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0 col-md-6">
                                        <h2><?php echo e(($offre->titre)); ?></h2>
                                        <span class="ml-0 mr-2 mb-2"><span class="icon-briefcase mr-2"></span><?php echo e($offre->nom_entreprise); ?></span><br>
                                        <strong><?php echo e(($offre->secteur)); ?></strong><br>

                                    </div>
                                    <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25 col-md-4">
                                        <span class="icon-room"></span><?php echo e(($offre->adresse)); ?><br>
                                        <span class="icon-room"></span><?php echo e(($offre->lieu)); ?>

                                    </div>
                                    <div class="job-listing-meta col-md-2">
                                        <?php echo e(date('Y-m-d', strtotime($offre->created_at))); ?><br>
                                        <a href="<?php echo e(route('offre_details', ["id" => $offre->id])); ?>" >
                                            <span class="badge badge-success"> Voir plus</span></a>

                                    </div>
                                <div class="col-md-12">
                                    <p class="divdesc1"><?php echo e($offre->description); ?></p>
                                </div>
                            </div>
                            </div>

                        </div>


                    </li>
                </ul>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
              
                                   
                                
                 
                 
</div>
<div class="row align-items-center">
                <div class="col-12 text-center mt-4 mb-5">
                    <div class="row justify-content-center">
                        <div class="col-md-0">     
<a href="<?php echo e(route('toutoffre')); ?>" class="btn btn-block btn-primary btn-md">Voir plus</a>                    

         </div>
         </div>
         </div>
         </div>               
                                
                 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('partenaire'); ?>
    <section class="site-section coleur">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-12 text-center mt-4 mb-5">
                    <div class="row justify-content-center">
                        <div class="col-md-7" >
                            <h2 class="section-title mb-2">Entreprise que nous avons aidée</h2>
                            <p class="lead"></p>
                        </div>
                    </div>

                </div>
                <?php $__currentLoopData = \App\Entreprise::getStePartenaire(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ste): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-6 col-lg-3 col-md-6 text-center">
                        <img src="<?php echo e(asset('images/profile/'.$ste->logo)); ?>" alt="Image" class="img-fluid logo-1">
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cvvidéo\resources\views/home.blade.php ENDPATH**/ ?>