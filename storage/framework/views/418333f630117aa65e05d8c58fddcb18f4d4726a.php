
<?php $__env->startSection('title'); ?>
   - <?php echo app('translator')->get('website/home.contact_us'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Contacts -->
        <section>
            <div class="container-fluid no-padding">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 no-padding">
                    <!-- Leaflet map -->
                    <div id="map" style="height: 620px; margin-top: 3%;"></div>
                    <!-- End Leaflet map -->
                </div>
                <div class="col-lg-3 col-lg-offset-1 col-md-12 col-sm-12 pt70 pb100">
                    <div class="breadcrumbs-wrap inline-items">
                        <a href="<?php echo e(route('home')); ?>" class="btn btn--transparent btn--round">
                            <svg class="utouch-icon utouch-icon-home-icon-silhouette"><use xlink:href="#utouch-icon-home-icon-silhouette"></use></svg>
                        </a>

                        <ul class="breadcrumbs">
                            <li class="breadcrumbs-item active">
                                <span><?php echo e(__('website/home.contact_us')); ?></span>
                                <svg class="utouch-icon utouch-icon-media-play-symbol"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
                            </li>
                        </ul>
                    </div>

                    <div class="crumina-module crumina-heading">
                        <h4 class="heading-title"><?php echo e(__('website/home.get_touch')); ?></h4>
                        <div class="heading-text">
                            <?php echo e(__('website/home.description_contact')); ?>

                        </div>
                    </div>
                    <div class="widget w-contacts w-contacts--style2 ">
                        <div class="contact-item display-flex">
                            <svg class="utouch-icon utouch-icon-placeholder-3"><use xlink:href="#utouch-icon-placeholder-3"></use></svg>
                            <span class="info"><?php echo e($setting->location); ?></span>
                        </div>
                        <div class="contact-item display-flex">
                            <svg class="utouch-icon utouch-icon-telephone-keypad-with-ten-keys"><use xlink:href="#utouch-icon-telephone-keypad-with-ten-keys"></use></svg>
                            <div class="info-wrap">
                                <span class="info"><a href="tel://<?php echo e($setting->whatsApp); ?>"><?php echo e($setting->whatsApp); ?></a> <span>- <?php echo e(__('website/home.central_office')); ?></span></span>
                                <span class="info"><a href="https://wa.me/<?php echo e($setting->whatsApp); ?>" rel="nofollow" target="_blank"><?php echo e($setting->whatsApp); ?></a> <span>- <?php echo e(__('website/home.whatsApp')); ?></span></span>
                            </div>
                        </div>
                        <div class="contact-item display-flex">
                            <svg class="utouch-icon utouch-icon-message"><use xlink:href="#utouch-icon-message"></use></svg>
                            <a href="mailto://<?php echo e($setting->whatsApp); ?>" class="info"><?php echo e($setting->email); ?></a>
                        </div>

                        <a href="#" class="btn btn--grey btn--with-shadow js-message-popup cd-nav-trigger"><?php echo e(__('website/home.send_message')); ?></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ... end Contacts -->

    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('website/js/js-plugins/leaflet.js')); ?>"></script>
    <script src="<?php echo e(asset('website/js/js-plugins/MarkerClusterGroup.js')); ?>"></script>
    <script src="<?php echo e(asset('website/js/js-plugins/leaflet-init.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\event-planning\resources\views/website/contact.blade.php ENDPATH**/ ?>