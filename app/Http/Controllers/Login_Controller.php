<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Format_API;
use App\Ms_User;
use App\Ms_Guest;
use App\Sy_Token;


class Login_Controller extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     function iptv_token(Request $request)
     {
       if(is_json($request->getContent()))
       {
         $request_body=json_decode($request->getContent());
       }
       else
       {
         $request_body=$request;
       }
       $checker=array(
         'username'=>true,
         'password'=>true
       );
       //Untuk melakukan pengecheckan data dan hanya untuk IN
       $checker=array(
         'id_hotel'=>true,
       );
       $check_result=check_input_format($checker,$request_body);
       $controller_message='';
       $controller_failed=0;
       $controller_success=0;
       if($check_result->accept)
       {
           $token=Str::random('5').date('d').Str::random('5').date('m').Str::random('5').date('y').Str::random('5').date('H').Str::random('5').date('i').Str::random('5').date('s');
           $result=Sy_Token::create([
             'token'=>$token,
             'id_hotel'=>@$request_body->id_hotel,
             'is_iptv'=>1,
             'active'=>1
           ]);
           $controller_success++;
           $data_out=(object)
           array(
            'token'=>$token,
            'id_hotel'=>@$request_body->id_hotel,
            'token_type'=>'IPTV',
           );
          //  $data_out=$token;
           $controller_message='Success to create new token';
       }
       else
       {
           $controller_failed++;
           $controller_message='Format not accepted';
       }

       return response(
         set_format_api(
           @$data_out,
           array(
             'primary'=>'token',
             'success'=>$check_result->success+$controller_success,
             'failed'=>$check_result->failed+$controller_failed,
             'message_front'=>$controller_message,
             'message_back'=>$check_result->message
           )
         ), 200)
         ->header('Content-Type', 'json')
         ->header('API-Version', get_api_patch())
       ;
     }

     function login(Request $request)
     {
       if(is_json($request->getContent()))
       {
         $request_body=json_decode($request->getContent());
       }
       else
       {
         $request_body=$request;
       }
       //Untuk melakukan pengecheckan data dan hanya untuk IN
       $checker=array(
         'username'=>true,
         'password'=>true
       );

       $check_result=check_input_format($checker,$request_body);
       $controller_message='';
       $controller_failed=0;
       $controller_success=0;
       if($check_result->accept)
       {
         $result_user=Ms_User::where('username',$request_body->username)->join('ms_division', 'ms_user.id_division', '=', 'ms_division.id_division')->join('ms_division_privilege','ms_user.id_division_privilege','=','ms_division_privilege.id_division_privilege')->get();
         $result_guest=Ms_Guest::where('username',$request_body->username)->get();
         if($result_user->count()>0)
         {
           if(password_verify($request_body->password,$result_user->first()->password))
           {
             Sy_Token::where('active', 1)->where('id_user', $result_user->first()->id_user)->update(['active' => 0]);
             $token=Str::random('5').date('d').Str::random('5').date('m').Str::random('5').date('y').Str::random('5').date('H').Str::random('5').date('i').Str::random('5').date('s');
             $result=Sy_Token::create([
               'token'=>$token,
               'id_user'=>@$result_user->first()->id_user,
               'active'=>1
             ]);
             $controller_success++;
             $data_out=(object)
             array(
              'token'=>$token,
              'id_hotel'=>@$result_user->first()->id_hotel,
              'id_privilage'=>@$result_user->first()->id_division_privilege,
              'privilage_name'=>@$result_user->first()->division_privilege_name,
              'division_name'=>@$result_user->first()->division_name,
              'token_type'=>'HOTEL_USER',
             );
            //  $data_out=$token;
             $controller_message='Success to create new token';
           }
           else
           {
             if($result_guest->count()>0)
             {
               if(password_verify($request_body->password,$result_guest->first()->password))
               {
                 Sy_Token::where('active', 1)->where('id_guest', $result_guest->first()->id_guest)->update(['active' => 0]);
                 $token=Str::random('5').date('d').Str::random('5').date('m').Str::random('5').date('y').Str::random('5').date('H').Str::random('5').date('i').Str::random('5').date('s');
                 $result=Sy_Token::create([
                   'token'=>$token,
                   'id_guest'=>@$result_guest->first()->id_guest,
                   'active'=>1
                 ]);
                 $controller_success++;
                 $data_out=(object)
                 array(
                  'token'=>$token,
                  'token_type'=>'GUEST',
                 );
                //  $data_out=$token;
                 $controller_message='Success to create new token';
               }
               else
               {
                 $controller_failed++;
                 $controller_message='Wrong password';
               }
             }
             else {
               $controller_failed++;
               $controller_message='Wrong password';
             }
           }
         }
         else if($result_guest->count()>0)
         {
           if(password_verify($request_body->password,$result_guest->first()->password))
           {
             Sy_Token::where('active', 1)->where('id_guest', $result_guest->first()->id_guest)->update(['active' => 0]);
             $token=Str::random('5').date('d').Str::random('5').date('m').Str::random('5').date('y').Str::random('5').date('H').Str::random('5').date('i').Str::random('5').date('s');
             $result=Sy_Token::create([
               'token'=>$token,
               'id_guest'=>@$result_guest->first()->id_guest,
               'active'=>1
             ]);
             $controller_success++;
             $data_out=(object)
             array(
              'token'=>$token,
              'token_type'=>'GUEST',
             );
            //  $data_out=$token;
             $controller_message='Success to create new token';
           }
           else
           {
             $controller_failed++;
             $controller_message='Wrong password';
           }
         }
         else
         {
           $controller_failed++;
           $controller_message='Username not found';
         }
       }
       else
       {
           $controller_failed++;
           $controller_message='Format not accepted';
       }

       return response(
         set_format_api(
           @$data_out,
           array(
             'primary'=>'token',
             'success'=>$check_result->success+$controller_success,
             'failed'=>$check_result->failed+$controller_failed,
             'message_front'=>$controller_message,
             'message_back'=>$check_result->message
           )
         ), 200)
         ->header('Content-Type', 'json')
         ->header('API-Version', get_api_patch())
       ;

     }


}
