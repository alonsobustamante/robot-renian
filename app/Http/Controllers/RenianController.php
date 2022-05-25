<?php

namespace App\Http\Controllers;

use App\Interfaces\CodeRepositoryInterface;
use App\Interfaces\PetRepositoryInterface;
use Illuminate\Http\Request;

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

           if($this->petRepository->createPet($json, $code)){
               $this->codeRepository->updateStatus($code);
               \print_r("Insertado Exitosamente");
           }else{
               \print_r("Error insertando registro");
           }
       }
    }
}
