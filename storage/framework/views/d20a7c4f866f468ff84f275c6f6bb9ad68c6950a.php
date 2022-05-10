<?php echo $__env->make('user.layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <body id="page-top">

<?php echo $__env->make('user.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('user.layouts.masthead', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('main'); ?>

<?php echo $__env->make('user.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('user.layouts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </body>
    </html>
<?php /**PATH /media/smartspartacus/Assets/Projects/Laravel8/Kamus_Waropen/resources/views/user/layouts/default.blade.php ENDPATH**/ ?>