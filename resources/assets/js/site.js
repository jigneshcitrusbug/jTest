jQuery(document).ready(function ($) {

    $('#slideContainer').owlCarousel({
        loop: true,
        stagePadding: 0,
        nav: false,
        smartSpeed: 600,
        dots: false,
        items: 1,
        responsiveClass: true,
        autoplayHoverPause: false,
        autoplay: true,
        center: true,
        responsive: {
            0: {
                dots: false,
                margin: 0,
                stagePadding: 0,
                items: 1
            },

            737: {
                dots: false,
                margin: 0,
                stagePadding: 0,

                items: 1
            },
            766: {
                dots: false,
                margin: 0,
                stagePadding: 0,
                items: 1
            },
            1025: {
                items: 1,
            }
        }
    });


    $(".accordion .btn-link").on("click", function () {
        $(".accordion .card").removeClass('active');
        $(this).parent().parent().toggleClass('active');
    });

    var $grid = $('.grid');
    if ($grid.length > 0) {
        $grid.isotope({

            itemSelector: '.grid-item',
            columnWidth: '.grid-sizer',
            percentPosition: true,
            initLayout: false,
            horizontalOrder: false,
            stagger: 30,
            layoutMode: 'masonry'

        });
        $grid.imagesLoaded().progress(function () {
            $grid.isotope();
        });

        $(".nav-tabs li a").on('click', function () {
            $(".nav-tabs li a").removeClass("active");
            var tech = $(this).attr('data-toggle');
            $grid.isotope({ filter: '.' + tech });
            $(this).addClass('active');
            return false;
        });
    }


    
	$(".start-new-project .closeform").on("click", function () {
		setTimeout(function(){
			$('#inquiries_form').show();
			$('#thankyou_message').hide();
			$('#pr_count_1_bubble').html('0');
			$('#pr_count_1_bubble').css('left', 'calc(0% + 8px)');
			
			
			$('#unsubscribe_form').show();
            $('#unsubscribe_thankyou_message').hide();
			
			$('#inquiries_form')[0].reset();
			$('#unsubscribe_form')[0].reset();
			
		},3000); 
    });
	var inquery_inputs = 0;
	$('#inquiries_form').on("focus","input",function(){
		inquery_inputs = inquery_inputs + 1;
    });

    $("#inquiries_form input, #inquiries_form select, #inquiries_form #message").not("#inquiries_form [type=submit]").jqBootstrapValidation({
		submitError: function ($form, e) {
            console.log(e);
            console.log("error");
            return false
        },
        submitSuccess: function ($form, e) {
			
            e.preventDefault();
            e.stopImmediatePropagation();
			
			var formData = new FormData();

            var totalfiles = document.getElementById('docs').files.length;
            for (var index = 0; index < totalfiles; index++) {
                formData.append("docs[]", document.getElementById('docs').files[index]);
            }
			
			if($('#inquiries_form input[name=pr_count]').val() > 50){
				$('.error_rabge_1').addClass("hide");
            formData.append("business_name", $('#inquiries_form input[name=business_name]').val());
            formData.append("name_21", $('#inquiries_form input[name=name_21]').val());
            formData.append("email", $('#inquiries_form input[name=email]').val());
            formData.append("phone_21", $('#inquiries_form input[name=phone_21]').val());
            formData.append("company", $('#inquiries_form input[name=company]').val());
            formData.append("message", $('#inquiries_form textarea[name=message]').val());
            formData.append("country_code", $('#inquiries_form select[name=country_code]').val());
			formData.append("pr_count", $('#inquiries_form input[name=pr_count]').val());
			formData.append("form_number", inquery_inputs);
			
            grecaptcha.ready(function() {
			  grecaptcha.execute('6LdEDVwaAAAAAOVlPgX0wbGTYKqO1W6wjQPBBmuB', {action:'validate_captcha'})
              .then(function(token) {
				    formData.append("g-recaptcha-response",token);
					$.ajax({
					method: "POST",
					url: INQUIRIES_URL,
					data: formData,
					headers: {
						"X-CSRF-TOKEN": INQUIRIES_CSRF
					},
					beforeSend: function(){
						$("#inquiries_form").find(".loaderF").show();
					},
					processData: false,
					contentType: false,
					success: function (data) {
						if (data.code == '200') {
							inquery_inputs = 0;
							ga('send', {
								hitType: 'event',
								eventCategory: 'Contact',
								eventAction: 'Inquiry',
								eventLabel: 'Form'
							});
							
							if(data.rlink != ''){
								window.location.href = data.rlink;
							}

						} else {
							$("#inquiries_form").find(".loaderF").hide();
							$('#inquiries_form').show();
							$('#thankyou_message').hide();
							$("#error_msg").html(data.message)
						}
					},
					error: function (e) {
						$("#inquiries_form").find(".loaderF").hide();
						console.log(e);
						if (e.status == 400) {
							$('#inquiries_form').show();
							$('#thankyou_message').hide();
							$("#error_msg").html(e.responseJSON.message)
						}

					}
				});	
			   });
			});
		}else{
			$('.error_rabge_1').removeClass("hide");
		}
            

        },
    });

    $('.testimonial-2-carousel').owlCarousel({
        loop: true,
        margin: 0,
        stagePadding: 0,
        nav: true,
        smartSpeed: 2000,
        dots: true,
        autoplay:true,
        autoplayHoverPause: true,
        navText: ["<i class='fe fe-chevron-left'></i>","<i class='fe fe-chevron-right'></i>"],
        responsive: {
            0: {
                items: 1,
                dots: false,
                autoHeight: false
            },
            600: {
                items: 1,
                dots: false,
                autoHeight: false
            },
            1000: {
                items: 1,
                dots: false,
                nav: true,
            },

        }
    });
	
	var career_inputs = 0;
	$('#career_form').on("focus","input",function(){
		career_inputs = career_inputs + 1;
    });
	
	$("#career_form input, #career_form select, #career_form #career_message").not("#career_form [type=submit]").jqBootstrapValidation({
        submitError:  function($form,e){
            console.log(e);
            console.log("error");
            return false
        }, 
        submitSuccess: function($form, e){
			e.preventDefault();
            e.stopImmediatePropagation(); 
				var file = document.getElementById('resume').files[0];

                var formData = new FormData(); 
				if($('#career_form input[name=pr_count]').val() > 50){
                $('.error_rabge_3').addClass("hide");
                formData.append("business_name", $('#career_form input[name=business_name]').val());
                formData.append("career_id", $('#career_form input[name=career_id]').val());
                formData.append("name_21", $('#career_form input[name=name_21]').val());
                formData.append("email", $('#career_form input[name=email]').val());
                formData.append("phone_21", $('#career_form input[name=phone_21]').val());
                formData.append("message", $('#career_form textarea[name=message]').val());
                formData.append("resume", file, file.name);
				formData.append("pr_count", $('#career_form input[name=pr_count]').val());
				formData.append("form_number", career_inputs);
                
                grecaptcha.ready(function() {
				  grecaptcha.execute('6LdEDVwaAAAAAOVlPgX0wbGTYKqO1W6wjQPBBmuB', {action:'validate_captcha'})
                  .then(function(token) {
					   formData.append("g-recaptcha-response",token);
					   $.ajax({
						method: "POST",
						url: CAREER_URL,
						data: formData,
						headers: {
							"X-CSRF-TOKEN": CAREER_CSRF
						},
						beforeSend: function(){
							$("#career_form").find(".loaderF").show();
						},
						processData: false,
						contentType: false,
						success: function (data) {
							if(data.code == '200'){
								if(data.rlink != ''){
									window.location.href = data.rlink;
								}
							}else{
								$("#career_form").find(".loaderF").hide();
								$('#career_form').show();
								$('#career_thankyou_message').hide();
								$("#career_error_msg").html(data.message)
							}       
						},
						error: function(e) {
							$("#career_form").find(".loaderF").hide();
							console.log(e);
							if(e.status == 400){
								$('#career_form').show();
								$('#career_thankyou_message').hide();
								$("#career_error_msg").html(e.responseJSON.message)
							}
							
						} 
					});	
					});
				});
			}else{
				$('.error_rabge_3').removeClass("hide");
			}
                
                
           
        },  
}); 

	var contactus_inputs = 0;
	$('#contactus_form').on("focus","input",function(){
		contactus_inputs = contactus_inputs + 1;
    });
	
    $("#contactus_form input, #contactus_form select, #contactus_form #message").not("#contactus_form [type=submit], #contactus_form #g-recaptcha-response-1").jqBootstrapValidation({
            submitError:  function($form,e){
                console.log(e); 
                console.log("error");
                return false
            }, 
            submitSuccess: function($form, e){
				e.preventDefault(); 
                e.stopImmediatePropagation();
				
				var formData = new FormData();

                var totalfiles = document.getElementById('docs_contact').files.length;
                for (var index = 0; index < totalfiles; index++) {
                    formData.append("docs[]", document.getElementById('docs_contact').files[index]);
                }
				
				if($('#contactus_form input[name=pr_count]').val() >50){
				$('.error_rabge_2').addClass("hide");
                formData.append("business_name", $('#contactus_form input[name=business_name]').val());
                formData.append("name_21", $('#contactus_form input[name=name_21]').val());
                formData.append("email", $('#contactus_form input[name=email]').val());
                formData.append("phone_21", $('#contactus_form input[name=phone_21]').val());
                formData.append("company", $('#contactus_form input[name=company]').val());
                formData.append("message", $('#contactus_form textarea[name=message]').val());
                formData.append("country_code", $('#contactus_form select[name=country_code]').val());
                formData.append("pr_count", $('#contactus_form input[name=pr_count]').val());
				formData.append("form_number", contactus_inputs);
				formData.append("form_type",'contactus-form');
					
				
				 grecaptcha.ready(function() {
				  grecaptcha.execute('6LdEDVwaAAAAAOVlPgX0wbGTYKqO1W6wjQPBBmuB', {action:'validate_captcha'})
                  .then(function(token) {
					   formData.append("g-recaptcha-response",token);
						$.ajax({
							method: "POST",
							url: INQUIRIES_URL,
							data: formData,
							headers: {
								"X-CSRF-TOKEN": INQUIRIES_CSRF
							},
							beforeSend: function(){
								$("#contactus-form").find(".loaderF").show();
							},
							processData: false,
							contentType: false,
							success: function (data) {
								if(data.code == '200'){
									contactus_inputs = 0;
									ga('send', {
										hitType: 'event',
										eventCategory: 'Contact',
										eventAction: 'contact',
										eventLabel: 'Form' 
									});
									
									if(data.rlink != ''){
										window.location.href = data.rlink;
									}
									
								}else{
									$("#contactus-form").find(".loaderF").hide();
									$('#contactus_form #contactus-form').show();
									$('#contactus_form #thankyou_message').hide();
									$("#contactus_form #error_msg").html(data.message)
								}       
							},
							error: function(e) {
								$("#contactus-form").find(".loaderF").hide();
								console.log(e);
								if(e.status == 400){
									$('#contactus_form #contactus-form').show();
									$('#contactus_form #thankyou_message').hide();
									$("#contactus_form #error_msg").html(e.responseJSON.message)
								}
								
							} 
						});
					});
				});
				}else{
					$('.error_rabge_2').removeClass("hide");
				}
            },  
    }); 
	
	$("#unsubscribe_form input, #unsubscribe_form select ").not("[type=submit]").jqBootstrapValidation({
                submitError:  function(){
                    console.log("error");
                    return false
                }, 
                submitSuccess: function($form, e){
                    e.preventDefault();
                    e.stopImmediatePropagation();
                    var formData = {
                        'name'              : $('#unsubscribe_form input[name=name]').val(),
                        'email'             : $('#unsubscribe_form input[name=email]').val(),
                        'message'             : $('#unsubscribe_form textarea[name=message]').val(),
                    };
					var form_url = $('#unsubscribe_form').attr("action");
					var form_token = $('#unsubscribe_form').find('input[name="_token"]').val();
                    $.ajax({
                        method: "POST",
                        url: form_url,
                        data: formData,
                        headers: {
                            "X-CSRF-TOKEN": form_token,
                        },
						beforeSend: function(){
							$("#unsubscribe_form").find(".loaderF").show();
						},
                        success: function (data) {
							$("#unsubscribe_form").find(".loaderF").hide();
                            if(data.code == '200'){
                                $('#unsubscribe_form').hide();
                                $('#unsubscribe_thankyou_message').show();
                            }else{
                                console.log(data);
                                $('#unsubscribe_form').show();
                                $('#unsubscribe_thankyou_message').hide();
                                $("#unsubscribe_error_msg").html(data.message)
                            }       
                        },
                        error: function(e) {
							$("#unsubscribe_form").find(".loaderF").hide();
                        }  
                    });  
                    return false
                },  
        }); 
		
	var $grid = $('.grid').masonry({
        itemSelector: '.grid-item',
        columnWidth: '.grid-sizer',
        percentPosition: true,
        initLayout: true,
        horizontalOrder: false,
        stagger: 30,
    });
        
    

	$("[type=range]").change(function(){
		var range=$(this).val();
		var eclass= "error_rabge_"+$(this).attr("ino");
		if(range >50){
			$('.'+eclass).addClass("hide");
		}else{
			$('.'+eclass).removeClass("hide");
		}
	});
    function run_us_clock(){
  
  
        var date = new Date(new Date().toLocaleString("en-US",{timeZone:'America/Chicago'}));
           
        
        let hr = date.getHours();
        let min = date.getMinutes();
        let sec = date.getSeconds();
      
        let hrPosition = hr*360/12 + ((min * 360/60)/12) ;
        let minPosition = (min * 360/60) + (sec* 360/60)/60;
        let secPosition = sec * 360/60;
      
        $(".us #hour").css('transform',"rotate(" + hrPosition + "deg)");  
        $(".us #minute").css('transform',"rotate(" + minPosition + "deg)");
      }

      function run_india_clock(){
  
  
        var date = new Date(new Date().toLocaleString("en-US",{timeZone:'Asia/Kolkata'}));
     
        
        let hr = date.getHours();
        let min = date.getMinutes();
        let sec = date.getSeconds();
    
        let hrPosition = hr*360/12 + ((min * 360/60)/12) ;
        let minPosition = (min * 360/60) + (sec* 360/60)/60;
        let secPosition = sec * 360/60;
    
        $(".india #hour").css('transform',"rotate(" + hrPosition + "deg)");  
        $(".india #minute").css('transform',"rotate(" + minPosition + "deg)");
    }

    $(".select2").select2({
        placeholder: "Country Code",
        minimumResultsForSearch: -1,
    });

    $(".selectproject").select2({
        placeholder: "Country Code",
        minimumResultsForSearch: -1,
        dropdownParent: $('.start-new-project')
    });

	$("#cf_s2").select2({
		dropdownParent: $("#contactus_form"),
		width: '100%'
	});
	$("#if_s2").select2({
		dropdownParent: $("#inquiries_form"),
	});
  

    run_india_clock();
setInterval(run_india_clock, 1000);
run_us_clock();
setInterval(run_us_clock, 1000);


});