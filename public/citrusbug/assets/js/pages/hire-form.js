jQuery(document).ready(function ($) {
	$(document).on("input", ".numeric", function() {
		this.value = this.value.replace(/\D/g,'');
	});
    var form_1_inputs = 0;
	$('#contactus_form_tech').on("focus","input",function(){
		form_1_inputs = form_1_inputs + 1;
    });

    $("#contactus_form_tech input, #contactus_form_tech select, #contactus_form_tech #message").not("#contactus_form_tech [type=submit]").jqBootstrapValidation({
		submitError: function ($form, e) {
            console.log(e);
            return false
        },
        submitSuccess: function ($form, e) {
			$("#contactus_form_tech").find(".error_msg").hide();
			var INQUIRIES_URL = $('#contactus_form_tech').attr('action');
			var INQUIRIES_CSRF = $('#contactus_form_tech input[name=_token]').val();
			
            e.preventDefault();
            e.stopImmediatePropagation();
			var formData = new FormData();
	
			formData.append("country_code",$('#contactus_form_tech input[name=country_code]').val());
			formData.append("page", $('#contactus_form_tech input[name=page]').val());
			formData.append("business_name", $('#contactus_form_tech input[name=business_name]').val());
            formData.append("name_21", $('#contactus_form_tech input[name=name_21]').val());
            formData.append("email", $('#contactus_form_tech input[name=email]').val());
            formData.append("phone_21", $('#contactus_form_tech input[name=phone_21]').val());
            formData.append("message", $('#contactus_form_tech textarea[name=message]').val());
            formData.append("form_number", form_1_inputs);
			
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
						$("#contactus_form_tech").find(".loaderF").show();
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
							$("#contactus_form_tech").find(".loaderF").hide();
							$("#contactus_form_tech").find(".error_msg").show();
							$("#contactus_form_tech").find(".error_msg").html(data.message);
						}
					},
					error: function (e) {
						$("#contactus_form_tech").find(".loaderF").hide();
						
						$("#contactus_form_tech").find(".error_msg").show();
						$("#contactus_form_tech").find(".error_msg").html(e.responseJSON.message)
						
					}
				});	
			   });
			});
		
            

        },
    });

});