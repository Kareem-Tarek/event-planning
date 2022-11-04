
<?php $model = app('App\Models\Event'); ?>
<?php $__env->startSection('title'); ?>
    - <?php echo app('translator')->get('website/event.add_event'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Start Header -->
        <div class="crumina-stunning-header stunning-header--breadcrumbs-bottom-left stunning-header--content-inline stunning-bg-clouds">
            <div class="container">
                <div class="stunning-header-content">
                    <div class="inline-items">
                        <h4 class="stunning-header-title"><?php echo e(__('website/event.add_event')); ?></h4>
                    </div>
                    <div class="breadcrumbs-wrap inline-items">
                        <?php $__env->startComponent('components.breadcrumbs-wrap'); ?>
                            <?php $__env->slot('breadcrumbs_item'); ?>
                                <li class="breadcrumbs-item">
                                    <a href="<?php echo e(route('allEvents')); ?>" class="breadcrumbs-custom"><?php echo e(__('website/home.events')); ?></a>
                                    <svg class="utouch-icon utouch-icon-media-play-symbol breadcrumbs-custom"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
                                </li>
                            <?php $__env->endSlot(); ?>
                            
                            <?php $__env->slot('breadcrumbs_item_active'); ?>
                                <li class="breadcrumbs-item active">
                                    <span class="breadcrumbs-custom"><?php echo e(__('website/event.add_event')); ?></span>
                                    <svg class="utouch-icon utouch-icon-media-play-symbol breadcrumbs-custom"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
                                </li>
                                <?php $__env->endSlot(); ?>
                        <?php echo $__env->renderComponent(); ?>
                    </div>
                </div>
            </div>
        </div><!-- end Header -->



        <div class="container">

            <div class="row" style="margin: 75px 0 75px 0">
                <?php echo $__env->make('layouts.website.partials.messages.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('layouts.website.partials.validation-errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-lg-12">
                    <form class="form-validate contact-form crumina-submit" method="post" data-nonce="crumina-submit-form-nonce" data-type="standard" action="<?php echo e(route('event.store')); ?>" style="margin-bottom: 75px"  files="true" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> style="float: right" <?php endif; ?>>
                                        <input name="title_ar" placeholder="<?php echo e(__('website/home.enter_title_ar')); ?>" type="text" value="<?php echo e(Request::old('title_ar') ? Request::old('title_ar') : $model->getTranslation('title','ar')); ?>" required autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> style="float: right" <?php endif; ?>>
                                    <textarea name="description_ar" required placeholder="<?php echo e(__('website/home.enter_description_ar')); ?>"><?php echo e(Request::old('description_ar') ? Request::old('description_ar') : $model->getTranslation('description','ar')); ?></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> style="float: right" <?php endif; ?>>
                                        <input name="location_ar" placeholder="<?php echo e(__('website/home.enter_location_ar')); ?>" type="text" value="<?php echo e(Request::old('location_ar') ? Request::old('location_ar') : $model->getTranslation('location','ar')); ?>" required autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php elseif(LaravelLocalization::getCurrentLocale() == 'en'): ?>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> style="float: right" <?php endif; ?>>
                                        <input name="title_en" placeholder="<?php echo e(__('website/home.enter_title_en')); ?>" type="text" value="<?php echo e(Request::old('title_en') ? Request::old('title_en') : $model->getTranslation('title','en')); ?>" required autocomplete="off">
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> style="float: right" <?php endif; ?>>
                                    <textarea name="description_en" required  placeholder="<?php echo e(__('website/home.enter_description_en')); ?>"><?php echo e(Request::old('description_en') ? Request::old('description_ar') : $model->getTranslation('description','en')); ?></textarea>
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> style="float: right" <?php endif; ?>>
                                    <input name="location_en" placeholder="<?php echo e(__('website/home.enter_location_en')); ?>" type="text" value="<?php echo e(Request::old('location_en') ? Request::old('location_en') : $model->getTranslation('location','en')); ?>" required autocomplete="off">
                                </div>
                                
                            </div>
                        </div>
                        <?php elseif(LaravelLocalization::getCurrentLocale() == 'fr'): ?>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> style="float: right" <?php endif; ?>>
                                        <input name="title_fr" placeholder="<?php echo e(__('website/home.enter_title_fr')); ?>" type="text" value="<?php echo e(Request::old('title_fr') ? Request::old('title_fr') : $model->getTranslation('title','fr')); ?>" required autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> style="float: right" <?php endif; ?>>
                                    <textarea name="description_fr" required placeholder="<?php echo e(__('website/home.enter_description_fr')); ?>"><?php echo e(Request::old('description_fr') ? Request::old('description_fr') : $model->getTranslation('description','fr')); ?></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> style="float: right" <?php endif; ?>>
                                        <input name="location_fr" placeholder="<?php echo e(__('website/home.enter_location_fr')); ?>" type="text" value="<?php echo e(Request::old('location_fr') ? Request::old('location_fr') : $model->getTranslation('location','fr')); ?>" required  autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> style="float: right" <?php endif; ?>>
                                <input name="budget" placeholder="<?php echo e(__('website/home.enter_budget')); ?>" type="number" value="<?php echo e(Request::old('budget') ? Request::old('budget') : $model->budget); ?>" <?php $__errorArgs = ['budget'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> required <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> autocomplete="off">
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> style="float: right" <?php endif; ?>>
                                <input name="date"  type="date" value="<?php echo e(Request::old('date') ? Request::old('date') : $model->date); ?>" <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> required <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> autocomplete="off">
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> style="float: right" <?php endif; ?>>
                                <input name="time" placeholder="<?php echo e(__('website/home.enter_time')); ?>" type="time" value="<?php echo e(Request::old('time') ? Request::old('time') : $model->time); ?>" <?php $__errorArgs = ['time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> required <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> autocomplete="off">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> style="float: right" <?php endif; ?>>
                                <select name="category_id">
                                    <option data-display="<?php echo e(__('website/home.categories')); ?>"><?php echo e(__('website/home.please_select_section')); ?></option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> style="float: right" <?php endif; ?>>
                                <select name="country_id">
                                    <option data-display="<?php echo e(__('website/home.countries')); ?>"><?php echo e(__('website/home.please_select_country')); ?></option>
                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($country->id); ?>"><?php echo e($country->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> style="float: right" <?php endif; ?>>
                                <select name="governorate_id">
                                    <option data-display="<?php echo e(__('website/home.governorates')); ?>"><?php echo e(__('website/home.please_select_governorate')); ?></option>
                                    <?php $__currentLoopData = $governorates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $governorate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($governorate->id); ?>"><?php echo e($governorate->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> style="float: right" <?php endif; ?>>
                                <select name="city_id">
                                    <option data-display="<?php echo e(__('website/home.cities')); ?>"><?php echo e(__('website/home.please_select_city')); ?></option>
                                    <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($city->id); ?>"><?php echo e($city->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-1 col-sm-12 col-xs-12" <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> style="float: right" <?php endif; ?>>
                                <input type="file" name="images">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-1 col-sm-12 col-xs-12">
                            <button type="submit" class="btn btn--green-light"><?php echo e(__('website/home.submit')); ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- ... end Typography -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\events\resources\views/website/events/create.blade.php ENDPATH**/ ?>