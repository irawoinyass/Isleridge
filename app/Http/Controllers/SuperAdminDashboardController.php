<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SuperAdmin;

class SuperAdminDashboardController extends Controller
{
    	public function __construct()
    {
        $this->middleware('superadmin');
    }

    
    public function index(){

    

    	$title = "Dashboard";

       

    	return view('SuperAdminPages.index')->with(['title'=>$title]);

    }



    public function resetpassword(){

    $title = "Password Reset";

    return view('SuperAdminPages.passwordreset')->with('title',$title);

}



public function passwordreset(Request $request){

    if ($request->ajax()) {


        $update = SuperAdmin::find(auth()->guard('superadmin')->user()->id);
        $update->password = bcrypt($request->password);
        $save = $update->save();

        if ($save) {
            
            return response('success');

        }else{

            return response('Error, Please Try Again.');

        }
        
        
    }
}





}
