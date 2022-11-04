

<?php $__env->startSection('title', __('admin/home.dashboard')); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/css/animate.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->yieldContent('breadcrumb-list'); ?>

<!-- Container-fluid starts-->
<div class="container-fluid dashboard-default-sec">
    <div class="row">
        <div class="col-xl-6 box-col-12 des-xl-100">
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-6 box-col-3 des-xl-25 rate-sec" style="margin-top: 5%;">
                    <div class="card income-card">
                        <div class="card-body text-center">
                            <div class="round-box">
                                <i data-feather="calendar"></i>
                            </div>
                            <h5><?php echo e(\App\Models\Event::count()); ?></h5>
                            <p><?php echo e(__('admin/event.events')); ?></p>
                            <span style="color:white;">⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯</span>
                            <a class="btn-arrow arrow-primary" href="<?php echo e(route('events.index')); ?>" 
                               style="color:#FFFFFF; background-color:rgb(95, 95, 95); padding:4%; border-radius:5px; transition: 0.40s ease-in-out;"
                               onMouseOver="this.style.backgroundColor='#BA895D'" onMouseOut="this.style.backgroundColor='rgb(95, 95, 95)'">
                               <?php echo e(__('admin/home.show_link')); ?>

                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-6 box-col-3 des-xl-25 rate-sec" style="margin-top: 5%;">
                    <div class="card income-card">
                        <div class="card-body text-center">
                            <div class="round-box">
                                <i data-feather="message-circle"></i>
                            </div>
                            <h5><?php echo e(\App\Models\Comment::count()); ?></h5>
                            <span><?php echo e(__('admin/home.offers_made1')); ?></span>
                            <p><?php echo e(__('admin/home.offers_made2')); ?></p>
                            <span style="color:white;">⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯</span>
                            <label class="btn-arrow arrow-secondary" style="color:#BA895D;"><?php echo e(__('admin/home.offers_made_content')); ?></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 box-col-12 des-xl-100">
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-6 box-col-3 des-xl-25 rate-sec" style="margin-top: 5%;">
                    <div class="card income-card">
                        <div class="card-body text-center">
                            <div class="round-box">
                                <i data-feather="edit"></i>
                            </div>
                            <h5><?php echo e(\App\Models\Contribution::count()); ?></h5>
                            <p><?php echo e(__('admin/contribution.contributions')); ?></p>
                            <span style="color:white;">⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯</span>
                            <a class="btn-arrow arrow-primary" href="<?php echo e(route('contributions.index')); ?>" 
                               style="color:#FFFFFF; background-color:rgb(95, 95, 95); padding:4%; border-radius:5px; transition: 0.40s ease-in-out;"
                               onMouseOver="this.style.backgroundColor='#BA895D'" onMouseOut="this.style.backgroundColor='rgb(95, 95, 95)'">
                                <?php echo e(__('admin/home.show_link')); ?>

                            </a>
                        </div>
                    </div>
                </div>


                <div class="col-xl-6 col-md-6 col-sm-6 box-col-3 des-xl-25 rate-sec" style="margin-top: 5%;">
                    <div class="card income-card">
                        <div class="card-body text-center">
                            <div class="round-box">
                                <i data-feather="list"></i>
                            </div>
                            <h5><?php echo e(\App\Models\Category::count()); ?></h5>
                            <p><?php echo e(__('admin/category.services_categories')); ?></p>
                            <span style="color:white;">⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯</span>
                            <a class="btn-arrow arrow-primary" href="<?php echo e(route('categories.index')); ?>" 
                               style="color:#FFFFFF; background-color:rgb(95, 95, 95); padding:4%; border-radius:5px; transition: 0.40s ease-in-out;"
                               onMouseOver="this.style.backgroundColor='#BA895D'" onMouseOut="this.style.backgroundColor='rgb(95, 95, 95)'">
                               <?php echo e(__('admin/home.show_link')); ?>

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('admin/js/counter/jquery.waypoints.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/counter/jquery.counterup.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/counter/counter-custom.js')); ?>"></script>

<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\events\resources\views/dashboard/home.blade.php ENDPATH**/ ?>