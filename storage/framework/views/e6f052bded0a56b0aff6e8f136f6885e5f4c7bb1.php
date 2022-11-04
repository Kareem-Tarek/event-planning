<link rel="stylesheet" type="text/css" href="<?php echo e(asset('website/css/theme-styles.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('website/css/blocks.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('website/css/widgets.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('website/css/plugins/ion.rangeSlider.css')); ?>">
<!--External fonts-->
<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Baloo+Paaji" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300&display=swap" rel="stylesheet">
<!-- Styles for Plugins -->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('website/css/plugins/swiper.min.css')); ?>">
<!--Styles for RTL-->
<?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('website/css/rtl.css')); ?>">
<?php endif; ?>
<?php echo $__env->yieldPushContent('css'); ?>
<?php echo \Livewire\Livewire::styles(); ?>

<?php /**PATH E:\laragon\www\events\resources\views/layouts/website/partials/css.blade.php ENDPATH**/ ?>