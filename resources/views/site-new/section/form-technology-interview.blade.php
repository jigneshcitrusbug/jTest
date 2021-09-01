<div class="row" id="schedule-interview">
            <div class="col-lg-12 col-md-12">

              <div class="trial-form-div">

                <div class="header-common-center-div header-common-center02-div">
                  <h3>Schedule a quick interview now to avail a 15-days risk-free trial.</h3>
                  <p>Citrusbug provides skilled, experienced, vetted, and dedicated talent to its clients. <span class="block">You can also hire {{$technology}} developers from Citrusbug by filling the form below.</span></p>
                </div>

                <div class="max-width-900">
				{!! Form::open(['url' => route('site.inquiries.save'), 'novalidate'=>true , 'id' =>
'contactus_form_tech','autocomplete'=>'off','files'=>true]) !!}
				
				@include('site-new.section.loaderJ')
				<div class="alert alert-warning alert-dismissible error_msg" role="alert" ></div>
				<input type="hidden" name="page" value="{{$technology}}" class="form_business_name" />
				<input type="hidden" name="business_name" class="form_business_name" />
				<input type="hidden" name="country_code" id="country_code" class="country_code" />
                  <div class="form-div">
                    <div class="row mlr-8">

                      <div class="col-lg-4 col-md-12">
                        <div class="form-group form-group-icon">
                          <div class="input-div">
							<input type="text" name="name_21" class="form-control" placeholder="Name" required />
                            <span class="icon-span">
                              <span class="bg-custom-icon user-icon"></span>
                            </span>
                          </div>
						  <div class="invalid-feedback">Please enter your name.</div>
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-12">
                        <div class="form-group form-group-icon">
                          <div class="input-div">
                            <input type="text" name="phone_21" id="phone" class="numeric form-control" placeholder="Phone"  />
                            <span class="icon-span">
                              <span class="bg-custom-icon phone-icon"></span>
                            </span>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-12">
                        <div class="form-group form-group-icon">
                          <div class="input-div">
                            <input type="email" name="email" class="form-control" placeholder="E-mail" required
                    data-validation-required-message="Please enter E-mail" />
                            <span class="icon-span">
                              <span class="bg-custom-icon mail-icon"></span>
                            </span>
                          </div>
						  <div class="invalid-feedback">Please enter your valid E-mail</div>
                        </div>
                      </div>

                      <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                          <div class="input-div">
                            <textarea id="message" name="message" class="form-control" placeholder="Requirement" cols="30" rows="5" required
                    data-validation-required-message="Please enter Requirement"></textarea>
                          </div>
						  <div class="invalid-feedback">Please write something about your requirement.</div>
                        </div>
                      </div>

                      <div class="col-lg-12 col-md-12">
                        <div class="button-center-div">
                          <button class="btn btn-yellow" type="submit">Submit</button>
                        </div>
                      </div>

                    </div>
                  </div>
				  {!! Form::close() !!}
                </div>

              </div>

            </div>
          </div>
		  