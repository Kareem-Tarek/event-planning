<ol class="children">
    <li class="comments__item">
        <div class="comment-entry comment comments__article">
            <div class="comments__avatar">
                <img src="{{$reply->user->photo ?? ''}}" alt="{{$reply->user->name ?? ''}}">
            </div>
            <div class="comments__body">
                <div class="row">
                    <div class="col-lg-7 col-md-7" @if(LaravelLocalization::getCurrentLocale() == 'ar') style="float: right; margin: 0 auto;" @endif>
                        <div class="d-flex--content-inline">
                            <header class="comment-meta comments__header">

                                <cite class="fn url comments__author">
                                    <a href="#" rel="external" class="h6">{{$reply->user->name ?? ''}}</a>
                                </cite>
                                <div class="comments__time">
                                    <time class="published" title="{{$reply->created_at->diffForHumans()}}" datetime="{{$reply->created_at}}">{{$reply->created_at->format('d D M Y, H:m a')}}</time>
                                </div>
                            </header>
                        </div>
                    </div>
                    @if(auth()->user())
                        @if($reply->user_id == auth()->user()->id || $event->user_id == auth()->user()->id  || auth()->user()->user_type == 'dashboard')

                            <div class="col-lg-5 col-md-5">
                                {!! Form::open([
                                    'route' => ['comment.delete',$reply->id],
                                    'method' => 'delete'
                                ])!!}
                                <button class="btn btn--red" style="margin-bottom: 20px; margin-left: 0;">{{__('website/home.delete')}}</button>
                                {!! Form::close() !!}
                            </div>
                        @endif
                    @endif
                </div>

                <div class="comment-content comment">
                    <p>{{$reply->body}}</p>
                </div>
            </div>
        </div>
    </li>
</ol>
