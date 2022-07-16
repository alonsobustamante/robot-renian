<?php

namespace App\Services;

use Exception;
use GuzzleHttp\Client;

class SusaludService{
    public static function getPersonaData($documento){
        $json = [];
        $action = 'selectDNI';
        $dni = $documento;
        $sexo = '';
        $fecNac = '';
        $cboDocumento = 1;

        try{
            $url = env('URL_SUSALUD');
            $httpclient = new Client();
            $response = $httpclient->get($url, [
                'query' => [
                    'action' => $action,
                    'dni' => $dni,
                    'sexo' => $sexo,
                    'fecNac' => $fecNac,
                    'cboDocumento' => $cboDocumento,
                ]
            ]);

            $status = $response->getStatusCode();

            if($status == 200 ){
                $json = \json_decode($response->getBody()->getContents());

                if(\property_exists($json, 'coError') && $json->coError != '0000'){
                    $json = null;
                }
            }
        }catch(Exception $e){
            return null;
        }

        return $json;
    }
}
