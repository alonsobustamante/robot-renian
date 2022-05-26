<?php

namespace Database\Seeders;

use App\Models\Code;
use Illuminate\Database\Seeder;


class CodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = \File::get('database/data/codes.txt');
        $codes = array_reverse(explode("\n", $data));
        unset($codes[0]);
        $codes = array_reverse($codes);
        unset($codes[0]);

        foreach($codes as $code){

            Code::create([
                'code' => $code
            ]);
        }
    }
}
