@push('scripts')
<style>

</style>
@endpush


{!! Form::open(['url' => route('site.inquiries.save'), 'novalidate'=>true , 'id' =>
'contactus_form','autocomplete'=>'off','files'=>true]) !!}

 <input type="text" name="business_name" class="form_business_name" />
<div class="contactus-form pos-rlative" id="contactus-form" >
    <div class="loaderF" >
    <div class="wrapper">
        <div class="pie spinner"></div>
        <div class="pie filler"></div>
        <div class="mask"></div>
    </div>
		<!-- <img src="{{ url('assets/loader.gif') }}" class="loader-image" width="100" > -->
	</div>
	
	<p id="error_msg"></p>
	<div class="row" >
        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Name*" name="name_21" required
                    data-validation-required-message="Please enter Name" />
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email*" name="email" required
                    data-validation-required-message="Please enter Email" />
            </div>
        </div>
		<div class="col-lg-6">
			<div class="row">
				<div class="col-lg-6">
					<div class="input-group">
						
							@if (is_array(@$countrys))
							{!! Form::select('country_code', array_merge( [''=>'Country Code'], @$countrys )
							,null,['class'=>'form-control select23','id'=>'cf_s2','required'=>'','data-validation-required-message'=>"Please select
							country code"]) !!}
							@endif
					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group">
						<input type="number" class="form-control" placeholder="Phone*" name="phone_21" required
							data-validation-required-message="Please enter Phone" />
					</div>
				</div>
			</div>
		</div>
        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Company Name*" name="company" required
                    data-validation-required-message="Please enter company name" />
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <textarea class="form-control" placeholder="Your message" id="message" name="message" required
                    data-validation-required-message="Please enter message"></textarea>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group form-group-file">
                <div class="controls-row">
                    <input type="file" class="form-control" placeholder="Your Files" id="docs_contact" name="docs[]" multiple />
                </div>
            </div>
        </div>
		<div class="col-lg-12">
			<div class="form-group">
				<div class="form-label"> Not A Robot? Please Drag till 50 or above and we will know you are Human! </div>
                <div class="range-wrap">
					<input name="pr_count" ino="2" id="pr_count_2" type="range" min="0" max="100" value="0" class="form-control-range range" >
					<output class="bubble" id="pr_count_2_bubble"></output>
				</div>
				<p class="error_rabge_2 hide">Range must be higher than 50</p>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="button-common-div">
                {{-- <a href="#" class="btn btn-common btn-red"> <span class="transform-text">Send message</span> <span class="arrow-right-circle"></span> </a> --}}

                <div class="col-lg-12 d-flex-center">
                    <button type="submit" class="btn btn-submit btn-common btn-red" id="submit" value="Submit" />
                    <span class="transform-text">Send message</span> <span class="arrow-right-circle"></span>
                    </button>
                </div>

            </div>
        </div>
    </div>

</div>
<div id="thankyou_message">
    <div class="thank-you-div thankyou_message mb-20">
        <div class="row">
            <div class="col-lg-12">
                {{-- <div class="img-thanks">
                    <img src="{{ getasset('/assets/images/thankyou.svg')}}" alt="thankyou" class="thanks-you" />
            </div> --}}
            <div class="thank-content-div">
                <h3>Thanks for your Interest!</h3>
                <p>
                    {!! getSession('site_inquiries_thankyou_message', 'Thank You') !!}
                </p>
            </div>
        </div>
    </div>
</div>
</div>
{!! Form::close() !!}





@push('scripts')

<script>




/*
if (window.addEventListener){
    window.addEventListener("load", execurteContactFormScript, false);
}else if (window.attachEvent){
    window.attachEvent("onload", execurteContactFormScript);
}else{
    window.onload = execurteContactFormScript;
} */


</script>
@endpush