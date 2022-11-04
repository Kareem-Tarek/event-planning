@extends('layouts.admin.master')

@section('title') {{__('admin/contribution.deleted_contributions')}} @endsection

@section('content')
    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>{{__('admin/contribution.deleted_contributions')}}</h3>
        @endslot
        <li class="breadcrumb-item"><a href="{{route('contributions.index')}}">{{__('admin/contribution.contributions')}}</a> </li>
        <li class="breadcrumb-item active">{{__('admin/contribution.deleted_contributions')}}</li>
        @slot('bookmark')
            <a href="{{route('contributions.create')}}" class="btn btn-pill btn-air-success btn-success-gradien" type="button" title="{{__('admin/contribution.addContribution')}}">{{__('admin/contribution.addContribution')}}</a>
        @endslot
    @endcomponent
    @include('layouts.admin.partials.messages.message')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>{{__('admin/contribution.Show_deleted_contributions')}} - <span class="b-b-success">{{App\Models\Contribution::onlyTrashed()->count()}}</span></h5>
                        <span>{{__('admin/contribution.DescriptionContribution_delete')}}</span>
                    </div>
                    <div class="card-block row">
                        <div class="col-sm-12 col-lg-12 col-xl-12">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col" class="text-center">#</th>
                                        <th scope="col" class="text-center">{{__('admin/contribution.title')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/contribution.content')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/category.NameCategory')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.create_user')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.create_history')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.create_delete')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.action')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($contributions as $contribution)
                                    <tr>
                                        <th scope="row" class="text-center">{{$loop->iteration}}</th>
                                        <td class="text-center">{{$contribution->title}}</td>
                                        <td class="text-center">{{Str::limit($contribution->content,'75','......')}}</td>
                                        <td class="text-center">{{$contribution->name}}</td>
                                        <td class="text-center">{{$contribution->create_user->name ?? ''}}</td>
                                        <td class="text-center" title="{{$contribution->created_at->format('Y-D-M h:m')}}">{{$contribution->created_at->format('Y-D-M')}}</td>
                                        <td class="text-center" title="{{$contribution->deleted_at->format('Y-D-M h:m')}}">{{$contribution->deleted_at->format('Y-D-M')}}</td>
                                        <td class="text-center">
                                            {!! Form::open([
                                                'route' => ['contributions.forceDelete',$contribution->id],
                                                'method' => 'delete'
                                            ])!!}
                                            <button class="btn btn-danger btn-xs" onclick="return confirm('{{__('admin/home.confirmDelete')}}');" type="submit" title="{{__('admin/home.delete_forever')." ($contribution->name)"}}">{{__('admin/home.delete_forever')}} </button>
                                            <a href="{{route('contributions.restore',$contribution->id)}}" onclick="return confirm('{{__('admin/home.confirmRestore')}}');" class="btn btn-primary btn-xs" type="button" title="{{__('admin/home.restore')." ($contribution->name)"}}">{{__('admin/home.restore')}}</a>
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
                        {!! $contributions->links('pagination::bootstrap-4') !!}
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
