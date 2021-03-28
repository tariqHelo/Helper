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
  
}
