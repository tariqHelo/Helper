<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiskImport;

class ExceleImportController extends Controller
{
    public function import()
    {
        Excel::import(new RiskImport,request()->file('file'));

        return back();
    }

}
