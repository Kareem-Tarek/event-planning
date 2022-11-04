<?php if(session('message') ?? '' ): ?>
    <?php echo $__env->make('layouts.admin.partials.alert.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif(session('delete') ?? '' ): ?>
    <?php echo $__env->make('layouts.admin.partials.alert.danger', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif(session('error') ?? '' ): ?>
    <?php echo $__env->make('layouts.admin.partials.alert.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php /**PATH E:\laragon\www\events\resources\views/layouts/website/partials/messages/message.blade.php ENDPATH**/ ?>