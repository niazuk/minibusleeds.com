@extends('layouts.master')
@section('PageTitle',config('data.coach-hire.title'))
@section('PageDescription',config('data.coach-hire.description'))
@section('PageTags',config('data.coach-hire.tags'))
@section('PageContent')
<div class="cls"></div>
<div class="banner_int">&nbsp;</div>
@include('includes.minibus-hire-block1')
<div class="qt_main" >
	@include('includes.home-block3')	
</div>
@include('includes.minibus-hire-block2')
@endsection