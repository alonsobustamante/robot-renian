<?php

namespace Database\Seeders;

use App\Models\Documento;
use Illuminate\Database\Seeder;

class DocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = \File::get('database/data/documento.txt');
        $documentos = array_reverse(explode("\n", $data));
        unset($documentos[0]);
        $documentos = array_reverse($documentos);
        unset($documentos[0]);

        foreach($documentos as $documento){
            $documento = preg_replace("/[\r\n|\n|\r]+/", "", $documento);
            Documento::create([
                'documento' => $documento
            ]);
        }
    }
}
