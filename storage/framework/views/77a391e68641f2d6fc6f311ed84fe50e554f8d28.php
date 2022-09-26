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


    <section class="site-section" style="background: #f3eded;">
        <div class="row">
            <div class="col-lg-4 mb-4">

                <div class="block__87154">
                    <h3><?php echo e($cv->prenom); ?> <?php echo e($cv->nom); ?></h3>

                    <img src="<?php echo e(asset("images/profile/".$cv->photo)); ?>" class="profile_image widthcv" ><br><br>
                    <div class="block__91147 d-flex align-items-center mb-4">

                        <div class="col-lg-12 mb-4">
                            <h3>Email : <?php echo e($cv->email); ?></h3>
                            <span class="position">Téléphone : <?php echo e($cv->telephone); ?></span>
                        </div>


                    </div>

                </div>
            </div>

            <div class="col-lg-8 mb-4">

                <div class="block__87154">

                    <div>
                        <h3>vidéo-cv</h3><br>
                        <video class="vid" controls>
                            <source src="<?php echo e(asset('cv/videos/'.$cv->video_cv)); ?>" type="video/mp4">
                            <source src="<?php echo e(asset('cv/videos/'.$cv->video_cv)); ?>" type="video/ogg">
                        </video>
                    </div>
                </div>
            </div>

        </div>





    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cvvidéo\resources\views/cvthequecondidat.blade.php ENDPATH**/ ?>