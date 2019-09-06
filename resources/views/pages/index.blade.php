@extends('layouts.master')
@section('PageTitle', config('data.index.title'))
@section('PageDescription', config('data.index.description'))
@section('PageTags', config('data.index.tags'))
@section('PageContent')
<div class="container">
	@include('includes.home-block1')
	@include('includes.home-block2')
</div>
<div class="qt_main" >
	@include('includes.home-block3')	
</div>
@include('includes.home-block4')

@endsection