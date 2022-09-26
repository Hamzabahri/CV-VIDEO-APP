
<?php $__env->startSection('dash'); ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Description</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(route('index')); ?>">Home</a></li>
              <li class="breadcrumb-item active">Entreprise</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Éléments importants</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form name="activate_disactiveSTE" action="<?php echo e(route("statut", ['id' => $descentreprise->id])); ?>" method="POST" id="formid">

                <div class="card-body">
                <p> <img src="<?php echo e(asset('images/profile/'.$descentreprise->logo)); ?>" style="width: 125px; height: 125px;}" alt="Image"></p>

                <div class="form-group">
                    <label for="exampleInputEmail1">Nom de l'entreprise</label>
                    <input type="text" class="form-control " value="<?php echo e($descentreprise->nom_entreprise); ?>" id="exampleInputEmail1" placeholder="" readonly>
                  </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Directeur général</label>
                    <input type="text" class="form-control is-warning" value="<?php echo e($descentreprise->prenom); ?> <?php echo e($descentreprise->nom); ?>" id="exampleInputEmail1" placeholder="" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" value="<?php echo e($descentreprise->email); ?>" id="exampleInputEmail1" placeholder="Enter email" readonly>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i>CNSS</label>
                    <input type="text" class="form-control is-warning" id="inputWarning" value="<?php echo e($descentreprise->cnss); ?>" placeholder="" readonly>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i>Numéro juridique</label>
                    <input type="text" class="form-control " id="inputWarning" value="<?php echo e($descentreprise->num_juridique); ?>" placeholder="" readonly>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="form-group">
                        <form name="activate_disactiveSTE" action="<?php echo e(route("statut", ['id' => $descentreprise->id])); ?>" method="POST">
                        <?php echo csrf_field(); ?>                         
                          <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                            <input type="checkbox" name="status_ste" <?php if($descentreprise->statut == "1"): ?> checked <?php endif; ?>
                            class="custom-control-input activate_disactiveSTE" id="customSwitch3">
                            <label class="custom-control-label" for="customSwitch3">statut</label>
                          </div>
                        
                      
                      </div>
              </form>
            </div>
            
            <!-- /.card -->
            <!-- Horizontal Form -->
            
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Éléments généraux</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form>  
                  <div class="row">
                    <div class="col-sm-12">
                    <div class="form-group">
                    <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i>site web </label>
                    <input type="text" class="form-control" id="inputWarning" value="<?php echo e($descentreprise->site); ?>" placeholder="" readonly>
                    <div class="form-group">
                    <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i>Adresse </label>
                    <input type="text" class="form-control is-warning" id="inputWarning" value="<?php echo e($descentreprise->adresse); ?>" placeholder="" readonly>
                    <div class="form-group">
                    <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i>secteur d'activité</label>
                    <input type="text" class="form-control   " id="inputWarning" value="<?php echo e($descentreprise->secteur); ?>" placeholder="" readonly>                  
                    <div class="form-group">
                    <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i>Téléphone</label>
                    <input type="text" class="form-control is-warning" id="inputWarning" value="<?php echo e($descentreprise->telephone); ?>" placeholder="" readonly>
                  </div>
                      <div class="form-group">
                        <label>Textarea Disabled</label>
                        <textarea class="form-control" rows="5" value="" placeholder="<?php echo e($descentreprise->description); ?>" readonly></textarea>
                      </div>
                    </div>
                  </div>
                  

                  <!-- input states -->
                  
                
                  

                  

                 
                 
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
           
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cvvidéo\resources\views/admin/form.blade.php ENDPATH**/ ?>