<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <?php echo e($breadcrumb_title ?? ''); ?>

                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('admin/home.home')); ?></a></li>
                    <?php echo e($slot ?? ''); ?>

                </ol>
            </div>
            <div class="col-lg-6">
                <!-- Bookmark Start-->
                <div class="bookmark">
                    <ul>
                        <?php echo e($bookmark ?? ''); ?>

                    </ul>
                </div>
                <!-- Bookmark Ends-->
            </div>
        </div>
    </div>
</div>
<?php /**PATH E:\laragon\www\events\resources\views/components/breadcrumb.blade.php ENDPATH**/ ?>