<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Format_API;
use App\Ms_User;

class User_Controller extends Controller
{
  function insert(Request $request)
  {
    if(is_json($request->getContent()))
    {
      $parameter=json_decode($request->getContent());
    }
    else
    {
      $parameter=$request;
    }

    //Untuk melakukan pengecheckan data dan hanya untuk IN
    $checker=array(
      'name'=>true,
      'username'=>true,
      'password'=>true
    );

    $check_result=check_input_format($checker,$parameter);
    $controller_message='';
    $controller_failed=0;
    $controller_success=0;
    if($check_result->accept)
    {
      $result=Ms_User::create([
        'name'=>$parameter->name,
        'username'=>$parameter->username,
        'password'=>password_hash($parameter->password, PASSWORD_DEFAULT)
      ]);
      if(!empty($result->id_user))
      {
        $data_out=(object)
          array(
            'id_user'=>$result->id_user
        );
        $controller_success++;
        $controller_message='Success to create new user';
      }
      else
      {
        $controller_failed++;
        $controller_message='Failed to create new user';
      }
    }
    else
    {

    }

    return response(
      set_format_api(
        @$data_out,
        array(
          'primary'=>'id_user',
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
