$(document).ready(function(){ 
    $('#owl-testimonials').owlCarousel({
        loop:false,
        nav:true,
        navText: ['<span class="span-roundcircle left-roundcircle"><i class="fe fe-arrow-left left-arrow"></span>','<span class="span-roundcircle right-roundcircle"><i class="fe fe-arrow-right right-arrow"></span>'],
        dots: false,
        stagePadding: 0,
        margin:0,
        smartSpeed:2000,
        responsive:{
            0:{
                items:1 
            },
            600:{
                items:2
            },
            1000:{
                items:2
            },
            1180:{
              items:2
            } 
    
        }
      });
    $('#client-owl').owlCarousel({
        loop:false,
        nav:true,
        navText: ['<span class="span-roundcircle left-roundcircle"><i class="fe fe-arrow-left left-arrow"></span>','<span class="span-roundcircle right-roundcircle"><i class="fe fe-arrow-right right-arrow"></span>'],
        dots: false,
        stagePadding: 0,
        margin:10,
        autoplay:true,
        smartSpeed:2000,
        responsive:{
            0:{
                items:3,
            },
            600:{
                items:8
            },
            1200:{
                items:8
            }
       }
       
    });
});

