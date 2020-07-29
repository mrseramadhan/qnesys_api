<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Format_API;
use App\Ms_User;

class Login_Controller extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    function get_token(Request $request)
    {
      if(is_json($request->getContent()))
      {
        $data=json_decode($request->getContent());
      }
      else
      {
        $data=$request;
      }

      //Untuk melakukan pengecheckan data dan hanya untuk IN
      $checker=array(
        'username'=>true,
        'password'=>true
      );

      $data_format=array(
        'in'=>$data,
        'out'=>array(
          array(
            'token'=>Str::random('5').date('d').Str::random('5').date('m').Str::random('5').date('y').Str::random('5').date('H').Str::random('5').date('i').Str::random('5').date('s'),
            'username'=>'',
            'id_user'=>'1'
          )
        )
      );

      return response(
        set_format_api(
          true,
          $checker,
          $data_format
        ), 200)
        ->header('Content-Type', 'json')
        ->header('API-Version', get_api_patch())
      ;


    }


}
