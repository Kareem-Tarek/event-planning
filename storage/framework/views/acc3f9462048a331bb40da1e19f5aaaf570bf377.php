<div class="row mb60">
    <div class="col-lg-12">
        <nav class="navigation">
            
            <?php if($paginator->onFirstPage()): ?>
                <a disabled class="page-numbers current"><span>«</span></a>
            <?php else: ?>
                <a href="<?php echo e($paginator->previousPageUrl()); ?>" class="page-numbers"><span>«</span></a>
            <?php endif; ?>

            
            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <?php if(is_string($element)): ?>
                    <a disabled class="page-numbers"><span><?php echo e($element); ?></span></a>
                <?php endif; ?>

                
                <?php if(is_array($element)): ?>
                    <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($page == $paginator->currentPage()): ?>
                            <a disabled class="page-numbers current"><span><?php echo e($page); ?></span></a>
                        <?php else: ?>
                            <a href="<?php echo e($url); ?>" class="page-numbers"><span><?php echo e($page); ?></span></a>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
            <?php if($paginator->hasMorePages()): ?>

                <a href="<?php echo e($paginator->nextPageUrl()); ?>" class="page-numbers"><span>»</span></a>
            <?php else: ?>

                <a disabled class="page-numbers current"><span>»</span></a>
            <?php endif; ?>
        </nav>
    </div>
</div>
<?php /**PATH E:\laragon\www\events\resources\views/vendor/pagination/bootstrap-4.blade.php ENDPATH**/ ?>