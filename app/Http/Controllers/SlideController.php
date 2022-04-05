<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use DB;
use App\Slides;

class SlideController extends Controller
{
     	public function __construct()
    {
        $this->middleware('superadmin');
    }



public function index(){

	$title = "Slide";
	$slides = Slides::all();
	return view('SuperAdminPages.slide')->with(['title'=>$title,'slides'=>$slides]);

}





public function upload(Request $request){

    	if ($request->ajax()) {



    	$image = $request->file('image');
		$ext = $image->getClientOriginalExtension();
		
		if($request->file('image')->getSize() > 2097152){

return response()->json(['message' => 'Picture must not be greater than 2MB', 'class_name' => 'alert-danger']);

		}else{

		$new_name = date('YmD').'Slide'.date('YmD').'photo'.rand().'.'.$ext;
		$image->move('assets/img/slider', $new_name);

		$photo = new Slides;
		
		if ($request->title == '') {
			$photo->title = '';
		}else{
			$photo->title = $request->title;
		}
		
		if ($request->description == '') {
			$photo->desc = '';
		}else{
			$photo->desc = $request->description;
		}

		if ($request->link == '') {
			$photo->button_url = '';
		}else{
			$photo->button_url = $request->link;
		}

		if ($request->link_name == '') {
			$photo->button_name = '';
		}else{
			$photo->button_name = $request->link_name;
		}
		

		
		$photo->image = $new_name;
		$save = $photo->save();

		if ($save) {
	return response()->json(['message' => 'Slide Added Successfully', 'class_name' => 'alert-success']);
		}else{
return response()->json(['message' => 'Error, Please Try Again', 'class_name' => 'alert-danger']);

		}

		}	

    	
    	}
    }





    public function delete(Request $request){
	if ($request->ajax()) {

$photo = Slides::find($request->slide_id);
	\File::delete('assets/img/slider/'.$photo->image);
$delete = $photo->delete();

if ($delete) {
	return response('success');
}else{
		return response('Error, Please Try Again.');
}



	}
}




public function edit($id){

	$title = "Edit Slide";

	$slide = Slides::find($id);

	return view('SuperAdminPages.editslide')->with('title', $title)->with('slide', $slide);
}








public function update(Request $request){

	if ($request->ajax()) {
		




		if ($request->file('image') == '') {
			

		$photo = Slides::find($request->slide_id);

		if ($request->title == '') {
			$photo->title = '';
		}else{
			$photo->title = $request->title;
		}
		
		if ($request->description == '') {
			$photo->desc = '';
		}else{
			$photo->desc = $request->description;
		}

		if ($request->link == '') {
			$photo->button_url = '';
		}else{
			$photo->button_url = $request->link;
		}

		if ($request->link_name == '') {
			$photo->button_name = '';
		}else{
			$photo->button_name = $request->link_name;
		}
		
		$save = $photo->save();

		if ($save) {
	return response()->json(['message' => 'Slide Updated Successfully', 'class_name' => 'alert-success']);
		}else{
return response()->json(['message' => 'Error, Please Try Again', 'class_name' => 'alert-danger']);

		}
	


		}else{





		$image = $request->file('image');
		$ext = $image->getClientOriginalExtension();
		
		if($request->file('image')->getSize() > 2097152){

return response()->json(['message' => 'Picture must not be greater than 2MB', 'class_name' => 'alert-danger']);

		}else{

		$new_name = date('YmD').'Slide'.date('YmD').'photo'.rand().'.'.$ext;
		$image->move('assets/img/slider', $new_name);

			$photo = Slides::find($request->slide_id);
	
		if ($request->title == '') {
			$photo->title = '';
		}else{
			$photo->title = $request->title;
		}
		
		if ($request->description == '') {
			$photo->desc = '';
		}else{
			$photo->desc = $request->description;
		}

		if ($request->link == '') {
			$photo->button_url = '';
		}else{
			$photo->button_url = $request->link;
		}

		if ($request->link_name == '') {
			$photo->button_name = '';
		}else{
			$photo->button_name = $request->link_name;
		}
		
	File::delete('assets/img/slider/'.$photo->slide_image);
		
		$photo->image = $new_name;
		$save = $photo->save();

		if ($save) {
	return response()->json(['message' => 'Slide Updated Successfully', 'class_name' => 'alert-success']);
		}else{
return response()->json(['message' => 'Error, Please Try Again', 'class_name' => 'alert-danger']);

		}

		}	











		}











	}
}















}
