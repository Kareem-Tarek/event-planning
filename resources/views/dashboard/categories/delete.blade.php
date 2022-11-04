@extends('layouts.admin.master')

@section('title') {{__('admin/category.deleted_categories')}} @endsection

@section('content')
    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>{{__('admin/category.deleted_categories')}}</h3>
        @endslot
        <li class="breadcrumb-item"><a href="{{route('categories.index')}}">{{__('admin/category.categories')}}</a> </li>
        <li class="breadcrumb-item active">{{__('admin/category.deleted_categories')}}</li>
        @slot('bookmark')
            <a href="{{route('categories.create')}}" class="btn btn-pill btn-air-success btn-success-gradien" type="button" title="{{__('admin/category.addCategory')}}">{{__('admin/category.addCategory')}}</a>
        @endslot
    @endcomponent
    @include('layouts.admin.partials.messages.message')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>{{__('admin/category.Show_deleted_categories')}} - <span class="b-b-success">{{App\Models\Category::onlyTrashed()->count()}}</span></h5>
                        <span>{{__('admin/category.DescriptionCategory_delete')}}</span>
                    </div>
                    <div class="card-block row">
                        <div class="col-sm-12 col-lg-12 col-xl-12">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col" class="text-center">#</th>
                                        <th scope="col" class="text-center">{{__('admin/category.NameCategory')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/category.content_categories')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.create_user')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.create_history')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.create_delete')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.action')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($categories as $category)
                                    <tr>
                                        <th scope="row" class="text-center">{{$loop->iteration}}</th>
                                        <td class="text-center">{{$category->name}}</td>
                                        <td class="text-center">{{Str::limit($category->content,'75','......')}}</td>
                                        <td class="text-center">{{$category->create_user->name ?? ''}}</td>
                                        <td class="text-center" title="{{$category->created_at->format('Y-D-M h:m')}}">{{$category->created_at->format('Y-D-M')}}</td>
                                        <td class="text-center" title="{{$category->deleted_at->format('Y-D-M h:m')}}">{{$category->deleted_at->format('Y-D-M')}}</td>
                                        <td class="text-center">
                                            {!! Form::open([
                                                'route' => ['categories.forceDelete',$category->id],
                                                'method' => 'delete'
                                            ])!!}
                                            <button class="btn btn-danger btn-xs" onclick="return confirm('{{__('admin/home.confirmDelete')}}');" type="submit" title="{{__('admin/home.delete_forever')." ($category->name)"}}">{{__('admin/home.delete_forever')}} </button>
                                            <a href="{{route('categories.restore',$category->id)}}" onclick="return confirm('{{__('admin/home.confirmRestore')}}');" class="btn btn-primary btn-xs" type="button" title="{{__('admin/home.restore')." ($category->name)"}}">{{__('admin/home.restore')}}</a>
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
                        {!! $categories->links('pagination::bootstrap-4') !!}
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
