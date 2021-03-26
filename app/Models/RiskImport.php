<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;

class RiskImport extends Model
{
    use HasFactory;

     public function model(array $row)
     {
            return new RiskImport([
            'Name'                          => $row[1],
            'Description'                   => $row[2],
            'Affected function(s)/asset(s)' => $row[3],
            'Affected property(ies)'        => $row[4],
            'Likelihood'                    => $row[5],
            'Impact'                        => $row[6],
            'Inherent Risk Score'           => $row[7],
            'Treatment Option'              => $row[8],
            'Control'                       => $row[9],
            'Treatment Description'         => $row[10],
            'Risk Custodian'                => $row[11],
            'Risk Owner'                    => $row[12],
            'Treatment Due Date'            => $row[13],
            'Status'                        => $row[14],
            'Residual Risk Score'           => $row[15],
            'Risk Value'                    => $row[16],
        ]);
     }
}
