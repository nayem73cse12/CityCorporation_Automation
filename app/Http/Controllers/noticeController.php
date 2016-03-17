<?php

namespace City_Corporation_Automation\Http\Controllers;

use Illuminate\Http\Request;

use City_Corporation_Automation\Http\Requests;
use City_Corporation_Automation\Http\Controllers\Controller;

use City_Corporation_Automation\noticeModel;

use Input;

class noticeController extends Controller
{
    public function adminNoticeBoard()
    {
        $data=noticeModel::all();
        return view('adminPage')->with('data',$data);
    }


    public function addNotice()
    {
        return view('addNotice');
    }

    
    
    public function storeNotice()
    {
        $data=[
            
        'tender_title'=>Input::get('tenderTitle'),
        'tender_category'=>Input::get('tenderCategory'),
        'tender_createdDate'=>Input::get('createdDate'),
        'tender_lastIssueDate'=>Input::get('lastIssueDate'),
        'tender_description'=>Input::get('tanderDetails')

            ];
 
       $response=noticeModel::create($data);
       if($response){
           $data=noticeModel::all();
           return view('adminPage')->with('data',$data);
       }
    }

    

    public function noticeBoard()
    {
        $data=noticeModel::all();
        return view('notice')->with('data',$data);
    }

     public function noticeDetails($tender_id)
    {
        $data=noticeModel::find($tender_id);
        return view('noticeDetails')->with('data',$data);
    }
}
