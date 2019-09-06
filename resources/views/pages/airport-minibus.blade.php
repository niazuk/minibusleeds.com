@extends('layouts.master')
@section('PageTitle',config('data.airport-minibus.title'))
@section('PageDescription',config('data.airport-minibus.description'))
@section('PageTags',config('data.airport-minibus.tags'))
@section('PageContent')
<div class="cls"></div>
<div class="banner_int">&nbsp;</div>
@include('includes.airport-minibus-block1')
<div class="qt_main" >
	@include('includes.home-block3')	
</div>
@include('includes.airport-minibus-block2')
@endsection