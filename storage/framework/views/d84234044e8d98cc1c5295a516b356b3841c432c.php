<?php $__env->startSection('partenaire'); ?>
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

                <?php $__currentLoopData = \App\Entreprise::getStePartenaire(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ste): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-6 col-lg-3 col-md-6 text-center">
                        <img src="<?php echo e(asset('images/profile/'.$ste->logo)); ?>" alt="Image" class="img-fluid logo-1">
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('<?php echo e(asset('images/hero_1.jpg')); ?>');" id="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                </div>
            </div>
        </div>
    </section>


    <section class="site-section" style="background: #f3eded;">
        <div class="container">

            <div class="row align-items-center mb-5">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <?php if(Session::has('Success')): ?>
                        <p class="alert alert-success  " class="close" data-dismiss="alert" aria-label="Close"><?php echo e(Session::get('Success')); ?></p>

                    <?php endif; ?>
                    <div class="d-flex align-items-center">

                        <div class="border p-2 d-inline-block mr-3 rounded">
                            <img src="<?php echo e(asset('images/profile/'.$offre->logo)); ?>" style="width: 162px; height: 137px;}" alt="Image">
                        </div>
                        <div>
                            <h2><?php echo e($offre->titre); ?></h2>
                            <div>
                                <span class="ml-0 mr-2 mb-2"><span class="icon-briefcase mr-2"></span><?php echo e($offre->nom_entreprise); ?></span>
                                <span class="m-2"><span class="icon-room mr-2"></span><?php echo e($offre->adresse); ?> <?php echo e($offre->lieu); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <?php if(Auth::guard('condidat')->check()): ?>
                            <?php if(\App\Postuler::checkuserpostuled(Auth::guard('condidat')->user()->id, $offre->id)): ?>
                                <div class="col-6">
                                    <a href="<?php echo e(route('dispostuler',['id'=>$offre->id])); ?>" class="btn btn-block btn-primary btn-md">Dispostuler</a>
                                </div>
                            <?php else: ?>
                                <div class="col-6">
                                    <a href="<?php echo e(route('postuler',['id_offre'=>$offre->id])); ?>" class="btn btn-block btn-primary btn-md">Postuler</a>
                                </div>
                            <?php endif; ?>

                        <?php else: ?>
                            <div class="col-6">
                                <a href="<?php echo e(route("log1")); ?>" class="btn btn-block btn-primary btn-md">Connexion</a>
                            </div>
                            <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-5">

                        <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-align-left mr-3"></span>Description</h3>
                        <?php echo e($offre->description); ?>

                    </div>


                    <div class="mb-5">
                        <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-book mr-3"></span>Niveau d'étude + Experience</h3>
                        <ul class="list-unstyled m-0 p-0">
                            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span><?php echo e($offre->experience); ?></span></li>
                            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span><?php echo e($offre->niveau); ?></span></li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-turned_in mr-3"></span>secteur d'activité </h3>
                        <ul class="list-unstyled m-0 p-0">
                            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span><?php echo e($offre->secteur); ?></span></li>

                        </ul>
                    </div>
                    <div class="mb-5">
                        <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-turned_in mr-3"></span>Type de contrat</h3>
                        <ul class="list-unstyled m-0 p-0">
                            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span><?php echo e($offre->type_contrat); ?></span></li>

                        </ul>
                    </div>
                    <div class="mb-5">
                        <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-turned_in mr-3"></span>Langue</h3>
                        <ul class="list-unstyled m-0 p-0">
                            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span><?php echo e($offre->lange); ?></span></li>

                        </ul>
                    </div>
                    <div class="mb-5">
                        <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-rocket mr-3"></span>Profil du candidat</h3>
                        <ul class="list-unstyled m-0 p-0">
                            <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span><?php echo e($offre->profil); ?></span></li>

                        </ul>
                    </div>







                    <div class="row mb-5">

                        <?php if(Auth::guard('condidat')->check()): ?>
                            <?php if(\App\Postuler::checkuserpostuled(Auth::guard('condidat')->user()->id, $offre->id)): ?>
                                <div class="col-6">
                                    <a href="<?php echo e(route('dispostuler',['id'=>$offre->id])); ?>" class="btn btn-block btn-primary btn-md">Dispostuler</a>
                                </div>
                            <?php else: ?>
                                <div class="col-6">
                                    <a href="<?php echo e(route('postuler',['id_offre'=>$offre->id])); ?>" class="btn btn-block btn-primary btn-md">Postuler</a>
                                </div>
                            <?php endif; ?>

                        <?php else: ?>
                            <div class="col-6">
                                <a href="<?php echo e(route("log1")); ?>" class="btn btn-block btn-primary btn-md">Connexion</a>
                            </div>
                        <?php endif; ?>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="bg-light p-3 border rounded mb-4">
                        <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Résumé du travail</h3>
                        <ul class="list-unstyled pl-3 mb-0">
                            <li class="mb-2"><strong class="text-black">Publié le :</strong> <?php echo e(date('Y-m-d', strtotime($offre->created_at))); ?></li>
                            <li class="mb-2"><strong class="text-black">Postes vacants :</strong> <?php echo e($offre->postes); ?></li>
                            <li class="mb-2"><strong class="text-black">Experience :</strong> <?php echo e($offre->experience); ?></li>
                            <li class="mb-2"><strong class="text-black">Adresse :</strong> <?php echo e($offre->adresse); ?> <?php echo e($offre->lieu); ?></li>
                            <li class="mb-2"><strong class="text-black">rémunération :</strong> <?php echo e($offre->rémunération); ?></li>
                            <li class="mb-2"><strong class="text-black">Le genre :</strong> <?php echo e($offre->gendre); ?></li>
                            <li class="mb-2"><strong class="text-black">Date début de l'inscription :</strong> <?php echo e(date('Y-m-d', strtotime($offre->date_debut))); ?></li>
                            <li class="mb-2"><strong class="text-black">Date limite d'inscription :</strong> <?php echo e(date('Y-m-d', strtotime($offre->date_fin))); ?></li>
                        </ul>
                    </div>

                    <div class="bg-light p-3 border rounded">
                        <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Share</h3>
                        <div class="px-3">
                            <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-facebook"></span></a>
                            <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-twitter"></span></a>
                            <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-linkedin"></span></a>
                            <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-pinterest"></span></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("script"); ?>


    <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
    <script>

        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 10000);
    </script>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cvvidéo\resources\views/post_details.blade.php ENDPATH**/ ?>