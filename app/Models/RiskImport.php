<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiskImport extends Model
{
  protected $table = 'risk';
  use HasFactory;

  protected $fillable = ['name', 'description', 'affected' , 
  'affectedProperty', 'likelihood' ,'impact' ,'inherentRiskScore', 'treatmentOption','control','treatmentDescription',
   'riskCustodian' , 'riskOwner' , 'treatmentDueDate' , 'status' , 'residualRiskScore' ,'riskValue'];

}
