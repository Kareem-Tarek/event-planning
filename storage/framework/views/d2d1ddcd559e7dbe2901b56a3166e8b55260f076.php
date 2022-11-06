<?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?>
    <?php if($paginator->hasPages()): ?>
        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
            <div class="btn-slider-wrap pt80">
                
                <?php if($paginator->onFirstPage()): ?>
                    <div class="btn-prev btn--style">
                        <span><?php echo e(__('website/home.Prev_Page')); ?></span>
                        <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1"><use xlink:href="#utouch-icon-arrow-right-1"></use></svg>
                        <svg class="utouch-icon utouch-icon-arrow-right1"><use xlink:href="#utouch-icon-arrow-right1"></use></svg>

                    </div>
                <?php else: ?>
                    <div class="btn-prev btn--style">

                        <a href="<?php echo e($paginator->previousPageUrl()); ?>" ><span><?php echo e(__('website/home.Prev_Page')); ?></span></a>
                        <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1"><use xlink:href="#utouch-icon-arrow-right-1"></use></svg>
                        <svg class="utouch-icon utouch-icon-arrow-right1"><use xlink:href="#utouch-icon-arrow-right1"></use></svg>
                    </div>
                <?php endif; ?>

                
                <?php if($paginator->hasMorePages()): ?>
                    <div class="btn-next btn--style">
                        <svg class="utouch-icon icon-hover utouch-icon-arrow-left-1"><use xlink:href="#utouch-icon-arrow-left-1"></use></svg>
                        <svg class="utouch-icon utouch-icon-arrow-left1"><use xlink:href="#utouch-icon-arrow-left1"></use></svg>
                        <a href="<?php echo e($paginator->nextPageUrl()); ?>"><span><?php echo e(__('website/home.Next_Page')); ?></span></a>
                    </div>
                <?php else: ?>
                    <div class="btn-next btn--style">

                        <svg class="utouch-icon icon-hover utouch-icon-arrow-left-1"><use xlink:href="#utouch-icon-arrow-left-1"></use></svg>
                        <svg class="utouch-icon utouch-icon-arrow-left1"><use xlink:href="#utouch-icon-arrow-left1"></use></svg>
                        <span><?php echo e(__('website/home.Next_Page')); ?></span>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
<?php else: ?>
    <?php if($paginator->hasPages()): ?>
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
        <div class="btn-slider-wrap pt80">
            
            <?php if($paginator->onFirstPage()): ?>
            <div class="btn-prev btn--style">

                <svg class="utouch-icon icon-hover utouch-icon-arrow-left-1"><use xlink:href="#utouch-icon-arrow-left-1"></use></svg>
                <svg class="utouch-icon utouch-icon-arrow-left1"><use xlink:href="#utouch-icon-arrow-left1"></use></svg>
                <span><?php echo e(__('website/home.Prev_Page')); ?></span>
            </div>
            <?php else: ?>
                <div class="btn-prev btn--style">
                    <svg class="utouch-icon icon-hover utouch-icon-arrow-left-1"><use xlink:href="#utouch-icon-arrow-left-1"></use></svg>
                    <svg class="utouch-icon utouch-icon-arrow-left1"><use xlink:href="#utouch-icon-arrow-left1"></use></svg>
                    <a href="<?php echo e($paginator->previousPageUrl()); ?>" ><span><?php echo e(__('website/home.Prev_Page')); ?></span></a>
                </div>
            <?php endif; ?>

            
            <?php if($paginator->hasMorePages()): ?>
            <div class="btn-next btn--style">
                <a href="<?php echo e($paginator->nextPageUrl()); ?>"><span><?php echo e(__('website/home.Next_Page')); ?></span></a>
                <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1"><use xlink:href="#utouch-icon-arrow-right-1"></use></svg>
                <svg class="utouch-icon utouch-icon-arrow-right1"><use xlink:href="#utouch-icon-arrow-right1"></use></svg>
            </div>
            <?php else: ?>
                <div class="btn-next btn--style">
                    <span><?php echo e(__('website/home.Next_Page')); ?></span>
                    <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1"><use xlink:href="#utouch-icon-arrow-right-1"></use></svg>
                    <svg class="utouch-icon utouch-icon-arrow-right1"><use xlink:href="#utouch-icon-arrow-right1"></use></svg>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH E:\laragon\www\event-planning\resources\views/vendor/pagination/simple-default.blade.php ENDPATH**/ ?>