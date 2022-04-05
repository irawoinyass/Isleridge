<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimony;
use DB;
use File;


class TestimonyController extends Controller
{
    public function index(){

    	$title = "Testimony";
    	$testimonys = Testimony::orderBy('testimony_id','desc')->get();
    	return view('SuperAdminPages.testimony')->with('title', $title)->with('testimonys',$testimonys);
    }





public function upload(Request $request){

    	if ($request->ajax()) {



    	$image = $request->file('image');
		$ext = $image->getClientOriginalExtension();
		
		if($request->file('image')->getSize() > 2097152){

return response()->json(['message' => 'Picture must not be greater than 2MB', 'class_name' => 'alert-danger']);

		}else{

		$new_name = date('YmD').'Testimony'.date('YmD').'photo'.rand().'.'.$ext;
		$image->move('assets/img/testimony', $new_name);

		$photo = new Testimony;
		
		$photo->name = $request->name;
		$photo->job = $request->job;
		$photo->comment = $request->comment;
		
		$photo->image = $new_name;
		$save = $photo->save();

		if ($save) {
	return response()->json(['message' => 'Testimony Added Successfully', 'class_name' => 'alert-success']);
		}else{
return response()->json(['message' => 'Error, Please Try Again', 'class_name' => 'alert-danger']);

		}

		}	

    	
    	}
    }






public function delete(Request $request){
	if ($request->ajax()) {

$photo = Testimony::find($request->testimony_id);
	\File::delete('assets/img/testimony/'.$photo->image);
$delete = $photo->delete();

if ($delete) {
	return response('success');
}else{
		return response('Error, Please Try Again.');
}



	}
}






public function edit($id){

	$title = "Edit Testimony";

	$testimony = Testimony::find($id);

	return view('SuperAdminPages.edittestimony')->with('title', $title)->with('testimony', $testimony);
}







public function update(Request $request){

	if ($request->ajax()) {
		




		if ($request->file('image') == '') {
			

		$photo = Testimony::find($request->testimony_id);

		
			$photo->name = $request->name;
			$photo->job = $request->job;
			$photo->comment = $request->comment;
			$save = $photo->save();

		if ($save) {

	return response()->json(['message' => 'Testimony Updated Successfully', 'class_name' => 'alert-success']);

		}else{

return response()->json(['message' => 'Error, Please Try Again', 'class_name' => 'alert-danger']);

		}
	


		}else{





		$image = $request->file('image');
		$ext = $image->getClientOriginalExtension();
		
		if($request->file('image')->getSize() > 2097152){

return response()->json(['message' => 'Picture must not be greater than 2MB', 'class_name' => 'alert-danger']);

		}else{

		$new_name = date('YmD').'Testimony'.date('YmD').'photo'.rand().'.'.$ext;
		$image->move('assets/img/testimony', $new_name);

			$photo = Testimony::find($request->testimony_id);
	
		$photo->name = $request->name;
			$photo->comment = $request->comment;
			$photo->job = $request->job;
		
	\File::delete('assets/img/testimony/'.$photo->image);
		
		$photo->image = $new_name;
		$save = $photo->save();

		if ($save) {
	return response()->json(['message' => 'Testimony Updated Successfully', 'class_name' => 'alert-success']);
		}else{
return response()->json(['message' => 'Error, Please Try Again', 'class_name' => 'alert-danger']);

		}

		}	











		}











	}
}











}
