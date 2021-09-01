<?php
if(!\Session::has('pub_form_start')){
	\Session::put('pub_form_start',strtotime("now"));
}

?>
<div class="project-form pos-rlative lets-talk-form-modal-root" >

	
    <div class="project-inner">
        {!! Form::open(['url' => route('site.inquiries.save'), 'novalidate'=>true , 'id' =>
        'inquiries_form','autocomplete'=>'off','files'=>true]) !!}
		<input type="text" name="business_name" class="form_business_name" />
		<div class="loaderF" >
            <div class="wrapper">
            <div class="pie spinner"></div>
            <div class="pie filler"></div>
            <div class="mask"></div>
        </div>
			<!-- <img src="{{ url('assets/loader.gif') }}" class="loader-image" width="100" > -->
		</div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-heaeding">
                        <h3><span>Let’s Talk</span></h3>
                        <p id="error_msg"></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <div class="controls-row">
                            <input type="text" class="form-control" placeholder="Name*" name="name_21" required
                                data-validation-required-message="Please enter Name" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <div class="controls-row">
                            <input type="email" class="form-control" placeholder="Email*" name="email" required
                                data-validation-required-message="Please enter Email" />
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row">
                        @if (is_array(@$countrys))
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="controls-row">

                                    {!! Form::select('country_code', array_merge( [''=>'Country Code'], @$countrys )
                                    ,null,['class'=>'form-control ','id'=>'if_s2','required'=>'','data-validation-required-message'=>"Please
                                    select country code"]) !!}


                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="controls-row">
                                    <input type="number" class="form-control" placeholder="Phone*" name="phone_21" required
                                        data-validation-required-message="Please enter Phone" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <div class="controls-row">
                            <input type="text" class="form-control" placeholder="Company Name*" name="company" required
                                data-validation-required-message="Please enter company name" />
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <div class="controls-row">
                            <textarea class="form-control" placeholder="Your message" id="message" name="message"
                                required data-validation-required-message="Please enter message"></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group form-group-file">
                        <div class="controls-row">
                            <input type="file" class="form-control" id="docs" name="docs[]"
                                multiple />
                        </div>
                    </div>
                </div>
				<div class="col-lg-12">
                    <div class="form-group">
						<div class="form-label text-white"> Not A Robot? Please Drag till 50 or above and we will know you are Human!</div>
                        <div class="range-wrap">
                            <input name="pr_count" ino="1" id="pr_count_1" type="range" min="0" max="100" value="0" class="form-control-range range" >
							<output class="bubble" id="pr_count_1_bubble" ></output>
						</div>
						<p class="error_rabge_1 hide">Range must be higher than 50</p>
                    </div>
                </div>

               <div class="col-lg-12 d-flex-center">
                    <input type="submit" class="btn btn-submit" id="submit" value="Submit" />
                </div>
            </div>
        </div>

        {!! Form::close() !!}




        <div class="container" id="thankyou_message">
            <div class="thank-you-div thankyou_message">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="img-thanks">
                            <img data-src="{{ getasset('/assets/images/thankyou.svg')}}"
                                src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt="thankyou"
                                class="thanks-you" width="490" height="131" />
                        </div>
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

    </div>
</div>

<script>


var INQUIRIES_URL =  "{{ route('site.inquiries.save') }}";
var INQUIRIES_CSRF = "{{ csrf_token() }}";

</script>


@push('scripts')

<script>

const allRanges = document.querySelectorAll(".range-wrap");
allRanges.forEach(wrap => {
  const range = wrap.querySelector(".range");
  const bubble = wrap.querySelector(".bubble");

  range.addEventListener("input", () => {
    setBubble(range, bubble);
  });
  setBubble(range, bubble);
});

function setBubble(range, bubble) {
  const val = range.value;
  const min = range.min ? range.min : 0;
  const max = range.max ? range.max : 100;
  const newVal = Number(((val - min) * 100) / (max - min));
  bubble.innerHTML = val;

  // Sorta magic numbers based on size of the native UI thumb
  bubble.style.left = `calc(${newVal}% + (${8 - newVal * 0.15}px))`;
}

</script>
@endpush