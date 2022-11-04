@extends('layouts.admin.master')

@section('title') {{__('admin/slider.all_sliders')}} @endsection

@section('content')
@component('components.breadcrumb')
@slot('breadcrumb_title')
<h3>{{__('admin/slider.sliders')}}</h3>
@endslot
<li class="breadcrumb-item active">{{__('admin/slider.sliders')}}</li>

@slot('bookmark')
<a href="{{route('sliders.create')}}" class="btn btn-pill btn-air-success btn-success-gradien" type="button" title="{{__('admin/slider.addSlider')}}">{{__('admin/slider.addSlider')}}</a>
@endslot
@endcomponent
@include('layouts.admin.partials.messages.message')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>{{__('admin/slider.ShowSlider')}} - <span class="b-b-success">{{App\Models\Slider::count()}}</span></h5>
                    <span>{{__('admin/slider.DescriptionSlider')}}</span>
                </div>
                <div class="card-block row">
                    <div class="col-sm-12 col-lg-12 col-xl-12">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">#</th>
                                        <th scope="col" class="text-center">{{__('admin/slider.titleSlider')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/slider.content_sliders')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/slider.name_button_sliders')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/slider.link_button_sliders')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/slider.color')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.create_user')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.update_user')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.create_history')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.action')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($sliders as $slider)
                                    <tr>

                                        <th scope="row" class="text-center">{{$loop->iteration}}</th>
                                        <td class="text-center">{{$slider->title}}</td>
                                        <td class="text-center">{{Str::limit($slider->content,'75','......')}}</td>
                                        <td class="text-center">{{$slider->name_button}}</td>
                                        <td class="text-center">{{$slider->link_button}}</td> 
                                        <td class="text-center">{{$slider->color}}</td>
                                        <td class="text-center">{{$slider->create_user->name ?? ''}}</td>
                                        <td class="text-center">{{$slider->update_user->name ?? ''}}</td>
                                        <td class="text-center">{{$slider->created_at->format('Y-D-M')}}</td>
                                        <td class="text-center">
                                            {!! Form::open([
                                            'route' => ['sliders.destroy',$slider->id],
                                            'method' => 'delete'
                                            ])!!}

                                            <button class="btn btn-danger btn-xs" onclick="return confirm('{{__('admin/home.confirm')}}');" type="submit" title="{{__('admin/home.delete')." ($slider->title)"}}">{{__('admin/home.delete')}} </button>

                                            <a href="{{route('sliders.edit',$slider->id)}}" class="btn btn-primary btn-xs" type="button" title="{{__('admin/home.edit')." ($slider->title)"}}">
                                                <li class="icon-pencil"></li> {{__('admin/home.edit')}}
                                            </a>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>

                                    @empty
                                    <div class="alert alert-secondary">
                                        {{__('admin/home.alert_no_data')}}
                                    </div>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="m-b-30" aria-label="Page navigation example">
                <ul class="pagination justify-content-center pagination-primary">
                    {!! $sliders->links('pagination::bootstrap-4') !!}
                </ul>
            </nav>
        </div>
    </div>
</div>


@push('scripts')
<script src="{{asset('admin/js/bootstrap/popper.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap/bootstrap.min.js')}}"></script>
@endpush

@endsection