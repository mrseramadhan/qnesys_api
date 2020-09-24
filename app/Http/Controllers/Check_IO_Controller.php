<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Format_API;
use App\Tr_Check_IO;
use App\Ms_Guest;
use File;

class Check_IO_Controller extends Controller
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
            $query=Tr_Check_IO::select($select);

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
                  $data_out=DB::select('SELECT '.$request_body->select.' from tr_check_io WHERE '.$request_body->custom_condition);
                }
                else
                {
                  $data_out=DB::select('SELECT * from tr_check_io WHERE '.$request_body->custom_condition);
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
              'primary'=>'id_check_io',
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
          'id_hotel'=>true,
          'id_room'=>true,
          'id_guest'=>true,
          'datetime_checkin'=>true,
          'order_via'=>true
        );

        $check_result=check_input_format($checker,$request_body);
        $controller_message='';
        $controller_failed=0;
        $controller_success=0;
        if($check_result->accept)
        {
          if(empty(@$request_body->id_check_io))
          {
            $data_guest=Ms_Guest::where('id_guest',@$request_body->id_guest)->get();
            $last_nik_used=null;
            $last_name_used=null;
            $last_email_used=null;
            $last_phone_used=null;
            if($data_guest->count()>0)
            {
              $last_nik_used=$data_guest->first()->nik;
              $last_name_used=$data_guest->first()->guest_name;
              $last_email_used=$data_guest->first()->email;
              $last_phone_used=$data_guest->first()->phone;
            }

            $data_check_in=Tr_Check_IO::where('id_guest',@$request_body->id_guest)->where('datetime_checkout',null)->get();
            //if($data_check_in->count()==0) JIKA 1 GUEST 1 CHECK IN MAKA NYALAKAN INI
            if(true)
            {
              try{
                $result=Tr_Check_IO::create([
                  'id_hotel'=>@$request_body->id_hotel,
                  'id_room'=>@$request_body->id_room,
                  'id_guest'=>@$request_body->id_guest,
                  'last_nik_used'=>@$last_nik_used,
                  'last_name_used'=>@$last_name_used,
                  'last_email_used'=>@$last_email_used,
                  'last_phone_used'=>@$last_phone_used,
                  'datetime_checkin'=>@$request_body->datetime_checkin,
                  'order_via'=>@$request_body->order_via
                ]);
              }
              catch(\Illuminate\Database\QueryException $e)
              {
                $controller_message.=''.$e->getMessage();
                $controller_failed++;
              }
            }
            else
            {
              $controller_message.=''.'Sorry the guest already check in, id_check_io = '.$data_check_in->first()->id_check_io;
              $controller_failed++;
            }

            if(!empty($result->id_check_io))
            {
              $data_out=(object)
                array(
                  'id_check_io'=>$result->id_check_io
              );
              $controller_success++;
              $controller_message='Success to create new check in data';
            }
            else
            {
              $controller_failed++;
              $controller_message.=', Failed to create new check in data';
            }
          }
          else
          {
            $data_update=Tr_Check_IO::find($request_body->id_check_io);
            if(!empty($data_update))
            {
              if(!empty($request_body->id_hotel))
              {
                $data_update->id_hotel = $request_body->id_hotel;
              }
              if(!empty($request_body->id_room))
              {
                $data_update->id_room = $request_body->id_room;
              }
              if(!empty($request_body->id_guest))
              {
                $data_update->id_guest = $request_body->id_guest;
              }
              if(!empty($request_body->last_nik_used))
              {
                $data_update->last_nik_used = $request_body->last_nik_used;
              }
              if(!empty($request_body->last_name_used))
              {
                $data_update->last_name_used = $request_body->last_name_used;
              }
              if(!empty($request_body->last_phone_used))
              {
                $data_update->last_phone_used = $request_body->last_phone_used;
              }
              if(!empty($request_body->last_email_used))
              {
                $data_update->last_email_used = $request_body->last_email_used;
              }
              if(!empty($request_body->datetime_checkin))
              {
                $data_update->datetime_checkin = $request_body->datetime_checkin;
              }
              // if(!empty($request_body->datetime_checkout))
              // {
              //   $data_update->datetime_checkout = $request_body->datetime_checkout;
              // }

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
                    'id_check_io'=>$request_body->id_check_io
                );
                $controller_success++;
                $controller_message='Success to update check in/out data';
              }
              else
              {
                $controller_failed++;
                $controller_message.=', Failed to update check in/out data';
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
              'primary'=>'id_check_io',
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
          'id_check_io'=>true
        );
        $check_result=check_input_format($checker,$request_body);
        $controller_message='';
        $controller_failed=0;
        $controller_success=0;
        if($check_result->accept)
        {
          if(!is_array($request_body->id_check_io))
          {
            $request_body->id_check_io=array($request_body->id_check_io);
          }

          $file_pic=Tr_Check_IO::whereIn('id_check_io',$request_body->id_check_io)->get();

          if(Tr_Check_IO::whereIn('id_check_io',$request_body->id_check_io)->delete())
          {
            $data_out=$request_body->id_check_io;
            if(is_array($request_body->id_check_io))
            {
              $controller_success+=count($request_body->id_check_io);
            }
            else
            {
              $controller_success++;
            }

            $controller_message='Success to delete check in/out data';
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
              'primary'=>'id_check_io',
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