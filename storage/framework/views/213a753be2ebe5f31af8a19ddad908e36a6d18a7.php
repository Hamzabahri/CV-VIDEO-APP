<?php $__env->startSection("content"); ?>
    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" class="site-section services-section bg-light block__62849" style="background-image: url('<?php echo e(asset('images/hero_1.jpg')); ?>');" id="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                </div>
            </div>
        </div>
    </section>


    <section class="site-section services-section bg-light block__62849" id="next-section">
        <div class="container">

            <div class="row">
                <?php $__currentLoopData = $desc1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">
                    <a href="<?php echo e(route('desc1', ["id" => $row->id])); ?>" class="block__16443 text-center d-block">
                        <img src="<?php echo e(asset('images/profile/'.$row->logo)); ?>"class="bagh" alt="Free Website Template by Free-Template.co" class="img-fluid">
                        <h3><br> <?php echo e($row->nom_entreprise); ?></h3>
                        <p class="divdesc"><?php echo e($row->description); ?></p>
                        <div class="row mb-5">
                            <div class="col-6">
                                <?php echo e($row->secteur); ?>

                            </div>
                            <div class="col-6">
                                <?php echo e(\App\Offre_demploi::offre_ste($row->id)); ?> annonce(s)
                            </div>
                        </div>
                    </a>


                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
<?php echo e($desc1->links()); ?>


        </div>
    </section>








    <?php $__env->stopSection(); ?>


<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cvvidéo\resources\views/toutentreprise.blade.php ENDPATH**/ ?>