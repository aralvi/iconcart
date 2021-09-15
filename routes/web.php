<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
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

Route::get('/clear-all', function () {
    Artisan::call('optimize:clear');


    $homeURL = url('/');

    return 'Views Cleared, Routes Cleared, Cache Cleared, and Config Cleared Successfully ! <a href="' . $homeURL . '">Go Back To Home</a>';
});
Route::get('/', function () {
    return view('index');
});

Auth::routes();
Auth::routes(['verify' => true]);
// Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
// Route::get('/login/vendor', 'Auth\LoginController@showVendorLoginForm');
// Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
// Route::get('/register/vendor', 'Auth\RegisterController@showVendorRegisterForm');

// Route::post('/login/admin', 'Auth\LoginController@adminLogin');
// Route::post('/login/vendor', 'Auth\LoginController@vendorLogin');
// Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
// Route::post('/register/vendor', 'Auth\RegisterController@createVendor');

Route::get('login/google', 'Auth\LoginController@redirectToGoogle')->name('login.google');
Route::get('/login/google/callback', 'Auth\LoginController@handleGoogleCallback');
Route::get('login/facebook', 'Auth\LoginController@redirectToFacebook')->name('login.facebook');
Route::get('/login/facebook/callback', 'Auth\LoginController@handleFacebookCallback');



Route::get('/oauth/{driver}', 'Auth\SocialController@redirectToDriver')->name('social.oauth');
Route::get('/callback/oauth/{driver}', 'Auth\SocialController@handleDriverCallback')->name('social.callback');

// Route::get('/login/google', 'Auth\SocialController@redirectToGoogle')->name('google.login');
// Route::get('/login/google/callback', 'Auth\SocialController@handelGoogleCallback')->name('google.callback');

Route::get('/home','Vendor\DashboardController@index')->middleware('verified');


Route::group(['prefix'=>'vendor','middleware'=>'web','namespace'=>'Vendor'],function(){
    Route::get('/icon','DashboardController@iconsCounter');
    Route::get('/icon/upload',function(){ return view('icons.iconupload');});
    Route::get('/icon-drafts-show','FileController@iconsDraftShow');
    Route::get('/icon-drafts-edit/{id}','FileController@iconeEdit')->name('icon.edit');
    Route::get('/icon-drafts-delete/{id}','FileController@iconDestroy')->name('icon.delete');
    Route::get('/photo','DashboardController@photoCounter');
    Route::get('/photo/upload',function(){ return view('illustrations.illustrationsuplaod');});
    Route::get('/photo-draft-show','FileController@photosDraftShow');
    Route::get('/photo-draft-edit/{id}','FileController@photoEdit')->name('photo.edit');
    Route::get('/illustration','DashboardController@vectorCounter');
    Route::get('/vector-draft-show','FileController@vectorDraftShow');
    Route::get('/illustration/upload',function(){ return view('vectors.vectorupload');});
    Route::get('/vector-draft-edit/{id}','FileController@vectorEdit')->name('vector.edit');
    Route::get('/animation',function(){ return view('animations.animation');});
    Route::get('/animation/upload',function(){ return view('animations.animationupload');});

    Route::post('/icon/draft','FileController@uploadFile')->name('icons.drafts');
    Route::post('/illustrations/upload','FileController@photoUpload')->name('illustrations.drafts');
    Route::post('/illustration/upload','FileController@vectorUpload')->name('illustration.drafts');
    // Route::post('/drafts/save/{id}','FileController@saveDrafts')->name('save.drafts');
    Route::post('/drafts/all/save','FileController@saveDrafts')->name('save.all.drafts');
    Route::post('/drafts/submit-as-pack/{id}','FileController@saveToReview')->name('submit-as-pack.drafts');

    Route::get('/product-delete/{id}','FileController@destroy')->name('product-delete');

    Route::get('/icons/needtoimprove',function(){
        return view('icons.needtoimprove');
    });
    Route::get('/icons/rejected',function(){
        return view('icons.rejected');
    });
    Route::get('/icons/live-store',function(){
        return view('icons.liveinstore');
    });
    Route::get('/icons/review','FileController@iconsReview');

    Route::get('/photos/needtoimprove',function(){
        return view('illustrations.needtoimprove');
    });
    Route::get('/photos/rejected',function(){
        return view('illustrations.rejected');
    });
    Route::get('/photos/live-store',function(){
        return view('illustrations.liveinstore');
    });
    Route::get('/photos/review','FileController@photoReview');

     Route::get('/vector/needtoimprove',function(){
        return view('vectors.needtoimprove');
    });
    Route::get('/vector/rejected',function(){
        return view('vectors.rejected');
    });
    Route::get('/vector/live-store',function(){
        return view('vectors.liveinstore');
    });
    Route::get('/vector/review','FileController@vectorReview');


    Route::get('/stats',function(){
        return view('stats');
    });
    Route::get('/cashout',function(){
        return view('cashout');
    });

    Route::get('/contributorterms',function(){
       return view('contributorterms');
    });
});