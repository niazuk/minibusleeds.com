@extends('layouts.master')
@section('PageTitle',config('data.self-driving-minibus.title'))
@section('PageDescription',config('data.self-driving-minibus.description'))
@section('PageTags',config('data.self-driving-minibus.tags'))
@section('PageContent')
<div class="cls"></div>
<div class="banner_int">&nbsp;</div>
<div class="wraper">
	<div class="container">
		<div class="wow fadeInUp" data-wow-duration="3s">
			<div class="bread_crum"><a href="/">Home</a><span>&raquo;</span> Thank you!</div>
			<div class="page_head"><h1>Thank you!</h1></div>
		</div>
		<div class="wow fadeInUp" data-wow-duration="2s">

		</div>
		<div class="wow fadeInUp" data-wow-duration="2s">
			<div class="cnm_txt">
				<p>Thank you for contacting us. We will get back to you within 24 hours.</p>      
			</div>
		</div>
	</div>
</div>
@endsection