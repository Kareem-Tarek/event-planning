@extends('layouts.admin.master')

@section('title') {{__('admin/event.all_events')}} @endsection

@section('content')
    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>{{__('admin/event.events')}}</h3>
        @endslot
        <li class="breadcrumb-item active">{{__('admin/event.events')}}</li>
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
                        <h5>{{__('admin/event.showEvent')}} - <span class="b-b-success">{{App\Models\Event::count()}}</span></h5>
                        <span>{{__('admin/event.DescriptionEvent')}}</span>
                    </div>

                    <div class="card-block row">

                        <div class="col-sm-12 col-lg-12 col-xl-12">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col" class="text-center">#</th>
                                        <th scope="col" class="text-center">{{__('admin/event.TitleEvent')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/event.budget')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/category.category')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/event.invitation_address')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.create_user')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.create_history')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.status')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.update_user')}}</th>
                                        <th scope="col" class="text-center">{{__('admin/home.action')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($events as $event)
                                    <tr>
                                        <th scope="row" class="text-center">{{$loop->iteration}}</th>
                                        <td class="text-center">{{$event->title}}</td>
                                        <td class="text-center">{{$event->budget}} USD</td>
                                        <td class="text-center"><a href="{{route('events.edit',$event->category->id ?? '')}}">{{$event->category->name ?? ''}}</a></td>
                                        <td class="text-center">
                                            <a href="{{route('countries.edit',$event->country->id ?? '')}}">{{$event->country->name ?? ''}}</a> -
                                            <a href="{{route('governorates.edit',$event->governorate->id ?? '')}}">{{$event->governorate->name ?? ''}}</a> -
                                            <a href="{{route('cities.edit',$event->city->id ?? '')}}">{{$event->city->name ?? ''}}</a>
                                        </td>
                                        <td class="text-center">{{$event->create_user->name ?? ''}}</td>
                                        <td class="text-center">{{$event->created_at->translatedFormat('Y-m-d')}}</td>
                                        <td class="text-center">
                                            @if($event->status == 'Expired')
                                                <div class="badge badge-dark label-square">
                                                    <span>{{__('admin/home.expired_paid')}}</span>
                                                </div>
                                            @elseif($event->status == 'Stopped')
                                                <div class="badge badge-danger label-square">
                                                    <span>{{__('admin/home.stopped_pending')}}</span>
                                                </div>
                                            @elseif($event->status == 'Available')
                                                <div class="badge badge-success label-square">
                                                    <span style="color:bisque;">{{__('admin/home.available_active')}}</span>
                                                </div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{$event->update_user->name ?? ''}}</td>
                                        <td class="text-center">
                                            {!! Form::open([
                                                'route' => ['events.destroy',$event->id],
                                                'method' => 'delete'
                                            ])!!}
                                            <button class="btn btn-danger btn-xs" onclick="return confirm('{{__('admin/home.confirm')}}');" type="submit" title="{{__('admin/home.delete')." ($event->name)"}}">{{__('admin/home.delete')}} </button>
                                            <a href="{{route('events.edit',$event->id)}}" class="btn btn-primary btn-xs" type="button" title="{{__('admin/home.edit')." ($event->name)"}}"><li class="icon-pencil"></li> {{__('admin/home.edit')}}</a>
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
                        {!! $events->links('pagination::bootstrap-5') !!}
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
