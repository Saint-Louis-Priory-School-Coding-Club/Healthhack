<?php
use Twilio\Rest\Client;
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
    return view('welcome');
})->middleware('guest');

Auth::routes();

Route::get('/home', 'HomeController@index');



Route::get('/meds',function() {
  return view('medication');
});
Route::get('/daily',function() {
  return view('checkup');
});//Temporary until /form/{token} is fixed


//Route::get('/form/{token}', 'CheckupsController@create'); BROKEN

Route::resource('users', 'UserController')->only([
    'edit'
]);;


//Route::post('/form/{token}', 'CheckupsController@store'); BROKEN

/*
    doctor selects from list of ailments, attach to user
    user doctor - set to 1 for MVP
*/
