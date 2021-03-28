<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QustionImport ;
//use App\Models\ExcelImport;

use Maatwebsite\Excel\Facades\Excel;
use DB;
use Auth;
use Session;

class QustionImportController extends Controller
{

     public function index()
    {
        $qustions = DB::table('qustions')->orderBy('id', 'ASC')->get();
        return view('admin.assigenment.assigenment')->with('qustions' ,$qustions);
         
    }
    public function import(Request $request)
    {    
        $this->validate($request, [
            'select_file'  => 'required|mimes:xls,xlsx'
        ],
        [
            'select_file.required' => __('.'),
        ]);
        $file = $request->select_file;
      //  dd($file->GetpathName());
        Excel::import(new QustionImport ,$file);
        Session::flash("msg","File Excel Uploded successfully");
        return redirect()->back();
    }
}
