<?php $__env->startSection('judul','Login'); ?>

<?php $__env->startSection('main'); ?>

<div class="container h-p100">
    <div class="row align-items-center justify-content-md-center h-p100">
        <div class="col-12">
            <div class="row justify-content-center g-0">
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="bg-white rounded10 shadow-lg">
                        <div class="content-top-agile p-20 pb-0">
                            <h2 class="text-primary">Let's Get Started</h2>
                            <p class="mb-0">Sign in to continue to WebkitX.</p>
                        </div>
                        <div class="p-40">
                        <form action="<?php echo e(route('login')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-transparent"><i class="ti-email"></i></span>
                                        <input type="email" id="email" name="email" class="form-control ps-15 bg-transparent" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
                                        <input type="password" id="password" name="password" class="form-control ps-15 bg-transparent" placeholder="Password">
                                    </div>
                                </div>
                                  <div class="row">
                                                                        
                                    <!-- /.col -->
                                    <div class="col-12 text-center">
                                      <button type="submit" class="btn btn-danger mt-10">SIGN IN</button>
                                    </div>
                                    <!-- /.col -->
                                  </div>
                            </form>
                           
                        </div>
                    </div>
                    <div class="text-center">
                      <p class="mt-20 text-white">- Sign With -</p>
                      <p class="gap-items-2 mb-20">
                          <a class="btn btn-social-icon btn-round btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
                          <a class="btn btn-social-icon btn-round btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
                          <a class="btn btn-social-icon btn-round btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


</body>
</html>








<?php echo $__env->make('auth.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/smartspartacus/Assets/Projects/Laravel8/Kamus_Waropen/resources/views/auth/login.blade.php ENDPATH**/ ?>