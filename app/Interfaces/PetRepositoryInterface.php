<?php

namespace App\Interfaces;

use App\Models\Code;

interface PetRepositoryInterface
{
    public function createPet($json, Code $code);

}
