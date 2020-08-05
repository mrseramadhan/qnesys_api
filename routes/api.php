<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/InvalidHeader', function (Request $request){
  return response(
    set_format_api(
      @$data_out,
      array(
        'primary'=>'',
        'success'=>0,
        'failed'=>1,
        'message_front'=>'Invalid header format'
      )
    ), 403)
    ->header('Content-Type', 'json')
    ->header('API-Version', get_api_patch())
  ;
})->name('invalid_header');

Route::get('/InvalidToken', function (Request $request){
  return response(
    set_format_api(
      @$data_out,
      array(
        'primary'=>'',
        'success'=>0,
        'failed'=>1,
        'message_front'=>'Token missmatch'
      )
    ), 403)
    ->header('Content-Type', 'json')
    ->header('API-Version', get_api_patch())
  ;
})->name('invalid_token');

Route::post('/Login', 'Login_Controller@login');
Route::get('/User', 'User_Controller@read');
Route::post('/User', 'User_Controller@create');

Route::get('/Guest', 'Guest_Controller@read');
Route::post('/Guest', 'Guest_Controller@create');
Route::delete('/Guest', 'Guest_Controller@delete');

Route::get('/GuestAccess', 'Check_IO_Access_Controller@read');
Route::post('/GuestAccess', 'Check_IO_Access_Controller@create');
Route::delete('/GuestAccess', 'Check_IO_Access_Controller@delete');

Route::group(['middleware' => '\App\Http\Middleware\ApiTokenProtector'],function(){
  Route::put('/User', 'User_Controller@update')->middleware('\App\Http\Middleware\HandlePutFormData');
  Route::delete('/User', 'User_Controller@delete')->middleware('\App\Http\Middleware\HandlePutFormData');
});
