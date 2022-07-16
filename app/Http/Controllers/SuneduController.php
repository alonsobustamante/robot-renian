<?php

namespace App\Http\Controllers;

use App\Interfaces\DocumentoRepositoryInterface;
use App\Interfaces\SuneduRepositoryInterface;
use Illuminate\Http\Request;

class SuneduController extends Controller
{
    private DocumentoRepositoryInterface $documentoRepository;
    private SuneduRepositoryInterface $suneduRepository;

    public function __construct(DocumentoRepositoryInterface $documentoRepository, SuneduRepositoryInterface $suneduRepository)
    {
        $this->documentoRepository = $documentoRepository;
        $this->suneduRepository = $suneduRepository;
    }

    public function execute(){
        $documentos = $this->documentoRepository->getDocumentos(2);

        foreach($documentos as $documento){

             $grados = $this->documentoRepository->searchSunedu($documento);

             if (!$grados){
                 $this->documentoRepository->updateStatus($documento, 2);
                 \print_r("=> No se encontro documento ".$documento." \n");
                 continue;
             }

             foreach ($grados as $grado) {
                if($this->suneduRepository->createSunedu($grado)){
                    $this->documentoRepository->updateStatus($documento, 0);
                    \print_r("=> Insertado Exitosamente ".$documento." \n");
                }else{
                    \print_r("=> Error insertando registro ".$documento." \n");
                }
             }

        }
     }

}
