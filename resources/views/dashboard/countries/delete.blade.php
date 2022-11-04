@extends('layouts.admin.master')

@section('title') {{__('admin/country.deleted_countries')}} @endsection

@section('content')
@component('components.breadcrumb')
@slot('breadcrumb_title')
<h3>{{__('admin/country.deleted_countries')}}</h3>
@endslot
<li class="breadcrumb-item"><a href="{{route('countries.index')}}">{{__('admin/country.countries')}}</a> </li>
<li class="breadcrumb-item active">{{__('admin/country.deleted_countries')}}</li>
@slot('bookmark')
<a href="{{route('countries.create')}}" class="btn btn-pill btn-air-success btn-success-gradien" type="button" title="{{__('admin/country.addCountry')}}">{{__('admin/country.addCountry')}}</a>
@endslot
@endcomponent
@include('layouts.admin.partials.messages.message')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>{{__('admin/country.Show_deleted_countries')}} - <span class="b-b-success">{{App\Models\Country::onlyTrashed()->count()}}</span></h5>
                    <span>{{__('admin/country.DescriptionCountry_delete')}}</span>
                </div>
                <div class="card-block row">
                    <div class="col-sm-12 col-lg-12 col-xl-12">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">#</th>
                                        <th scope="col" class="text-center">{{__('admin/country.NameCountry')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.create_user')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.create_history')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.create_delete')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.action')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($countries as $country)
                                    <tr>
                                        <th scope="row" class="text-center">{{$loop->iteration}}</th>
                                        <td class="text-center">{{$country->name}}</td>
                                         <td class="text-center">{{$country->create_user->name ?? ''}}</td>
                                        <td class="text-center" title="{{$country->created_at->format('Y-D-M h:m')}}">{{$country->created_at->format('Y-D-M')}}</td>
                                        <td class="text-center" title="{{$country->deleted_at->format('Y-D-M h:m')}}">{{$country->deleted_at->format('Y-D-M')}}</td>
                                        <td class="text-center">
                                            {!! Form::open([
                                            'route' => ['countries.forceDelete',$country->id],
                                            'method' => 'delete'
                                            ])!!}
                                            <button class="btn btn-danger btn-xs" onclick="return confirm('{{__('admin/home.confirmDelete')}}');" type="submit" title="{{__('admin/home.delete_forever')." ($country->name)"}}">{{__('admin/home.delete_forever')}} </button>
                                            <a href="{{route('countries.restore',$country->id)}}" onclick="return confirm('{{__('admin/home.confirmRestore')}}');" class="btn btn-primary btn-xs" type="button" title="{{__('admin/home.restore')." ($country->name)"}}">{{__('admin/home.restore')}}</a>
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
                    {!! $countries->links('pagination::bootstrap-4') !!}
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
