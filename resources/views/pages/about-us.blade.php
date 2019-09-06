@extends('layouts.master')
@section('PageTitle',config('data.about-us.title'))
@section('PageDescription',config('data.about-us.description'))
@section('PageTags',config('data.about-us.tags'))
@section('PageContent')
<div class="cls"></div>
<div class="banner_int">&nbsp;</div>
@include('includes.about-us-block1')
@endsection