<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only('profile', 'edit_my_Profile', 'editProfile', 'profileUpdatePassword');
    }

    public function index()
    {
        $no_of_customers        = User::where('user_type', '=', 'customer')->count();
        $no_of_suppliers        = User::where('user_type', '=', 'supplier')->count();
        $services_section       = Category::status(1)->limit(15)->get();
        return view('home', compact('no_of_customers', 'no_of_suppliers','services_section'));
    }

    public function about()
    {       
        return view('website.about');
    }

    public function contact()
    {        
        return view('website.contact');
    }

    public function faq()
    {        
        return view('website.faq');
    }

    public function allCategories()
    {
        $categories = Category::get();
        return view('website.categories.index', compact('categories'));
    }
    public function profile()
    {
        $user   = User::findOrFail(auth()->user()->id);
        $events = Event::where('user_id', $user->id)->get(); 
        $offers = Comment::where('user_id', $user->id)->get();

        return view('website.profile', compact('user', 'events', 'offers'));
    }

    public function editProfile()
    {
        $model = User::findOrFail(auth()->user()->id);
        return view('website.profile-edit', compact('model'));
    }


    public function profileUpdatePassword(Request $request)
    {

        $rules = [
            'current_password'     => 'required|min:8|current_password',
            'password'             => 'required|confirmed|min:8',
        ];
        $message = [
            // validation current_password
            'current_password.required'                  => __('admin/request.current_password_required'),
            'current_password.min'                       => __('admin/request.current_password_min'),
            'current_password.current_password'          => __('admin/request.current_password'),
            // validation password
            'password.required'                          => __('admin/request.password_required'),
            'password.confirmed'                         => __('admin/request.password_confirmed'),
            'password.min'                               => __('admin/request.password_min'),

        ];
        $this->validate($request, $rules, $message);

        $user = $request->user();
        if ($request->password != '') {
            if (Hash::check($request->input('current_password'), $user->password)) {
                // The passwords match...
                $user->password = bcrypt($request->input('password'));
                $user->save();
            } else {
                return redirect()->route('User')
                    ->with(['error' => 'كلمة المرور الحالية غير صحيح، حاول مرة آخري']);
            }
        }
        return redirect()->route('User')
            ->with(['message' => "تم تغير كلمة السر بنجاح"]);
    }

    public function edit_my_Profile(ProfileRequest $request)
    {
        $user = User::findOrFail(auth()->user()->id);
        $array = [];
        if ($request->email != $user->email) {
            $email = User::where('email', $request->email)->first();
            if ($email == null) {
                $array['email'] =  $request->email;
            }
        }
        if ($request->name != $user->name) {
            $array['name'] =  $request->name;
        }
        if ($request->username != $user->username) {
            $array['username'] =  $request->username;
        }
        if ($request->bio != $user->bio) {
            $array['bio'] =  $request->bio;
        }
        if ($request->address != $user->address) {
            $array['address'] =  $request->address;
        }
        if ($request->phone != $user->phone) {
            $array['phone'] =  $request->phone;
        }
        if ($request->gender != $user->gender) {
            $array['gender'] =  $request->gender;
        }
        if ($request->dob != $user->dob) {
            $array['dob'] =  $request->dob;
        }
        if ($request->postal_code != $user->postal_code) {
            $array['postal_code'] =  $request->postal_code;
        }
        if ($request->state_province != $user->state_province) {
            $array['state_province'] =  $request->state_province;
        }
        if ($request->facebook != $user->facebook) {
            $array['facebook'] =  $request->facebook;
        }
        if ($request->twitter != $user->twitter) {
            $array['twitter'] =  $request->twitter;
        }
        if ($request->instagram != $user->instagram) {
            $array['instagram'] =  $request->instagram;
        }
        if ($request->whatsApp != $user->whatsApp) {
            $array['whatsApp'] =  $request->whatsApp;
        }
        if ($request->telegram != $user->telegram) {
            $array['telegram'] =  $request->telegram;
        }

        if ($request->country_id != $user->country_id) {
            $array['country_id'] =  $request->country_id;
        }

        if ($request->governorate_id != $user->governorate_id) {
            $array['governorate_id'] =  $request->governorate_id;
        }

        if ($request->city_id != $user->city_id) {
            $array['city_id'] =  $request->city_id;
        }

        if ($request->hasFile('avatar')) {
            $user
                ->clearMediaCollection('avatar')
                ->addMediaFromRequest('avatar')
                ->UsingName('avatar-' . $user->name)
                ->UsingFileName("avatar-.$user->name")
                ->toMediaCollection('avatar');
        }
        if ($request->hasFile('cover')) {
            $user
                ->clearMediaCollection('cover')
                ->addMediaFromRequest('cover')
                ->UsingName('cover-' . $user->name)
                ->UsingFileName("cover-.$user->name")
                ->toMediaCollection('cover');
        }

        if (!empty($array)) {
            $user->update($array);
        }

        return redirect()->route('User')
            ->with(['message' => "Successfully"]);
    }
}
