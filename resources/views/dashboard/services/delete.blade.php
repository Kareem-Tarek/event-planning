@extends('layouts.admin.master')

@section('title') {{__('admin/service.deleted_services')}} @endsection

@section('content')
@component('components.breadcrumb')
@slot('breadcrumb_title')
<h3>{{__('admin/service.deleted_services')}}</h3>
@endslot
<li class="breadcrumb-item"><a href="{{route('services.index')}}">{{__('admin/service.services')}}</a> </li>
<li class="breadcrumb-item active">{{__('admin/service.deleted_services')}}</li>
@slot('bookmark')
<a href="{{route('services.create')}}" class="btn btn-pill btn-air-success btn-success-gradien" type="button" title="{{__('admin/service.addService')}}">{{__('admin/service.addService')}}</a>
@endslot
@endcomponent
@include('layouts.admin.partials.messages.message')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>{{__('admin/service.Show_deleted_services')}} - <span class="b-b-success">{{App\Models\service::onlyTrashed()->count()}}</span></h5>
                    <span>{{__('admin/service.DescriptionService_delete')}}</span>
                </div>
                <div class="card-block row">
                    <div class="col-sm-12 col-lg-12 col-xl-12">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">#</th>
                                        <th scope="col" class="text-center">{{__('admin/service.NameServices')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/service.description')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/category.NameCategory')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/service.price')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/service.address')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/service.available_date')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.create_user')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.create_history')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.create_delete')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.action')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($services as $service)
                                    <tr>
                                        <th scope="row" class="text-center">{{$loop->iteration}}</th>
                                        <td class="text-center">{{$service->name}}</td>
                                        <td class="text-center">{{$service->description}}</td>
                                        <td class="text-center">{{$service->category->name}}</td>
                                        <td class="text-center">{{$service->price}}</td>
                                        <td class="text-center">{{$service->address}}</td>
                                        <td class="text-center">{{$service->available_date}}</td>
                                        <td class="text-center">{{$service->create_user->name ?? ''}}</td>
                                        <td class="text-center" title="{{$service->created_at->format('Y-D-M h:m')}}">{{$service->created_at->format('Y-D-M')}}</td>
                                        <td class="text-center" title="{{$service->deleted_at->format('Y-D-M h:m')}}">{{$service->deleted_at->format('Y-D-M')}}</td>
                                        <td class="text-center">
                                            {!! Form::open([
                                            'route' => ['services.forceDelete',$service->id],
                                            'method' => 'delete'
                                            ])!!}
                                            <button class="btn btn-danger btn-xs" onclick="return confirm('{{__('admin/home.confirmDelete')}}');" type="submit" title="{{__('admin/home.delete_forever')." ($service->name)"}}">{{__('admin/home.delete_forever')}} </button>
                                            <a href="{{route('services.restore',$service->id)}}" onclick="return confirm('{{__('admin/home.confirmRestore')}}');" class="btn btn-primary btn-xs" type="button" title="{{__('admin/home.restore')." ($service->name)"}}">{{__('admin/home.restore')}}</a>
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
                    {!! $services->links('pagination::bootstrap-4') !!}
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