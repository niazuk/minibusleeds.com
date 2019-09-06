<?php
/*

https://appdividend.com/2018/04/07/laravel-google-recaptcha-tutorial/
https://github.com/anhskohbo/no-captcha

*/
?>
@extends('layouts.master')
@section('PageTitle',config('data.contact-us.title'))
@section('PageDescription',config('data.contact-us.description'))
@section('PageTags',config('data.contact-us.tags'))
@section('PageContent')
<div class="cls"></div>
<div class="banner_int">&nbsp;</div>
@include('includes.contact-us-block1')
@endsection