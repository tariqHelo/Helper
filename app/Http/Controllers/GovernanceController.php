<?php

namespace App\Http\Controllers;
use App\Http\Requests\Governance\CreateRequest;

use Illuminate\Http\Request;
use App\Models\Governance;
use Session;

class GovernanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { ///dd(20);
    $governances = Governance::paginate(3);
      return view('admin.governance.governance')->with('governances' , $governances);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    //  return view('admin.governance.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {    // dd($request->all());
        
          $file = $request->file->store("public");
          Governance::create([
            'name'  =>  $request->name,
            'discription' => $request->discription,
            'file'  =>  $file,
          ]);
          Session::flash("msg","Row created successfully");
          return redirect()->route('governance.index');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Governance $governance)
    {
        $governance->delete();
         session()->flash("msg", "w: Row Deleted Successfully");
         return redirect()->route('governance.index');
    }
}
