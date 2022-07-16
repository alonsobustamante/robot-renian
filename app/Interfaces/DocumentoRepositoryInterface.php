<?php

namespace App\Interfaces;

use App\Models\Documento;

interface DocumentoRepositoryInterface
{
    public function getDocumentos();

    public function updateStatus(Documento $documento, $value);

    public function searchSusalud(Documento $documento);

    public function searchSunedu(Documento $documento);

}
