
    <a href="<?php echo e(route('home')); ?>" class="btn btn--primary btn--round breadcrumbs-custom">
        <svg class="utouch-icon utouch-icon-home-icon-silhouette breadcrumbs-custom"><use xlink:href="#utouch-icon-home-icon-silhouette"></use></svg>
    </a>

    <ul class="breadcrumbs breadcrumbs--rounded">
        <?php echo e($breadcrumbs_item ?? ''); ?>

        <?php echo e($breadcrumbs_item_active ?? ''); ?>

    </ul>


<?php /**PATH E:\laragon\www\events\resources\views/components/breadcrumbs-wrap.blade.php ENDPATH**/ ?>