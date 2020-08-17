<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Format_API;
use App\Dt_Cart_Item;
use App\Ms_Service;
use App\Ms_Food;
use Exception;

class Cart_Item_Controller extends Controller
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
        $query=Dt_Cart_Item::select($select);

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
              $data_out=DB::select('SELECT '.$request_body->select.' from tr_cart_item WHERE '.$request_body->custom_condition);
            }
            else
            {
              $data_out=DB::select('SELECT * from tr_cart_item WHERE '.$request_body->custom_condition);
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
          'primary'=>'id_cart_item',
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
      'id_cart'=>true,
      'id_order'=>true,
      'qty'=>true
    );

    $check_result=check_input_format($checker,$request_body);
    $controller_message='';
    $controller_failed=0;
    $controller_success=0;
    if($check_result->accept)
    {
      if(empty(@$request_body->id_cart_item))
      {
        $id_service=null;
        $id_food=null;
        $discount=0;
        $price=0;
        $qty=$request_body->qty;
        $id_error=0;
        if(!empty(@$request_body->discount))
        {
          $discount=$request_body->discount;
        }
        if(!empty(@$request_body->id_service))
        {
          $service=Ms_Service::where('id_service',$request_body->id_service)->get()->first();
          $id_service=$request_body->id_service;
          if(!empty($service->price))
          {
            $price=$service->price;
          }
          else
          {
            $controller_message.='id_service not found';
            $id_error++;
          }
        }
        if(!empty(@$request_body->id_food))
        {
          $food=Ms_Food::where('id_food',$request_body->id_food)->get()->first();
          $id_food=$request_body->id_food;
          if(!empty($food->price))
          {
            $price=$food->price;
          }
          else
          {
            $controller_message.='id_food not found';
            $id_error++;
          }
        }
        $total_price= ($price * $qty);

        try{
          if((!empty(@$id_food) || !empty(@$id_service)) && $id_error==0 )
          {
            $result=Dt_Cart_Item::create([
              'id_cart'=>@$request_body->id_check_io,
              'id_order'=>@$request_body->id_order,
              'id_service'=>@$id_service,
              'id_food'=>@$id_food,
              'discount'=>@$discount,
              'qty'=>@$qty,
              'total_price'=>@$total_price
            ]);
          }
          else
          {
            if(empty(@$id_food) && empty(@$id_service))
            {
              $controller_message.='id_service or id_food can\'t empty either';
              $controller_failed++;
            }


          }
        }
        catch(\Illuminate\Database\QueryException $e)
        {
          $controller_message.=''.$e->getMessage();
          $controller_failed++;
        }

        if(!empty($result->id_cart_item))
        {
          $data_out=(object)
            array(
              'id_cart_item'=>$result->id_cart_item
          );
          $controller_success++;
          $controller_message.='Success to add new item';
        }
        else
        {
          $controller_failed++;
          $controller_message.=', Failed to add new item';
        }
      }
      else
      {
        $data_update=Dt_Cart_Item::find($request_body->id_cart_item);
        if(!empty($data_update))
        {
          if(!empty($request_body->id_cart))
          {
            $data_update->id_cart = $request_body->id_cart;
          }
          if(!empty($request_body->id_order))
          {
            $data_update->id_order = $request_body->id_order;
          }
          $id_service=null;
          $id_food=null;
          $discount=0;
          $price=0;
          $qty=$request_body->qty;
          $id_error=0;
          if(!empty(@$request_body->discount))
          {
            $discount=$request_body->discount;
            $data_update->discount = $discount;
          }
          if(!empty(@$request_body->id_service))
          {
            $service=Ms_Service::where('id_service',$request_body->id_service)->get()->first();
            $id_service=$request_body->id_service;
            if(!empty($service->price))
            {
              $price=$service->price;
            }
            else
            {
              $controller_message.='id_service not found';
              $id_error++;
            }
          }
          if(!empty(@$request_body->id_food))
          {
            $food=Ms_Food::where('id_food',$request_body->id_food)->get()->first();
            $id_food=$request_body->id_food;
            if(!empty($food->price))
            {
              $price=$food->price;
            }
            else
            {
              $controller_message.='id_food not found';
              $id_error++;
            }
          }
          $total_price= ($price * $qty);
          $data_update->id_service = @$id_service;
          $data_update->id_food = @$id_food;
          $data_update->qty = $request_body->qty;
          $data_update->total_price = $total_price;
          try{

            if((!empty(@$id_food) || !empty(@$id_service)) && $id_error==0 )
            {
              $execute = $data_update->save();
            }
            else
            {
              if(empty(@$id_food) && empty(@$id_service))
              {
                $controller_message.='id_service or id_food can\'t empty either';
                $controller_failed++;
              }

            }
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
                'id_cart_item'=>$request_body->id_cart_item
            );
            $controller_success++;
            $controller_message='Success to update cart item';
          }
          else
          {
            $controller_failed++;
            $controller_message.=', Failed to update cart item';
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
          'primary'=>'id_cart_item',
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
      'id_cart_item'=>true
    );
    $check_result=check_input_format($checker,$request_body);
    $controller_message='';
    $controller_failed=0;
    $controller_success=0;
    if($check_result->accept)
    {
      if(!is_array($request_body->id_cart_item))
      {
        $request_body->id_cart_item=array($request_body->id_cart_item);
      }

      if(Dt_Cart_Item::whereIn('id_cart_item',$request_body->id_cart_item)->delete())
      {
        $data_out=$request_body->id_cart_item;
        if(is_array($request_body->id_cart_item))
        {
          $controller_success+=count($request_body->id_cart_item);
        }
        else
        {
          $controller_success++;
        }

        $controller_message='Success to delete cart';
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
          'primary'=>'id_cart_item',
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
