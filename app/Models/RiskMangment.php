<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiskMangment extends Model
{
    use HasFactory;

    protected $fillable = ['status' , 'subject' , 'inhernRisk' ,
     'submissionDate' , 'migrationPlanned',
    'mangmantReview'];
}
