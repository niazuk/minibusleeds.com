@extends('layouts.master')
@section('PageTitle',config('data.self-driving-minibus.title'))
@section('PageDescription',config('data.self-driving-minibus.description'))
@section('PageTags',config('data.self-driving-minibus.tags'))
@section('PageContent')
<div class="cls"></div>
<div class="banner_int">&nbsp;</div>
@include('includes.self-driving-minibus-block1')
@endsection