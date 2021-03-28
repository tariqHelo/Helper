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
        DB::table('qustions')->truncate();
        foreach($collection as $key => $value)
        {
            //dd($value[0]);
            if($key > 0)
            {
                if($value[0] == null):
                    continue;
                endif;
                DB::table('qustions')->insert([
                  'title'      => $value[0],
                  
                ]);
            }
        }
    }
}
