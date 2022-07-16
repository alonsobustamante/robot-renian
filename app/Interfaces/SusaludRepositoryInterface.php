<?php

namespace App\Interfaces;

use App\Models\Documento;

interface SusaludRepositoryInterface
{
    public function createSusalud($json, Documento $documento);

}
