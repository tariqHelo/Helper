<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExcelImport;
use Maatwebsite\Excel\Facades\Excel;
use DB;
use Auth;
use Session;

class ExceleImportController extends Controller
{

     public function index()
    {
        $risk = DB::table('risk')->orderBy('id', 'ASC')->get();
        return view('admin.import.excel')->with('risks' ,$risk);
         
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
       // dd($file->GetpathName());
        Excel::import(new ExcelImport,$file);
        Session::flash("msg","File Excel Uploded successfully");
        return redirect()->back();
    }





//    public function import(Request $request)
//     {
//         $this->validate($request, [
//             'select_file'  => 'required|mimes:xls,xlsx'
//         ],
//         [
//             'select_file.required' => __('.'),
//         ]);
//         $file = $request->select_file;
//         Excel::import(new ExcelImport ,$file);
//         Session::flash("msg","File Excel Uploded successfully");
//         return redirect()->back();
//     }
}
