<?php

namespace City_Corporation_Automation\Http\Controllers;

use Illuminate\Http\Request;

use City_Corporation_Automation\Http\Requests;
use City_Corporation_Automation\Http\Controllers\Controller;

use City_Corporation_Automation\noticeModel;
use City_Corporation_Automation\applyModel;

use Auth;

use Input;

class noticeController extends Controller
{
    public function adminNoticeBoard()
    {
        if (Auth::check()) {
         $data=noticeModel::all();
        return view('adminPage')->with('data',$data);
        }
        else
            return redirect ('auth/login');
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
           return redirect('/adminPage')->with('data',$data);
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
    
    public function noticeEdit($tender_id)
    {
        $data=noticeModel::find($tender_id);
        return view('editNotice')->with('data',$data);
    }

    public function noticeUpdate($tender_id)
    {
        $data=[
            
        'tender_title'=>Input::get('tenderTitle'),
        'tender_category'=>Input::get('tenderCategory'),
        'tender_createdDate'=>Input::get('createdDate'),
        'tender_lastIssueDate'=>Input::get('lastIssueDate'),
        'tender_description'=>Input::get('tanderDetails')

            ];
 
       $response=noticeModel::find($tender_id)->update($data);
       if($response){
           $data=noticeModel::all();
           return redirect('/adminPage')->with('data',$data);
       }
    }

    public function destroy($tender_id)
    {
        $response=noticeModel::find($tender_id)->delete();
        if($response){
            return redirect('/adminPage');
        }
    }

}
