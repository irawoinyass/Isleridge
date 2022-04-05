@extends('MainLayouts.app')
@section('content')

<div class="home-area">
<div class="container">
<div class="home-slides owl-carousel owl-theme">

@foreach($slides as $slide)


<div class="banner-item">
<div class="row align-items-center m-0">
<div class="col-lg-6 col-md-12 p-0">
<div class="banner-item-content">
<h1>{{$slide->title}}</h1>
<p>{{$slide->desc}}</p>
@if($slide->button_url != '')
<a href="{{$slide->button_url}}" class="btn btn-primary">{{$slide->button_name}}</a>
@endif

</div>
</div>
<div class="col-lg-6 col-md-12 p-0">
<div class="banner-item-image">
<img src="/assets/img/slider/{{$slide->image}}" alt="Isleridge banner-image">
</div>
</div>
</div>
</div>
@endforeach

</div>
</div>
</div>




<section class="featured-boxes-area">
<div class="container">
<div class="featured-boxes-inner">
<div class="row m-0">

<div class="col-lg-3 col-sm-6 col-md-6 p-0">
<div class="single-featured-box">
<div class="icon color-facd60">
<i class="flaticon-shield"></i>
</div>
<h3>Cyber Security Services</h3>
<p>Evaluating security threats and improving cyber security posture to withstand evolving attacks and protect assets.</p>
<a href="{{route('main.cyber')}}" class="read-more-btn">Read More</a>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-md-6 p-0">
<div class="single-featured-box">
<div class="icon color-1ac0c6">
<!-- <i class="flaticon-play-store"></i> -->
<img src="/assets/img/cloud.png" width="70px;">
</div>
<h3>Cloud Solutions</h3>
<p>Leveraging and Navigating cloud solutions to achieve operational efficiency, improved security and cost effectiveness.</p>
<a href="{{route('main.cloud')}}" class="read-more-btn">Read More</a>
</div>
</div>

<div class="col-lg-3 col-sm-6 col-md-6 p-0">
<div class="single-featured-box">
<div class="icon color-fb7756">
<i class="flaticon-data-encryption"></i>
</div>
<h3>Technology Risk and Assurance</h3>
<p>In-depth assessment of your IT environment to provide reasonable assurance and reduces exposure to technology risks.</p>
<a href="{{route('main.techRisk')}}" class="read-more-btn">Read More</a>
</div>
</div>

<div class="col-lg-3 col-sm-6 col-md-6 p-0">
<div class="single-featured-box">
<div class="icon">
<i class="flaticon-settings"></i>
</div>
<h3>Professional Services</h3>
<p>Support business strategy through technology focussed managed services provisions and enhancing internal IT envitonment.</p>
<a href="{{route('main.profess')}}" class="read-more-btn">Read More</a>
</div>
</div>
</div>
</div>
</div>
</section>





<section class="services-area ptb-70">
<div class="container-fluid p-0">
<div class="overview-box">
<div class="overview-content">
<div class="content left-content">
<h4>What We Exist For</h4>

<br/>

<p>IsleRidge consulting provides cutting edge Technology consulting and Advisory services to clients operating in diverse sectors.</p>
<p>We are a team of highly technical and strategic professionals with experience cutting across several industries and Big4 firms. </p>
<div class="bar"></div>
<a href="/aboutus" class="btn btn-primary">Read More</a>
<!-- <ul class="services-list">
<li><span><i class="flaticon-check-mark"></i> Free plan available</span></li>
<li><span><i class="flaticon-check-mark"></i> Full data privacy compliance</span></li>
<li><span><i class="flaticon-check-mark"></i> 100% transparent costs</span></li>
<li><span><i class="flaticon-check-mark"></i> Commitment-free</span></li>
<li><span><i class="flaticon-check-mark"></i> Real-time spending overview</span></li>
<li><span><i class="flaticon-check-mark"></i> Debit Mastercard included</span></li>
</ul> -->
</div>
</div>
<div class="overview-image">
<div class="image">
<img src="assets/img/pic-1.jpg" alt="image">
<div class="circle-img">
<!-- <img src="assets/img/circle.png" alt="image"> -->
</div>
</div>
</div>
</div>
</div>
</section>














<!-- <section class="feedback-area ptb-70 bg-f7fafd">
<div class="container">
<div class="section-title">
<h2>What customers say about Us</h2>
<div class="bar"></div> -->
<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
<!-- </div>
<div class="feedback-slides">
<div class="client-feedback">
<div>
 -->
<!-- 	@foreach($testimony as $tes) -->
<!-- 
<div class="item">
<div class="single-feedback">
<div class="client-img">
<img src="/assets/img/testimony/{{$tes->image}}" alt="image" class="image-fluid" width="100px;">
</div> -->
<!-- <h3>{{$tes->name}}</h3>
<span>{{$tes->job}}</span>
<p>{{$tes->comment}}</p>
</div>
</div> -->

<!-- @endforeach -->



<!-- </div>
</div>
<div class="client-thumbnails">
<div> -->

<!-- @foreach($testimony as $tes)
<div class="item">
<div class="img-fill"><img src="/assets/img/testimony/{{$tes->image}}" alt="client"></div>
</div>
@endforeach -->


<!-- </div>
<button class="prev-arrow slick-arrow">
<i class="fas fa-arrow-left"></i>
</button>
<button class="next-arrow slick-arrow">
<i class="fas fa-arrow-right"></i>
</button>
</div>
</div>
</div>
</section>
 -->










<section class="ready-to-talk">
<div class="container">
<div class="ready-to-talk-content">
<h3>Ready to talk?</h3>
<p>Our team is here to answer your question about IsleRidge</p>
<a href="uscontactus" class="btn btn-primary">Contact Us</a>
<!-- <span><a href="#">Or, get started now with a free trial</a></span> -->
</div>
</div>
</section>


<div class="partner-area">
<div class="container">
<h3>More that 1.5 million businesses and organizations use IsleRidge</h3>
<div class="partner-inner">
<div class="row align-items-center">
<div class="col-lg-2 col-sm-4 col-md-3 col-6">
<a href="#">
<img src="assets/img/partner-image/hmb.jpeg" alt="HMB">
<img src="assets/img/partner-image/hmb.jpeg" alt="HMB">
</a>
</div>
<div class="col-lg-2 col-sm-4 col-md-3 col-6">
<a href="#">
<img src="assets/img/partner-image/kkc.jpeg" alt="kkc">
<img src="assets/img/partner-image/kkc.jpeg" alt="kkc">
</a>
</div>
<div class="col-lg-2 col-sm-4 col-md-3 col-6">
<a href="#">
<img src="assets/img/partner-image/lat.jpeg" alt="LAT">
<img src="assets/img/partner-image/lat.jpeg" alt="LAT">
</a>
</div>
<div class="col-lg-2 col-sm-4 col-md-3 col-6">
<a href="#">
<img src="assets/img/partner-image/seefor.jpeg" alt="SEEFOR">
<img src="assets/img/partner-image/seefor.jpeg" alt="SEEFOR">
</a>
</div>
<div class="col-lg-2 col-sm-4 col-md-3 col-6">
<a href="#">
<img src="assets/img/partner-image/ondo.jpeg" alt="Ondo">
<img src="assets/img/partner-image/ondo.jpeg" alt="Ondo">
</a>
</div>
<div class="col-lg-2 col-sm-4 col-md-3 col-6">
<a href="#">
<img src="assets/img/partner-image/surelotto.png" alt="Surelotto">
<img src="assets/img/partner-image/surelotto.png" alt="Surelotto">
</a>
</div>
<div class="col-lg-2 col-sm-4 col-md-3 col-6">
<a href="#">
<img src="assets/img/partner-image/quikipools.png" alt="quikipools">
<img src="assets/img/partner-image/quikipools.png" alt="quikipools">
</a>
</div>
<div class="col-lg-2 col-sm-4 col-md-3 col-6">
<a href="#">
<img src="assets/img/partner-image/lapo.jpeg" alt="lapo">
<img src="assets/img/partner-image/lapo.jpeg" alt="lapo">
</a>
</div>
<div class="col-lg-2 col-sm-4 col-md-3 col-6">
<a href="#">
<img src="assets/img/partner-image/airtel.jpeg" alt="airtel">
<img src="assets/img/partner-image/airtel.jpeg" alt="airtel">
</a>
</div>
<div class="col-lg-2 col-sm-4 col-md-3 col-6">
<a href="#">
<img src="assets/img/partner-image/motormata.png" alt="motormata">
<img src="assets/img/partner-image/motormata.png" alt="motormata">
</a>
</div>
<div class="col-lg-2 col-sm-4 col-md-3 col-6">
<a href="#">
<img src="assets/img/partner-image/dangote.jpeg" alt="dangote">
<img src="assets/img/partner-image/dangote.jpeg" alt="dangote">
</a>
</div>
<div class="col-lg-2 col-sm-4 col-md-3 col-6">
<a href="#">
<img src="assets/img/partner-image/fs.jpeg" alt="fs">
<img src="assets/img/partner-image/fs.jpeg" alt="fs">
</a>
</div>
<!-- <div class="col-lg-2 col-sm-4 col-md-3 col-6">
<a href="#">
<img src="assets/img/partner-image/partner-13.png" alt="partner">
<img src="assets/img/partner-image/partner-hover13.png" alt="partner">
</a>
</div>
<div class="col-lg-2 col-sm-4 col-md-3 col-6">
<a href="#">
<img src="assets/img/partner-image/partner-14.png" alt="partner">
<img src="assets/img/partner-image/partner-hover14.png" alt="partner">
</a>
</div>
<div class="col-lg-2 col-sm-4 col-md-3 col-6">
<a href="#">
<img src="assets/img/partner-image/partner-15.png" alt="partner">
<img src="assets/img/partner-image/partner-hover15.png" alt="partner">
</a>
</div>
<div class="col-lg-2 col-sm-4 col-md-3 col-6">
<a href="#">
<img src="assets/img/partner-image/partner-16.png" alt="partner">
<img src="assets/img/partner-image/partner-hover16.png" alt="partner">
</a>
</div>
<div class="col-lg-2 col-sm-4 col-md-3 col-6">
<a href="#">
<img src="assets/img/partner-image/partner-17.png" alt="partner">
<img src="assets/img/partner-image/partner-hover17.png" alt="partner">
</a>
</div>
<div class="col-lg-2 col-sm-4 col-md-3 col-6">
<a href="#">
<img src="assets/img/partner-image/partner-18.png" alt="partner">
<img src="assets/img/partner-image/partner-hover18.png" alt="partner">
</a>
</div> -->
</div>
</div>
</div>
</div>





















@endsection