


<?php $__env->startSection('title'); ?>
   - <?php echo app('translator')->get('admin/home.signup_title'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top:6%; margin-bottom:6%;">
                <div class="card-header" style="text-align: center; padding:0.25%; background-color:rgb(232, 232, 232); color:snow; border-radius:10px; margin-bottom:3%;">
                    <h2><?php echo e(__('auth.register')); ?></h2>
                </div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="row mb-3" style="margin-bottom:1%; width: 50%; margin-left:auto; margin-right: auto;">
                            
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" placeholder="<?php echo e(__('website/home.enter_name')); ?>" required autocomplete="off" autofocus>
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="row mb-3" style="margin-bottom:1%; width: 50%; margin-left:auto; margin-right: auto;">
                            
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" placeholder="<?php echo e(__('website/home.enter_email')); ?>" required autocomplete="off">
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="row mb-3" style="margin-bottom:1%; width: 50%; margin-left:auto; margin-right: auto;">
                            
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" placeholder="<?php echo e(__('website/home.enter_password')); ?>" required autocomplete="off">
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="row mb-3" style="margin-bottom:1%; width: 50%; margin-left:auto; margin-right: auto;">
                            
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="<?php echo e(__('website/home.enter_confirm_password')); ?>" required autocomplete="off">
                            </div>
                        </div>

                        <div class="row mb-3" style="margin-bottom:1%; width: 70%; margin-left:auto; margin-right: auto;">
                            
                            <div class="col-lg-6" style="margin-left: 25%;">
                                <select name="user_type" class="form-control" required>
                                    <option value=""><?php echo e(__('admin/home.please_choose_user_type')); ?></option>
                                    <option value="supplier"><?php echo e(__('website/home.supplier')); ?></option>
                                    <option value="customer"><?php echo e(__('website/home.customer')); ?></option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3" style="margin-bottom:1%; text-align: center;">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="color:rgb(246, 246, 246); background-color:rgb(50, 50, 50);" onmouseover="this.style.backgroundColor='rgb(108, 108, 108)'" onmouseout="this.style.backgroundColor='rgb(50, 50, 50)'">
                                    <?php echo e(__('auth.register')); ?>

                                </button>
                            </div>
                        </div>

                        <div class="row mb-0" style="text-align: center;">
                            <div class="col-md-6 offset-md-4">
                                <?php echo e(__('admin/home.login_already_existing_user')); ?>

                                <a href="<?php echo e(route('login')); ?>" style="color: rgb(17, 17, 187); font-weight: bold;">
                                    <u><?php echo e(__('admin/home.login_title')); ?></u>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\events\resources\views/auth/register.blade.php ENDPATH**/ ?>