<?php $__env->startSection('content'); ?>
    <div class="mx-2 mt-3">
        <h1 class="text-2xl font-bold underline text-center mb-5">
            Kamus Indonesia-Waropen
        </h1>
        <div class="flex justify-center">
            <div>Indonesia</div>
            <div class="mx-2" id="tukar">
                <i data-feather="repeat"></i>
            </div>
            <div>Inggris</div>
        </div>
        <div>
            <input type="text" id="bahasa" class="border-gray-300">
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(mix('js/user.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/smartspartacus/Assets/Projects/Laravel8/Kamus_Waropen/resources/views/user/dashboard/index.blade.php ENDPATH**/ ?>