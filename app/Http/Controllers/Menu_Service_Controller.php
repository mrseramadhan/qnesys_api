<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Format_API;
use App\Ms_Menu_Service;
use App\Ms_Service;
use Exception;
use File;

class Menu_Service_Controller extends Controller
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
        $query=Ms_Menu_Service::select($select);

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
              $data_out=DB::select('SELECT '.$request_body->select.' from ms_menu_service WHERE '.$request_body->custom_condition);
            }
            else
            {
              $data_out=DB::select('SELECT * from ms_menu_service WHERE '.$request_body->custom_condition);
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
          'primary'=>'id_menu_service',
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
      'title'=>true,
      'description'=>true,
      'picture'=>true,
      'icon'=>true,
      'direct_to_api'=>true,
    );

    $check_result=check_input_format($checker,$request_body);
    $controller_message='';
    $controller_failed=0;
    $controller_success=0;
    if($check_result->accept)
    {
      if(empty(@$request_body->id_menu_service))
      {
        $pic_picture = $request->file('picture');
        $file_picture='';
        $path = 'assets/img';

        if(!empty($request_body->picture))
        {
          $pic_picture->move($path,'MENUSERVICE_'.date('dmYHis').'.'.$pic_picture->getClientOriginalExtension());
          $file_picture='MENUSERVICE_'.date('dmYHis').'.'.$pic_picture->getClientOriginalExtension();
        }

        try{
          $result=Ms_Menu_Service::create([
            'id_hotel'=>@$request_body->id_hotel,
            'title'=>@$request_body->title,
            'description'=>@$request_body->description,
            'picture'=>@$file_picture,
            'icon'=>@$request_body->icon,
            'direct_to_api'=>@$request->direct_to_api
          ]);
        }
        catch(\Illuminate\Database\QueryException $e)
        {
          $controller_message.=''.$e->getMessage();
          $controller_failed++;
        }

        if(!empty($result->id_menu_service))
        {
          $data_out=(object)
            array(
              'id_menu_service'=>$result->id_menu_service
          );
          $controller_success++;
          $controller_message.='Success to create new menu service';
        }
        else
        {
          $controller_failed++;
          $controller_message.=', Failed to create new menu service';
        }
      }
      else
      {
        $data_update=Ms_Menu_Service::find($request_body->id_menu_service);
        $path = 'assets/img';
        if(!empty($data_update))
        {
          if(!empty($request_body->id_hotel))
          {
            $data_update->id_hotel = $request_body->id_hotel;
          }
          if(!empty($request_body->title))
          {
            $data_update->title = $request_body->title;
          }
          if(!empty($request_body->description))
          {
            $data_update->description = $request_body->description;
          }
          if(!empty($request_body->icon))
          {
            $data_update->icon = $request_body->icon;
          }
          if(!empty($request_body->direct_to_api))
          {
            $data_update->direct_to_api = $request_body->direct_to_api;
          }
          if(!empty($request_body->picture))
          {
            File::delete($path.'/'.$data_update->picture);
            $pic_picture = $request->file('picture');
            $pic_picture->move($path,$path,'MENUSERVICE_'.date('dmYHis').'.'.$pic_picture->getClientOriginalExtension());
            $data_update->picture = 'MENUSERVICE_'.date('dmYHis').'.'.$pic_picture->getClientOriginalExtension();
          }

          try{
            $execute = $data_update->save();
          }
          catch(\Illuminate\Database\QueryException $e)
          {
            $controller_message.=''.$e->getMessage();
            $controller_failed++;
          }

          if(@$execute)
          {
            $data_out=(object)
              array(
                'id_menu_service'=>$request_body->id_menu_service
            );
            $controller_success++;
            $controller_message='Success to update menu service';
          }
          else
          {
            $controller_failed++;
            $controller_message.=', Failed to update menu service';
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
          'primary'=>'id_menu_service',
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
      'id_menu_service'=>true
    );
    $check_result=check_input_format($checker,$request_body);
    $controller_message='';
    $controller_failed=0;
    $controller_success=0;
    if($check_result->accept)
    {
      if(!is_array($request_body->id_menu_service))
      {
        $request_body->id_menu_service=array($request_body->id_menu_service);
      }

      if(Ms_Menu_Service::whereIn('id_menu_service',$request_body->id_menu_service)->delete())
      {
        $data_out=$request_body->id_menu_service;
        if(is_array($request_body->id_menu_service))
        {
          $controller_success+=count($request_body->id_menu_service);
        }
        else
        {
          $controller_success++;
        }

        $controller_message='Success to delete menu service';
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
          'primary'=>'id_menu_service',
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
