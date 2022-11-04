@forelse($rows as $row)
    <a href="{{route('mail.show',$row->id)}}">
        <div class="media">
            <div class="media-body">
                <h6>{{$row->name}}</h6>
                <p>{!! Str::limit($row->message,'45','...') !!}</p>
                <span title="{{$row->created_at->diffForHumans()}}">{{$row->created_at->translatedFormat('H:i a')}}</span>
            </div>
        </div>
    </a>
@empty
    <div class="alert alert-secondary">
        {{__('admin/home.alert_no_data')}}
    </div>
@endforelse
