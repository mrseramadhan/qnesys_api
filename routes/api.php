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

Route::get('/CheckIO','Check_IO_Controller@read');
Route::post('/CheckIO', 'Check_IO_Controller@create');
Route::delete('/CheckIO','Check_IO_Controller@delete');

Route::get('/Cart','Cart_Controller@read');
Route::post('/Cart', 'Cart_Controller@create');
Route::delete('/Cart','Cart_Controller@delete');

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

Route::get('/FoodCategory', 'Category_Food_Controller@read');
Route::post('/FoodCategory', 'Category_Food_Controller@create');
Route::delete('/FoodCategory', 'Category_Food_Controller@delete');

Route::get('/Food', 'Food_Controller@read');
Route::post('/Food', 'Food_Controller@create');
Route::delete('/Food', 'Food_Controller@delete');

Route::get('/Service', 'Service_Controller@read');
Route::post('/Service', 'Service_Controller@create');
Route::delete('/Service', 'Service_Controller@delete');

Route::get('/Hotel','Hotel_Controller@read');
Route::post('/Hotel', 'Hotel_Controller@create');
Route::delete('/Hotel','Hotel_Controller@delete');

Route::get('/HotelFacilities','Hotel_Facilities_Controller@read');
Route::post('/HotelFacilities','Hotel_Facilities_Controller@create');
Route::delete('/HotelFacilities','Hotel_Facilities_Controller@delete');

Route::get('/AroundHotel','Around_Controller@read');
Route::post('/AroundHotel', 'Around_Controller@create');
Route::delete('/AroundHotel','Around_Controller@delete');

Route::get('/Event','Event_Controller@read');
Route::post('/Event', 'Event_Controller@create');
Route::delete('/Event','Event_Controller@delete');

Route::get('/CategoryGalery','Category_Galery_Controller@read');
Route::post('/CategoryGalery', 'Category_Galery_Controller@create');
Route::delete('/CategoryGalery','Category_Galery_Controller@delete');

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

Route::get('/PublicTV','Public_Tv_Controller@read');
Route::post('/PublicTV', 'Public_Tv_Controller@create');
Route::delete('/PublicTV','Public_Tv_Controller@delete');

Route::get('/SSID','Ssid_Hotel_Controller@read');
Route::post('/SSID', 'Ssid_Hotel_Controller@create');
Route::delete('/SSID','Ssid_Hotel_Controller@delete');

Route::get('/Provinsi','Provinsi_Controller@read');
Route::get('/Kabupaten','Kabupaten_Controller@read');
Route::get('/Kelurahan','Kelurahan_Controller@read');

Route::get('/Tv_Category','Tv_Category_Controller@read');
Route::post('/Tv_Category', 'Tv_Category_Controller@create');
Route::delete('/Tv_Category','Tv_Category_Controller@delete');

Route::get('/Tv_Channel','Tv_Channel_Controller@read');
Route::post('/Tv_Channel', 'Tv_Channel_Controller@create');
Route::delete('/Tv_Channel','Tv_Channel_Controller@delete');

Route::get('/Dt_Channel_Remote','Channel_Remote_Controller@read');
Route::post('/Dt_Channel_Remote', 'Channel_Remote_Controller@create');
Route::delete('/Dt_Channel_Remote','Channel_Remote_Controller@delete');

Route::get('/Tr_Tv_Channel_Used','Tv_Channel_Used_Controller@read');
Route::post('/Tr_Tv_Channel_Used', 'Tv_Channel_Used_Controller@create');
Route::delete('/Tr_Tv_Channel_Used','Tv_Channel_Used_Controller@delete');


Route::group(['middleware' => '\App\Http\Middleware\ApiTokenProtector'],function(){
  Route::put('/User', 'User_Controller@update')->middleware('\App\Http\Middleware\HandlePutFormData');
  Route::delete('/User', 'User_Controller@delete')->middleware('\App\Http\Middleware\HandlePutFormData');
});
