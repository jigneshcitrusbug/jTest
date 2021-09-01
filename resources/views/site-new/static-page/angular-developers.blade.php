@php

$technology = 'Angular';  
$asset_url = getasset('/citrusbug/assets/');
$url = url('/');
@$seo['keywords'] = @$seo['keywords'] ? @$seo['keywords'] : "hire Angular developers, hire Angular programmer, Angular development services, Angular development company, hire Angular developers in india";

if(isset($seo['param']) && !empty($seo['param']) && $seo['param'] != "null"){
	$_param = unserialize($seo['param']);
	if(isset($_param['image_default'])){
		$seo['og_image'] = url('').$_param['image_default'];
	}
	if(isset($_param['image_twitter'])){
		$seo['og_twitter_image'] = url('').$_param['image_twitter'];
	}
	if(isset($_param['keywords'])){
		$seo['keywords'] = url('').$_param['keywords'];
	}
}

@endphp

@extends('layouts.site-new.index')
@section('content')

<div class="offer-sticky-top angularSticky" id="offer-sticky-top">
    <div class="container-fluid plr-78">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="offer-sticky-top-row">
            <div class="img-div">
              <img src="{{ $asset_url }}/images/icons/tech/hire-angularjs-developers.png" class="img-fluid img-icon" alt="hire angularJS developer" title="Hire AngularJS Developers" loading="lazy" />
            </div>
            <div class="content-div">
              <div class="title-div">
                <h2>Most-Trusted Angular Development Company</h2>
              </div>
              <div class="banner-btn-div">
                <a href="#schedule-interview" class="btn btn-custom-white">Start 15 Days Risk-Free Trial</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="main-middle-area main-middle-inner-area">
    
    @include ('site-new.section.angular.hire-developer')
    @include ('site-new.section.angular.company')
    @include ('site-new.section.angular.developers-expertise')
	@include ('site-new.section.angular.pricing-plan')
	@include ('site-new.section.angular.services-that-we-offer')
	@include ('site-new.section.process-that-we-follow')
	@include ('site-new.section.angular.technologies-that-we-work')
	@include ('site-new.section.why-citrusbug')
	@include ('site-new.section.angular.ourwork')
	@include ('site-new.section.industries-serve')
	<x-package-testimonial template="new-testimonial" />
	@include ('site-new.section.angular.faq')
	@include ('site-new.section.angular.useful-links')
	@include ('site-new.section.contactus')
	
  </div>
  
  @push('js')
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "Why should I choose Angular?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Angular is a versatile language that is used to build a wide range of products from mobile & web apps to complex websites. Here are a few of the major reasons why you must go for Angular. Third-party modules The Angular Packages Index enables developers to increase the functionality of their code by using third-party modules. Standard library Angular’s standard library comes with a cluster of programming tasks which makes development faster by reducing code length. Open-source Angular is open source which makes it free to use. It’s also open to the community which helps to improve through collaboration. Strong community Angular has a strong and vibrant community that helps beginners and experts to learn and use the language effectively. Easy to learn Angular has an easier learning curve. It used PEP8 code style guidelines which focuses mainly on simplicity and readability. Speed and productivity Angular boasts its lighting speed and high productivity due to its strong unit testing and process control capabilities."
    }
  },{
    "@type": "Question",
    "name": "How much does it cost to develop an app with Angular?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The app development cost with Angular depends upon various factors. Only after you consider these factors, you can estimate the total cost. These factors are namely features, design, framework, time invested, functionality, and many more. If you want to know how much your app will cost with Angular then contact us and share the details and we’ll help you with the estimate."
    }
  },{
    "@type": "Question",
    "name": "How long does it take to develop a Angular application?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Similar to the cost, the time taken for Angular app development also depends upon factors. These factors are development platform, design, functionality, features, experience of developers, and many more."
    }
  },{
    "@type": "Question",
    "name": "How can my business benefit from Angular web development?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Angular web development is a boon for those businesses who are looking for a quick execution with a small budget. This is because Angular ticks all the boxes for every immediate business needs."
    }
  },{
    "@type": "Question",
    "name": "Do you work according to my time zone?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Dedicated developers at Citrusbug have been trained to work round the clock. We can work in accordance with multiple time zones. No matter which time zone you’ve, we’ll meet all the deadlines without fail."
    }
  },{
    "@type": "Question",
    "name": "Will I have complete control over the team of hired developers?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Absolutely Yes. The team of hired developers will work dedicatedly as per your requirements. You’ll have complete access and control over them via various communication platforms."
    }
  },{
    "@type": "Question",
    "name": "How can I choose the developer of my choice?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Once we carefully understand your requirements, we assign a team of highly-skilled, experienced, and dedicated developers for your project. Alternatively, you can also hire a developer of your choice by conducting as many interviews as you wish. Also, if the hired developers are not able to deliver the required output then we’ll add more resources of diverse skill-set to ensure that all your requirements are fulfilled."
    }
  },{
    "@type": "Question",
    "name": "Can I migrate my existing app into Angular technologies?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, you can. Our team of skilled Angular developers is adept at migrating your existing application into Angular technology."
    }
  },{
    "@type": "Question",
    "name": "How do you ensure absolute ownership of my project?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "We ensure your 100% ownership of the project by signing a non-disclosure agreement with you."
    }
  }]
}
</script>

<script>
    $("#phone").intlTelInput({
        separateDialCode: true,
        utilsScript: "{{ $asset_url }}/intlTelInput/js/intlTelInput.js"
    });
	$("#phone").intlTelInput("setCountry","us");
	$("#phone").on("countrychange", function(e, countryData) {
        var code =  countryData.dialCode;
		$("#country_code").val(code);
    });
	
  </script>
  
  @endpush
  
  @endsection