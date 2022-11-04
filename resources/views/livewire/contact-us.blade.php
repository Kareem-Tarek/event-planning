<div class="send-message-popup">
    <h5>{{__('website/home.send_message')}}</h5>
    <p>{{__('website/home.description_contact')}}</p>
    @include('layouts.website.partials.messages.message')
    <form class="contact-form crumina-submit"  data-nonce="crumina-submit-form-nonce" data-type="standard" wire:submit.prevent="submit">
        <div class="with-icon">
            <input wire:model="name" placeholder="{{__('website/home.your_name')}}" type="text" @error('name') required data-parsley-id="29" class="parsley-error" aria-describedby="parsley-id-29" @enderror>
            @error('name')
            <ul class="parsley-errors-list filled" id="parsley-id-29"><li class="parsley-required">{{$message}}</li></ul>
            @enderror
            <svg class="utouch-icon utouch-icon-user"><use xlink:href="#utouch-icon-user"></use></svg>
        </div>

        <div class="with-icon">
            <input wire:model="email" placeholder="{{__('website/home.email_address')}}" type="text" @error('email') required data-parsley-id="31" class="parsley-error" aria-describedby="parsley-id-31" @enderror>
            @error('email')
            <ul class="parsley-errors-list filled" id="parsley-id-31"><li class="parsley-required">{{$message}}</li></ul>
            @enderror
            <svg class="utouch-icon utouch-icon-message-closed-envelope-1"><use xlink:href="#utouch-icon-message-closed-envelope-1"></use></svg>
        </div>

        <div class="with-icon">
            <input class="with-icon @error('phone') parsley-error @enderror" wire:model="phone" placeholder="{{__('website/home.phone_number')}}" type="tel" class="with-icon parsley-error" @error('phone') required data-parsley-id="33" class="parsley-error" aria-describedby="parsley-id-33" @enderror>
            @error('phone')
            <ul class="parsley-errors-list filled" id="parsley-id-33"><li class="parsley-required">{{$message}}</li></ul>
            @enderror
            <svg class="utouch-icon utouch-icon-telephone-keypad-with-ten-keys"><use xlink:href="#utouch-icon-telephone-keypad-with-ten-keys"></use></svg>
        </div>

        <div class="with-icon">
            <input class="with-icon @error('subject') parsley-error @enderror" wire:model="subject" placeholder="{{__('website/home.subject')}}" type="text" @error('subject') required data-parsley-id="35" class="parsley-error" aria-describedby="parsley-id-35" @enderror>
            @error('subject')
            <ul class="parsley-errors-list filled" id="parsley-id-35"><li class="parsley-required">{{$message}}</li></ul>
            @enderror
            <svg class="utouch-icon utouch-icon-icon-1"><use xlink:href="#utouch-icon-icon-1"></use></svg>
        </div>

        <div class="with-icon">
            <textarea wire:model="message" @error('message') required data-parsley-id="37" class="parsley-error" aria-describedby="parsley-id-37" @enderror placeholder="{{__('website/home.your_message')}}" rows="5"></textarea>
            @error('message')
            <ul class="parsley-errors-list filled" id="parsley-id-37"><li class="parsley-required">{{$message}}</li></ul>
            @enderror
            <svg class="utouch-icon utouch-icon-edit"><use xlink:href="#utouch-icon-edit"></use></svg>
        </div>

        <button type="submit" class="btn btn--green btn--with-shadow full-width">{{__('website/home.send')}}</button>
    </form>
</div>
