@extends('layouts.admin.master')

@section('title') {{__('admin/category.all_categories')}} @endsection

@section('content')
    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>{{__('admin/category.categories')}}</h3>
        @endslot
        <li class="breadcrumb-item active">{{__('admin/category.categories')}}</li>

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
                        <h5>{{__('admin/category.showCategory')}} - <span class="b-b-success">{{App\Models\Category::count()}}</span></h5>
                        <span>{{__('admin/category.DescriptionCategory')}}</span>
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
                                        <th scope="col" class="text-center">{{__('admin/home.status')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.create_user')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.update_user')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.create_history')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.action')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($categories as $category)
                                    <tr>

                                        <th scope="row" class="text-center">{{$loop->iteration}}</th>
                                        <td class="text-center">{{$category->name}}</td>
                                        <td class="text-center">{{Str::limit($category->content,'45','......')}}</td>
                                        <td class="text-center">
                                            @if($category->status == 0)
                                                <div class="badge badge-danger">
                                                    <span>{{__('admin/home.unavailable_title')}}</span>
                                                </div>
                                            @elseif($category->status == 1)
                                                <div class="badge badge-success">
                                                    <span style="color:bisque;">{{__('admin/home.available_title')}}</span>
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{$category->create_user->name ?? ''}}</td>
                                        <td class="text-center">{{$category->update_user->name ?? ''}}</td>
                                        <td class="text-center">{{$category->created_at->translatedFormat('Y-m-d')}}</td>
                                        <td class="text-center">
                                            {!! Form::open([
                                                'route' => ['categories.destroy',$category->id],
                                                'method' => 'delete'
                                            ])!!}

                                            <button class="btn btn-danger btn-xs" onclick="return confirm('{{__('admin/home.confirm')}}');" type="submit" title="{{__('admin/home.delete')." ($category->name)"}}">{{__('admin/home.delete')}} </button>

                                            <a href="{{route('categories.edit',$category->id)}}" class="btn btn-primary btn-xs" type="button" title="{{__('admin/home.edit')." ($category->name)"}}"><li class="icon-pencil"></li> {{__('admin/home.edit')}}</a>
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
                        {!! $categories->links('pagination::bootstrap-5') !!}
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
