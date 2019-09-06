@extends('layouts.master')
@section('PageTitle',config('data.minibus-fleet.title'))
@section('PageDescription',config('data.minibus-fleet.description'))
@section('PageTags',config('data.minibus-fleet.tags'))
@section('PageContent')
<div class="cls"></div>
<div class="banner_int">&nbsp;</div>
 <section class="section-90 section-md-111 text-left">
            <div class="shell">
                <div class="range range-xs-center">
                    <div class="cell-sm-8 cell-md-6">
                        <div class="inset-lg-right-20">
                            <h2 class="fleet-text">{{config('data.minibus-fleet.sub-title')}}</h2>
                            <hr class="divider hr-md-left-0 bg-chathams-blue">
                            <div class="offset-top-30 offset-md-top-60">
                                @include('includes.minibus-fleet-block1',['section'=>'1'])
                                @include('includes.minibus-fleet-block1',['section'=>'2'])
                            </div>
                        </div>
                    </div>
                    <div class="cell-sm-8 cell-md-6 offset-top-40 offset-md-top-0"><p>&nbsp;
                        </p>
                        <!-- RD Video-->
                    </div>
                </div>
            </div>
        </section>
@endsection