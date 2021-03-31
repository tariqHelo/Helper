<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use DB;

class ExcelImport implements ToCollection
{

    protected $fillable = ['name', 'description', 'affected' ,
    'affectedProperty', 'likelihood' ,'impact' ,'inherentRiskScore', 'treatmentOption','control','treatmentDescription',
    'riskCustodian' , 'riskOwner' , 'treatmentDueDate' , 'status' , 'residualRiskScore' ,'riskValue'];

    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {  ///dd(20);
        DB::table('risk')->truncate();
        foreach($collection as $key => $value)
        {
           // dd($value);
            if($key > 0)
            {
                if($value[0] == null):
                    continue;
                endif;
                DB::table('risk')->insert([
                    //'id'	    =>$value[0]
               // 'Risk ID'                       => $row[0],
                'Name'                          => $value[1],
                'Description'                   => $value[2],
                'affected'                      => $value[3],
                'affectedProperty'              => $value[4],
                'Likelihood'                    => $value[5],
                'Impact'                        => $value[6],
                'inherentRiskScore'             => $value[7],
                'treatmentOption'               => $value[8],
                'Control'                       => $value[9],
                'treatmentDescription'          => $value[10],
                'riskCustodian'                 => $value[11],
                'riskOwner'                     => $value[12],
                'treatmentDueDate'              => $value[13],
                'Status'                        => $value[14],
                'residualRiskScore'             => $value[15],
                'riskValue'                     => $value[16],
                ]);
            }
        }
 

    }
}
