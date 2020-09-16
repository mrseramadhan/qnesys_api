<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Format_API;
use App\Dt_Smart_Switch;

class Smart_Switch_Controller extends Controller
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
          $query=Dt_Smart_Switch::select($select);
  
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
                      $query->whereIn(@$row->field,$row->value);
                    }
                }
              }
              else if(!empty($request_body->where_in))
              {
                if(!empty(@$request_body->where_in->field) && !empty(@$request_body->where_in->value))
                {
                  $query->whereIn(@$request_body->where_in->field,@$request_body->where_in->value);
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
                $data_out=DB::select('SELECT '.$request_body->select.' from dt_smart_switch WHERE '.$request_body->custom_condition);
              }
              else
              {
                $data_out=DB::select('SELECT * from dt_smart_switch WHERE '.$request_body->custom_condition);
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
            'primary'=>'id_smart_switch',
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
        'type_koneksi'=>true,
        'ip_address'=>true,
        'kode_produk'=>true,
        //'bluetooh_mac_address'=>true,
        'mqtt_topic'=>true,
        'mqtt_username'=>true,
        'mqtt_password'=>true,
        'ip_address'=>true,
        //'status'=>true
      );
  
      $check_result=check_input_format($checker,$request_body);
      $controller_message='';
      $controller_failed=0;
      $controller_success=0;
      if($check_result->accept)
      {
        if(empty(@$request_body->id_smart_switch))
        {
          try{
            $result=Dt_Smart_Switch::create([
              'id_room'=>@$request_body->id_room,
              'type_koneksi'=>@$request_body->type_koneksi,
              'kode_produk'=>@$request_body->kode_produk,
              'mqtt_topic'=>@$request_body->mqtt_topic,
              'mqtt_username'=>@$request_body->mqtt_username,
              'mqtt_password'=>@$request_body->mqtt_password,
              'ip_address'=>@$request_body->ip_address,
            ]);
          }
          catch(\Illuminate\Database\QueryException $e)
          {
            $controller_message.=''.$e->getMessage();
            $controller_failed++;
          }
  
          if(!empty($result->id_smart_switch))
          {
            $data_out=(object)
              array(
                'id_smart_switch'=>$result->id_smart_switch
            );
            $controller_success++;
            $controller_message='Success to create new smart switch';
          }
          else
          {
            $controller_failed++;
            $controller_message.=', Failed to create new smart switch';
          }
        }
        else
        {
          $data_update=Dt_Smart_Switch::find($request_body->id_smart_switch);
          if(!empty($data_update))
          {
            if(!empty($request_body->id_smart_switch))
            {
              $data_update->id_smart_switch = $request_body->id_smart_switch;
            }
            if(!empty($request_body->id_room))
            {
              $data_update->id_room = $request_body->id_room;
            }
            if(!empty($request_body->kode_produk))
            {
              $data_update->kode_produk = $request_body->kode_produk;
            }
            if(!empty($request_body->type_koneksi))
            {
              $data_update->type_koneksi = $request_body->type_koneksi;
            }
            if(!empty($request_body->mqtt_topic))
            {
              $data_update->mqtt_topic = $request_body->mqtt_topic;
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
                  'id_smart_switch'=>$request_body->id_smart_switch
              );
              $controller_success++;
              $controller_message='Success to update smart switch data';
            }
            else
            {
              $controller_failed++;
              $controller_message.=', Failed to update smart switch data';
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
            'primary'=>'id_smart_switch',
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
        'id_smart_switch'=>true
      );
      $check_result=check_input_format($checker,$request_body);
      $controller_message='';
      $controller_failed=0;
      $controller_success=0;
      if($check_result->accept)
      {
        if(!is_array($request_body->id_smart_switch))
        {
          $request_body->id_smart_switch=array($request_body->id_smart_switch);
        }
  
        if(Dt_Smart_Switch::whereIn('id_smart_switch',$request_body->id_smart_switch)->delete())
        {
          $data_out=$request_body->id_smart_switch;
          if(is_array($request_body->id_smart_switch))
          {
            $controller_success+=count($request_body->id_smart_switch);
          }
          else
          {
            $controller_success++;
          }
  
          $controller_message='Success to delete smart switch';
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
            'primary'=>'id_smart_switch',
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
