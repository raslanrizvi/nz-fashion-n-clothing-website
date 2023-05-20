/*
 Theme Name: Volta : Minimal Shopping HTML5 Template
 Theme URL: http://themewar.com/html/volta
 Author: ThemeWar
 Author URI: http://themewar.com
 Description: Volta : Minimal Shopping HTML5 Template
 Version: 1.0
 */
(function ($) {
    'use strict';
    //========================
    // Loader
    //========================
    $(window).load(function () {
        if ($(".preloader").length > 0)
        {
            $(".preloader").delay(500).fadeOut("slow");
        }
    });
    //=========================
    // Revolution Slider
    //=========================
    if ($(".revSlider").length > 0)
    {
        $('.revSlider').revolution({
            delay: 8000,
            startwidth: 1170,
            startheight: 500,
            startWithSlide: 0,
            fullScreenAlignForce: "off",
            navigationType: "bullet",
            navigationArrows: "on",
            navigationStyle: "round",
            touchenabled: "on",
            onHoverStop: "on",
            navOffsetHorizontal: 0,
            navOffsetVertical: 20,
            shadow: 0,
            fullWidth: "on",
            fullScreen: "on",
            navigationVOffset: 35

        });
    }
    ;
    //=========================
    // Revolution Slider3
    //=========================
    if ($(".revSlider3").length > 0)
    {
        $('.revSlider3').revolution({
            delay: 8000,
            startwidth: 1170,
            startheight: 500,
            startWithSlide: 0,
            fullScreenAlignForce: "off",
            navigationType: "bullet",
            navigationArrows: "on",
            navigationStyle: "round",
            touchenabled: "on",
            onHoverStop: "on",
            navOffsetHorizontal: 0,
            navOffsetVertical: 20,
            shadow: 0,
            fullWidth: "on",
            fullScreen: "on",
            navigationVOffset: 35

        });
    }
    ;


    //=========================
    // Home1 Testmonial
    //=========================
    if ($(".tesimonialSlide").length > 0)
    {
        $(".tesimonialSlide").owlCarousel({
            items: 1,
            dots: false,
            nav: true,
            navText: ''
        });
    }

    //=========================
    // Home2 Clients
    //=========================
    if ($(".clientSlider").length > 0)
    {
        $(".clientSlider").owlCarousel({
            loop: true,
            margin: 0,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 2,
                    nav: false,
                    dots: true
                },
                480: {
                    items: 2,
                    nav: false,
                    dots: true
                },
                768: {
                    items: 4,
                    nav: false,
                    dots: true
                },
                1024: {
                    items: 4,
                    nav: false,
                    dots: true
                },
                1280: {
                    items: 6,
                    nav: false,
                    dots: true
                }
            }
        });
    }
    //=========================
    // Home3 Clients
    //=========================
    if ($(".clientLogo3").length > 0)
    {
        $(".clientLogo3").owlCarousel({
            loop: true,
            margin: 0,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 2,
                    nav: true,
                    dots: false
                },
                480: {
                    items: 2,
                    nav: true,
                    dots: false
                },
                768: {
                    items: 4,
                    nav: true,
                    dots: false
                },
                1024: {
                    items: 3,
                    nav: false,
                    dots: false
                },
                1280: {
                    items: 4,
                    nav: true,
                    dots: false
                }
            }
        });
    }

    //=========================
    // Home2 Daily Deals
    //=========================
    if ($(".conuntDeals").length > 0)
    {
        $('.conuntDeals').countdown({until: $.countdown.UTCDate(2023, 5 - 1, 21, 18, 30, 30), format: 'DHMS'});
    }
    //=========================
    // Home3 Daily Deals
    //=========================
    if ($(".arrCount01").length > 0)
    {
        $('.arrCount01').countdown({until: $.countdown.UTCDate(2023, 5 - 1, 21, 18, 30, 30), format: 'DHMS'});
    }
    if ($(".arrCount02").length > 0)
    {
        $('.arrCount02').countdown({until: $.countdown.UTCDate(+6, 2016, 8 - 1, 5), format: 'DHMS'});
    }
    if ($(".arrCount03").length > 0)
    {
        $('.arrCount03').countdown({until: $.countdown.UTCDate(+6, 2016, 9 - 1, 1), format: 'DHMS'});
    }



    if ($("#slider-range").length > 0)
    {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 300,
            values: [70, 200],
            slide: function (event, ui) {
                $("#amount").val("$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ]);
                $("#amount2").html("<span>$" + ui.values[ 0 ] + "</span><span>$" + ui.values[ 1 ] + '</span>');
            }
        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) +
                " - $" + $("#slider-range").slider("values", 1));
        $("#amount2").html("<span>$" + $("#slider-range").slider("values", 0) +
                "</span><span>$" + $("#slider-range").slider("values", 1) + '</span>');
    }


    /*=======================
     // Contact Map
     //=======================*/
    if ($("#map").length > 0)
    {
        var map;

        map = new GMaps({
            el: '#map',
            lat: 45.494447,
            lng: -73.5697587,
            scrollwheel: false,
            zoom: 16,
            zoomControl: true,
            panControl: false,
            streetViewControl: false,
            mapTypeControl: false,
            overviewMapControl: false,
            clickable: false
        });

        var image = '';
        map.addMarker({
            lat: 45.494447,
            lng: -73.5697587,
            icon: 'images/marker.png',
            animation: google.maps.Animation.DROP,
            verticalAlign: 'bottom',
            horizontalAlign: 'center',
            backgroundColor: '#d3cfcf'
        });



        var styles = [
            {
                "featureType": "road",
                "stylers": [
                    {"color": "#FEFEFE"}
                ]
            }, {
                "featureType": "water",
                "stylers": [
                    {"color": "#D3D3D3"}
                ]
            }, {
                "featureType": "landscape",
                "stylers": [
                    {"color": "#E5E5E5"}
                ]
            }, {
                "elementType": "labels.text.fill",
                "stylers": [
                    {"color": "#686868"}
                ]
            }, {
                "featureType": "poi",
                "stylers": [
                    {"color": "#E5E5E5"}
                ]
            }, {
                "elementType": "labels.text",
                "stylers": [
                    {"saturation": 1},
                    {"weight": 0.1},
                    {"color": "#686868"}
                ]
            }

        ];
        map.addStyle({
            styledMapName: "Styled Map",
            styles: styles,
            mapTypeId: "map_style"
        });

        map.setStyle("map_style");
    }


    //=======================================================
    // Payment Accourdion
    //=======================================================
    if ($(".wc_payment_methods").length > 0)
    {
        $(".wc_payment_methods li").each(function () {
            $('input[type="radio"]', this).on('click', function (e) {
                var ids = $(this).attr('id');
                if ($('div.' + ids).hasClass('visibales'))
                {

                } else
                {
                    $(".payment_box").removeClass('visibales');
                    $(".payment_box").slideUp('fast');
                    $('div.' + ids).slideDown('fast').addClass('visibales');
                }
            });
        });
    }


    //=======================================================
    // Cart Button
    //=======================================================
    if ($(".qtyBtn").length > 0)
    {
        $(".btnMinus").on('click', function () {
            var vals = parseInt($(this).next(".carqty").val(), 10);

            if (vals > 0)
            {
                vals -= 1;
                $(this).next(".carqty").val(vals);
            } else
            {
                $(this).next(".carqty").val(vals);
            }
            return false;
        });
        $(".btnPlus").on('click', function () {
            var vals = parseInt($(this).prev(".carqty").val(), 10);
            vals += 1;
            $(this).prev(".carqty").val(vals);
            return false;
        });
    }

    //===================================
    // Fixed Header
    //===================================
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 40)
        {
            $("header").addClass('fixedHeader animated fadeInUp');
        } else
        {
            $("header").removeClass('fixedHeader animated fadeInUp');
        }
    });

    //========================
    // Mobile Menu
    //========================
    if ($('.mobileMenu, .mobileMenu2, .mobileMenu3').length > 0) {
        $('.mobileMenu, .mobileMenu2, .mobileMenu3').on('click', function () {
            $(this).toggleClass('active');
            $('.mainMenu > ul, .mainMenu2 > ul, .navMenu3 > ul').slideToggle('slow');
        });
        if ($(window).width() < 768)
        {
            $(".mainMenu li.has-menu-items > a, .mainMenu2 li.has-menu-items > a, .navMenu3 li.has-menu-items > a").on('click', function () {
                $(this).parent().toggleClass('active');
                $(this).parent().children('.sub-menu').slideToggle('slow');
                return false;
            });
        }
    }
    //========================
    // Wow Scroll Animation
    //========================
    new WOW().init();



    //========================
    // Contact Submit
    //========================
    if ($("#contactForm").length > 0)
    {
        $("#contactForm").on('submit', function (e) {
            e.preventDefault();
            $("#con_submit").html('Processsing...');
            var con_name = $("#con_name").val();
            var con_email = $("#con_email").val();
            var con_message = $("#con_message").val();

            var required = 0;
            $(".required", this).each(function () {
                if ($(this).val() == '')
                {
                    $(this).addClass('reqError');
                    required += 1;
                }
                else
                {
                    if ($(this).hasClass('reqError'))
                    {
                        $(this).removeClass('reqError');
                        if (required > 0)
                        {
                            required -= 1;
                        }
                    }
                }
            });
            if (required === 0)
            {
                $.ajax({
                    type: "POST",
                    url: 'php/mail.php',
                    data: {con_name: con_name, con_email: con_email, con_message: con_message},
                    success: function (data)
                    {
                        $("#con_submit").html('Done!');
                        $("#contactForm input, #contactForm textarea").val('');
                    }
                });
            }
            else
            {
                $("#con_submit").html('Failed!');
            }

        });

        $(".required").on('keyup', function () {
            $(this).removeClass('reqError');
        });
    }
    ;

    //========================
    // Subscriptions 
    //========================
    if ($("#subscribe").length > 0)
    {
        $("#subscribe").on('submit', function (e) {
            e.preventDefault();
            var sub_email = $("#sub_name").val();
            var sub_email = $("#sub_email").val();
            $("#sub_submit").html('Processsing...');
            if (sub_email == '')
            {
                $("#sub_email, #sub_name").addClass('reqError');
                $("#sub_submit").html('Failed!');
            }
            else
            {
                $("#sub_email").removeClass('reqError');
                $.ajax({
                    type: "POST",
                    url: "php/subscribe.php",
                    data: {sub_email: sub_email},
                    success: function (data)
                    {
                        $("#subscribe input").val('');
                        $("#sub_submit").html('Done!');
                    }
                });
            }
        });
        $("#sub_email").on('keyup', function () {
            $(this).removeClass('reqError');
        });
    }

    if ($("#subscribe2").length > 0)
    {
        $("#subscribe2").on('submit', function (e) {
            e.preventDefault();
            var sub_email = $("#sub_email2").val();
            $("#sub_submit2").html('<i class="fa fa-spinner"></i>');
            if (sub_email == '')
            {
                $("#sub_email2").addClass('reqError');
                $("#sub_submit2").html('<i class="fa fa-warning"></i>');
            }
            else
            {
                $("#sub_email2").removeClass('reqError');
                $.ajax({
                    type: "POST",
                    url: "php/subscribe.php",
                    data: {sub_email: sub_email},
                    success: function (data)
                    {
                        $("#subscribe2 input").val('');
                        $("#sub_submit2").html('<i class="fa fa-thumbs-up"></i>');
                    }
                });
            }
        });
        $("#sub_email2").on('keyup', function () {
            $(this).removeClass('reqError');
        });
    }






})(jQuery);