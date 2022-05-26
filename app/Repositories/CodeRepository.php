<?php

namespace App\Repositories;

use App\Interfaces\CodeRepositoryInterface;
use App\Models\Code;
use App\Services\RenianService;
use Illuminate\Support\Arr;

class CodeRepository implements CodeRepositoryInterface{

    public function getCodes()
    {
        $codes = Code::select('codes.code as code', 'codes.status as status' , 'codes.id as id')->where('status',1)->get();

        return $codes;
    }

    public function updateStatus(Code $code, $value)
    {
        $code->status = $value;
        if(!$code->save()){
            return false;
        }
        return true;
    }

    public function searchRenian(Code $code){
        return RenianService::getPetData($code->code);
    }
}
