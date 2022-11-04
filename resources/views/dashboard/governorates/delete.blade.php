@extends('layouts.admin.master')

@section('title') {{__('admin/governorate.deleted_governorates')}} @endsection

@section('content')
    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>{{__('admin/governorate.deleted_governorates')}}</h3>
        @endslot
        <li class="breadcrumb-item"><a href="{{route('governorates.index')}}">{{__('admin/governorate.Governorates')}}</a> </li>
        <li class="breadcrumb-item active">{{__('admin/governorate.deleted_governorates')}}</li>
        @slot('bookmark')
            <a href="{{route('governorates.create')}}" class="btn btn-pill btn-air-success btn-success-gradien" type="button" title="{{__('admin/governorate.addGovernorate')}}">{{__('admin/governorate.addGovernorate')}}</a>
        @endslot
    @endcomponent
    @include('layouts.admin.partials.messages.message')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>{{__('admin/governorate.Show_deleted_governorates')}} - <span class="b-b-success">{{App\Models\Governorate::onlyTrashed()->count()}}</span></h5>
                        <span>{{__('admin/governorate.DescriptionGovernorate_delete')}}</span>
                    </div>
                    <div class="card-block row">
                        <div class="col-sm-12 col-lg-12 col-xl-12">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col" class="text-center">#</th>
                                        <th scope="col" class="text-center">{{__('admin/governorate.NameGovernorate')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/country.NameCountry')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.create_user')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.create_history')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.create_delete')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.action')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($governorates as $governorate)
                                    <tr>
                                        <th scope="row" class="text-center">{{$loop->iteration}}</th>
                                        <td class="text-center">{{$governorate->name}}</td>
                                        <td class="text-center">{{$governorate->country->name ?? ''}}</td>
                                        <td class="text-center">{{$governorate->create_user->name ?? ''}}</td>
                                        <td class="text-center" title="{{$governorate->created_at->format('Y-D-M h:m')}}">{{$governorate->created_at->format('Y-D-M')}}</td>
                                        <td class="text-center" title="{{$governorate->deleted_at->format('Y-D-M h:m')}}">{{$governorate->deleted_at->format('Y-D-M')}}</td>
                                        <td class="text-center">
                                            {!! Form::open([
                                                'route' => ['governorates.forceDelete',$governorate->id],
                                                'method' => 'delete'
                                            ])!!}
                                            <button class="btn btn-danger btn-xs" onclick="return confirm('{{__('admin/home.confirmDelete')}}');" type="submit" title="{{__('admin/home.delete_forever')." ($governorate->name)"}}">{{__('admin/home.delete_forever')}} </button>
                                            <a href="{{route('governorates.restore',$governorate->id)}}" onclick="return confirm('{{__('admin/home.confirmRestore')}}');" class="btn btn-primary btn-xs" type="button" title="{{__('admin/home.restore')." ($governorate->name)"}}">{{__('admin/home.restore')}}</a>
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
                        {!! $governorates->links('pagination::bootstrap-4') !!}
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
