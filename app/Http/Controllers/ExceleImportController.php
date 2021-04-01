<?php

namespace App\Http\Controllers;
use App\Http\Requests\Risk\CreateRequest;

use Illuminate\Http\Request;
use App\Models\ExcelImport;
use App\Models\RiskImport;
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
    public function create()
    { // dd(20);
        return view('admin.import.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {    //dd($request->all());
          RiskImport::create($request->all());
          Session::flash("msg","Row created successfully");
          return redirect()->route('Excelerisk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(RiskImport $risk)
    {
        return view('admin.import.edit')
        ->with('risk' , $risk);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateRequest $request,  $risk)
    {     // dd($request->all());
        //   RiskImport::update($request->all());
        //   $risk->update($request->all());
          RiskImport::find($risk)->update($request->all());
          Session::flash("msg","Row Updated successfully");
          return redirect()->route('Excelerisk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(RiskImport $risk)
    {
        $risk->delete();
        session()->flash("msg", "w: Row Deleted Successfully");
        return redirect()->route('Excelerisk.index');
      }
}
