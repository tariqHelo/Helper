<?php

namespace App\Models;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use DB;

class QustionImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    { // dd(20);
        foreach($collection as $key => $value)
        {
            if($value[0] == 'key'):
                continue;
            endif;

            if($value[0] != null)
            {
                // if($value[1] == null):
                //     continue;
                // endif;
                DB::table('qustions')->insert([
                  'title'      => $value[0],
                  //dd($value[1])
                ]);
            }
        }
    }
}
