<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\GametypeController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\Admin\RedeemController;
use App\Http\Controllers\Web\DashboardController;
use App\Http\Controllers\Web\UserRegisterController;
use App\Http\Controllers\Admin\GiftsManagementController;

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

Route::get('/', function () {
    if (Auth::user()) {
        // dd('admin');

        if (Auth::user()->type == 'Admin') {
            return redirect()->route('dashboard');
        }
        return redirect()->route('user-dashboard');
    }
    return redirect()->route('home');
});

Auth::routes();

// ADMIN PANEL ROUTES---------------------------------------
Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    // DASHBOARD
    Route::get('/', function () {
        if (Auth::user()) {
            // dd('admin');
            if (Auth::user()->type == 'Admin' || Auth::user()->type == 'User') {
                return redirect()->route('dashboard');
            }
            return redirect()->route('home');
        }
        return redirect()->route('home');
    });


    // BLADE INDEXES ------------------------------------//
    Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');
    Route::get('/index_kickers', 'Admin\UserController@index_kickers')->name('index_kickers');
    Route::get('/index_punters', 'Admin\UserController@index_punters')->name('index_punters');
    Route::get('/index_long_snappers', 'Admin\UserController@index_long_snappers')->name('index_long_snappers');

    // --------------------- API RESOURCES------------------------ //

    Route::apiResources(['user' => 'Admin\UserController']);
    Route::apiResources(['logo' => 'Admin\LogoController']);
    Route::apiResources(['setting' => 'Admin\SettingController']);
    Route::apiResources(['banner' => 'Admin\BannerController']);
    Route::apiResources(['article' => 'Admin\ArticleController']);
    Route::apiResources(['brand' => 'Admin\BrandController']);
    Route::apiResources(['feature' => 'Admin\FeatureController']);
    Route::apiResources(['package' => 'Admin\PackageController']);
    Route::apiResources(['star_rating' => 'Admin\StarRatingController']);
    Route::apiResources(['user_video' => 'Admin\UserVideoController']);
    Route::resource('/contact_detail', 'Admin\ContactController');
    Route::resource('/faq', 'Admin\FaqController');
    Route::resource('/coupon', 'Admin\GiftsManagementController');
    Route::resource('/Gift', CouponController::class);


    Route::get('/student/Shift/delete/{id}', [GiftsManagementController::class, 'GiftDelete'])->name('Gift.delete');
    Route::get('/search_Gift/', [GiftsManagementController::class, 'search_Gift'])->name('search_Gift');
    Route::get('/send_email/', [GiftsManagementController::class, 'send_email'])->name('send.email');
    Route::get('/add-gift', [GiftsManagementController::class, 'addGift'])->name('add-gift');
    Route::get('/sold-coupon', [DashboardController::class, 'soldCoupon'])->name('sold-coupon');


    // Route::get('/contact_detail', 'Admin\ContactController@index')->name('contact_detail');
    // Route::get('/contact_view', 'Admin\ContactController@show_data')->name('contact_view');
    // Route::post('user1','Admin\UserController@store')->name('user1');

    // ---------------- SEARCH ROUTES  ----------------- //

    Route::get('/search_users', 'Admin\UserController@search_users')->name('search_users');
    Route::get('/search_banners', 'Admin\BannerController@search_banners')->name('search_banners');
    Route::get('/search_articles', 'Admin\ArticleController@search_articles')->name('search_articles');
    Route::get('/search_brands', 'Admin\BrandController@search_brands')->name('search_brands');
    Route::get('/search_features', 'Admin\FeatureController@search_features')->name('search_features');
    Route::get('/search_packages', 'Admin\PackageController@search_packages')->name('search_packages');
    Route::get('/search_star_ratings', 'Admin\StarRatingController@search_star_ratings')->name('search_star_ratings');
    Route::get('/search_user_video', 'Admin\UserVideoController@search_user_video')->name('search_user_video');

    // Route::get('/search_user_contact', 'Admin\ContactController@search_user_contact')->name('search_user_contact');
    // Route::post('/paypal_payment','Admin\UserController@paypal_payment')->name('paypal_payment');


});


Route::group(['middleware' => 'auth', 'prefix' => 'user'], function () {
    Route::get('/user-dashboard', [DashboardController::class, 'userDashboard'])->name('user-dashboard');
    // user Dashboard
    Route::post('my-info', 'Web\DashboardController@myInfo')->name('my-info');
    Route::post('update_password', [DashboardController::class, 'updatepassword'])->name('update_password');
    Route::get('/cart', 'Web\HomeController@cart')->name('cart');
    Route::get('/shop', 'Web\HomeController@shop')->name('shop');
});


// Route::get('/', 'Web\HomeController@index')->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about_us', 'Web\HomeController@about_us')->name('about_us');
Route::get('/how_to_play', 'Web\HomeController@how_to_play')->name('how_to_play');
Route::get('/articles', 'Web\HomeController@articles')->name('articles');
Route::get('/faq', 'Web\HomeController@faq')->name('faq');
Route::get('/policy', 'Web\HomeController@policy')->name('policy');
Route::get('/condition', 'Web\HomeController@condition')->name('condition');
Route::get('/ada-compliance', 'Web\HomeController@ada_compliance')->name('ada-compliance');
Route::get('/punters', 'Web\HomeController@punters')->name('punters');
Route::get('/long_snappers', 'Web\HomeController@long_snappers')->name('long_snappers');
Route::get('/packages', 'Web\HomeController@packages')->name('packages');
Route::get('/contact_us', 'Web\HomeController@contact_us')->name('contact_us');
Route::get('/web_register', 'Web\HomeController@web_register')->name('web_register');


Route::post('/admin_login', 'Web\HomeController@admin_authenticate')->name('admin_login');
Route::get('/web_login', 'Web\HomeController@web_login')->name('web_login');
Route::post('/web_login', 'Web\HomeController@authenticate')->name('web_login');



Route::get('/resgister-index', [UserRegisterController::class, 'index'])->name('resgister.index');
Route::post('/user-resgister', 'Web\UserRegisterController@resgister')->name('user-resgister');
Route::get('/my_profile', 'Web\HomeController@my_profile')->name('my_profile');
Route::post('/profile_builder/{id}', 'Admin\UserController@profile_builder')->name('profile_builder');
Route::get('/profile', 'Web\HomeController@profile')->name('profile');
Route::post('/contact', 'Web\HomeController@contact_data')->name('contact');

Route::post('/check-out', 'Web\HomeController@checkOut')->name('check-out');
Route::post('/payment', 'Web\HomeController@payment')->name('payment');
Route::post('/test', 'Web\HomeController@test')->name('test');
Route::get('/user-gift-purchase', 'Web\HomeController@userGiftPurchase')->name('user-gift-purchase');

// Search-players
Route::get('/search_players', 'Web\HomeController@search_players')->name('search_players');
Route::get('/mail', 'Web\HomeController@email')->name('search_players');


Route::get('newsletter-index', [NewsletterController::class, 'index']);
Route::get('/newsletter', [NewsletterController::class, 'index'])->name('newsletter.index');
Route::post('/newsletter-store', [NewsletterController::class, 'store'])->name('newsletter.store');
Route::get('/newsletter-delete/{id}', [NewsletterController::class, 'destroy'])->name('newsletter.delete');


//  Deposit
Route::get('/deposit-index', [DepositController::class, 'index'])->name('deposit.index');
Route::post('/deposit-store', [DepositController::class, 'store'])->name('deposit.store');
Route::get('/deposit-update/{id}', [DepositController::class, 'update'])->name('deposit.update');


//  Game-Type
Route::get('/game-index', [GametypeController::class, 'index'])->name('game.index');
Route::post('/game-store', [GametypeController::class, 'store'])->name('game.store');
Route::get('/game-edit/{id}', [GametypeController::class, 'edit'])->name('game.edit');
Route::get('/game-update/{id}', [GametypeController::class, 'update'])->name('game.update');
Route::get('/game-destroy/{id}', [GametypeController::class, 'destroy'])->name('game.destroy');


//  Redeem Routes For Admin
Route::get('/withdraw_list', [RedeemController::class, 'withdraw_list'])->name('withdraw_list');
Route::post('/withdraw_request', [RedeemController::class, 'index'])->name('withdraw_request');
Route::get('/redeem_action/{id}', [RedeemController::class, 'redeem_action'])->name('redeem_action');


Route::any('{url}', function () {
    return view('errors.404');
})->where('url', '.*');
