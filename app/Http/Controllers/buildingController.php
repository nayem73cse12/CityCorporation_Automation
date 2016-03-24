<?php

namespace City_Corporation_Automation\Http\Controllers;

use Illuminate\Http\Request;

use City_Corporation_Automation\Http\Requests;
use City_Corporation_Automation\Http\Controllers\Controller;

use Input;
use City_Corporation_Automation\buildingModel;

class buildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function form()
    {
       return view('building');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function applicationSubmission()
    {
        $data=[
         'name'=>Input::get('name'),
         'father_name'=>Input::get('fatherName'),
         'mother_name'=>Input::get('motherName'),
         'nationality'=>Input::get('nationality'),
         'nationalId'=>Input::get('nationalId'),
         'phoneNo'=>Input::get('phoneNo'),
         'email'=>Input::get('email'),
         'location'=>Input::get('location'),
         'area'=>Input::get('area'),
         'floorAmount'=>Input::get('floorNo'),

         'status'=>'0'
            ];
 
       $response=buildingModel::create($data);
       if($response){
        return redirect('welcome');
       }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
