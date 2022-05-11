<?php $__env->startSection('judul', 'Indonesia Waropen'); ?>

<?php $__env->startSection('main'); ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h3 class="page-title">BAHASA INDONESIA WAROPEN</h3>
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
                                <h4 class="box-title">Form Tambah Data</h4>
                            </div>
                            <!-- /.box-header -->
                            <form action="<?php echo e(route('waropen.store')); ?>" enctype="multipart/form-data" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="box-body">
                                    <h4 class="mt-0 mb-20"></h4>
                                    <div class="form-group">
                                        <h5>Bahasa Waropen <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="bhs_waropen" id="bhs_waropen" class="form-control"
                                                required data-validation-required-message="This field is required">
                                        </div>
                                        <div class="form-control-feedback"></div>
                                    </div>

                                    <h4 class="mt-0 mb-20"></h4>
                                    <div class="form-group">
                                        <h5>Audio<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" accept="audio/*" name="audio" id="audio"
                                                class="form-control" required>
                                        </div>
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

                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Data Bahasa waropen</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Bahasa waropen</th>
                                            <th>Audio</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $waropen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($loop->iteration); ?></td>
                                                <td><?php echo e($item->bhs_waropen); ?></td>
                                                <td>
                                                    <audio controls>
                                                        <source src="<?php echo e(asset('storage/audio/' . $item->audio)); ?>"
                                                            type="audio/mpeg">
                                                    </audio>
                                                </td>
                                                <td align="center">
                                                    <a href="<?php echo e(route('waropen.edit', $item->id)); ?>"><button type="submit"
                                                            class="btn btn-success">Edit</button></a>
                                                    <a href="<?php echo e(route('waropen.destroy', $item->id)); ?>"
                                                        class="btn btn-danger btn-hapus">Hapus</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Bahasa Waropen</th>
                                            <th>Audio</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>

        </div>
        </section>



    </div>
    <!-- /.content-wrapper -->

    <form action="" method="post" id="formHapus">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
    </form>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(mix('js/crud.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/smartspartacus/Assets/Projects/Laravel8/Kamus_Waropen/resources/views/admin/waropen/index.blade.php ENDPATH**/ ?>