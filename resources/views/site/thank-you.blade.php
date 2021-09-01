@extends('layouts.site.index')

@push('cssv2')
<link rel="stylesheet" href="{{ getasset('/assets/css/responce-page.css')}}" media="all" type="text/css" />
@endpush

@section('content')
 

    <div id="wrapper" class="wrapper page-not-found-wrapper">

      <section class="page-not-found-section thankyou-page-section">
              
        <div class="page-not-found-div thankyou-page-div">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">        
                        <div class="found-content-div">
                            <div class="thankyou-thumb">
                                <img src="{{ asset('assets/images/thankyou-black.svg') }}" alt="thankyou" class="thankyou-img">
                            </div>
                            <div class="page-not-content thankyou-content">
                                <div class="content-max-width"><p> {!! getSession('site_inquiries_thankyou_message', 'Thank You') !!} </p></div>
                                <div class="button-common-div w100 mt-50">
                                    <a href="{{ url('/') }}" class="btn btn-common btn-red"> <span class="transform-text">Go to home</span> <span class="arrow-right-circle"></span> </a>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>        
            </div>
        </div>
      </section>
 
    </div>
<?php
\Session::put('form_thankyou_data',"");
?>
@endsection