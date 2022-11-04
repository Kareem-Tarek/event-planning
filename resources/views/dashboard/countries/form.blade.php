<div class="tab-pane fade mt-4 @if(LaravelLocalization::getCurrentLocale() == 'ar') show active @endif" id="ar" role="tabpanel" aria-labelledby="ar-tab">
    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/country.country')}} <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <input class="form-control @error('name_ar') is-invalid @enderror" value="{{Request::old('name_ar') ? Request::old('name_ar') : $model->getTranslation('name','ar')}}" type="text" name="name_ar" placeholder="{{__('admin/home.enter_name_ar')}}" autocomplete="off">
            @error('name_ar')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>
<div class="tab-pane fade mt-4 @if(LaravelLocalization::getCurrentLocale() == 'en') show active @endif" id="en" role="tabpanel" aria-labelledby="en-tab">
    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/country.country')}} <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <input class="form-control @error('name_en') is-invalid @enderror" value="{{Request::old('name_en') ? Request::old('name_en') : $model->getTranslation('name','en')}}" type="text" name="name_en" placeholder="{{__('admin/home.enter_name_en')}}" autocomplete="off">
            @error('name_en')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>
<div class="tab-pane fade mt-4 @if(LaravelLocalization::getCurrentLocale() == 'fr') show active @endif" id="fr" role="tabpanel" aria-labelledby="fr-tab">
    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/country.country')}} <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <input class="form-control @error('name_fr') is-invalid @enderror" value="{{Request::old('name_fr') ? Request::old('name_fr') : $model->getTranslation('name','fr')}}" type="text" name="name_fr" placeholder="{{__('admin/home.enter_name_fr')}}" autocomplete="off">
            @error('name_fr')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>
