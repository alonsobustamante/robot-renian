<?php

namespace App\Repositories;


use App\Interfaces\SusaludRepositoryInterface;
use App\Models\Documento;
use App\Models\Susalud;
use Illuminate\Support\Arr;

class SusaludRepository implements SusaludRepositoryInterface{

    public function createSusalud($json)
    {
        return Susalud::create([
            'nuDni' => $json->nuDni,
            'preNombres' => $json->preNombres,
            'apPaterno' => $json->apPaterno,
            'apMaterno' => $json->apMaterno,
            'apCasado' => $json->apCasado,
            'deDireccion' => $json->deDireccion,
            'coGenero' => $json->coGenero,
            'feNac' => $json->feNac,
            'coUbigeo' => $json->coUbigeo,
            'coUbigeoDep' => $json->coUbigeoDep,
            'coUbigeoPro' => $json->coUbigeoPro,
            'coUbigeoDis' => $json->coUbigeoDis,
            'deUbigeoDep' => $json->deUbigeoDep,
            'deUbigeoPro' => $json->deUbigeoPro,
            'deUbigeoDis' => $json->deUbigeoDis,
            'wsReniec' => $json->wsReniec,
        ]);

    }
}
