<div class="tab-pane fade mt-4 @if(LaravelLocalization::getCurrentLocale() == 'ar') show active @endif" id="ar" role="tabpanel" aria-labelledby="ar-tab">
    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/category.category')}} <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <input class="form-control @error('name_ar') is-invalid @enderror" value="{{Request::old('name_ar') ? Request::old('name_ar') : $model->getTranslation('name','ar')}}" type="text" name="name_ar" placeholder="{{__('admin/home.enter_name_ar')}}" autocomplete="off">
            @error('name_ar')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/category.content')}} <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <textarea class="form-control @error('content_ar') is-invalid @enderror" type="text" name="content_ar">{{Request::old('content_ar') ? Request::old('content_ar') : $model->getTranslation('content','ar')}}</textarea>
            @error('content_ar')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>

<div class="tab-pane fade mt-4 @if(LaravelLocalization::getCurrentLocale() == 'en') show active @endif" id="en" role="tabpanel" aria-labelledby="en-tab">
    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/category.category')}} <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <input class="form-control @error('name_en') is-invalid @enderror" value="{{Request::old('name_en') ? Request::old('name_en') : $model->getTranslation('name','en')}}" type="text" name="name_en" placeholder="{{__('admin/home.enter_name_en')}}" autocomplete="off">
            @error('name_en')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/category.content')}} <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <textarea class="form-control @error('content_en') is-invalid @enderror" type="text" name="content_en">{{Request::old('content_en') ? Request::old('content_en') : $model->getTranslation('content','en')}}</textarea>
            @error('content_en')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>

<div class="tab-pane fade mt-4 @if(LaravelLocalization::getCurrentLocale() == 'fr') show active @endif" id="fr" role="tabpanel" aria-labelledby="fr-tab">
    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/category.category')}} <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <input class="form-control @error('name_fr') is-invalid @enderror" value="{{Request::old('name_fr') ? Request::old('name_fr') : $model->getTranslation('name','fr')}}" type="text" name="name_fr" placeholder="{{__('admin/home.enter_name_fr')}}" autocomplete="off">
            @error('name_fr')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/category.content')}} <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <textarea class="form-control @error('content_fr') is-invalid @enderror" type="text" name="content_fr">{{Request::old('content_fr') ? Request::old('content_fr') : $model->getTranslation('content','fr')}}</textarea>
            @error('content_fr')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>

<div class="form-group row">
    <label class="form-label col-lg-3">Icon's Text & Background Color<span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <select class="form-control @error('color') is-invalid @enderror" type="text" name="color">{{Request::old('color') ? Request::old('color') : $model->color}}
            <option>{{__('admin/home.select')}}</option>
            <option {{ isset($model) && $model->color == 'red' ? 'selected' : '' }} value="red">Red</option>
            <option {{ isset($model) && $model->color == 'blue' ? 'selected' : '' }} value="blue">Blue</option>
            <option {{ isset($model) && $model->color == 'cyan' ? 'selected' : '' }} value="cyan">Cyan</option>
            <option {{ isset($model) && $model->color == 'rgb(241, 148, 47)' ? 'selected' : '' }} value="rgb(241, 148, 47)">Orange</option>
            <option {{ isset($model) && $model->color == 'rgb(126, 57, 57)' ? 'selected' : '' }} value="rgb(126, 57, 57)">Brown</option>
            <option {{ isset($model) && $model->color == 'grey' ? 'selected' : '' }} value="grey">Grey</option>
            <option {{ isset($model) && $model->color == 'rgb(217, 128, 128)' ? 'selected' : '' }} value="rgb(217, 128, 128)">Light Red</option>
            <option {{ isset($model) && $model->color == 'beige' ? 'selected' : '' }} value="beige">Beige</option>
            <option {{ isset($model) && $model->color == 'rgb(145, 57, 124)' ? 'selected' : '' }} value="rgb(145, 57, 124)">Light Purple</option>
            <option {{ isset($model) && $model->color == 'rgb(50, 177, 164)' ? 'selected' : '' }} value="rgb(50, 177, 164)">Greenish Blue</option>
            <option {{ isset($model) && $model->color == 'rgb(207, 84, 137)' ? 'selected' : '' }} value="rgb(207, 84, 137)">Light Pinkish Red</option>
        </select>
        @error('color')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="form-label col-lg-3">Icon<span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <select class="form-control @error('icon') is-invalid @enderror" type="text" name="icon" value="{{Request::old('icon') ? Request::old('icon') : $model->icon}}">
            <option>{{__('admin/home.select')}}</option>
            <option value="svg/conference.svg">Conferences</option>
            <option value="svg/catering.svg">Catering</option>
            <option value="svg/birthday-parties.svg">Birthday Parties</option>
            <option value="svg/engagement-ring.svg">Engagement Ring</option>
            <option value="svg/barber-hairdresser.svg">Barber/Hairdresser</option>
            <option value="svg/grooms-and-brides-attires.svg">Grooms & Brides Attires</option>
            <option value="svg/graduation-parties.svg">Graduation Parties</option>
            <option value="svg/decorations.svg">Decorations</option>
            <option value="svg/flowers.svg">Florists</option>
        </select> <!-- the directory link of the image icon -->
        @error('icon')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="form-label col-lg-3">{{__('admin/home.status')}} <span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <select name="status" class="form-control select @error('status') is-invalid @enderror">
            <option>{{__('admin/home.select')}}</option>
            <option value="1" {{ isset($model) && $model->status == 1 ? 'selected'  : '' }}>{{__('admin/home.available_title')}}</option>
            <option value="0" {{ isset($model) && $model->status == 0 ? 'selected'  : '' }}>{{__('admin/home.unavailable_title')}}</option>
        </select>
        @error('status')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
