<?php $__env->startSection('main'); ?>
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-5" src="<?php echo e(asset('assets_user/assets/img/logo-kamus.svg')); ?>" alt="..." />
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">Kamus Daerah</h1>
        <h1 class="masthead-heading text-uppercase mb-0">Indonesia-Waropen</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0">Graphic Artist - Web Designer - Illustrator</p>
    </div>
</header>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/smartspartacus/Assets/Projects/Laravel8/Kamus_Waropen/resources/views/user/dashboard/index.blade.php ENDPATH**/ ?>