<?php

namespace App\Services;

use Exception;
use GuzzleHttp\Client;

class SuneduService{
    public static function getPersonaData($documento){
        $json = [];
        $usuario = 'ADMIN';
        $dni = $documento;

        try{
            $url = env('URL_SUNEDU');
            $httpclient = new Client();
            $response = $httpclient->get($url, [
                'query' => [
                    'usuario' => $usuario,
                    'numero_documento' => $dni,
                ]
            ]);

            $status = $response->getStatusCode();

            if($status == 200 ){
                $json = \json_decode($response->getBody()->getContents());

                if(\property_exists($json, 'success') && !$json->success){
                    $json = null;
                }
            }
        }catch(Exception $e){
            return null;
        }

        return $json->data->grados;
    }
}
