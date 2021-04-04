<?php

namespace App\Exports;

use App\Models\RiskImport;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings; 

class RiskExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return RiskImport::all();
    }

    public function headings(): array
    {
        return [
        'id',  'name', 'description', 'affected' ,
        'affectedProperty', 'likelihood' ,'impact' ,'inherentRiskScore',
        'treatmentOption','control','treatmentDescription',
        'riskCustodian' , 'riskOwner' , 'treatmentDueDate' , 'status' , 'residualRiskScore' ,'riskValue'
        ];
    }
}
