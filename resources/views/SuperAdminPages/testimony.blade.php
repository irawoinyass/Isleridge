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
                                            <li class="breadcrumb-item active">Testimonies</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->








<div class="row" id="slide_form" style="display: none;">
  <div class="col-lg-12">
      <div class="card shadow">
          <div class="card-body" style="background: teal;">
<div class="alert" id="message" style="display: none;"></div>

            <form id="upload_image_form" method="POST" enctype="multipart/form-data">
 
 {{ csrf_field() }}

  <div class="form-group">
     <label for="control-label" style="font-weight: 500; color: #fff;">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" >
<small style="color: #fff; font-weight: 500;"></small>
</div>

  <div class="form-group">
     <label for="control-label" style="font-weight: 500; color: #fff;">Job</label>
            <input type="text" name="job" id="job" class="form-control" placeholder="Enter Name" >
<small style="color: #fff; font-weight: 500;"></small>
</div>
 <div class="form-group">
     <label for="control-label" style="font-weight: 500; color: #fff;">Image</label>
            <input type="file" name="image" id="image" accept="image/jpeg,image/jpg,image/png," class="form-control">
<small style="color: #fff; font-weight: 500;">Required</small>
</div>
 <div class="form-group">
     <label for="control-label" style="font-weight: 500; color: #fff;">Comment</label>
  
            <textarea class="form-control" name="comment" id="comment" placeholder="Say Something Here......"></textarea>
<small style="color: #fff; font-weight: 500;"></small>
</div>



            <div>
    <div class="loader"></div>
      <button class="btn btn-success" type="submit" value="Add Slide">
              <i class="fa fa-plus-circle fa-lg"></i> Add Testimony
              </button>
              <a class="btn btn-danger" style="color: #fff; cursor: pointer;" id="close_slide_form">
              <i class="fa fa-minus-circle fa-lg"></i> close
              </a>

</div>  
          
       

    


      </form>
    
              
              
              </div>
               <!-- end card -->
                            </div>
                        </div>
                        <!-- end row -->
                      </div>

































                        <div class="row" id="slide_show">
                            <div class="col-12">
                                <div class="card"  style="background: teal;">
                                    <div class="card-body">
                                         <div class="row mb-2">
                                            <div class="col-sm-4">
                                      
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="text-sm-right">
                                                 
                                               
                                                  <a href="javascript:void(0);" id="open_slide_form" class="btn btn-success shadow" style="color: #fff;">Add Testimony<i class="mdi mdi-arrow-right ml-1"></i></a>
                                              
                                                </div>
                                            </div><!-- end col-->
                                        </div>

                                       
@if(count($testimonys) > 0)


<div class="row">
  @foreach($testimonys as $tes)
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <center><img class="img-fluid" src="{{asset('assets/img/testimony/'.$tes->image)}}"></center>
        <h6 >{{$tes->name}}</h6>
        <h5 class="text-center">{{$tes->comment}}</h5>
       
      </div>
      <div class="card-footer">
        <a href="edittestimony/{{$tes->testimony_id}}" class="btn btn-primary btn-sm float-right">Edit</a>
        <button class="btn btn-danger btn-sm float-left" data-id="{{$tes->testimony_id}}" id="delete_slide">Delete</button>
      </div>
    </div>
  </div>




@endforeach
</div>

@else

<center><h5 style="color: #fff;">NO RECORD FOUND</h5></center>
@endif




                                  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
             
            </div>
            <!-- end main content-->




<script src="{{asset('js/app.js')}}"></script>


<script type="text/javascript">
	
	$(document).ready(function(){

var _tokens = $('input[name=_token]').val();

$('#open_slide_form').click(function(event){

event.preventDefault();

$('#slide_form').show();
$('#slide_show').hide();




});



$('#close_slide_form').click(function(event){

event.preventDefault();

$('#slide_form').hide();
$('#slide_show').show();




});




$('#upload_image_form').on('submit', function(event){

  event.preventDefault();

  //var image = $('#image').val();
  var comment = $('#comment').val();
  var name = $('#name').val();
  //var slide_grant = $('#slide_grant').val();
//   else if(slide_grant == 0){

// $('#message').css('display', 'block');
// $('#message').html('You are not authorized to upload any slide picture here.');
// $('#message').addClass('alert-danger');

//   }

//   if (image == '') {

// $('#message').css('display', 'block');
// $('#message').html('Selet a picture first');
// $('#message').addClass('alert-danger');


//   }else 

if (name == '') {

$('#message').css('display', 'block');
$('#message').html('Name Field Must not be empty');
$('#message').addClass('alert-danger');


  }else if (comment == '') {

$('#message').css('display', 'block');
$('#message').html('Comment Field Must not be empty');
$('#message').addClass('alert-danger');


  }else if (image == '') {

$('#message').css('display', 'block');
$('#message').html('Image Field Must not be empty');
$('#message').addClass('alert-danger');


  }else if (job == '') {

$('#message').css('display', 'block');
$('#message').html('Job Field Must not be empty');
$('#message').addClass('alert-danger');


  }else{

    //  swal({
    //   title: "Are you sure?",
    //   text:"",
    //   icon: "warning",
    //   buttons: [
    //     'No, cancel it!',
    //     'Yes, I am sure!'
    //   ],
    //   dangerMode: true,
    // }).then(function(isConfirm) {
    //   if (isConfirm) {
$('.overlays').show();
$.ajax({
    url:"{{ route('superadmin.uploadtestimony') }}",
    method:"POST",
    data:new FormData(this),
    dataType:'JSON',
    contentType:false,
    cache:false,
    processData:false,
    success:function(data){

   console.log(data);   

if (data.message == 'Testimony Added Successfully') {

  // console.log(data);
  $('#message').css('display', 'block');
      $('#message').html(data.message);
      $('#message').addClass(data.class_name);
     window.location.reload();
     $('.overlays').hide();
}else{

  $('#message').css('display', 'block');
      $('#message').html(data.message);
      $('#message').addClass(data.class_name);
   $('.overlays').hide();
}
     

    }


  });


  // } else {
  //       swal("Cancelled", "No data was sent to database" ,"info");
  //     }
  //   })


  }


});





$('body').delegate('#delete_slide', 'click', function(e){

    e.preventDefault();
    var testimony_id = $(this).data('id');

  
//     var slide_grant = $('#slide_grant').val();

//     if (slide_grant == 0) {

// swal("Permission Denied!", "You are not authorized to perform this action", "error");

//     }else{

swal({
      title: "Are you sure?",
      text:"",
      icon: "warning",
      buttons: [
        'No, cancel it!',
        'Yes, I am sure!'
      ],
      dangerMode: true,
    }).then(function(isConfirm) {
      if (isConfirm) {

       
        $.ajax({

    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},    
    url:"{{route('superadmin.deletetestimony')}}",
    method:"POST",
    data:{testimony_id:testimony_id,_tokens:_tokens},
    success:function(data){

    //console.log(data)
    

    if (data == 'success') {
    swal({
    title: "Success!",
    text: "deleted successfully",
    icon: "success",
    timer: 3000,
    showConfirmButton: false

  })
     $('.overlays').hide();
     window.location.reload();
    }else{
          swal({
    title: "Opps!",
    text: data,
    icon: "error",
    timer: 3000,
    showConfirmButton: false

  })
 $('.overlays').hide();
    }
    
    
       
    }

})       



      
      } else {
        swal("Cancelled", "No data was sent to database" ,"info");
      }
    })


    //}

});












	});
</script>            

















@endsection