<?php

namespace App\Http\Controllers;

use App\Interfaces\CodeRepositoryInterface;
use App\Interfaces\PetRepositoryInterface;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Continue_;

class RenianController extends Controller
{
    private CodeRepositoryInterface $codeRepository;
    private PetRepositoryInterface $petRepository;

    public function __construct(CodeRepositoryInterface $codeRepository, PetRepositoryInterface $petRepository)
    {
        $this->codeRepository = $codeRepository;
        $this->petRepository = $petRepository;
    }

    public function execute(){
       $codes = $this->codeRepository->getCodes();

       foreach($codes as $code){

            $json = $this->codeRepository->searchRenian($code);

            if (!$json){
                $this->codeRepository->updateStatus($code, 2);
                \print_r("=> No se encontro codigo ".$code." \n");
                continue;
            }

            if($this->petRepository->createPet($json, $code)){
                $this->codeRepository->updateStatus($code, 0);
                \print_r("=> Insertado Exitosamente ".$code." \n");
            }else{
                \print_r("=> Error insertando registro ".$code." \n");
            }
       }
    }
}
