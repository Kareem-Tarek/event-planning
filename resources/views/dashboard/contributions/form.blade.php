<div class="tab-pane fade mt-4 @if(LaravelLocalization::getCurrentLocale() == 'ar') show active @endif" id="ar" role="tabpanel" aria-labelledby="ar-tab">
    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/contribution.title')}} <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <input class="form-control @error('title_ar') is-invalid @enderror" value="{{Request::old('title_ar') ? Request::old('title_ar') : $model->getTranslation('title','ar')}}" type="text" name="title_ar" placeholder="{{__('admin/home.enter_name_ar')}}" autocomplete="off">
            @error('title_ar')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/contribution.content')}} <span class="text-danger">*</span></label>
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
        <label class="form-label col-lg-3">{{__('admin/contribution.title')}} <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <input class="form-control @error('title_en') is-invalid @enderror" value="{{Request::old('title_en') ? Request::old('title_en') : $model->getTranslation('title','en')}}" type="text" name="title_en" placeholder="{{__('admin/home.enter_name_en')}}" autocomplete="off">
            @error('title_en')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/contribution.content')}} <span class="text-danger">*</span></label>
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
        <label class="form-label col-lg-3">{{__('admin/contribution.title')}} <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <input class="form-control @error('title_fr') is-invalid @enderror" value="{{Request::old('title_fr') ? Request::old('title_fr') : $model->getTranslation('title','fr')}}" type="text" name="title_fr" placeholder="{{__('admin/home.enter_name_fr')}}" autocomplete="off">
            @error('title_fr')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/contribution.content')}} <span class="text-danger">*</span></label>
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
    <label class="form-label col-lg-3">{{__('admin/category.category')}} <span class="text-danger">*</span></label>
    <div class="col-lg-9">
        @inject('category','App\Models\Category')
        {!! Form::select('category_id',$category->pluck('name','id'),Request::old('category_id') ? Request::old('category_id') : $model->category_id,[
            'placeholder' => __('admin/home.select'),
            'class'       => 'form-control select'. ( $errors->has('category_id') ? ' is-invalid' : '' )
        ]) !!}
        @error('category_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="form-label col-lg-3">{{__('admin/home.image')}}</label>
    <div class="col-lg-9">
        <input class="form-control @error('images') is-invalid @enderror" type="file" name="images"/>
        @error('images')
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
