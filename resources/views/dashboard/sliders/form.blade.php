<div class="tab-pane fade mt-4 @if(LaravelLocalization::getCurrentLocale() == 'ar') show active @endif" id="ar" role="tabpanel" aria-labelledby="ar-tab">
    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/home.title')}} <span class="text-danger">*</span> </label>
        <div class="col-lg-9">
            <input class="form-control @error('title_ar') is-invalid @enderror" value="{{Request::old('title_ar') ? Request::old('title_ar') : $model->getTranslation('title','ar')}}" type="text" name="title_ar" placeholder="{{__('admin/home.enter_title_ar')}}" autocomplete="off">
            @error('title_ar')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/home.content')}} <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <textarea class="form-control @error('content_ar') is-invalid @enderror" type="text" name="content_ar">{{Request::old('content_ar') ? Request::old('content_ar') : $model->getTranslation('content','ar')}}</textarea>
            @error('content_ar')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/slider.name_button')}} <span class="text-danger">*</span> </label>
        <div class="col-lg-9">
            <input class="form-control @error('name_button_ar') is-invalid @enderror" value="{{Request::old('name_button_ar') ? Request::old('name_button_ar') : $model->getTranslation('name_button','ar')}}" type="text" name="name_button_ar" placeholder="{{__('admin/slider.enter_name_button_ar')}}" autocomplete="off">
            @error('name_button_ar')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>

<div class="tab-pane fade mt-4 @if(LaravelLocalization::getCurrentLocale() == 'en') show active @endif" id="en" role="tabpanel" aria-labelledby="en-tab">
    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/home.title')}} <span class="text-danger">*</span> </label>
        <div class="col-lg-9">
            <input class="form-control @error('title_en') is-invalid @enderror" value="{{Request::old('title_en') ? Request::old('title_en') : $model->getTranslation('title','en')}}" type="text" name="title_en" placeholder="{{__('admin/home.enter_title_en')}}" autocomplete="off">
            @error('title_en')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/home.content')}} <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <textarea class="form-control @error('content_en') is-invalid @enderror" type="text" name="content_en">{{Request::old('content_en') ? Request::old('content_en') : $model->getTranslation('content','ar')}}</textarea>
            @error('content_en')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/slider.name_button')}} <span class="text-danger">*</span> </label>
        <div class="col-lg-9">
            <input class="form-control @error('name_button_en') is-invalid @enderror" value="{{Request::old('name_button_en') ? Request::old('name_button_en') : $model->getTranslation('name_button','en')}}" type="text" name="name_button_en" placeholder="{{__('admin/slider.enter_name_button_en')}}" autocomplete="off">
            @error('name_button_en')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>

<div class="tab-pane fade mt-4 @if(LaravelLocalization::getCurrentLocale() == 'fr') show active @endif" id="fr" role="tabpanel" aria-labelledby="fr-tab">
    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/home.title')}} <span class="text-danger">*</span> </label>
        <div class="col-lg-9">
            <input class="form-control @error('title_fr') is-invalid @enderror" value="{{Request::old('title_fr') ? Request::old('title_fr') : $model->getTranslation('title','fr')}}" type="text" name="title_fr" placeholder="{{__('admin/home.enter_title_fr')}}" autocomplete="off">
            @error('title_fr')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/home.content')}} <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <textarea class="form-control @error('content_fr') is-invalid @enderror" type="text" name="content_fr">{{Request::old('content_fr') ? Request::old('content_fr') : $model->getTranslation('content','ar')}}</textarea>
            @error('content_fr')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/slider.name_button')}} <span class="text-danger">*</span> </label>
        <div class="col-lg-9">
            <input class="form-control @error('name_button_fr') is-invalid @enderror" value="{{Request::old('name_button_fr') ? Request::old('name_button_fr') : $model->getTranslation('name_button','fr')}}" type="text" name="name_button_fr" placeholder="{{__('admin/slider.enter_name_button_fr')}}" autocomplete="off">
            @error('name_button_fr')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>

<div class="form-group row">
    <label class="form-label col-lg-3">{{__('admin/slider.link_button')}} <span class="text-danger">*</span> </label>
    <div class="col-lg-9">
        <input class="form-control @error('link_button') is-invalid @enderror" value="{{Request::old('link_button') ? Request::old('link_button') : $model->link_button}}" type="text" name="link_button" placeholder="{{__('admin/slider.enter_link_button')}}" autocomplete="off">
        @error('link_button')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="form-label col-lg-3">{{__('admin/slider.color')}} <span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <select name="color" class="form-control select @error('color') is-invalid @enderror">
            <option>{{__('admin/home.select')}}</option>
            <option value="btn--yellow" {{ isset($model) && $model->color == 'btn--yellow' ? 'selected'  : '' }}>{{__('admin/slider.yellow')}}</option>
            <option value="btn--black" {{ isset($model) && $model->color == 'btn--black' ? 'selected'  : '' }}>{{__('admin/slider.black')}}</option>
            <option value="btn--blue" {{ isset($model) && $model->color == 'btn--blue' ? 'selected'  : '' }}>{{__('admin/slider.blue')}}</option>
            <option value="btn--red" {{ isset($model) && $model->color == 'btn--red' ? 'selected'  : '' }}>{{__('admin/slider.red')}}</option>
            <option value="btn--green" {{ isset($model) && $model->color == 'btn--green' ? 'selected'  : '' }}>{{__('admin/slider.green')}}</option>
            <option value="btn--grey" {{ isset($model) && $model->color == 'btn--grey' ? 'selected'  : '' }}>{{__('admin/slider.grey')}}</option>
        </select>
        @error('color')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
