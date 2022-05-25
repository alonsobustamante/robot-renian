<?php

namespace App\Repositories;

use App\Interfaces\PetRepositoryInterface;
use App\Models\Code;
use App\Models\Pet;
use Illuminate\Support\Arr;

class PetRepository implements PetRepositoryInterface{

    public function createPet($json, Code $code)
    {
        $pet = Pet::create([
            'vet' => $json->vet,
            'idpet' => $json->idpet,
            'name' => $json->name,
            'last' => $json->last,
            'dni' => $json->dni,
            'code' => $json->code,
            'lotcode' => $json->lotcode,
            'petname' => $json->petname,
            'datebirth' => $json->datebirth,
            'address' => $json->address,
            'district' => $json->district,
            'city' => $json->city,
            'countrycode' => $json->countrycode,
            'home' => $json->home,
            'cel' => $json->cel,
            'especie' => $json->especie,
            'raza' => $json->raza,
            'email' => $json->email,
            'sex' => $json->sex,
            'color' => $json->color,
            'imagen' => $json->imagen,
            'status' => $json->status,
            'esteril' => $json->esteril,
            'code_id' => $code->id
        ]);

        return $pet;
    }
}
