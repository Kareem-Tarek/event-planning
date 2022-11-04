<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\ContributionController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\EmailController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\GovernorateController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PayPalController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//*****-------------------- start customer event route. --------------------*****//
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
 ], function () {
    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); //home route
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); //home route
    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('User');
    Route::get('/edit-profile', [App\Http\Controllers\HomeController::class, 'editProfile'])->name('editProfile');
    Route::post('/edit-profile-post', [App\Http\Controllers\HomeController::class, 'profileUpdatePassword'])->name('editProfile-post');
    Route::post('/edit-myProfile', [App\Http\Controllers\HomeController::class, 'edit_my_Profile'])->name('editMyProfile');
    Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'about'])->name('about-us');
    Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact-us');
    Route::get('/faq', [App\Http\Controllers\HomeController::class, 'faq'])->name('faq');
    Route::get('/events', [App\Http\Controllers\EventController::class, 'index'])->name('allEvents');
    Route::get('/my-events', [App\Http\Controllers\EventController::class, 'myEvent'])->name('myEvents');
    Route::get('/contributions', [App\Http\Controllers\ContributionController::class, 'index'])->name('allContributions');
    Route::get('/contributions/{id}', [App\Http\Controllers\ContributionController::class, 'show'])->name('contribution.show');
    Route::get('/events/create', [App\Http\Controllers\EventController::class, 'create'])->name('event.create')->middleware(['auth']);
    Route::post('/events/store', [App\Http\Controllers\EventController::class, 'store'])->name('event.store')->middleware(['auth']);
    Route::get('/events/{id}', [App\Http\Controllers\EventController::class, 'show'])->name('event.show');
    Route::delete('/comment/delete/{id}/', [App\Http\Controllers\CommentController::class, 'CommentDelete'])->name('comment.delete');
    //-- --//
    Route::get('/allCategories', [App\Http\Controllers\HomeController::class, 'allCategories'])->name('allCategories');
    //-- --//
    Route::get('event/category/{id}', [App\Http\Controllers\EventController::class, 'category'])->name('event.category');
    Route::get('contributions/category/{id}', [App\Http\Controllers\ContributionController::class, 'category'])->name('contribution.category');
    Route::get('/country/{id}', [App\Http\Controllers\EventController::class, 'country'])->name('event.country');
    Route::get('/governorate/{id}', [App\Http\Controllers\EventController::class, 'governorate'])->name('event.governorate');
    Route::get('/city/{id}', [App\Http\Controllers\EventController::class, 'city'])->name('event.city');
    Route::post('/comment/store', [CommentController::class, 'store'])->name('comment.add');
    Route::post('/reply', [CommentController::class, 'reply'])->name('reply.event');
    //-------------------- start payment route. --------------------//
    Route::post('/payNow', [PaymentController::class, 'payNow'])->name('payNow')->middleware(['auth']);
    Route::get('paypal/checkout/{order}', [PayPalController::class, 'getExpressCheckout'])->name('paypal.checkout');
    Route::get('paypal/checkout-success/{order}', [PayPalController::class, 'getExpressCheckoutSuccess'])->name('paypal.success');
    Route::get('paypal/checkout-cancel', [PayPalController::class, 'cancelPage'])->name('paypal.cancel');
    //-------------------- end payment route. --------------------//

    //*****-------------------- end customer event route. --------------------*****//

    //*****-------------------- start dashboard/admin route. --------------------*****//

    Route::group([
        'middleware' => ['auth', 'dashboard']
    ], function () {

        Route::prefix('dashboard')->group(function () {
            Route::group([], function () {   //group function for "home" route.
                Route::get('/', [HomeController::class, 'index'])->name('dashboard');
                Route::get('/home', [HomeController::class, 'index'])->name('dashboard');
            });
            //-------------------- start tags route. --------------------//
            Route::resource('/tags', TagController::class);
            Route::get('/tag/delete', [TagController::class, 'delete'])->name('tags.delete');
            Route::get('/tag/restore/{id}/', [TagController::class, 'restore'])->name('tags.restore');
            Route::delete('/tag/forceDelete/{id}/', [TagController::class, 'forceDelete'])->name('tags.forceDelete');
            //-------------------- end tags route. --------------------//

            //-------------------- start countries route. --------------------//
            Route::resource('/countries', CountryController::class);
            Route::get('/country/delete', [CountryController::class, 'delete'])->name('countries.delete');
            Route::get('/country/restore/{id}/', [CountryController::class, 'restore'])->name('countries.restore');
            Route::delete('/country/forceDelete/{id}/', [CountryController::class, 'forceDelete'])->name('countries.forceDelete');
            //-------------------- end countries route. --------------------//

            //-------------------- start governorates route. --------------------//
            Route::resource('/governorates', GovernorateController::class);
            Route::get('/governorate/delete', [GovernorateController::class, 'delete'])->name('governorates.delete');
            Route::get('/governorate/restore/{id}/', [GovernorateController::class, 'restore'])->name('governorates.restore');
            Route::delete('/governorate/forceDelete/{id}/', [GovernorateController::class, 'forceDelete'])->name('governorates.forceDelete');
            //-------------------- end governorates route. --------------------//

            //-------------------- end cities route. --------------------//
            Route::resource('/cities', CityController::class);
            Route::get('/city/delete', [CityController::class, 'delete'])->name('cities.delete');
            Route::get('/city/restore/{id}/', [CityController::class, 'restore'])->name('cities.restore');
            Route::delete('/city/forceDelete/{id}/', [CityController::class, 'forceDelete'])->name('cities.forceDelete');
            //-------------------- end cities route. --------------------//

            //-------------------- start categories route. --------------------//
            Route::resource('/categories', CategoryController::class);
            Route::get('/category/delete', [CategoryController::class, 'delete'])->name('categories.delete');
            Route::get('/category/restore/{id}/', [CategoryController::class, 'restore'])->name('categories.restore');
            Route::delete('/category/forceDelete/{id}/', [CategoryController::class, 'forceDelete'])->name('categories.forceDelete');
            //-------------------- start categories route. --------------------//

            //-------------------- start events route. --------------------//
            Route::resource('/events', EventController::class);
            Route::get('/event/delete', [EventController::class, 'delete'])->name('events.delete');
            Route::get('/event/restore/{id}/', [EventController::class, 'restore'])->name('events.restore');
            Route::delete('/event/forceDelete/{id}/', [EventController::class, 'forceDelete'])->name('events.forceDelete');
            //-------------------- end events route. --------------------//

            //-------------------- start users route. --------------------//
            Route::resource('users', UserController::class);
            Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
            Route::get('/edit-profile', [ProfileController::class, 'edit'])->name('edit-profile');
            Route::post('/edit-profile-post', [ProfileController::class, 'profileUpdatePassword'])->name('edit-profile-post');
            Route::post('/edit-myProfile', [ProfileController::class, 'edit_my_Profile'])->name('edit-myProfile');
            //-------------------- end users route. --------------------//

            //-------------------- Start setting route. --------------------//
            Route::get('/setting', [SettingController::class, 'setting'])->name('setting');
            Route::post('/setting-post', [SettingController::class, 'update'])->name('setting.update');
            //-------------------- End setting route. --------------------//

            //---------------------Start Slider route. -------------------//
            Route::resource('/sliders', SliderController::class);
            Route::get('/slider/delete', [sliderController::class, 'delete'])->name('sliders.delete');
            Route::get('/slider/restore/{id}/', [sliderController::class, 'restore'])->name('sliders.restore');
            Route::delete('/slider/forceDelete/{id}/', [sliderController::class, 'forceDelete'])->name('sliders.forceDelete');
            //---------------------end Slider route. -------------------//


            //-------------------- start setting route. --------------------//
            Route::get('/setting', [SettingController::class, 'setting'])->name('setting');
            Route::post('/setting-post', [SettingController::class, 'update'])->name('setting.update');
            //-------------------- end setting route. --------------------//

            //-------------------- start contributions route. --------------------//
            Route::resource('/contributions', ContributionController::class);
            Route::get('/contribution/delete', [ContributionController::class, 'delete'])->name('contributions.delete');
            Route::get('/contribution/restore/{id}/', [ContributionController::class, 'restore'])->name('contributions.restore');
            Route::delete('/contribution/forceDelete/{id}/', [ContributionController::class, 'forceDelete'])->name('contributions.forceDelete');
            //-------------------- start contributions route. --------------------//

            //-------------------- start services route. --------------------//
            Route::resource('/services', ServiceController::class);
            Route::get('/service/delete', [ServiceController::class, 'delete'])->name('services.delete');
            Route::get('/service/restore/{id}/', [ServiceController::class, 'restore'])->name('services.restore');
            Route::delete('/service/forceDelete/{id}/', [ServiceController::class, 'forceDelete'])->name('services.forceDelete');
            //-------------------- start services route. --------------------//

            //-------------------- start email route. --------------------//
            Route::get('mail/inbox', [EmailController::class, 'inbox'])->name('mail.inbox');
            Route::get('mail/all-mail', [EmailController::class, 'allMail'])->name('mail.all-mail');
            Route::get('mail/trash', [EmailController::class, 'trash'])->name('mail.trash');
            Route::get('mail/show/{id}', [EmailController::class, 'show'])->name('mail.show');
            //-------------------- end email route. --------------------//
        });
    });
    //*****-------------------- end dashboard/admin route. --------------------*****//
});
