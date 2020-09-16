<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Format_API;
use App\Dt_Room_Hardware;

class Room_Hardware_Controller extends Controller
{
  function read(Request $request)
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
      'select'=>true,
      'where'=>true,
      'where_in'=>true,
      'like'=>true,
      'order'=>true,
      'limit'=>true,
      'offset'=>true,
      'custom_condition'=>true
    );

    $check_result=check_input_format($checker,$request_body);
    $controller_message='';
    $controller_failed=0;
    $controller_success=0;
    if($check_result->accept)
    {
        $select=explode(',',str_replace(" ","",$request_body->select));
        $query=Dt_Room_Hardware::select($select);

        if(empty($request_body->custom_condition)){
            if(is_array($request_body->where))
            {
              foreach ($request_body->where as $key => $row) {
                  if(is_array($row))
                  {
                    if(!empty(@$row[0]) && !empty(@$row[1]) && !empty(@$row[2]))
                    {
                      $query->where($row[0],$row[1],$row[2]);
                    }
                  }
                  else
                  {
                    if(!empty(@$row->field) && !empty(@$row->operator) && !empty(@$row->value))
                    {
                      $query->where(@$row->field,@$row->operator,@$row->value);
                    }
                  }
              }
            }
            else if(!empty($request_body->where))
            {
              if(!empty(@$request_body->where->field) && !empty(@$request_body->where->value))
              {
                $query->where(@$request_body->where->field,@$request_body->where->value);
              }
              else
              {
                $controller_message.=', wrong where format';
                $controller_failed++;
              }
            }


            if(is_array($request_body->where_in))
            {
              foreach ($request_body->where_in as $key => $row) {
                  if(!empty(@$row->field) && !empty(@$row->value))
                  {
                    if(is_array(@$row->value))
                    {
                      $query->whereIn(@$row->field,$row->value);
                    }
                    else
                    {
                      $query->whereIn(@$row->field,array($row->value));
                    }
                  }
              }
            }
            else if(!empty($request_body->where_in))
            {
              if(!empty(@$request_body->where_in->field) && !empty(@$request_body->where_in->value))
              {
                if(is_array(@$request_body->where_in->value))
                {
                  $query->whereIn(@$request_body->where_in->field,@$request_body->where_in->value);
                }
                else
                {
                  $query->whereIn(@$request_body->where_in->field,array(@$request_body->where_in->value));
                }
              }
              else
              {
                $controller_message.=', wrong where_in format';
                $controller_failed++;
              }
            }

            if(is_array($request_body->like))
            {
              foreach ($request_body->like as $key => $row) {
                  if(is_array($row))
                  {
                    if(!empty(@$row[0]) && !empty(@$row[1]))
                    {
                      $query->where($row[0],'like','%'.$row[1].'%');
                    }
                  }
                  else
                  {
                    if(!empty(@$row->field) && !empty(@$row->value))
                    {
                      $query->where(@$row->field,'like','%'.@$row->value.'%');
                    }
                  }
              }
            }
            else if(!empty($request_body->like))
            {
              if(!empty(@$request_body->like->field) && !empty(@$request_body->like->value))
              {
                $query->where(@$request_body->like->field,'like','%'.@$request_body->like->value.'%');
              }
              else
              {
                $controller_message.=', wrong like format';
                $controller_failed++;
              }
            }

            if(is_array($request_body->order))
            {
              foreach ($request_body->order as $key => $row) {
                  if(is_array($row))
                  {
                    if(!empty(@$row[0]) && !empty(@$row[1]))
                    {
                      $query->orderBy($row[0],$row[1]);
                    }
                  }
                  else
                  {
                    if(!empty(@$row->field) && !empty(@$row->type))
                    {
                      $query->orderBy(@$row->field,@$row->type);
                    }
                  }
              }
            }
            else if(!empty($request_body->order))
            {
              if(!empty(@$request_body->order->field) && !empty(@$request_body->order->field))
              {
                $query->orderBy(@$row->field,@$row->type);
              }
              else
              {
                $controller_message.=', wrong order format';
                $controller_failed++;
              }
            }

            if(!empty($request_body->limit))
            {
              $query->limit($request_body->limit);
            }

            if(!empty($request_body->offset))
            {
              $query->offset($request_body->offset);
            }
            try{
              $data_out=$query->get()->toArray();
              $controller_success++;
            }
            catch(\Illuminate\Database\QueryException $e)
            {
              $controller_message.=''.$e->getMessage();
              $controller_failed++;
            }

        }
        else
        {
          try{
            if(!empty($request_body->select))
            {
              $data_out=DB::select('SELECT '.$request_body->select.' from dt_room_hardware WHERE '.$request_body->custom_condition);
            }
            else
            {
              $data_out=DB::select('SELECT * from dt_room_hardware WHERE '.$request_body->custom_condition);
            }
            $controller_success++;
          }
          catch(\Illuminate\Database\QueryException $e)
          {
            $controller_message.=''.$e->getMessage();
            $controller_failed++;
          }
        }
    }
    else
    {
        $controller_failed++;
        $controller_message.='Format not accepted';
    }

    return response(
      set_format_api(
        @$data_out,
        array(
          'primary'=>'id_room_hardware',
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

  function create(Request $request)
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
      'id_room'=>true,
      'jenis_hardware'=>true,
      'nama_hardware'=>true,
      //'koneksi'=>true,
      //'bluetooh_mac_address'=>true,
      //'topic_mqtt'=>true,
      //'mqtt_username'=>true,
      //'mqtt_password'=>true,
      //'ip_address'=>true,
      //'status'=>true
    );

    $check_result=check_input_format($checker,$request_body);
    $controller_message='';
    $controller_failed=0;
    $controller_success=0;
    if($check_result->accept)
    {
      if(empty(@$request_body->id_room_hardware))
      {
        if(empty(@$request_body->status))
        {
          @$request_body->status=0;
        }

        try{
          $result=Dt_Room_Hardware::create([
            'id_room_hardware'=>@$request_body->id_room_hardware,
            'id_room'=>@$request_body->id_room,
            'jenis_hardware'=>@$request_body->jenis_hardware,
            'nama_hardware'=>@$request_body->nama_hardware,
            'koneksi'=>@$request_body->koneksi,
            'bluetooth_mac_address'=>@$request_body->bluetooth_mac_address,
            'topic_mqtt'=>@$request_body->topic_mqtt,
            'mqtt_username'=>@$request_body->mqtt_username,
            'mqtt_password'=>@$request_body->mqtt_password,
            'ip_address'=>@$request_body->ip_address,
            'status'=>@$request_body->status
          ]);
        }
        catch(\Illuminate\Database\QueryException $e)
        {
          $controller_message.=''.$e->getMessage();
          $controller_failed++;
        }

        if(!empty($result->id_room_hardware))
        {
          $data_out=(object)
            array(
              'id_room_hardware'=>$result->id_room_hardware
          );
          $controller_success++;
          $controller_message='Success to create new room hardware';
        }
        else
        {
          $controller_failed++;
          $controller_message.=', Failed to create new room hardware';
        }
      }
      else
      {
        $data_update=Dt_Room_Hardware::find($request_body->id_room_hardware);
        if(!empty($data_update))
        {
          if(!empty($request_body->id_room_hardware))
          {
            $data_update->id_room_hardware = $request_body->id_room_hardware;
          }
          if(!empty($request_body->id_room))
          {
            $data_update->id_room = $request_body->id_room;
          }
          if(!empty($request_body->jenis_hardware))
          {
            $data_update->jenis_hardware = $request_body->jenis_hardware;
          }
          if(!empty($request_body->nama_hardware))
          {
            $data_update->nama_hardware = $request_body->nama_hardware;
          }
          if(!empty($request_body->koneksi))
          {
            $data_update->koneksi = $request_body->koneksi;
          }
          if(!empty($request_body->bluetooh_mac_address))
          {
            $data_update->bluetooh_mac_address = $request_body->bluetooh_mac_address;
          }
          if(!empty($request_body->topic_mqtt))
          {
            $data_update->topic_mqtt = $request_body->topic_mqtt;
          }
          if(!empty($request_body->mqtt_username))
          {
            $data_update->mqtt_username = $request_body->mqtt_username;
          }
          if(!empty($request_body->mqtt_password))
          {
            $data_update->mqtt_password = $request_body->mqtt_password;
          }
          if(!empty($request_body->ip_address))
          {
            $data_update->ip_address = $request_body->ip_address;
          }
          if(!empty($request_body->status))
          {
            $data_update->status = $request_body->status;
          }

          try{
              $execute = $data_update->save();
          }
          catch(\Illuminate\Database\QueryException $e)
          {
            $controller_message.=''.$e->getMessage();
            $controller_failed++;
          }


          if($execute)
          {
            $data_out=(object)
              array(
                'id_room_hardware'=>$request_body->id_room_hardware
            );
            $controller_success++;
            $controller_message='Success to update room hardware data';
          }
          else
          {
            $controller_failed++;
            $controller_message.=', Failed to update room hardware data';
          }
        }
        else
        {
          $controller_failed++;
          $controller_message='Data not found';
        }
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
          'primary'=>'id_room_hardware',
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

  function delete(Request $request)
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
      'id_room_hardware'=>true
    );
    $check_result=check_input_format($checker,$request_body);
    $controller_message='';
    $controller_failed=0;
    $controller_success=0;
    if($check_result->accept)
    {
      if(!is_array($request_body->id_room_hardware))
      {
        $request_body->id_room_hardware=array($request_body->id_room_hardware);
      }

      if(Dt_Room_Hardware::whereIn('id_room_hardware',$request_body->id_room_hardware)->delete())
      {
        $data_out=$request_body->id_room_hardware;
        if(is_array($request_body->id_room_hardware))
        {
          $controller_success+=count($request_body->id_room_hardware);
        }
        else
        {
          $controller_success++;
        }

        $controller_message='Success to delete room hardware';
      }
      else
      {
        $controller_failed++;
        $controller_message='Data not found';
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
          'primary'=>'id_room_hardware',
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
