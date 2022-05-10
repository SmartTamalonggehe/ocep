<?php $__env->startSection('judul', 'Bahasa Indonesia'); ?>

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
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <?php echo e(session('berhasil')); ?>

                    </div>
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
                            <form action="<?php echo e(route('indo_warop.update', $kamus->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="box-body">
                                    <h4 class="mt-0 mb-20"></h4>
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <h5>Indonesia <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="indonesia_id" id="indonesia_id"
                                                        class="select2_basic form-control" required>
                                                        <?php
                                                            $selected = '';
                                                        ?>
                                                        <?php $__currentLoopData = $indonesia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($indo->id == $kamus->indonesia_id): ?>
                                                                <?php
                                                                    $selected = 'selected';
                                                                ?>
                                                            <?php endif; ?>
                                                            <option <?php echo e($selected); ?> value="<?php echo e($indo->id); ?>">
                                                                <?php echo e($indo->bhs_indonesia); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                                <div class="form-control-feedback"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <h5>Waropen <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="waropen_id" id="waropen_id"
                                                        class="select2_basic form-control" required>
                                                        <?php
                                                            $selected = '';
                                                        ?>
                                                        <?php $__currentLoopData = $waropen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $warop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($warop->id == $kamus->waropen_id): ?>
                                                                <?php
                                                                    $selected = 'selected';
                                                                ?>
                                                            <?php endif; ?>
                                                            <option <?php echo e($selected); ?> value="<?php echo e($warop->id); ?>">
                                                                <?php echo e($warop->bhs_waropen); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                                <div class="form-control-feedback"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    
                                    <button type="submit" class="btn btn-success pull-right">Simpan</button>
                                </div>
                                <!-- /.box -->
                            </form>
                        </div>

                    </div>
                </div>

            </section>



        </div>
        <!-- /.content-wrapper -->


    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/smartspartacus/Assets/Projects/Laravel8/Kamus_Waropen/resources/views/admin/indo_warop/edit.blade.php ENDPATH**/ ?>