<?php echo $__env->make('auth.layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body class="hold-transition theme-primary bg-img" style="background-image: url(../images/auth-bg/bg-1.jpg)">

         <?php echo $__env->yieldContent('main'); ?>

         <?php echo $__env->make('auth.layouts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH /media/smartspartacus/Assets/Projects/Laravel8/Kamus_Waropen/resources/views/auth/layouts/default.blade.php ENDPATH**/ ?>