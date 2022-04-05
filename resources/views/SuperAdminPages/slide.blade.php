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
                                    <h4 class="mb-0 font-size-18">Slides</h4>

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








<div class="row" id="slide_form" style="display: none;">
  <div class="col-lg-12">
      <div class="card shadow">
          <div class="card-body" style="background: #54d0da;">
<div class="alert" id="message" style="display: none;"></div>

            <form id="upload_image_form" method="POST" enctype="multipart/form-data">
 
 {{ csrf_field() }}

  <div class="form-group">
     <label for="control-label" style="font-weight: 500; color: #000;">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Enter Ttile" >
<small style="color: #000; font-weight: 500;">Required</small>
</div>
 <div class="form-group">
     <label for="control-label" style="font-weight: 500; color: #000;">Image</label>
            <input type="file" name="image" id="image" accept="image/jpeg,image/jpg,image/png," class="form-control">
<small style="color: #000; font-weight: 500;">Required</small>
</div>
 <div class="form-group">
     <label for="control-label" style="font-weight: 500; color: #000;">Description</label>
  
            <textarea class="form-control" name="description" id="description" placeholder="Say Something Here......"></textarea>
<small style="color: #000; font-weight: 500;">Required</small>
</div>

 <div class="form-group">
     <label for="control-label" style="font-weight: 500; color: #000;">Link</label>
            <input type="text" name="link" id="link" class="form-control" placeholder="link" >
<small style="color: #000; font-weight: 500;">Optional</small>
</div>

 <div class="form-group">
     <label for="control-label" style="font-weight: 500; color: #000;">Link Name</label>
            <input type="text" name="link_name" id="link_name" class="form-control" placeholder="link name" >
<small style="color: #000; font-weight: 500;">Optional</small>
</div>


            <div>
    <div class="loader"></div>
      <button class="btn btn-success" type="submit" value="Add Slide">
              <i class="fa fa-plus-circle fa-lg"></i> Add Slide
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
                                <div class="card"  style="background: #54d0da;">
                                    <div class="card-body">
                                         <div class="row mb-2">
                                            <div class="col-sm-4">
                                      
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="text-sm-right">
                                                 
                                               
                                                  <a href="javascript:void(0);" id="open_slide_form" class="btn btn-success shadow" style="color: #fff;">Add Slide<i class="mdi mdi-arrow-right ml-1"></i></a>
                                              
                                                </div>
                                            </div><!-- end col-->
                                        </div>

                                       
@if(count($slides) > 0)


<div class="row">
  @foreach($slides as $slide)
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <img class="img-fluid" src="{{asset('assets/img/slider/'.$slide->image)}}">
        <h6 >{{$slide->title}}</h6>
        <h5 class="text-center">{{$slide->desc}}</h5>
        @if($slide->button_url != '')
        <a href="{{$slide->button_url}}" class="btn btn-success btn-sm">{{$slide->button_name}}</a>
        @else


        @endif
      </div>
      <div class="card-footer">
        <a href="editslide/{{$slide->slide_id}}" class="btn btn-primary btn-sm float-right">Edit</a>
        <button class="btn btn-danger btn-sm float-left" data-id="{{$slide->slide_id}}" id="delete_slide">Delete</button>
      </div>
    </div>
  </div>




@endforeach
</div>

@else

<center><h5 style="color: #000;">NO RECORD FOUND</h5></center>
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


  }else if (image == '') {

$('#message').css('display', 'block');
$('#message').html('Selet a picture first');
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
    url:"{{ route('superadmin.uploadslide') }}",
    method:"POST",
    data:new FormData(this),
    dataType:'JSON',
    contentType:false,
    cache:false,
    processData:false,
    success:function(data){

   console.log(data);   

if (data.message == 'Slide Added Successfully') {

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
    var slide_id = $(this).data('id');

  
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
    url:"{{route('superadmin.deleteslide')}}",
    method:"POST",
    data:{slide_id:slide_id,_tokens:_tokens},
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