<div class="send-message-popup">
    <h5><?php echo e(__('website/home.send_message')); ?></h5>
    <p><?php echo e(__('website/home.description_contact')); ?></p>
    <?php echo $__env->make('layouts.website.partials.messages.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <form class="contact-form crumina-submit"  data-nonce="crumina-submit-form-nonce" data-type="standard" wire:submit.prevent="submit">
        <div class="with-icon">
            <input wire:model="name" placeholder="<?php echo e(__('website/home.your_name')); ?>" type="text" <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> required data-parsley-id="29" class="parsley-error" aria-describedby="parsley-id-29" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>>
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <ul class="parsley-errors-list filled" id="parsley-id-29"><li class="parsley-required"><?php echo e($message); ?></li></ul>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <svg class="utouch-icon utouch-icon-user"><use xlink:href="#utouch-icon-user"></use></svg>
        </div>

        <div class="with-icon">
            <input wire:model="email" placeholder="<?php echo e(__('website/home.email_address')); ?>" type="text" <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> required data-parsley-id="31" class="parsley-error" aria-describedby="parsley-id-31" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>>
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <ul class="parsley-errors-list filled" id="parsley-id-31"><li class="parsley-required"><?php echo e($message); ?></li></ul>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <svg class="utouch-icon utouch-icon-message-closed-envelope-1"><use xlink:href="#utouch-icon-message-closed-envelope-1"></use></svg>
        </div>

        <div class="with-icon">
            <input class="with-icon <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> parsley-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" wire:model="phone" placeholder="<?php echo e(__('website/home.phone_number')); ?>" type="tel" class="with-icon parsley-error" <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> required data-parsley-id="33" class="parsley-error" aria-describedby="parsley-id-33" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>>
            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <ul class="parsley-errors-list filled" id="parsley-id-33"><li class="parsley-required"><?php echo e($message); ?></li></ul>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <svg class="utouch-icon utouch-icon-telephone-keypad-with-ten-keys"><use xlink:href="#utouch-icon-telephone-keypad-with-ten-keys"></use></svg>
        </div>

        <div class="with-icon">
            <input class="with-icon <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> parsley-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" wire:model="subject" placeholder="<?php echo e(__('website/home.subject')); ?>" type="text" <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> required data-parsley-id="35" class="parsley-error" aria-describedby="parsley-id-35" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>>
            <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <ul class="parsley-errors-list filled" id="parsley-id-35"><li class="parsley-required"><?php echo e($message); ?></li></ul>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <svg class="utouch-icon utouch-icon-icon-1"><use xlink:href="#utouch-icon-icon-1"></use></svg>
        </div>

        <div class="with-icon">
            <textarea wire:model="message" <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> required data-parsley-id="37" class="parsley-error" aria-describedby="parsley-id-37" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> placeholder="<?php echo e(__('website/home.your_message')); ?>" rows="5"></textarea>
            <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <ul class="parsley-errors-list filled" id="parsley-id-37"><li class="parsley-required"><?php echo e($message); ?></li></ul>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <svg class="utouch-icon utouch-icon-edit"><use xlink:href="#utouch-icon-edit"></use></svg>
        </div>

        <button type="submit" class="btn btn--green btn--with-shadow full-width"><?php echo e(__('website/home.send')); ?></button>
    </form>
</div>
<?php /**PATH E:\laragon\www\events\resources\views/livewire/contact-us.blade.php ENDPATH**/ ?>