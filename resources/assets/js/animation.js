jQuery(document).ready(function ($) {

    let cbMenuOptionScroll = Scrollbar.init(
        document.querySelector("#cb-menu-option-inner"), {
        damping: 0.1,
        thumbMinSize: 100,
        renderByPixels: true
    }
    );

    let cbSubmenuWorkScroll = Scrollbar.init(
        document.querySelector("#cb-submenu-work"), {
        damping: 0.1,
        thumbMinSize: 100,
        renderByPixels: true
    }
    );

    $(".start-project").on('click', function (e) {
        e.preventDefault();
        $('body').addClass('bodyFix');
        $('body').attr('theme', 'dark');

        /*
        // $('.start-new-project').css('width','100%'); 
        */
        var tl = gsap.timeline();
        tl.set(".start-new-project .logo-div", { opacity: 0 })
        tl.set(".start-new-project", { opacity: 1 })
        tl.to(".start-new-project", { width: '100%', duration: 0.5 })
        tl.to(".start-new-project .logo-div", { opacity: 1, duration: 0.1, }, "-=0.4")
        tl.to("#start-new-project .project-form .project-inner", { opacity: 1, duration: 0.5, })
        return false;
        /*
        // gsap.to(".start-new-project" , { 
        //     width: '100%', opacity: 1,  duration: 0.5, delay:0 , onComplete:function(){
        //         gsap.to(".project-form .project-inner" , { 
        //             opacity: 1,  duration: 0.5, delay:0,  
        //          });

        //     }
        // });
        */

    });

    $(".closeform").on('click', function () {

        var tl = gsap.timeline();

        tl.to("#start-new-project .project-form .project-inner", { opacity: 0, duration: 0.5 })
        tl.to(".start-new-project .logo-div", { opacity: 0, duration: 0.1, })
        tl.to(".start-new-project", {
            width: '0%',
            duration: 0.5,
            onComplete: function () {
                $('body').removeClass('bodyFix');
                $('body').attr('theme', '');
            }
        }, "-=0.1");


    })




    $("#open-nav").on('click', function (e) {
        e.preventDefault();
        $('body').addClass('bodyFix');
        $('body').attr('theme', 'dark');



        var tl = gsap.timeline({});

        /*
        //tl.to(".sidenav", { x: '0', duration: 10 })
*/

        tl.set(".sidenav", { opacity: 1 })
        tl.set(".cb-menu-conatiner .cb-menu-inner-welcome", { opacity: 0 })

        tl.to(".sidenav", { x: '0%', duration: 0.5 })
        tl.to(".cb-menu-conatiner .cb-menu-inner-welcome", { opacity: 1, duration: 0.5, delay: 0.5 })
        tl.to(".cb-menu-footer .send-message", { y: 0, opacity: 1, duration: 0.5 })
        tl.to(".cb-menu-footer .cb-social-link", { y: 0, opacity: 1, duration: 0.5 }, "-=0.5")
        return false;
        /*
        // gsap.to(".sidenav" , { 
        //     width: '100%', opacity: 1,  duration: 0.5, delay:0 , onComplete:function(){
        //         gsap.to(".cb-menu-conatiner .cb-menu-inner-welcome" , { 
        //             opacity: 1,  duration: 0.5, delay:0,  
        //          });
        //          gsap.to(".cb-menu-footer .send-message" , { 
        //             y: 0, opacity: 1,  duration: 0.5, delay:0.5,  
        //          });
        //          gsap.to(".cb-menu-footer .cb-social-link" , { 
        //             y: 0, opacity: 1,  duration: 0.5, delay:0.5,  
        //          });
        //     }
        // });
        */


    })



    $('.closeNav').on('click', function () {

        /*
        // $('.sidenav').css('width','0%');
        // $('body').css('overflow','unset');
        // $('body').css('height','unset');
        // $('body').css('position','unset');    
        */


        $('.cb-menu-option .cb-submenu').hide();

        $('.cb-menu-option').hide();

        $('.welcome-menu').removeClass('cb-menu-list');

        var tl = gsap.timeline();

        tl.to(".cb-menu-footer .cb-social-link", {
            y: 40,
            opacity: 0,
            duration: 0.2,
        });
        tl.to(".cb-menu-footer .send-message", {
            y: 40,
            opacity: 0,
            duration: 0.2
        }, "-=0.2");

        tl.to(".cb-menu-conatiner .cb-menu-inner-welcome", {
            opacity: 0,
            duration: 0.5,
            delay: 0.3
        });

        tl.to(".sidenav", {
            x: '-100%',
            duration: 0.3,
            onComplete: function () {
                $('body').attr('theme', '');
                $('body').removeClass('bodyFix');
            }
        }, "-=0.3");


    })

    $('.welcome-menu.desktop ul li a').on('click', function () {

        var link = $(this).attr('data-link');
        var welcome = $('.welcome-menu').hasClass('cb-menu-list');
        $('.welcome-menu ul li a').removeClass('active');
        /* console.log('active class removed'); */
        if (welcome) {
            var tl = gsap.timeline();
            tl.to(".cb-menu-option .cb-submenu", {
                opacity: 0,
                duration: 0.2,
                onComplete: function () {
                    // $('.welcome-menu ul li a').removeClass('active'); 
                    $('.cb-menu-option .cb-submenu').hide();
                    $('.cb-menu-option .cb-submenu-' + link).show();
                }
            });
            tl.to(".cb-menu-option .cb-submenu", {
                opacity: 1,
                duration: 0.2
            });


        } else {
            var tl = gsap.timeline();
            tl.to(".cb-menu-conatiner .cb-menu-inner-welcome", {
                opacity: 0,
                duration: 0.2,
                onComplete: function () {
                    $('.welcome-menu').addClass('cb-menu-list');
                    $('.cb-menu-option').show();
                    $('.cb-menu-option .cb-submenu').hide();
                    $('.cb-menu-option .cb-submenu-' + link).show();
                    $('.sidenav .closebtn').hide();
                }
            });
            tl.to(".cb-menu-conatiner .cb-menu-inner-welcome", {
                opacity: 1,
                duration: 0.2
            });


        }


        $(this).addClass('active');
        /* console.log('active class added'); */

    });

    $('.sidenav .closeSubNav').on('click', function () {

        var tl = gsap.timeline();

        tl.to(".cb-menu-conatiner .cb-menu-inner-welcome", {
            opacity: 0,
            duration: 0.2,
            onComplete: function () {
                $('.cb-menu-option .cb-submenu').hide();

                $('.cb-menu-option').hide();

                $('.welcome-menu').removeClass('cb-menu-list');

                $('.sidenav .closebtn').show();
            }
        });
        tl.to(".cb-menu-conatiner .cb-menu-inner-welcome", {
            opacity: 1,
            duration: 0.2
        })


        return false
    });

    /*
    // $('.welcome-menu.cb-menu-list ul li a').on('click',function(e){
    //     e.preventDefault();
    //     $('.welcome-menu ul li a').removeClass('active'); 
    //     $('.cb-menu-option .cb-submenu').hide();
    //     $('.cb-menu-option .cb-submenu-'+link).show();
    //     return false
    // })
    */

    $('.cb-submenu-work li').mouseenter(function () {
        $('.cb-submenu-work li').removeClass('active');
        $(this).addClass('active');
    })




});

jQuery(document).ready(function ($) {


    /*
    // gsap.to(".loading .logo-div" , { 
    //     top: 0, left: 0, duration: 1, delay:0
    // });
    // gsap.to(".loading" , { 
    //     opacity: 0,   duration: 1, zIndex: -1, delay:1
    // });
    */


    gsap.to(".menubar-header .header-div .logo-div", {
        opacity: 1,
        duration: 1,
        delay: 0
    });

    gsap.to(".heading-content h1 .span-block:nth-child(1)", {
        y: '-20%',
        opacity: 1,
        duration: 1,
        delay: 1
    });
    gsap.to(".heading-content h1 .span-block:nth-child(2)", {
        y: '-20%',
        opacity: 1,
        duration: 1,
        delay: 2
    });
    gsap.to(".heading-content h1 .span-block:nth-child(3)", {
        y: '-20%',
        opacity: 1,
        duration: 1,
        delay: 3
    });

    gsap.to(".bottom_content", {
        opacity: 1,
        duration: 1,
        delay: 3.5
    });

    $(".main_slide").on('mouseenter', function () {
        $('body').addClass('slideActivate');
        let slideTheme = $(this).attr('data-slide-theme');
        $('body').attr('slide-theme', slideTheme);

        gsap.to(".slides .slide[data-slide='" + $(this).attr('data-slide') + "']", {
            opacity: 1,
            duration: 1,
            delay: 0
        });

    })
    $(".main_slide").on('mouseleave', function () {
        $('body').removeClass('slideActivate');
        $('body').attr('slide-theme', '');

        gsap.to(".slides .slide[data-slide='" + $(this).attr('data-slide') + "']", {
            opacity: 0,
            duration: 1,
            delay: 0
        });
    })

    $('.slider-list-tabs .slider-link').on('click', function () {
        $('.slider-list-tabs .slider-link').removeClass('active');
        $(this).addClass('active');
    })




    var controller = new ScrollMagic.Controller();
    /*
        // var tl = gsap.to('.case-study-section .case-study-div .case-study1 .scroll-btn-div', 3, { y: 0, ease: Linear.easeNone });
    
        // var scene = new ScrollMagic.Scene({
        //     triggerElement: '#case-study-container .case-study1',
        //     triggerHook: 0.4,
        //     duration: "100%"
        // })
        // .setTween(tl)
        // // .addIndicators({
        // //     colorTrigger: "black",
        // //     colorStart: "white",
        // //     colorEnd: "white",
        // //     indent: 10
        // //   })
        // .addTo(controller);
    
    
    
    
    
    
    
        // var scene =new ScrollMagic.Scene({
        //     triggerElement: '#case-study-container', // starting scene, when reaching this element
        //     duration: 100, // the scene should last for a scroll distance of 100px
        //     offset: 50 // start this scene after scrolling for 50px
        // }).setPin('h3').addTo(controller); 
    
    
    
    
        // var t3 = gsap.to('.case-study-section .case-study-div .case-study2 .scroll-btn-div', 3, { y: 0, ease: Linear.easeNone });
    
        // var scene = new ScrollMagic.Scene({
        //     triggerElement: '#case-study-container .case-study2',
        //     triggerHook: 0.4,
        //     duration: "100%"
        // })
        // .setTween(t3)
        // // .addIndicators({
        // //     colorTrigger: "black",
        // //     colorStart: "white",
        // //     colorEnd: "white",
        // //     indent: 30
        // //   })
        // .addTo(controller);
    
    
    
    
        // Fixed Project Navigation Show 
    
        // var t2 = gsap.to('.case-study-section .case-study-div .slider-tab-fixed', 3, {top: 20, opacity: 1, ease: Linear.easeNone });
        // var projects = new ScrollMagic.Scene({
        //     triggerElement: '#case-study-section',
        //     triggerHook: 0.1,
        //     duration: "40%"
        // })
        // .setTween(t2)
        // // .addIndicators({
        // //     colorTrigger: "black",
        // //     colorStart: "black",
        // //     colorEnd: "black",
        // //     indent: 20
        // // })
        // .addTo(controller);
    
        // Fixed Project Navigation hide 
    
        // var t2 = gsap.to('.case-study-section .case-study-div .slider-tab-fixed', 1, {top: -100, opacity: 0, ease: Linear.easeNone });
        // var scene = new ScrollMagic.Scene({
        //     triggerElement: '.services-section',
        //     triggerHook: 0.5,
        //     duration: "40%"
        // })
        // .setTween(t2)
        // // .addIndicators({
        // //     colorTrigger: "black",
        // //     colorStart: "black",
        // //     colorEnd: "black",
        // //     indent: 20
        // // })
        // .addTo(controller);
    
    
    
    
    
        // // on Project Scroll Chnage Body Theme 
        // var projectsScroll = new ScrollMagic.Scene({
        //     triggerElement: '#case-study-section',
        //     triggerHook: 0.5,
        //     duration: $('#case-study-section').height()
        // })
        // // .addIndicators({
        // //     colorTrigger: "black",
        // //     colorStart: "white",
        // //     colorEnd: "white",
        // //     indent: 20
        // // })
        // .addTo(controller);
        // projectsScroll.on("enter", function (event) {
        //     $('body').attr('theme','dark');
        // });
        // projectsScroll.on("leave", function (event) {
        //     $('body').attr('theme','');
        // });
    
    
        // on Project Scroll Chnage Body Theme 
        // var sowsScroll = new ScrollMagic.Scene({
        //     triggerElement: '.scope-of-work-section',
        //     triggerHook: 0.5,
        //     duration: $('.scope-of-work-section').height()
        // })
        // // .addIndicators({
        // //     colorTrigger: "black",
        // //     colorStart: "white",
        // //     colorEnd: "white",
        // //     indent: 20
        // // })
        // .addTo(controller);
    
        // sowsScroll.on("enter", function (event) {
        //     $('body').attr('theme','dark');
        // });
        // sowsScroll.on("leave", function (event) {
        //     $('body').attr('theme','');
        // });
    
    
    */

    var challangesScroll = new ScrollMagic.Scene({
        triggerElement: '.our-challanges-section',
        triggerHook: 0.3,
        duration: '90%'
    })
        .addTo(controller);
    challangesScroll.on("enter", function (event) {
        $('.inner-page .banner-workdetail-page .banner-div .banner-img-right .banner-work-img').addClass('small')
        gsap.to('.inner-page .banner-workdetail-page .banner-div .banner-img-right .banner-work-img', 1, {
            top: 470,
            width: '60%',
            ease: Linear.easeNone,
        })
        /*
        // gsap.to('.inner-page .banner-workdetail-page .banner-div .banner-img-right .banner-work-img.mac-frame .mac-frame-inner', 1, 
        // {
        //     borderRadius: 0
        // })
        */
    });
    challangesScroll.on("leave", function (event) {
        $('.inner-page .banner-workdetail-page .banner-div .banner-img-right .banner-work-img').removeClass('small')
        gsap.to('.inner-page .banner-workdetail-page .banner-div .banner-img-right .banner-work-img', 1, {
            width: '95%',
            top: 0,
            ease: Linear.easeNone,
        })
        /*
        // gsap.to('.inner-page .banner-workdetail-page .banner-div .banner-img-right .banner-work-img.mac-frame .mac-frame-inner', 1, 
        // {
        //     borderRadius: 0
        // })
        */
    });



    /*
        // var careers = gsap.to('#careers-banner-section .banner-img', 1, {scale:1.5,ease: Linear.easeNone }); */
    var careersScene = new ScrollMagic.Scene({
        triggerElement: '#careers-banner-section',
        triggerHook: 0.2,
        duration: "50%"
    })
        /*
        // .setTween(careers)
        // .addIndicators({
        //     colorTrigger: "white",
        //     colorStart: "white",
        //     colorEnd: "white",
        //     indent: 20
        // })
        */
        .addTo(controller);
    careersScene.on("enter", function (event) {
        var tl = gsap.timeline();
        tl.to('#careers-banner-section .banner-img', {
            duration: 0.3,
            scale: 1,
            ease: Linear.easeNone,
        })

    });
    careersScene.on("leave", function (event) {
        var tl = gsap.timeline();
        tl.to('#careers-banner-section .banner-img', {
            duration: 0.3,
            scale: 1.2,
            ease: Linear.easeNone,
        })

    });




    $('.changetheme').each(function (i, item) {
        /* console.log($(item).height()); */
        new ScrollMagic.Scene({
            triggerElement: item,
            triggerHook: 0.5,
            duration: $(item).height()
        })
            .addTo(new ScrollMagic.Controller())
            .on("enter", function (event) {
                $('body').attr('theme', 'dark');
            })
            .on("leave", function (event) {
                $('body').attr('theme', '');
            });
    });





    $(".technology-box a").mouseover(function () {
        $('body').attr('theme', 'dark');
        $('.ourtechnology-section').addClass('hover-added');

        var dataId = $(this).attr("data-id");
        $('.bg-ourtechnology.tech_bg_' + dataId).css('opacity', '1');

    }).mouseout(function () {
        $('body').attr('theme', '');
        $('.ourtechnology-section').removeClass('hover-added');
        var dataId = $(this).attr("data-id");
        $('.bg-ourtechnology.tech_bg_' + dataId).css('opacity', '0');
    });





    $('.img-slide-carousel').owlCarousel({
        loop: false,
        margin: 100,
        stagePadding: 300,
        nav: false,
        smartSpeed: 2000,
        dots: false,
        items: 1,
        autoplay: true,
        responsive: {
            0: {
                items: 1,
                margin: 5,
                stagePadding: 0,
            },
            600: {
                items: 1,
                margin: 30,
                stagePadding: 0,
            },
            1000: {
                items: 1,
                dots: false,
                nav: false,
                margin: 20,
                stagePadding: 100,
            },
            1200: {
                items: 1,
                dots: false,
                nav: false,
                margin: 100,
                stagePadding: 300,
            }
        }
        
    });

    $("#scrollToMainArea").on('click', function (e) {
        document.getElementById('main-middle-area').scrollIntoView({
             behavior: 'smooth'
        });
    })
});