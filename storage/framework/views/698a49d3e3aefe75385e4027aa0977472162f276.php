<?php if($errors->any()): ?>
<div class="alert alert-danger" role="alert">
    <h4 class="alert-heading"><?php echo e(__('admin/home.errors')); ?></h4>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><?php echo e($error); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php endif; ?>

<?php /**PATH E:\laragon\www\events\resources\views/layouts/website/partials/validation-errors.blade.php ENDPATH**/ ?>