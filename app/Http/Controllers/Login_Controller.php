<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Format_API;

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

      echo set_format_api(
        true,
        $checker,
        $data_format
      );
      $success=0;
      $failed=0;

      // "status": true,
      // "success_count"	: 3,
   		// "failed_count"	: 0,
			// "count"	: 3,
			// "message" : "data was found $count"
			// "data" : [
			// 		["id_hotel":1,"nama_hotel":"Susan Hot & el","keterangan":"ugh"],
			// 		["id_hotel":2,"nama_hotel":"Elan Susanti Hotel","keterangan":"ouch"],
			// 		["id_hotel":3,"nama_hotel":"Elan Susanti Hotel","keterangan":"ouch"]
			// 	 ]
      //
   		// "message" : "success $success_count & failed $failed_count",
      // ""
      // if()

    }


}
