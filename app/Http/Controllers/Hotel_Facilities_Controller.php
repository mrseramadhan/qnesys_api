<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use app\Format_API;
use App\Ms_Hotel_Facilities;
use Exception;

class Hotel_Facilities_Controller extends Controller
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
          $query=Ms_Hotel_Facilities::select($select);

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
                $data_out=DB::select('SELECT '.$request_body->select.' from ms_hotel_facilities WHERE '.$request_body->custom_condition);
              }
              else
              {
                $data_out=DB::select('SELECT * from ms_hotel_facilities WHERE '.$request_body->custom_condition);
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
            'primary'=>'id_facilities',
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
        'id_facilities_category'    => true,
        'facilities_name'           => true,
        'description'               => true,
        'picture'                   => true,
        'jam_operasi'               => true
      );

      $check_result=check_input_format($checker,$request_body);
      $controller_message='';
      $controller_failed=0;
      $controller_success=0;

      if($check_result->accept)
      {
        $picture = $request->file('picture');
        $move_picture = 'Hotel_Facilitites_'.date('dmYHis').'.'.$picture->getClientOriginalName();
        $path = 'assets/img';
        $picture->move($path,$move_picture);

        if($request_body->id_facilities == null){
            $result=Ms_Hotel_Facilities::create([
                'id_facilities_category'    => $request_body->id_facilities_category,
                'facilities_name'           => $request_body->facilities_name,
                'description'               => $request_body->description,
                'picture'                   => $move_picture,
                'jam_operasi'               => $request_body->jam_operasi
              ]);

              if($result->id_facilities)
              {
                  $data_out=(object)
                    array(
                    'id_facilities'=>$result->id_facilities
                  );
                  $controller_success++;
                  $controller_message='Success to create new facilities';
              }
              else
              {
                  $controller_failed++;
                  $controller_message='Failed to create new facilities';
              }
        }else{
            $result=Ms_Hotel_Facilities::where('id_facilities','=',$request_body->id_facilities)
                ->update([
                    'id_facilities_category'    => $request_body->id_facilities_category,
                    'facilities_name'           => $request_body->facilities_name,
                    'description'               => $request_body->description,
                    'picture'                   => $move_picture,
                    'jam_operasi'               => $request_body->jam_operasi
              ]);

              if($result)
              {
                  $data_out=(object)
                    array(
                    'id_facilities'=>$request_body->id_facilities
                  );
                  $controller_success++;
                  $controller_message='Success to update facilities';
              }
              else
              {
                  $controller_failed++;
                  $controller_message='Failed to update facilities';
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
            'primary'=>'id_facilities',
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
        'id_facilities'=>true
      );
      $check_result=check_input_format($checker,$request_body);
      $controller_message='';
      $controller_failed=0;
      $controller_success=0;
      if($check_result->accept)
      {

        $data_facilities = Ms_Hotel_Facilities::select('picture')->where('id_facilities', $request_body->id_facilities)->first();
        if($data_facilities){
          $filepath = 'assets/img/';
          $picture = $filepath.$data_facilities->picture;
          @unlink($picture);
        }else{
          $controller_failed++;
          $controller_message='Data not found';
        }

        if(!is_array($request_body->id_facilities))
      	{
        	$request_body->id_facilities=array($request_body->id_facilities);
          if(Ms_Hotel_Facilities::whereIn('id_facilities',$request_body->id_facilities)->delete())
          {
            $data_out=$request_body->id_facilities;
            if(is_array($request_body->id_facilities))
            {
              $controller_success+=count($request_body->id_facilities);
            }
            else
            {
              $controller_success++;
            }

            $controller_message='Success to delete facilities';
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
            'primary'=>'id_facilities',
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