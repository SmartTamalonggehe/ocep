<?php $__env->startSection('judul','Bahasa Indonesia'); ?>

<?php $__env->startSection('main'); ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="me-auto">
                  <h3 class="page-title">BAHASA INDONESIA</h3>
                  <div class="d-inline-block align-items-center">

                  </div>
              </div>

          </div>
      </div>


    <?php if(session('berhasil')): ?>
    <div class="box-body pad res-tb-block">
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> <?php echo e(session('berhasil')); ?> </div>
    </div>
    <?php endif; ?>

      <section class="content">
          <div class="row">
            <div class="col-lg-12 col-12">
                <!-- Basic Forms -->
                  <div class="box">
                    <div class="box-header with-border">
                      <h4 class="box-title">Form Edit Data Bahasa Indonesia</h4>
                    </div>
                    <!-- /.box-header -->
                    <form  action="<?php echo e(route('indonesia.update', $indonesia->id)); ?>" enctype="multipart/form-data" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="box-body">
                            <h4 class="mt-0 mb-20"></h4>
                            <div class="form-group">
								<h5>Bahasa Indonesia <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" value="<?php echo e($indonesia->bhs_indonesia); ?>" name="bhs_indonesia" id="bhs_indonesia" class="form-control" required data-validation-required-message="This field is required">
								</div>
								<div class="form-control-feedback"></div>
							</div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            
                            <button type="submit" class="btn btn-success pull-right">Simpan</button>
                        </div>
                    </form>
                  </div>
                  <!-- /.box -->
            </div>
          </div>

      </section>



</div>
<!-- /.content-wrapper -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/smartspartacus/Assets/Projects/Laravel8/Kamus_Waropen/resources/views/admin/indo/edit.blade.php ENDPATH**/ ?>