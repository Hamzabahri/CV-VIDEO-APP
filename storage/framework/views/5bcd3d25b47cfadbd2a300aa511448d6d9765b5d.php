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
            <?php if(count($listcondidat) > 0): ?>
            <?php $__currentLoopData = $listcondidat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="col-lg-6 mb-4">

                    <div class="block__87154">
                        <h3><a href="<?php echo e(route('cvteque1', ["id" => $row->id])); ?>" target="_blank" ><?php echo e($row->prenom); ?> <?php echo e($row->nom); ?></a></h3>


                        <div class="block__91147 d-flex align-items-center mb-4">
                            <figure class="mr-4"><img src="<?php echo e(asset('images/profile/'.$row->photo)); ?>" alt="Image" class="img-fluid"></figure>
                            <div>
                                <h3>Email : <?php echo e($row->email); ?></h3>
                                <span class="position">Téléphone : <?php echo e($row->telephone); ?></span>
                            </div>


                        </div>
                        <div>
                            <video class="vid" controls>
                                <source src="<?php echo e(asset('cv/videos/'.$row->video_cv)); ?>" type="video/mp4">
                                <source src="<?php echo e(asset('cv/videos/'.$row->video_cv)); ?>" type="video/ogg">
                            </video>
                        </div>
                    </div>
                </div>



                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>

                <div class="row">
                    <div class="col-lg-12 md-12 mb-4">

                <p class="alert alert-success  " class="close" data-dismiss="alert" aria-label="Close">Aucun postuler</p>
                </div>
                </div>

            <?php endif; ?>
        </div>





    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cvvidéo\resources\views/condidatpostuler.blade.php ENDPATH**/ ?>