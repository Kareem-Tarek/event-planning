<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Event;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {

        $comment = new Comment;
        $comment->body  = $request->get('comment_body');
        $comment->value = $request->get('value');
        $comment->user()->associate($request->user());
        $event          = Event::find($request->get('event_id'));
        $event->comments()->save($comment);
        if (count($event->comments->where('user_id',auth()->user()->id)) == 0)
        {
            return redirect()->route('event.show',['id' => $event->id, "#comments"])
                ->with(['message' => __('website/home.added_successfully')]);
        } else {
            return redirect()->route('event.show',['id' => $event->id, "#comments"])
                ->with(['message' => __('website/home.added_successfully')]);
        }

    }

    public function CommentDelete($id)
    {
        Comment::where('id', $id)->delete();
        return redirect()->back()
            ->with(['delete' => __('website/home.deleted_successfully')]);
    }

    public function reply(Request $request)
    {
        $reply = new Comment();
        $reply->body = $request->get('comment_body');
        $reply->user()->associate($request->user());
        $reply->parent_id = $request->get('comment_id');
        $events = Event::find($request->get('commentable_id'));

        $events->comments()->save($reply);

        return redirect()->route('event.show',['id' => $events->id, "#reply"])
            ->with(['message' => __('website/home.added_successfully_reply')]);

    }
}
