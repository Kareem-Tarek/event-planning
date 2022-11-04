<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contribution;
use App\Models\Event;
use Illuminate\Http\Request;

class ContributionController extends Controller
{
    public function index(Request $request)
    {
        $contributions     = Contribution::status(1)->where(function ($q) use($request){
            if($request->keyword){
                $q->where('title' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('content' , 'LIKE' , '%'.$request->keyword.'%');
            }})->paginate(12);
        $events            = Event::status('Available')->latest()->limit(4)->get();
        $categories        = Category::status(1)->latest()->limit(4)->get();
        return view('website.contributions.index',compact('contributions','events','categories','request'));
    }

    public function category(Request $request ,$id)
    {
        $category                = Category::status(1)->findOrFail($id);
        $contributions           = Contribution::status(1)->where('category_id',$category->id)->where(function ($q) use($request){
            if($request->keyword){
                $q->where('title' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('content' , 'LIKE' , '%'.$request->keyword.'%');
            }})->paginate(12);
        $events                  = Event::status(1)->latest()->limit(4)->get();
        return view('website.contributions.index',compact('contributions','events','request'));
    }

    public function show($id)
    {
        $contribution      = Contribution::status('1')->findOrFail($id);
        $events            = Event::status(1)->latest()->limit(4)->get();
        $categories        = Category::status(1)->latest()->limit(4)->get();
        $next              = Contribution::where('id','>' ,$contribution->id)->orderBy('id','ASC')->first();
        $previous          = Contribution::where('id','<' ,$contribution->id)->orderBy('id','DESC')->first();
        return view('website.contributions.show',compact('contribution','events','categories','next','previous'));
    }
}
