<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Format_API;
use App\Ms_Guest;
use File;

class Guest_Controller extends Controller
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
        $query=Ms_Guest::select($select);

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
              $data_out=DB::select('SELECT '.$request_body->select.' from ms_guest WHERE '.$request_body->custom_condition);
            }
            else
            {
              $data_out=DB::select('SELECT * from ms_guest WHERE '.$request_body->custom_condition);
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
          'primary'=>'id_guest',
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

    );

    $check_result=check_input_format($checker,$request_body);
    $controller_message='';
    $controller_failed=0;
    $controller_success=0;
    if($check_result->accept)
    {
      if(empty(@$request_body->id_guest))
      {
        $pic_photo = $request->file('photo');
        $pic_scan_ktp = $request->file('scan_ktp');
        $file_photo='';
        $file_scan_ktp='';
        $path = 'assets/img';

        if(!empty($request->photo))
        {
          $pic_photo->move($path,$pic_photo->getClientOriginalName());
          $file_photo=$pic_photo->getClientOriginalName();
        }
        if(!empty($request->scan_ktp))
        {
          $pic_scan_ktp->move($path,$pic_scan_ktp->getClientOriginalName());
          $file_scan_ktp=$pic_scan_ktp->getClientOriginalName();
        }
        if(empty($request_body->guest_name))
        {
          $request_body->guest_name='Guest_'.date('dmYHis');
        }

        try{
          $result=Ms_Guest::create([
            'nik'=>@$request_body->nik,
            'guest_name'=>@$request_body->guest_name,
            'address'=>@$request_body->address,
            'pos_code'=>@$request_body->pos_code,
            'code_provinsi'=>@$request_body->code_provinsi,
            'code_kabupaten'=>@$request_body->code_kabupaten,
            'code_kelurahan'=>@$request_body->code_kelurahan,
            'phone'=>@$request_body->phone,
            'email'=>@$request_body->email,
            'gender'=>@$request_body->gender,
            'birthdate'=>@$request_body->birthdate,
            'photo'=>@$file_photo,
            'scan_ktp'=>@$file_scan_ktp,
          ]);
        }
        catch(\Illuminate\Database\QueryException $e)
        {
          $controller_message.=''.$e->getMessage();
          $controller_failed++;
        }

        if(!empty($result->id_guest))
        {
          $data_out=(object)
            array(
              'id_guest'=>$result->id_guest
          );
          $controller_success++;
          $controller_message='Success to create new guest';
        }
        else
        {
          $controller_failed++;
          $controller_message.=', Failed to create new guest';
        }
      }
      else
      {
        $data_update=Ms_Guest::find($request_body->id_guest);
        $path = 'assets/img';
        if(!empty($data_update))
        {
          if(!empty($request_body->nik))
          {
            $data_update->nik = $request_body->nik;
          }
          if(!empty($request_body->guest_name))
          {
            $data_update->guest_name = $request_body->guest_name;
          }
          if(!empty($request_body->guest_name))
          {
            $data_update->guest_name = $request_body->guest_name;
          }
          if(!empty($request_body->address))
          {
            $data_update->address = $request_body->address;
          }
          if(!empty($request_body->pos_code))
          {
            $data_update->pos_code = $request_body->pos_code;
          }
          if(!empty($request_body->code_provinsi))
          {
            $data_update->code_provinsi = $request_body->code_provinsi;
          }
          if(!empty($request_body->code_kabupaten))
          {
            $data_update->code_kabupaten = $request_body->code_kabupaten;
          }
          if(!empty($request_body->code_kelurahan))
          {
            $data_update->code_kelurahan = $request_body->code_kelurahan;
          }
          if(!empty($request_body->phone))
          {
            $data_update->phone = $request_body->phone;
          }
          if(!empty($request_body->email))
          {
            $data_update->email = $request_body->email;
          }
          if(!empty($request_body->gender))
          {
            $data_update->gender = $request_body->gender;
          }
          if(!empty($request_body->birthdate))
          {
            $data_update->birthdate = $request_body->birthdate;
          }
          if(!empty($request_body->photo))
          {
            File::delete($path.'/'.$data_update->photo);
            $pic_photo = $request->file('photo');
            $pic_photo->move($path,'GUESTPHOTO'.date('ymdhisu').'.'.$pic_photo->getClientOriginalExtension());
            $data_update->photo = 'GUESTPHOTO'.date('ymdhisu').'.'.$pic_photo->getClientOriginalExtension();
          }
          if(!empty($request_body->scan_ktp))
          {
            File::delete($path.'/'.$data_update->scan_ktp);
            $pic_scan_ktp = $request->file('scan_ktp');
            $pic_scan_ktp->move($path,'KTP'.date('ymdhisu').'.'.$pic_scan_ktp->getClientOriginalExtension());
            $data_update->scan_ktp = 'KTP'.date('ymdhisu').'.'.$pic_scan_ktp->getClientOriginalExtension();
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
                'id_guest'=>$request_body->id_guest
            );
            $controller_success++;
            $controller_message='Success to update guest data';
          }
          else
          {
            $controller_failed++;
            $controller_message.=', Failed to update guest data';
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
          'primary'=>'id_guest',
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
      'id_guest'=>true
    );
    $check_result=check_input_format($checker,$request_body);
    $controller_message='';
    $controller_failed=0;
    $controller_success=0;
    if($check_result->accept)
    {
      if(!is_array($request_body->id_guest))
      {
        $request_body->id_guest=array($request_body->id_guest);
      }

      $file_pic=Ms_Guest::whereIn('id_guest',$request_body->id_guest)->get();
      if($file_pic->count()>0)
      {
        $path='assets/img';
        foreach ($file_pic as $key => $row) {
          File::delete($path.'/'.$row->scan_ktp);
          File::delete($path.'/'.$row->photo);
        }
      }

      if(Ms_Guest::whereIn('id_guest',$request_body->id_guest)->delete())
      {
        $data_out=$request_body->id_guest;
        if(is_array($request_body->id_guest))
        {
          $controller_success+=count($request_body->id_guest);
        }
        else
        {
          $controller_success++;
        }

        $controller_message='Success to delete guest';
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
          'primary'=>'id_guest',
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
