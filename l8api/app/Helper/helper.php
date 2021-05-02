<?php 

namespace App\Helper;
class Helper
{
    //by Nursidik 20210426 function to help to get API external
    public static function GetApi($url)
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->get($url);
        $response = json_decode($request->getBody());        
        return $response;
    }

    //by Nursidik 20210426 function to help to post to API external
    public static function PostApi($url,$body) {
        $client = new \GuzzleHttp\Client();
        $response = $client->request("POST", $url, ['form_params'=>$body]);
        $response = $client->send($response);
        return $response;
    }
}