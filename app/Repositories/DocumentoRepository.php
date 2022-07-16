<?php

namespace App\Repositories;


use App\Interfaces\DocumentoRepositoryInterface;
use App\Models\Code;
use App\Models\Documento;
use App\Services\RenianService;
use App\Services\SuneduService;
use App\Services\SusaludService;
use Illuminate\Support\Arr;

class DocumentoRepository implements DocumentoRepositoryInterface{

    public function getDocumentos($type)
    {
        $documentos = Documento::select('documentos.documento as documento', 'documentos.status as status' , 'documentos.id as id')->where('status',1)->where('type', $type)->get();

        return $documentos;
    }

    public function updateStatus(Documento $documento, $value)
    {
        $documento->status = $value;
        if(!$documento->save()){
            return false;
        }
        return true;
    }

    public function searchSusalud(Documento $documento)
    {
        return SusaludService::getPersonaData($documento->documento);
    }

    public function searchSunedu(Documento $documento)
    {
        return SuneduService::getPersonaData($documento->documento);
    }
}
