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

Route::post('/GetBilling', 'Billing_Controller@read');
// Route::post('/Billing', 'Billing_Controller@create');
// Route::delete('/Billing', 'Billing_Controller@delete');

Route::post('/GetBillingItem', 'Billing_Item_Controller@read');
// Route::post('/BillingItem', 'Billing_Item_Controller@create');
// Route::delete('/BillingItem', 'Billing_Item_Controller@delete');

Route::post('/QWERTYUIOPASDFGHJKLZXCVBNM','Token@read');

Route::post('/GetProvinsi','Provinsi_Controller@read');
Route::post('/GetKabupaten','Kabupaten_Controller@read');
Route::post('/GetKecamatan','Kecamatan_Controller@read');
Route::post('/GetKelurahan','Kelurahan_Controller@read');

Route::post('/TokenIptv', 'Login_Controller@iptv_token');
Route::post('/Login', 'Login_Controller@login');
Route::post('/GetUser', 'User_Controller@read');
Route::post('/PostGuest', 'Guest_Controller@create');
Route::post('/PostGuestAccess', 'Check_IO_Access_Controller@create');
Route::post('/GetMenu', 'Menu_Controller@read');
Route::post('/GetMenuService', 'Menu_Service_Controller@read');
Route::post('/PostMenuService', 'Menu_Service_Controller@create');
Route::post('/DeleteMenuService', 'Menu_Service_Controller@delete');

Route::group(['middleware' => '\App\Http\Middleware\ApiTokenProtector'],function(){
  Route::post('/PostUser', 'User_Controller@create');
  Route::post('/DeleteUser', 'User_Controller@delete');

  Route::post('/GetStatusCleanMyRoom','Status_Clean_My_Room_Controller@read');
  Route::post('/PostStatusCleanMyRoom','Status_Clean_My_Room_Controller@create');
  Route::post('/DeleteStatusCleanMyRoom','Status_Clean_My_Room_Controller@delete');

  Route::post('/GetStatusDND','Status_DND_Controller@read');
  Route::post('/PostStatusDND','Status_DND_Controller@create');
  Route::post('/DeleteStatusDND','Status_DND_Controller@delete');

  Route::post('/GetStatusTV','Status_TV_Controller@read');
  Route::post('/PostStatusTV','Status_TV_Controller@create');
  Route::post('/DeleteStatusTV','Status_TV_Controller@delete');

  Route::post('/GetStatusAC','Status_AC_Controller@read');
  Route::post('/PostStatusAC','Status_AC_Controller@create');
  Route::post('/DeleteStatusAC','Status_AC_Controller@delete');

  Route::post('/GetStatusSmartLock','Status_Smart_Lock_Controller@read');
  Route::post('/PostStatusSmartLock','Status_Smart_Lock_Controller@create');
  Route::post('/DeleteStatusSmartLock','Status_Smart_Lock_Controller@delete');

  Route::post('/GetStatusLight','Status_Light_Controller@read');
  Route::post('/PostStatusLight','Status_Light_Controller@create');
  Route::post('/DeleteStatusLight','Status_Light_Controller@delete');

  Route::post('/GetDivision', 'Division_Controller@read');
  Route::post('/PostDivision', 'Division_Controller@create');
  Route::post('/DeleteDivision', 'Division_Controller@delete');

  Route::post('/GetDivisionPrivilege', 'Division_Privilege_Controller@read');
  Route::post('/PostDivisionPrivilege', 'Division_Privilege_Controller@create');
  Route::post('/DeleteDivisionPrivilege', 'Division_Privilege_Controller@delete');

  Route::post('/GetDivisionPrivilegeMenu', 'Division_Privilege_Menu_Controller@read');
  Route::post('/PostDivisionPrivilegeMenu', 'Division_Privilege_Menu_Controller@create');
  Route::post('/DeleteDivisionPrivilegeMenu', 'Division_Privilege_Menu_Controller@delete');


  Route::post('/PostMenu', 'Menu_Controller@create');
  Route::post('/DeleteMenu', 'Menu_Controller@delete');

  Route::post('/GetMasterAds','Ads_Controller@read');
  Route::post('/PostMasterAds','Ads_Controller@create');
  Route::post('/DeleteMasterAds','Ads_Controller@delete');

  Route::post('/GetChildAds','Child_Ads_Controller@read');
  Route::post('/PostChildAds','Child_Ads_Controller@create');
  Route::post('/DeleteChildAds','Child_Ads_Controller@delete');

  Route::post('/GetAdsIPTVLocation','Ads_Iptv_Location_Controller@read');
  Route::post('/PostAdsIPTVLocation','Ads_Iptv_Location_Controller@create');
  Route::post('/DeleteAdsIPTVLocation','Ads_Iptv_Location_Controller@delete');

  Route::post('/GetAdsIPTVTrx','Ads_Iptv_Trx_Controller@read');
  Route::post('/PostAdsIPTVTrx','Ads_Iptv_Trx_Controller@create');
  Route::post('/DeleteAdsIPTVTrx','Ads_Iptv_Trx_Controller@delete');

  Route::post('/GetSSID','Ssid_Hotel_Controller@read');
  Route::post('/PostSSID', 'Ssid_Hotel_Controller@create');
  Route::post('/DeleteSSID','Ssid_Hotel_Controller@delete');

  Route::post('/GetInformation','Information_Controller@read');
  Route::post('/PostInformation', 'Information_Controller@create');
  Route::post('/DeleteInformation','Information_Controller@delete');

  Route::post('/GetAroundHotel','Around_Controller@read');
  Route::post('/PostAroundHotel', 'Around_Controller@create');
  Route::post('/DeleteAroundHotel','Around_Controller@delete');

  Route::post('/GetCategoryAroundHotel','Category_Around_Controller@read');
  Route::post('/PostCategoryAroundHotel', 'Category_Around_Controller@create');
  Route::post('/DeleteCategoryAroundHotel','Category_Around_Controller@delete');

  Route::post('/GetCategoryGalery','Category_Galery_Controller@read');
  Route::post('/PostCategoryGalery', 'Category_Galery_Controller@create');
  Route::post('/DeleteCategoryGalery','Category_Galery_Controller@delete');

  Route::post('/GetGalery','Galery_Controller@read');
  Route::post('/PostGalery', 'Galery_Controller@create');
  Route::post('/DeleteGalery','Galery_Controller@delete');

  Route::post('/GetPublicTV','Public_Tv_Controller@read');
  Route::post('/PostPublicTV', 'Public_Tv_Controller@create');
  Route::post('/DeletePublicTV','Public_Tv_Controller@delete');

  Route::post('/GetHotel','Hotel_Controller@read');
  Route::post('/PostHotel', 'Hotel_Controller@create');
  Route::post('/DeleteHotel','Hotel_Controller@delete');

  Route::post('/GetFacilitiesCategory','Facilities_Category_Controller@read');
  Route::post('/PostFacilitiesCategory', 'Facilities_Category_Controller@create');
  Route::post('/DeleteFacilitiesCategory','Facilities_Category_Controller@delete');

  Route::post('/GetFacilities','Hotel_Facilities_Controller@read');
  Route::post('/PostFacilities', 'Hotel_Facilities_Controller@create');
  Route::post('/DeleteFacilities','Hotel_Facilities_Controller@delete');

  Route::post('/GetTvCategory','Tv_Category_Controller@read');
  Route::post('/PostTvCategory', 'Tv_Category_Controller@create');
  Route::post('/DeleteTvCategory','Tv_Category_Controller@delete');

  Route::post('/GetTvChannel','Tv_Channel_Controller@read');
  Route::post('/PostTvChannel', 'Tv_Channel_Controller@create');
  Route::post('/DeleteTvChannel','Tv_Channel_Controller@delete');

  Route::post('/GetChannelRemote','Channel_Remote_Controller@read');
  Route::post('/PostChannelRemote', 'Channel_Remote_Controller@create');
  Route::post('/DeleteChannelRemote','Channel_Remote_Controller@delete');

  Route::post('/GetTvChannelUsed','Tv_Channel_Used_Controller@read');
  Route::post('/PostTvChannelUsed', 'Tv_Channel_Used_Controller@create');
  Route::post('/DeleteTvChannelUsed','Tv_Channel_Used_Controller@delete');

  Route::post('/GetRoomHardware', 'Room_Hardware_Controller@read');
  Route::post('/PostRoomHardware', 'Room_Hardware_Controller@create');
  Route::post('/DeleteRoomHardware', 'Room_Hardware_Controller@delete');

  Route::post('/GetSmartIR', 'Smart_IR_Controller@read');
  Route::post('/PostSmartIR', 'Smart_IR_Controller@create');
  Route::post('/DeleteSmartIR', 'Smart_IR_Controller@delete');

  Route::post('/GetSmartLock', 'Smart_Lock_Controller@read');
  Route::post('/PostSmartLock', 'Smart_Lock_Controller@create');
  Route::post('/DeleteSmartLock', 'Smart_Lock_Controller@delete');

  Route::post('/GetSmartSwitch', 'Smart_Switch_Controller@read');
  Route::post('/PostSmartSwitch', 'Smart_Switch_Controller@create');
  Route::post('/DeleteSmartSwitch', 'Smart_Switch_Controller@delete');

  Route::post('/GetRoom', 'Room_Controller@read');
  Route::post('/PostRoom', 'Room_Controller@create');
  Route::post('/DeleteRoom', 'Room_Controller@delete');

  Route::post('/GetRoomCategory', 'Room_Category_Controller@read');
  Route::post('/PostRoomCategory', 'Room_Category_Controller@create');
  Route::post('/DeleteRoomCategory', 'Room_Category_Controller@delete');

  Route::post('/GetCheckIO','Check_IO_Controller@read');
  Route::post('/PostCheckIO', 'Check_IO_Controller@create');
  Route::post('/DeleteCheckIO','Check_IO_Controller@delete');

  Route::post('/GetGuest', 'Guest_Controller@read');

  Route::post('/DeleteGuest', 'Guest_Controller@delete');

  Route::post('/GetGuestAccess', 'Check_IO_Access_Controller@read');

  Route::post('/DeleteGuestAccess', 'Check_IO_Access_Controller@delete');

  Route::post('/GetEvent','Event_Controller@read');
  Route::post('/PostEvent', 'Event_Controller@create');
  Route::post('/DeleteEvent','Event_Controller@delete');

  Route::post('/GetFoodCategory', 'Category_Food_Controller@read');
  Route::post('/PostFoodCategory', 'Category_Food_Controller@create');
  Route::post('/DeleteFoodCategory', 'Category_Food_Controller@delete');

  Route::post('/GetFood', 'Food_Controller@read');
  Route::post('/PostFood', 'Food_Controller@create');
  Route::post('/DeleteFood', 'Food_Controller@delete');

  Route::post('/GetService', 'Service_Controller@read');
  Route::post('/PostService', 'Service_Controller@create');
  Route::post('/DeleteService', 'Service_Controller@delete');

  Route::post('/GetFood', 'Food_Controller@read');
  Route::post('/PostFood', 'Food_Controller@create');
  Route::post('/DeleteFood', 'Food_Controller@delete');

  Route::post('/GetHotelFacilities','Hotel_Facilities_Controller@read');
  Route::post('/PostHotelFacilities','Hotel_Facilities_Controller@create');
  Route::post('/DeleteHotelFacilities','Hotel_Facilities_Controller@delete');

  Route::post('/GetCart','Cart_Controller@read');
  Route::post('/PostCart', 'Cart_Controller@create');
  Route::post('/DeleteCart','Cart_Controller@delete');

  Route::post('/GetCartItem','Cart_Item_Controller@read');
  Route::post('/PostCartItem', 'Cart_Item_Controller@create');
  Route::post('/DeleteCartItem','Cart_Item_Controller@delete');

  Route::post('/GetPromotion','Promotion_Controller@read');
  Route::post('/PostPromotion', 'Promotion_Controller@create');
  Route::post('/DeletePromotion','Promotion_Controller@delete');

  Route::post('/GetGift','Gift_Controller@read');
  Route::post('/PostGift', 'Gift_Controller@create');
  Route::post('/DeleteGift','Gift_Controller@delete');
});
