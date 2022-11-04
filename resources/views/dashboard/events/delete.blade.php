@extends('layouts.admin.master')

@section('title') {{__('admin/event.deleted_events')}} @endsection

@section('content')
    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>{{__('admin/event.deleted_events')}}</h3>
        @endslot
        <li class="breadcrumb-item"><a href="{{route('events.index')}}">{{__('admin/event.events')}}</a> </li>
        <li class="breadcrumb-item active">{{__('admin/event.deleted_events')}}</li>
        @slot('bookmark')
            <a href="{{route('events.create')}}" class="btn btn-pill btn-air-success btn-success-gradien" type="button" title="{{__('admin/event.addEvent')}}">{{__('admin/event.addEvent')}}</a>
        @endslot
    @endcomponent
    @include('layouts.admin.partials.messages.message')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>{{__('admin/event.Show_deleted_events')}} - <span class="b-b-success">{{App\Models\Event::onlyTrashed()->count()}}</span></h5>
                        <span>{{__('admin/event.DescriptionEvent_delete')}}</span>
                    </div>
                    <div class="card-block row">
                        <div class="col-sm-12 col-lg-12 col-xl-12">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col" class="text-center">#</th>
                                        <th scope="col" class="text-center">{{__('admin/event.TitleEvent')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/event.Budget')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.create_user')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.create_history')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.create_delete')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.action')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($events as $event)
                                    <tr>
                                        <th scope="row" class="text-center">{{$loop->iteration}}</th>
                                        <td class="text-center">{{$event->title}}</td>
                                        <td class="text-center">{{$event->budget}} USD</td>
                                        <td class="text-center">{{$event->create_user->name ?? ''}}</td>
                                        <td class="text-center" title="{{$event->created_at->format('Y-D-M h:m')}}">{{$event->created_at->format('Y-D-M')}}</td>
                                        <td class="text-center" title="{{$event->deleted_at->format('Y-D-M h:m')}}">{{$event->deleted_at->format('Y-D-M')}}</td>
                                        <td class="text-center">
                                            {!! Form::open([
                                                'route' => ['events.forceDelete',$event->id],
                                                'method' => 'delete'
                                            ])!!}
                                            <button class="btn btn-danger btn-xs" onclick="return confirm('{{__('admin/home.confirmDelete')}}');" type="submit" title="{{__('admin/home.delete_forever')." ($event->name)"}}">{{__('admin/home.delete_forever')}} </button>
                                            <a href="{{route('events.restore',$event->id)}}" onclick="return confirm('{{__('admin/home.confirmRestore')}}');" class="btn btn-primary btn-xs" type="button" title="{{__('admin/home.restore')." ($event->name)"}}">{{__('admin/home.restore')}}</a>
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
                        {!! $events->links('pagination::bootstrap-4') !!}
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
