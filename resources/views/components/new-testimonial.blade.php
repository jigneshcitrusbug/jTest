<section class="section our-clients-section bg-transparent-black-color" data-color="bg-transparent-black-01">
      <div class="container-fluid plr-78">
        <div class="our-clients-root">
          
          <div class="row">
            <div class="col-lg-12 col-md-12">

              <div class="header-common-center-div">
                <h2>Our Clients</h2>
              </div>

            </div>
          </div>

          <div class="our-clients-inner-div">
            <div class="owl-carousel owl-theme Our-clients-slider-owl" id="our-clients-slider-owl01">
			  @foreach($testimonials as $item)
                    @php
                    $param = unserialize($item->param);

                    $image_main = @$param['image_main'];

                    $industry = @$param['industry'];
                    $employee = @$param['employee'];
                    $address = @$param['address'];
                    $review_date = @$param['review_date'];

                    $project_title = @$param['project_title'];
                    $project_task = @$param['project_task'];
                    $project_price = @$param['project_price'];
                    $project_date = @$param['project_date'];

                    $summary = @$param['summary'];
                    $clutch_url = @$param['clutch_url'];

                    @endphp
					<div class="item">
                <div class="our-clients-card-bx-div">
                  
                  <!-- start card  -->
                  <div class="testimonial-box">
                    <div class="row row-0">
                      <div class="col-xl-9 col-lg-8 col-md-12 pad-0">
                        <div class="about-project">

                          <div class="row oc-row-01 row-0">
                  
                            <div class="col-xl-5 col-lg-12 pad-0 br-1 bb-1 oc-r1-col-01">
                              <div class="content-box ">
                                <h3>The Project</h3>
                                <h4>{{ @$project_title}}</h4>
                                <ul class="list-ul">
                                  <li>
                                    <span class="icons-span icons"><i class="fe fe-tv rotate"></i></span>
                                    <span class="text-span">{{ @$project_task}}</span>
                                  </li>
                                  <li>
                                    <span class="icons-span icons"><i class="fe fe-tag"></i></span>
                                    <span class="text-span">{{ @$project_price}}</span>
                                  </li>
                                  <li>
                                    <span class="icons-span icons"><i class="fe fe-calendar"></i></span>
                                    <span class="text-span">{{ @$project_date}}</span>
                                  </li>
                                </ul>
                              </div>
                            </div>
                  
                            <div class="col-xl-4 col-lg-6 col-md-6 pad-0 br-1 bb-1 oc-r1-col-02">
                              <div class="content-box-two">
                                <div class="content">
                                  <h3>THE REVIEW </h3>
                                  <h4>{!!@$item->title!!}</h4>
                                </div>
                  
                                <div class="date mobile-hidden">
                                  <p>{{ @$review_date}}</p>
                                </div>
                              </div>
                            </div>
                  
                            <div class="col-xl-3 col-lg-6 col-md-6 pad-0 br-1 bb-1 oc-r1-col-03">
                              <div class="rating-div">
                                <div class="rating-star">
                                  <h3>05</h3>
                                  <ul class="list-ul">
                                    <li>
                                      <a href="javascript: void(0);">
                                        <span class="material-icons">
                                          star
                                        </span>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="javascript: void(0);">
                                        <span class="material-icons">
                                          star
                                        </span>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="javascript: void(0);">
                                        <span class="material-icons">
                                          star
                                        </span>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="javascript: void(0);">
                                        <span class="material-icons">
                                          star
                                        </span>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="javascript: void(0);">
                                        <span class="material-icons">
                                          star
                                        </span>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                  
                                <div class="star-text-view-div mobile-hidden">
                                  <p>Quality<span>0.5</span></p>
                                  <p>Schedule<span>0.5</span></p>
                                  <p>Cost<span>0.5</span></p>
                                  <p>Willing to refer<span>0.5</span></p>
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class="row oc-row-02 row-0 mobile-hidden">
                            <div class="col-xl-5 col-lg-6 col-md-6 pad-0 br-1 oc-r2-col-01">
                              <div class="content-box-three">
                                <h3>Project summary:</h3>
                                {!! @$summary!!}
                              </div>
                            </div>
                  
                            <div class="col-xl-7 col-lg-6 col-md-6 pad-0 br-1 oc-r2-col-02">
                              <div class="content-box-three">
                                <h3>Feedback summary:</h3>
                                {!!@$item->description!!}
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-xl-3 col-lg-4 col-md-12 pad-0">
                        <div class="content-profile">
                          <h3>THE REVIEWER</h3>
                          <h4>{{$item->position}}</h4>
                  
                          <div class="profile-detail">

                            <div class="profile-pic-txt-bx">
                              <div class="profile-pic"> 
                                <img src="{!! getasset( @$image_main ) !!}"
                                        data-src="{!! getasset( @$image_main ) !!}" width="100" height="100"
                                        alt="{{$item->name}}">
                              </div>
                              <div class="profile-title-div">
                                <h3>{{$item->name}}</h3>
                              </div>
                            </div>
                            
                            <ul class="list-ul mobile-hidden">
                              <li>
                                <span class="icons "><i class="fe fe-briefcase"></i></span>
                                {{@$industry}}
                              </li>
                              <li>
                                <span class="icons"><i class="fe fe-user"></i></span>
                                {{@$employee}}
                              </li>
                              <li>
                                <span class="icons"><i class="fe fe-map-pin"></i></span>
                                {{@$address}}
                              </li>
                  
                              <li>
                                <span class="icons"><i class="fe fe-message-square"></i></span>
                                Phone Interview
                              </li>
                  
                              <li>
                                <span class="icons"><i class="fe fe-shield"></i></span>
                                Verified
                              </li>
                  
                            </ul>
                          </div>
                  
                          <div class="button-common-div read-more-div">
                            <a href="{{@$clutch_url}}" rel="nofollow" target="_blank" class="btn btn-common btn-readmore"> 
                              <span class="c-icon"> <span class="bg-custom-icon clutch-custom-icon"></span> </span>
                              <span class="transform-text nt">read more</span> 
                            </a>
                            <span class="date-text desktop-hidden">{{@$review_date}}</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of card -->
                
                </div>
              </div>

              
			  @endforeach				
              
            </div>
          </div>

        </div>
      </div>
    </section>
