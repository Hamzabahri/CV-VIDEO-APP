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
        <div class="container">
            <div class="row">
                <div class="col-lg-8 blog-content">
                    <h3 class="mb-4"><?php echo e($desc->nom_entreprise); ?></h3>
                    <p> <img src="<?php echo e(asset('images/profile/'.$desc->logo)); ?>" style="width: 200px; height: 200px;}" alt="Image"></p>
                    <br><h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-align-left mr-3"></span>Description</h3>
                    <p><?php echo e($desc->description); ?></p>
                    <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-turned_in mr-3"></span>secteur d'activité </h3>
                    <?php echo e($desc->secteur); ?>

                </div>
                    <div class="col-lg-4">
                        <div class="bg-light p-3 border rounded mb-4">
                            <h3 class="text-primary  mt-3 h5 pl-3 mb-3 "></h3>
                            <ul class="list-unstyled pl-3 mb-0">
                                <li class="mb-2"><strong class="text-black">Directeur général :</strong> <?php echo e($desc->prenom); ?> <?php echo e($desc->nom); ?></li>
                                <li class="mb-2"><strong class="text-black">Email :</strong> <?php echo e($desc->email); ?></li>
                                <li class="mb-2"><strong class="text-black">Nom de l'entreprise :</strong> <?php echo e($desc->nom_entreprise); ?></li>
                                <li class="mb-2"><strong class="text-black">site web :</strong> <?php echo e($desc->site); ?></li>
                                <li class="mb-2"><strong class="text-black">Téléphone :</strong> <?php echo e($desc->telephone); ?></li>
                                <li class="mb-2"><strong class="text-black">Adresse :</strong> <?php echo e($desc->adresse); ?></li>

                            </ul>
                        </div>
                    </div>



                </div>
            </div>

    </section>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cvvidéo\resources\views/descentreprise.blade.php ENDPATH**/ ?>