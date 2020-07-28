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
if (!function_exists('set_format_api')) {

  function set_format_api($status=false,$checker=null,$data=null,$option=null)
  {
      //inisiasi data awal
      $return_data=array();
      $accepted_format=true;
      $return_data['message'] = "";


      if(empty($option['primary']))
      {
        $option['primary']="";
      }
      if(empty($option['success']))
      {
        $option['success']=0;
      }
      if(empty($option['failed']))
      {
        $option['failed']=0;
      }
      if(empty($option['message_front']))
      {
        $option['message_front']='';
      }
      if(empty($option['message_back']))
      {
        $option['message_back']='';
      }

      //Melakukan pengecheckan di setiap field yang diterima
      if(count($checker)>0)
      {
          if(is_array($data) || is_object($data))
          {
            if(!is_array($data))
            {
                $data=(array)$data;
            }
          }

          if(!empty(@$data['in']))
          {
            if(is_array($data['in']))
            {
              //Jika data input berupa array
              foreach ($data['in'] as $key => $row) {
                foreach ($checker as $key_checker => $row_checker) {
                  if(!empty(@$row->{$key_checker}))
                  {

                  }
                  else {
                    $accepted_format=false;
                    $return_data['message'].=', field "'.$key_checker.'" not found';
                    $option['failed']++;
                  }
                }
              }
            }
            else
            {
              $sample=$data['in'];
              //Jika data input berupa array
              foreach ($checker as $key_checker => $row_checker) {
                if(!empty($data['in']->{$key_checker}))
                {

                }
                else {
                  $accepted_format=false;
                  $return_data['message'].=', field "'.$key_checker.'" not found';
                  $option['failed']++;
                }
              }
            }
          }
          else
          {
            $accepted_format=false;
            $return_data['message'].='API Error, tell to api developer';
            $option['failed']++;
          }
      }

      if(!empty(@$data['out']))
      {
        if(count(@$data['out'])>1)
        {
          $return_data["data_array"]=$data['out'];
        }
        else
        {
          $return_data["data"]=$data['out'][0];
        }
      }
      else
      {
         $return_data["data"]="";
      }

      if($accepted_format)
      {
          $return_data["status"]="true";
      }
      else
      {
          $return_data["status"]="false";
      }
      $return_format_data=array(
        'status'=>$return_data['status'],
        'success'=>$option['success'],
        'failed'=>$option['failed'],
        'message'=>$option['message_front'].$return_data['message'].$option['message_back'],
        'primary_key'=>$option['primary'],
        'data'=>empty(@$return_data['data'])?"":$return_data['data'],
        'data_array'=>empty(@$return_data['data_array'])?"":$return_data['data_array']
      );
      $return_format_data=(object)$return_format_data;

      return json_encode($return_format_data);
    }
}
