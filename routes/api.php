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

Route::get('/Room', 'Room_Controller@read');
Route::post('/Room', 'Room_Controller@create');
Route::delete('/Room', 'Room_Controller@delete');

Route::get('/RoomCategory', 'Room_Category_Controller@read');
Route::post('/RoomCategory', 'Room_Category_Controller@create');
Route::delete('/RoomCategory', 'Room_Category_Controller@delete');

Route::get('/RoomHardware', 'Room_Hardware_Controller@read');
Route::post('/RoomHardware', 'Room_Hardware_Controller@create');
Route::delete('/RoomHardware', 'Room_Hardware_Controller@delete');

Route::get('/Hotel','Hotel_Controller@read');
Route::post('/Hotel', 'Hotel_Controller@create');
Route::delete('/Hotel','Hotel_Controller@delete');

Route::get('/HotelFacilities','Hotel_Facilities_Controller@read');
Route::post('/HotelFacilities','Hotel_Facilities_Controller@create');
Route::delete('/HotelFacilities','Hotel_Facilities_Controller@delete');

Route::get('/Around','Around_Controller@read');
Route::post('/Around', 'Around_Controller@create');
Route::delete('/Around','Around_Controller@delete');

Route::get('/Event','Event_Controller@read');
Route::post('/Event', 'Event_Controller@create');
Route::delete('/Event','Event_Controller@delete');

Route::get('/Category_Galery','Category_Galery_Controller@read');
Route::post('/Category_Galery', 'Category_Galery_Controller@create');
Route::delete('/Category_Galery','Category_Galery_Controller@delete');

Route::get('/Galery','Galery_Controller@read');
Route::post('/Galery', 'Galery_Controller@create');
Route::delete('/Galery','Galery_Controller@delete');

Route::get('/Information','Information_Controller@read');
Route::post('/Information', 'Information_Controller@create');
Route::delete('/Information','Information_Controller@delete');

Route::get('/FacilitiesCategory','Facilities_Category_Controller@read');
Route::post('/FacilitiesCategory', 'Facilities_Category_Controller@create');
Route::delete('/FacilitiesCategory','Facilities_Category_Controller@delete');

Route::get('/Facilities','Hotel_Facilities_Controller@read');
Route::post('/Facilities', 'Hotel_Facilities_Controller@create');
Route::delete('/Facilities','Hotel_Facilities_Controller@delete');

Route::group(['middleware' => '\App\Http\Middleware\ApiTokenProtector'],function(){
  Route::put('/User', 'User_Controller@update')->middleware('\App\Http\Middleware\HandlePutFormData');
  Route::delete('/User', 'User_Controller@delete')->middleware('\App\Http\Middleware\HandlePutFormData');
});
