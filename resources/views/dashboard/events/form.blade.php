<div class="tab-pane fade mt-4 @if(LaravelLocalization::getCurrentLocale() == 'ar') show active @endif" id="ar" role="tabpanel" aria-labelledby="ar-tab">
    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/event.event')}} <span class="text-danger">*</span> </label>
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
        <label class="form-label col-lg-3">{{__('admin/home.description')}} <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <textarea class="form-control @error('description_ar') is-invalid @enderror" type="text" name="description_ar">{{Request::old('description_ar') ? Request::old('description_ar') : $model->getTranslation('description','ar')}}</textarea>
            @error('description_ar')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/event.location')}} <span class="text-danger">*</span> </label>
        <div class="col-lg-9">
            <input class="form-control @error('location_ar') is-invalid @enderror" value="{{Request::old('location_ar') ? Request::old('location_ar') : $model->getTranslation('location','ar')}}" type="text" name="location_ar" placeholder="{{__('admin/home.enter_location_ar')}}" autocomplete="off">
            @error('location_ar')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>

<div class="tab-pane fade mt-4 @if(LaravelLocalization::getCurrentLocale() == 'en') show active @endif" id="en" role="tabpanel" aria-labelledby="en-tab">
    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/event.event')}} <span class="text-danger">*</span> </label>
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
        <label class="form-label col-lg-3">{{__('admin/home.description')}} <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <textarea class="form-control @error('description_en') is-invalid @enderror" type="text" name="description_en">{{Request::old('description_en') ? Request::old('description_en') : $model->getTranslation('description','ar')}}</textarea>
            @error('description_en')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/event.location')}} <span class="text-danger">*</span> </label>
        <div class="col-lg-9">
            <input class="form-control @error('location_en') is-invalid @enderror" value="{{Request::old('location_en') ? Request::old('location_en') : $model->getTranslation('location','en')}}" type="text" name="location_en" placeholder="{{__('admin/home.enter_location_en')}}" autocomplete="off">
            @error('location_en')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>

<div class="tab-pane fade mt-4 @if(LaravelLocalization::getCurrentLocale() == 'fr') show active @endif" id="fr" role="tabpanel" aria-labelledby="fr-tab">
    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/event.event')}} <span class="text-danger">*</span> </label>
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
        <label class="form-label col-lg-3">{{__('admin/home.description')}} <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <textarea class="form-control @error('description_fr') is-invalid @enderror" type="text" name="description_fr">{{Request::old('description_fr') ? Request::old('description_fr') : $model->getTranslation('description','ar')}}</textarea>
            @error('description_fr')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label class="form-label col-lg-3">{{__('admin/event.location')}} <span class="text-danger">*</span> </label>
        <div class="col-lg-9">
            <input class="form-control @error('location_fr') is-invalid @enderror" value="{{Request::old('location_fr') ? Request::old('location_fr') : $model->getTranslation('location','fr')}}" type="text" name="location_fr" placeholder="{{__('admin/home.enter_location_fr')}}" autocomplete="off">
            @error('location_fr')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>

<div class="form-group row">
    <label class="form-label col-lg-3">{{__('admin/event.time')}} <span class="text-danger">*</span> </label>
    <div class="col-lg-9">
        <input class="form-control @error('time') is-invalid @enderror" value="{{Request::old('time') ? Request::old('time') : $model->time}}" type="time" name="time" autocomplete="off">
        @error('time')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="form-label col-lg-3">{{__('admin/event.date')}} <span class="text-danger">*</span> </label>
    <div class="col-lg-9">
        <input class="form-control @error('date') is-invalid @enderror" value="{{Request::old('date') ? Request::old('date') : $model->date}}" type="date" name="date" autocomplete="off">
        @error('date')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="form-label col-lg-3">{{__('admin/event.budget')}} <span class="text-danger">*</span> </label>
    <div class="col-lg-9">
        <input class="form-control @error('budget') is-invalid @enderror" value="{{Request::old('budget') ? Request::old('budget') : $model->budget}}" type="number" name="budget" placeholder="{{__('admin/event.enter_budget')}}" autocomplete="off">
        @error('budget')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
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
    <label class="form-label col-lg-3">{{__('admin/home.customer_user')}} <span class="text-danger">*</span></label>
    <div class="col-lg-9">
        @inject('user','App\Models\User')

        {!! Form::select('user_id',$user->type('customer')->pluck('name','id'),Request::old('user_id') ? Request::old('user_id') : $model->user_id,[
            'placeholder' => __('admin/home.select'),
            'class'       => 'form-control select'. ( $errors->has('user_id') ? ' is-invalid' : '' )
        ]) !!}
        @error('user_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="form-label col-lg-3">{{__('admin/country.country')}} <span class="text-danger">*</span></label>
    <div class="col-lg-9">
        @inject('countries','App\Models\Country')
        {!! Form::select('country_id',$countries->pluck('name','id'),Request::old('country_id') ? Request::old('country_id') : $model->country_id,[
            'placeholder' => __('admin/home.select'),
            'class'       => 'form-control select'. ( $errors->has('country_id') ? ' is-invalid' : '' )
        ]) !!}
        @error('country_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="form-label col-lg-3">{{__('admin/governorate.Governorate')}} <span class="text-danger">*</span></label>
    <div class="col-lg-9">
        @inject('governorate','App\Models\Governorate')
        {!! Form::select('governorate_id',$governorate->pluck('name','id'),Request::old('governorate_id') ? Request::old('governorate_id') : $model->governorate_id,[
            'placeholder' => __('admin/home.select'),
            'class'       => 'form-control select'. ( $errors->has('governorate_id') ? ' is-invalid' : '' )
        ]) !!}
        @error('governorate_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="form-label col-lg-3">{{__('admin/city.city')}} <span class="text-danger">*</span></label>
    <div class="col-lg-9">
        @inject('cities','App\Models\City')
        {!! Form::select('city_id',$cities->pluck('name','id'),Request::old('city_id') ? Request::old('city_id') : $model->city_id,[
            'placeholder' => __('admin/home.select'),
            'class'       => 'form-control select'.( $errors->has('city_id') ? ' is-invalid' : '' )
        ]) !!}
        @error('city_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="form-label col-lg-3">{{__('admin/tag.tags')}} <span class="text-danger">*</span></label>
    <div class="col-lg-9">
        @inject('tag','App\Models\Tag')
        {!! Form::select('tag_id[]',$tag->pluck('name','id'),$model->tags->pluck('id')->all(),[
            'placeholder' => __('admin/home.select'),
            'class'       => 'form-control select',
            'multiple'
        ]) !!}
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
            <option value="Expired" {{ isset($model) && $model->status == 'Expired' ? 'selected'  : '' }}>{{__('admin/home.expired_paid')}}</option>
            <option value="Available" {{ isset($model) && $model->status == 'Available' ? 'selected'  : '' }}>{{__('admin/home.available_active')}}</option>
            <option value="Stopped" {{ isset($model) && $model->status == 'Stopped' ? 'selected'  : '' }}>{{__('admin/home.stopped_pending')}}</option>
        </select>
        @error('status')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
