<?php

namespace App\Services;

use Exception;
use GuzzleHttp\Client;

class RenianService{
    public static function getPetData($code){
        $json = [];
        $key = 'the_overwhelming_mango';
        try{
            $url = env('URL_RENIAN');
            $httpclient = new Client();
            $response = $httpclient->get($url, [
                'query' => [
                    'key' => $key,
                    'codigo' => $code
                ]
            ]);

            $status = $response->getStatusCode();

            if($status == 200 ){
                $json = \json_decode($response->getBody()->getContents());
                if(\property_exists($json, 'estado')){
                    $json = null;
                }
            }
        }catch(Exception $e){
            return null;
        }

        return $json;
    }
}
