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
                                            <li class="breadcrumb-item active">Testimony</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->








<div class="row" id="slide_form">
  <div class="col-lg-12">
      <div class="card shadow">
          <div class="card-body" style="background: teal;">
<div class="alert" id="message" style="display: none;"></div>

            <form id="upload_image_form" method="POST" enctype="multipart/form-data">
 
 {{ csrf_field() }}

  <div class="form-group">
     <label for="control-label" style="font-weight: 500; color: #fff;">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$testimony->name}}">
<small style="color: #fff; font-weight: 500;"></small>
</div>

  <div class="form-group">
     <label for="control-label" style="font-weight: 500; color: #fff;">Job</label>
            <input type="text" name="job" id="job" class="form-control" placeholder="Enter Name" value="{{$testimony->job}}">
<small style="color: #fff; font-weight: 500;"></small>
</div>

 <div class="form-group">
     <label for="control-label" style="font-weight: 500; color: #fff;">Comment</label>
  
            <textarea class="form-control" name="comment" id="comment">{{$testimony->comment}}</textarea>
<small style="color: #fff; font-weight: 500;"></small>
</div>

<input type="hidden" name="testimony_id" id="testimony_id" value="{{$testimony->testimony_id}}" >

 <div class="form-group">
     <label for="control-label" style="font-weight: 500; color: #fff;">Image</label>
            <input type="file" name="image" id="image" accept="image/jpeg,image/jpg,image/png," class="form-control">
<small style="color: #fff; font-weight: 500;">Optional</small>
<div>
    <img class="img-fluid" src="{{asset('assets/img/testimony/'.$testimony->image)}}" width="200">
</div>

</div>

 
            <div>
    <div class="loader"></div>
      <button class="btn btn-success" type="submit" value="Add Testimony">
              <i class="fa fa-plus-circle fa-lg"></i> Update Testimony
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


//  if(slide_grant == 0){

// $('#message').css('display', 'block');
// $('#message').html('You are not authorized to upload any slide picture here.');
// $('#message').addClass('alert-danger');

//   }else{

$.ajax({
    url:"{{ route('superadmin.updatetestimony') }}",
    method:"POST",
    data:new FormData(this),
    dataType:'JSON',
    contentType:false,
    cache:false,
    processData:false,
    success:function(data){

   console.log(data);   

if (data.message == 'Testimony Updated Successfully') {

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

  //}


});











	});
</script>            

















@endsection