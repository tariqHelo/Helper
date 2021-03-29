<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToCollection;
use DB;
class RiskImport extends Model
{
  use HasFactory;
  protected $table= "risk";
  
  protected $fillable = ['name', 'description', 'affected' , 
  'affectedProperty', 'likelihood' ,'impact' ,'inherentRiskScore', 'treatmentOption','control','treatmentDescription',
   'riskCustodian' , 'riskOwner' , 'treatmentDueDate' , 'status' , 'residualRiskScore' ,'riskValue'];

}
