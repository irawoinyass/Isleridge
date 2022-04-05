@extends('SuperAdminLayouts.app')
@section('content')

   	 	

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Home</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Page</a></li>
                                            <li class="breadcrumb-item active">Slides</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->








<div class="row" id="slide_form">
  <div class="col-lg-12">
      <div class="card shadow">
          <div class="card-body" style="background: #54d0da;">
<div class="alert" id="message" style="display: none;"></div>

            <form id="upload_image_form" method="POST" enctype="multipart/form-data">
 
 {{ csrf_field() }}

  <div class="form-group">
     <label for="control-label" style="font-weight: 500; color: #fff;">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{$slide->title}}">
<small style="color: #fff; font-weight: 500;">Required</small>
</div>

 <div class="form-group">
     <label for="control-label" style="font-weight: 500; color: #fff;">Description</label>
  
            <textarea class="form-control" name="description" id="description">{{$slide->desc}}</textarea>
<small style="color: #fff; font-weight: 500;">Required</small>
</div>

 <div class="form-group">
     <label for="control-label" style="font-weight: 500; color: #fff;">Image</label>
            <input type="file" name="image" id="image" accept="image/jpeg,image/jpg,image/png," class="form-control">
<small style="color: #fff; font-weight: 500;">Optional</small>
<div>
    <img class="img-fluid" src="{{asset('assets/img/slider/'.$slide->image)}}" width="200">
</div>
<input type="hidden" name="slide_id" id="slide_id" value="{{$slide->slide_id}}" >
</div>

 <div class="form-group">
     <label for="control-label" style="font-weight: 500; color: #fff;">Link</label>
            <input type="text" name="link" id="link" class="form-control" placeholder="link" value="{{$slide->button_url}}">
<small style="color: #fff; font-weight: 500;">Optional</small>
</div>

 <div class="form-group">
     <label for="control-label" style="font-weight: 500; color: #fff;">Link Name</label>
    <input type="text" name="link_name" id="link_name" class="form-control" placeholder="link name" value="{{$slide->button_name}}">
<small style="color: #fff; font-weight: 500;">Optional</small>
</div>


            <div>
    <div class="loader"></div>
      <button class="btn btn-success" type="submit" value="Add Slide">
              <i class="fa fa-plus-circle fa-lg"></i> Update Slide
              </button>
              

</div>  
          
       

    


      </form>
    
              
              
              </div>
               <!-- end card -->
                            </div>
                        </div>
                        <!-- end row -->
                      </div>







                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
             
            </div>
            <!-- end main content-->




<script src="{{asset('js/app.js')}}"></script>


<script type="text/javascript">
	
	$(document).ready(function(){

var _tokens = $('input[name=_token]').val();



$('#upload_image_form').on('submit', function(event){

  event.preventDefault();

    var image = $('#image').val();
  var title = $('#title').val();
  var description = $('#description').val();


if (title == '') {

$('#message').css('display', 'block');
$('#message').html('Title is required');
$('#message').addClass('alert-danger');


  }else if (description == '') {

$('#message').css('display', 'block');
$('#message').html('Description is required');
$('#message').addClass('alert-danger');


  }else{

$.ajax({
    url:"{{ route('superadmin.updateslide') }}",
    method:"POST",
    data:new FormData(this),
    dataType:'JSON',
    contentType:false,
    cache:false,
    processData:false,
    success:function(data){

   console.log(data);   

if (data.message == 'Slide Updated Successfully') {

  // console.log(data);
  $('#message').css('display', 'block');
      $('#message').html(data.message);
      $('#message').addClass(data.class_name);
     window.location.reload();
}else{

  $('#message').css('display', 'block');
      $('#message').html(data.message);
      $('#message').addClass(data.class_name);

}
     

    }


  });

  }


});











	});
</script>            

















@endsection