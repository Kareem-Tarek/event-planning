@extends('layouts.admin.master')

@section('title') {{__('admin/slider.deleted_sliders')}} @endsection

@section('content')
@component('components.breadcrumb')
@slot('breadcrumb_title')
<h3>{{__('admin/slider.deleted_sliders')}}</h3>
@endslot
<li class="breadcrumb-item"><a href="{{route('sliders.index')}}">{{__('admin/slider.sliders')}}</a> </li>
<li class="breadcrumb-item active">{{__('admin/slider.deleted_sliders')}}</li>
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
                    <h5>{{__('admin/slider.Show_deleted_sliders')}} - <span class="b-b-success">{{App\Models\Slider::onlyTrashed()->count()}}</span></h5>
                    <span>{{__('admin/slider.DescriptionSlider_delete')}}</span>
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
                                        <th scope="col" class="text-center">{{__('admin/home.create_user')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.create_history')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.create_delete')}}</th>
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
                                        <td class="text-center">{{$slider->create_user->name ?? ''}}</td>
                                        <td class="text-center" title="{{$slider->created_at->format('Y-D-M h:m')}}">{{$slider->created_at->format('Y-D-M')}}</td>
                                        <td class="text-center" title="{{$slider->deleted_at->format('Y-D-M h:m')}}">{{$slider->deleted_at->format('Y-D-M')}}</td>
                                        <td class="text-center">
                                            {!! Form::open([
                                            'route' => ['sliders.forceDelete',$slider->id],
                                            'method' => 'delete'
                                            ])!!}
                                            <button class="btn btn-danger btn-xs" onclick="return confirm('{{__('admin/home.confirmDelete')}}');" type="submit" title="{{__('admin/home.delete_forever')." ($slider->name)"}}">{{__('admin/home.delete_forever')}} </button>
                                            <a href="{{route('sliders.restore',$slider->id)}}" onclick="return confirm('{{__('admin/home.confirmRestore')}}');" class="btn btn-primary btn-xs" type="button" title="{{__('admin/home.restore')." ($slider->name)"}}">{{__('admin/home.restore')}}</a>
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