<?php

namespace App\Http\Controllers;

use App\Models\CrudApi;
use Illuminate\Http\Request;

class CrudApisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CrudApi::all();
    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

            "first_name"=> "required",

            "last_name"=> "required",

        ]);

        $crud = new CrudApi;

        $crud->first_name = $request->first_name;

        $crud->last_name = $request->last_name;

        $crud->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

       return CrudApi::find($id);

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[

            "first_name"=> "required",

            "last_name"=> "required",

        ]);

        $crud =  CrudApi::find($id);

        $crud->first_name = $request->first_name;

        $crud->last_name = $request->last_name;

        $crud->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crud =  CrudApi::find($id);

        $crud->delete();
        
    }
}
