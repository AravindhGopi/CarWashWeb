<?php
use App\Events\Realmap;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/cc', function () {
    Artisan::call('config:cache');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('event', function () {
	$lat=11.020983;
	$lon=76.966331;
	$position=["lat"=>$lat,"lon"=>$lon];
    event(new Realmap($position));
});
Route::group(['middleware'=>['auth','super_admin']],function (){
    Route::get('dashboard', 'AdminController@index');
    Route::resource('drivers', 'DriverController');
    Route::get('add-drivers', 'DriverController@create');
    Route::post('storedriver', 'DriverController@store');
	Route::get('view_profile', 'DriverController@view_profile');
	Route::get('edit_profile', 'DriverController@edit_profile');
	Route::post('update_profile', 'DriverController@update_profile');
	Route::get('delete_profile', 'DriverController@delete_profile');
	Route::get('track-drivers', 'DriverController@track_drivers');
	Route::post('getdriver-location', 'DriverController@get_location');
	Route::resource('users', 'UserController');
	Route::get('view_user', 'UserController@view_profile');
	Route::get('edit_user', 'UserController@edit_profile');
	Route::post('update_user', 'UserController@update_profile');
	Route::get('delete_user', 'UserController@delete_profile');
	Route::post('user-status', 'UserController@set_user_status');
	Route::resource('price-management', 'PriceController');
	

Route::get('listen', function () {
    return view('broadcastlisten');
});
});
