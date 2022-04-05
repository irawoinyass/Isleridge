@extends('MainLayouts.app')
@section('content')


<div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
<div class="container">
<div class="page-title-content">
<h2>Contact</h2>
<p>If you have an idea, we would love to hear about it.</p>
</div>
</div>
</div>









<section class="contact-area ptb-70">
<div class="container">
<!-- <div class="section-title">
<h2>Drop us message for any query</h2>
<div class="bar"></div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div> -->
<div class="row">
 <div class="col-lg-5 col-md-12">
<div class="contact-info">
<ul>
<li>
<div class="icon">
<i class="fas fa-map-marker-alt"></i>
</div>
<span>Address</span>
11/13 Alade St. Ketu Lagos. Nigeria
</li>
<li>
<div class="icon">
<i class="fas fa-envelope"></i>
</div>
<span>Email</span>
<a href="javascript:void(0);"><span class="__cf_email__" >info@isleridge.com</span></a>
</li>
<li>
<div class="icon">
<i class="fas fa-phone-volume"></i>
</div>
<span>Phone</span>
<a href="tel:+2348136503285">+2348 136 50 3285</a>
<!-- <a href="tel:+55555514574">+55 5555 14574</a> -->
</li>
</ul>
</div>
</div>
<div class="col-lg-7 col-md-12">

<div class="contact-form">

	     <div class="alert alert-success" id="alert_success" style="display: none;"></div>
              <div class="alert alert-danger" id="alert_danger" style="display: none;"></div>
<form id="">
	{{ csrf_field() }}
<div class="row">
<div class="col-lg-6 col-md-6">
<div class="form-group">
<input type="text" name="name" id="name" class="form-control" placeholder="Name">
<!-- <div class="help-block with-errors"></div> -->
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="form-group">
<input type="email" name="email" id="email" class="form-control" placeholder="Email">
<!-- <div class="help-block with-errors"></div> -->
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="form-group">
<input type="text" name="phone_no" id="phone_no" class="form-control" placeholder="Phone">
<!-- <div class="help-block with-errors"></div> -->
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="form-group">
<input type="text" name="msg_subject" id="msg_subject" class="form-control" placeholder="Subject">
<!-- <div class="help-block with-errors"></div> -->
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="form-group">
<textarea name="msg" class="form-control" id="msg" cols="30" rows="6" placeholder="Your Message"></textarea>
<!-- <div class="help-block with-errors"></div> -->
</div>
</div>
<div class="col-lg-12 col-md-12">
<button class="btn btn-primary" id="submit_btn">Send Message</button>
<!-- <div id="msgSubmit" class="h3 text-center hidden"></div> -->
<div class="clearfix"></div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="bg-map"><img src="assets/img/bg-map.png" alt="image"></div>
</section>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script type="text/javascript">
	$(document).ready(function(){

		var _tokens = $('input[name=_token]').val();


function validateEmail(email) 
    {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }


$('#submit_btn').click(function(event){

  event.preventDefault();


  var name = $('#name').val();
  var email = $('#email').val();
  var phone_no = $('#phone_no').val();
  var msg = $('#msg').val();
  var msg_subject = $('#msg_subject').val();



  if (name == '') {
    $('#alert_danger').show();
$('#alert_danger').html('Please, Kindly Enter Your Name.');
//alert('oka');
  }else if (email == '') {

$('#alert_danger').show();
$('#alert_danger').html('Please, Kindly Enter Your Email Address.');

  }else if (validateEmail(email) == false) {

$('#alert_danger').show();
$('#alert_danger').html('Please, Kindly Enter Valid Email Address.');


        }else if (phone_no == '') {

       $('#alert_danger').show();
$('#alert_danger').html('Please, Kindly Enter Your Phone Number.');

  }else if (msg_subject == '') {

       $('#alert_danger').show();
$('#alert_danger').html('Please, Kindly Enter Mail Subject.');

  }else if (msg == '') {

   $('#alert_danger').show();
$('#alert_danger').html('Please, Kindly Leave Your Comment.');
  }else{
$('#alert_danger').hide();
$('#alert_success').show();
$('#alert_success').html('<i>Processing......</i>');



    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},        
        url:"{{route('main.contact')}}",
        method:"POST",
        data:{msg_subject:msg_subject,name:name,phone_no:phone_no,email:email,msg:msg,_tokens:_tokens},
        success:function(data){

    //console.log(data);

  if (data == 'success') {

    $('#alert_success').show();
$('#alert_success').html('<i>Sent, You will get a relpy from us ASAP.</i>');
  $('#name').val('');
  $('#phone_no').val('');
$('#email').val('');
  $('#msg').val('');
  $('#msg_subject').val('');
  

    }else{

  $('#alert_danger').show();
$('#alert_danger').html(data);

    }


          }
        
         })



  }










});
	});
</script>


@endsection