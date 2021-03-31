<?php

namespace App\Http\Controllers;

use App\Models\RiskMangment;
use Illuminate\Http\Request;
use App\Http\Requests\Mangment\CreateRequest;
use Session;

class RiskMangmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { $mangmants = RiskMangment::get();
      return view('admin.mangment.mangment')->with('mangmants' , $mangmants);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.mangment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        RiskMangment::create($request->all());
        Session::flash("msg","RiskMangment created successfully");
        return redirect()->route('riskMangment.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RiskMangment  $riskMangment
     * @return \Illuminate\Http\Response
     */
    public function show(RiskMangment $riskMangment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RiskMangment  $riskMangment
     * @return \Illuminate\Http\Response
     */
    public function edit(RiskMangment $riskMangment)
    {
        return view('admin.mangment.edit')
        ->with('riskMangment',$riskMangment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RiskMangment  $riskMangment
     * @return \Illuminate\Http\Response
     */
    public function update(CreateRequest $request, RiskMangment $riskMangment)
    {   // dd($request->all());
        $riskMangment->update($request->all());
        Session::flash("msg","Row Updated successfully");
        return redirect()->route('riskMangment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RiskMangment  $riskMangment
     * @return \Illuminate\Http\Response
     */
    public function destroy(RiskMangment $riskMangment)
    {      //dd($riskMangment);
        $riskMangment->delete();
        session()->flash("msg", "w: Row Deleted Successfully");
        return redirect()->route('riskMangment.index');
    }
}
