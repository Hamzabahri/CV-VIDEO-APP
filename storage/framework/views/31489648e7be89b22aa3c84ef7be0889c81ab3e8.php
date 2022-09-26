<?php $__env->startSection("content"); ?>
    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('<?php echo e(asset('images/hero_1.jpg')); ?>');" id="home-section">
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
                        <a href="<?php echo e(route("mesoffres1")); ?>" class="btn btn-block btn-primary btn-md">Mes Offres</a>
                    </div>

                </div>


            </div>
            <div class="row">


                <div class="col-md-6 col-lg-6 mb-5" >


                    <?php if(Session::has('Success')): ?>
                        <p class="alert alert-success  " class="close" data-dismiss="alert" aria-label="Close"><?php echo e(Session::get('Success')); ?></p>

                    <?php endif; ?>
                    <?php if(Session::has('filed')): ?>
                        <p class="alert alert-success mydiv "  class="close" data-dismiss="alert" aria-label="Close"><?php echo e(Session::get('filed')); ?></p>
                    <?php endif; ?>
                    <h2 class="mb-4">Mon profil</h2>

                    <form action="<?php echo e(route("profile2")); ?>" method="POST" class="p-4 border rounded" id="registration" name="registration">
                        <?php echo e(csrf_field()); ?>



                        <div class="row form-group">

                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Nom *</label>
                                <input type="text" id="nom" name="nom" class="form-control" value="<?php echo e($user->nom); ?>">
                            </div>

                        </div>

                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Prénom *</label>
                                <input type="text" id="prenom" name="prenom" class="form-control" value="<?php echo e($user->prenom); ?>">
                            </div>

                        </div>

                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Email *</label>
                                <input type="text" id="email" name="email" class="form-control" value="<?php echo e($user->email); ?>" >
                            </div>

                        </div>

                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Nom de l'entreprise *</label>
                                <input type="text" id="nomentreprise" name="nomentreprise" class="form-control" placeholder="" value="<?php echo e($user->nom_entreprise); ?>">
                            </div>

                        </div>

                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">site</label>
                                <input type="text" class="form-control input-date" name="site" value="<?php echo e($user->site); ?>">

                            </div>

                     </div>
                     <div class="row form-group mb-4">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">CNSS *</label>
                                <input type="text" class="form-control input-date" name="cnss" value="<?php echo e($user->cnss); ?>">
                            </div>
                        </div>
                        <div class="row form-group mb-4">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Numéro juridique *</label>
                                <input type="text" class="form-control input-date" name="numj" value="<?php echo e($user->	num_juridique); ?>">
                            </div>
                        </div>
                        <div class="row form-group mb-4">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Téléphone *</label>
                                <input type="text" class="form-control input-date" name="telephone" value="<?php echo e($user->telephone); ?>">
                            </div>
                        </div>

                        <div class="row form-group mb-4">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Emplacement (Adresse) *</label>
                                <input type="text" class="form-control input-date" name="adresse" value="<?php echo e($user->adresse); ?>">
                            </div>
                        </div>


                        <div class="row form-group mb-4">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Description de l'entreprise </label>
                                <textarea class="form-control" rows="4" cols="57" id="description" name="description"><?php echo e($user->description); ?></textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Secteur d'activité  *</label>
                                <select class="form-control" name="secteur" id="secteur">
                                    <option value>Sélectionnez Secteur d'activité</option>
                                    <option value="1" <?php if($user->secteur == 1): ?> selected <?php endif; ?>>Tous secteurs</option>
                                    <option value="2"<?php if($user->secteur == 2): ?> selected <?php endif; ?>>Centres d appels</option>
                                    <option value="3"<?php if($user->secteur == 3): ?> selected <?php endif; ?>>Formation</option>
                                    <option value="4"<?php if($user->secteur == 4): ?> selected <?php endif; ?>>Ressources humaines</option>
                                    <option value="5"<?php if($user->secteur == 5): ?> selected <?php endif; ?>>Ingenierie</option>
                                    <option value="6"<?php if($user->secteur == 6): ?> selected <?php endif; ?>>Marketing</option>
                                    <option value="7"<?php if($user->secteur == 7): ?> selected <?php endif; ?>>Informatique</option>
                                    <option value="8"<?php if($user->secteur == 8): ?> selected <?php endif; ?>>Télécommunications</option>
                                    <option value="9"<?php if($user->secteur == 9): ?> selected <?php endif; ?>>Industrie</option>
                                    <option value="10"<?php if($user->secteur ==10): ?> selected <?php endif; ?>>Technologie de l'information</option>
                                    <option value="11"<?php if($user->secteur ==11): ?> selected <?php endif; ?>>Commerce</option>
                                    <option value="12"<?php if($user->secteur ==12): ?> selected <?php endif; ?>>Vente</option>
                                    <option value="13"<?php if($user->secteur ==13): ?> selected <?php endif; ?>>Transport</option>
                                    <option value="14"<?php if($user->secteur ==14): ?> selected <?php endif; ?>>Stratégie-Planification</option>
                                    <option value="15"<?php if($user->secteur ==15): ?> selected <?php endif; ?>>Science</option>
                                    <option value="16"<?php if($user->secteur ==16): ?> selected <?php endif; ?>>Commerce de détail</option>
                                    <option value="17" <?php if($user->secteur == 17): ?> selected <?php endif; ?>>Restauration</option>
                                    <option value="18"<?php if($user->secteur ==18): ?> selected <?php endif; ?>>Recherche</option>
                                    <option value="19"<?php if($user->secteur ==19): ?> selected <?php endif; ?>>Immobilier</option>
                                    <option value="20"<?php if($user->secteur ==20): ?> selected <?php endif; ?>>Controle Qualite</option>
                                    <option value="21"<?php if($user->secteur ==21): ?> selected <?php endif; ?>>Achat - Approvisionnement</option>
                                    <option value="22"<?php if($user->secteur ==22): ?> selected <?php endif; ?>>Pharmaceutiques</option>
                                    <option value="23"<?php if($user->secteur ==23): ?> selected <?php endif; ?>>Services a la clientele</option>
                                    <option value="24"<?php if($user->secteur ==24): ?> selected <?php endif; ?>>Media-Journalisme</option>
                                    <option value="25"<?php if($user->secteur ==25): ?> selected <?php endif; ?>>Gestion</option>
                                    <option value="26"<?php if($user->secteur ==26): ?> selected <?php endif; ?>>Juridique</option>
                                    <option value="27"<?php if($user->secteur ==27): ?> selected <?php endif; ?>>Assurances</option>
                                    <option value="28"<?php if($user->secteur ==28): ?> selected <?php endif; ?>>Installation-Entretien-Reparation</option>
                                    <option value="29"<?php if($user->secteur ==29): ?> selected <?php endif; ?>>Fonction publique</option>
                                    <option value="30"<?php if($user->secteur ==30): ?> selected <?php endif; ?>>Services veterinaires</option>
                                    <option value="31"<?php if($user->secteur == 31): ?> selected <?php endif; ?>>Enseignement</option>
                                    <option value="32"<?php if($user->secteur == 32): ?> selected <?php endif; ?>>Distribution</option>
                                    <option value="33"<?php if($user->secteur == 33): ?> selected <?php endif; ?>>Design</option>
                                    <option value="34"<?php if($user->secteur == 34): ?> selected <?php endif; ?>>Consulting</option>
                                    <option value="35"<?php if($user->secteur == 35): ?> selected <?php endif; ?>>Construction</option>
                                    <option value="36"<?php if($user->secteur == 36): ?> selected <?php endif; ?>>Developpement des affaires</option>
                                    <option value="37"<?php if($user->secteur == 37): ?> selected <?php endif; ?>>Biotechnologie</option>
                                    <option value="38"<?php if($user->secteur == 38): ?> selected <?php endif; ?>>Banque</option>
                                    <option value="39"<?php if($user->secteur == 39): ?> selected <?php endif; ?>>Administration</option>
                                    <option value="40"<?php if($user->secteur == 40): ?> selected <?php endif; ?>>Comptabilite</option>
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
                            <?php if($message = Session::get('success')): ?>
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong><?php echo e($message); ?></strong>
                                </div>

                            <?php endif; ?>
                            <h2 class="mb-4">Votre Logo</h2>
                            <form action="<?php echo e(route('upload_image1')); ?>" class="p-4 border rounded" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="file" name="file" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn px-4 btn-primary text-white">Upload</button>
                                    </div>
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <?php if(isset($user->logo)): ?>
                                            <img src="<?php echo e(asset("images/profile/".$user->logo)); ?>" class="profile_image">
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </form>

                                <?php if(Session::has('Success')): ?>
                                <p class="alert alert-success  " class="close" data-dismiss="alert" aria-label="Close"><?php echo e(Session::get('Success')); ?></p>

                            <?php endif; ?>
                            <?php if(Session::has('filed')): ?>
                                <p class="alert alert-success mydiv "  class="close" data-dismiss="alert" aria-label="Close"><?php echo e(Session::get('filed')); ?></p>
                            <?php endif; ?>
                            <h2 class="mb-4"><br>Modifier password</h2>
                            <form action="<?php echo e(route("changepass")); ?>" class="p-4 border rounded" method="POST" name="registration2">
                                <?php echo e(csrf_field()); ?>


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


<?php $__env->stopSection(); ?>
<?php $__env->startSection("script"); ?>


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
<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cvvidéo\resources\views/profileentreprise.blade.php ENDPATH**/ ?>