<?php

namespace App\Repositories;

use App\Interfaces\SuneduRepositoryInterface;
use App\Models\Sunedu;
use Illuminate\Support\Arr;

class SuneduRepository implements SuneduRepositoryInterface{

    public function createSunedu($json)
    {
        return Sunedu::create([
            'abreviaturaTitulo' => $json->abreviaturaTitulo,
            'apellidoMaterno' => $json->apellidoMaterno,
            'apellidoPaterno' => $json->apellidoPaterno,
            'nombres' => $json->nombres,
            'nroDocumento' => $json->nroDocumento,
            'pais' => $json->pais,
            'tipoDocumento' => $json->tipoDocumento,
            'tituloProfesional' => $json->tituloProfesional,
            'universidad' => $json->universidad,
        ]);

    }
}
