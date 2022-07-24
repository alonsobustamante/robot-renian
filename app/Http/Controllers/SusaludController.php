<?php

namespace App\Http\Controllers;

use App\Interfaces\DocumentoRepositoryInterface;
use App\Interfaces\SusaludRepositoryInterface;
use Illuminate\Http\Request;

class SusaludController extends Controller
{
    private DocumentoRepositoryInterface $documentoRepository;
    private SusaludRepositoryInterface $susaludRepository;

    public function __construct(DocumentoRepositoryInterface $documentoRepository, SusaludRepositoryInterface $susaludRepository)
    {
        $this->documentoRepository = $documentoRepository;
        $this->susaludRepository = $susaludRepository;
    }

    public function execute(){
       $documentos = $this->documentoRepository->getDocumentos(1);

       foreach($documentos as $documento){

            $json = $this->documentoRepository->searchSusalud($documento);

            if (!$json){
                $this->documentoRepository->updateStatus($documento, 2);
                \print_r("=> No se encontro documento ".$documento." \n");
                continue;
            }

            if($this->susaludRepository->createSusalud($json)){
                $this->documentoRepository->updateStatus($documento, 0);
                \print_r("=> Insertado Exitosamente ".$documento." \n");
            }else{
                \print_r("=> Error insertando registro ".$documento." \n");
            }
       }
    }
}
