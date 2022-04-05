<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use DB;
use App\Mail\ContactUsMail;
use App\Slides;
use App\Testimony;

class MainController extends Controller
{
    

	public function index(){

		$title = "Home";

		$slides = Slides::all();
		$testimony = Testimony::all();
		return view('MainPages.index')->with(['title'=>$title,'slides' => $slides,'testimony'=>$testimony]);

	}



	public function aboutus(){

		$title = "About Us";

		return view('MainPages.aboutus')->with(['title'=>$title]);
	}



	public function contactus(){

		$title = "Contact Us";
		   //  Mail::to('lasisisaheed5@gmail.com', 'ISLERIDGE')->send(new ContactUsMail('asdfashduif','Iraws',423452354, 'askdkflajsdfk','asdlkfjaskldfklasjdkl', 'admin'));
		return view('MainPages.contactus')->with(['title'=>$title]);
	}



	public function contact(Request $request){

		 	if ($request->ajax()) {
  		
     Mail::to($request->email, $request->name)->send(new ContactUsMail($request->email, $request->name,$request->phone_no, $request->msg,$request->msg_subject, 'user'));

     Mail::to('lasisisaheed5@gmail.com', 'ISLERIDGE')->send(new ContactUsMail($request->email, $request->name,$request->phone_no, $request->msg,$request->msg_subject, 'admin'));

     return response('success');

   }

	}





public function techRisk(){

	$title = 'Technology Risk and Assurance';

	return view('MainPages.techRisk')->with(['title'=>$title]);
}

public function cyber(){

	$title = 'Cyber Security Services';

	return view('MainPages.cyber')->with(['title'=>$title]);
}



public function cloud(){

	$title = 'Cloud Solutions';

	return view('MainPages.cloud')->with(['title'=>$title]);
}



public function profess(){

	$title = 'Professional Services';

	return view('MainPages.profess')->with(['title'=>$title]);
}



public function techPro(){

	$title = 'Technology Product and Project';

	return view('MainPages.techPro')->with(['title'=>$title]);
}










}
