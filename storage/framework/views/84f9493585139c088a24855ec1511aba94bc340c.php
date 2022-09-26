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

            <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="section-title mb-2">Mes Offres d'emploi</h2>
                </div>
            </div>

            <div class="container">


                <?php $__currentLoopData = $offresentreprise; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $offre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
<br>
                                            <a href="<?php echo e(route('condidatpostuler', ["id_offre" => $offre->id])); ?>" >

                                                <span class="badge badge-success"><?php echo e(\App\Postuler::countCondidat($offre->id)); ?>&nbsp; Condidat</span></a>

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



        </div>
    </section>



<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cvvidéo\resources\views/mesoffresentreprise.blade.php ENDPATH**/ ?>