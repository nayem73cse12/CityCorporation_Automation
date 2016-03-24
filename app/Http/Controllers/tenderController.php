<?php

namespace City_Corporation_Automation\Http\Controllers;

use Illuminate\Http\Request;

use City_Corporation_Automation\Http\Requests;
use City_Corporation_Automation\Http\Controllers\Controller;

use City_Corporation_Automation\applyModel;
use City_Corporation_Automation\noticeModel;

use Input;

class tenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('apply');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function applystore()
    {
        $data=[
            
        'tender_id'=>Input::get('tenderId'),
        'company_name'=>Input::get('companyName'),
        'contact_no'=>Input::get('contactNo'),
        'contact_address'=>Input::get('contactAddress'),
        'experience'=>Input::get('experience'),
        'eligibility'=>Input::get('eligibility')

            ];
 
       $response=applyModel::create($data);
       if($response){
           $data=noticeModel::all();
           return view('notice')->with('data',$data);
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
          $data=applyModel::all();
        return view('applyView')->with('data',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function applyDetails($apply_id)
    {
        $data=applyModel::find($apply_id);
        return view('applyDetails')->with('data',$data);
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
