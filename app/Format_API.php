<?php

/**
 *
 */
if(!function_exists('get_api_patch'))
{
  function get_api_patch()
  {
    $version=array(
      'BETA'=>'x9W+m5YP{MCNd9/[&xxH0G$$!8sC~b34VWI!NrimN<}LAkWIk<a<MSYp"3qnF<n'

    );
    return $version['BETA'];
  }
}

if (!function_exists('is_json')) {

  function is_json($raw)
  {
    $result = json_decode($raw);
    if (json_last_error() === JSON_ERROR_NONE) {
      return true;
    }
    if (json_last_error() === 0) {
      return false;
    }
  }

}
if (!function_exists('check_input_format')) {

  function check_input_format($checker=null,$data=null)
  {
    $success=0;
    $failed=0;
    $return_data['message']='';
    $return_data['accept']=1;
    //MENCOCOKAN FIELD DATA REQUEST YANG DITERIMA
    if(@count(@$checker)>0 && !empty($checker))
    {
        //JIKA DATA IN TIDAK DITEMUKAN NAMUN MENGUNAKAN CHECKER
        if(!empty(@$data))
        {
          //JIKA DATA IN ARRAY
          if(is_array($data))
          {
            //Jika data input berupa array
            foreach ($data as $key => $row) {
              foreach ($checker as $key_checker => $row_checker) {
                if(property_exists($row, $key_checker))
                {

                }
                else if(!empty(@$data->{$key_checker}))
                {

                }
                else {
                  $return_data['accept']=0;
                  $return_data['message'].=', field "'.$key_checker.'" not found';
                  $failed++;
                }
              }
            }
          }
          //JIKA DATA IN OBJECT ATAU 1 LIST
          else
          {
            $sample=$data;
            if(method_exists($data,'toArray'))
            {
              $data = (object)$data->toArray();
            }
            foreach ($checker as $key_checker => $row_checker) {
              if(property_exists($data, $key_checker))
              {

              }
              else if(!empty(@$data->{$key_checker}))
              {

              }
              else {
                $return_data['accept']=0;
                $return_data['message'].=', field "'.$key_checker.'" not found';
                $failed++;
              }
            }
          }
        }
        //JIKA FORMAT PENULISAN SALAH
        else
        {
          $return_data['accept']=0;
          $return_data['message'].='API Error, tell to api developer';
          $failed++;
        }
    }
    return (object)array(
      'accept'=>$return_data['accept'],
      'message'=>$return_data['message'],
      'success'=>$success,
      'failed'=>$failed
    );
  }
}

if (!function_exists('set_format_api')) {

  function set_format_api($data=null,$option=null)
  {
      //INISIASI VARIABLE AWAL
      $return_data=array();
      $return_data['message'] = "";

      //JIKA TIDAK DIISI PRIMARY MAKA PRIMARY DIKOSONGKAN
      if(empty($option['primary']))
      {
        $option['primary']="";
      }

      //JIKA TIDAK DIISI SUCCESS AWAL
      if(empty($option['success']))
      {
        $option['success']=0;
      }

      //JIKA TIDAK DIISI FAILED AWAL
      if(empty($option['failed']))
      {
        $option['failed']=0;
      }

      //JIKA TIDAK ADA CUSTOM FRONT MESSAGE
      if(empty($option['message_front']))
      {
        $option['message_front']='';
      }

      //JIKA TIDAK ADA CUSTOM BACK MESSAGE
      if(empty($option['message_back']))
      {
        $option['message_back']='';
      }

      //JIKA DATA OUT ADA
      if(!empty(@$data))
      {
        if(@count(@$data)>1 && is_array(@$data))
        {
          // array_walk_recursive($data, function(&$item)
          //   {
          //     $item=strval($item);
          //   }
          // );
          $data = json_encode($data);
          $data = str_replace("null","\"\"",$data);
          $data = json_decode($data);

          $return_data["data"]=$data;
          $return_data['type']='list';
          $return_data['count']=count(@$data);
          if(@$option['failed']==0)
          {
            $option['message_front'].='Data was found '.count(@$data);
          }
        }
        else
        {
          // array_walk($data,function(&$value,$key){
          //     $value=(array) $value;
          // });
          // array_walk_recursive($data, function($value,$key){
          //     $value=strval($value);
          // });
          //$data[0]->code_kelurahan=strval

          $data = json_encode($data);
          $data = str_replace("null","\"\"",$data);
          $data = json_decode($data);

          if(is_array(@$data) && @$option['failed']==0)
          {
            $return_data["data"]=array($data[0]);
            $return_data['type']='list';
            $return_data['count']=1;
            $option['message_front'].=', Data was found 1';
          }
          else if(is_object(@$data) && @$option['failed']==0)
          {
            $return_data["data"]=array($data);
            $return_data['type']='list';
            $return_data['count']=1;
            $option['message_front'].=', Data was found 1';
          }
          else if(@$option['failed']==0)
          {
            $return_data["data"]=$data;
            $return_data['type']='string';
            $return_data['count']=1;
            $option['message_front'].=', Data was found 1';
          }
        }
      }
      else
      {
         $return_data["data"]="";
      }

      //JIKA FORMAT BENAR
      if(@$option['failed']==0)
      {
          $return_data["status"]="true";
      }
      //JIKA FORMAT SALAH
      else
      {
          $return_data["status"]="false";
          $return_data['data']="";
          $return_data['type']='';
          $return_data['count']=0;
      }
      if(empty(@$return_data['type']))
      {
        $return_data['type']='';
        $return_data['count']=0;
      }

      //RETURN FORMAT DATA
      $return_format_data=array(
        'status'=>$return_data['status'],
        'success'=>$option['success'],
        'failed'=>$option['failed'],
        'message'=>$option['message_front'].$return_data['message'].$option['message_back'],
        'primary_key'=>$option['primary'],
        'type'=>$return_data['type'],
        'count'=>$return_data['count'],
        'data'=>empty(@$return_data['data'])?"":$return_data['data'],

      );
      $return_format_data=(object)$return_format_data;

      return json_encode($return_format_data);
    }
}
