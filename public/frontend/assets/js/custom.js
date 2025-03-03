 // Slider Sections background image from data background
    var pageSection = $(".bg-img, section");
    pageSection.each(function (indx) {
        if ($(this).attr("data-background")) {
            $(this).css("background-image", "url(" + $(this).data("background") + ")");
        }
    });

// $(document).ready(function () {
//     var owl = $('.slider-fade .owl-carousel');
    
//     owl.owlCarousel({
//         items: 1,
//         loop: true,
//         dots: true,
//         margin: 0,
//         autoplay: false,
//         autoplayTimeout: 5000,
//         animateOut: 'fadeOut',  // This is for the fade transition between slides
//         nav: false,
//         navText: ['<i class="ti-angle-left" aria-hidden="true"></i>', '<i class="ti-angle-right" aria-hidden="true"></i>'],
//         responsiveClass: true,
//         responsive: {
//             0: {
//                 dots: false
//             },
//             600: {
//                 dots: false
//             },
//             1000: {
//                 dots: true
//             }
//         }
//     });

//     // owl.on('changed.owl.carousel', function (event) {
//     //     var item = event.item.index - 2; // Get the current item index
//     //     animateSlide(item); // Call animateSlide function to apply animations
//     // });
// });


$('.slider-fade .owl-carousel').owlCarousel({
    loop: true,
    items: 1,
    margin: 20,
    mouseDrag: true,
    autoplay: false,
    autoplayTimeout: 5000,
    dots: false,
    autoplayHoverPause: false,
    nav: false,
    navText: ['<i class="ti-angle-left" aria-hidden="true"></i>', '<i class="ti-angle-right" aria-hidden="true"></i>'],
    responsiveClass: true,
    responsive: {
        0: {
                dots: false
            },
            600: {
                dots: false
            },
            1000: {
                dots: true
            }
    }
});

function animateSlide(item) {
    // Reset any previous animations
    $('span').removeClass('animated fadeInUp');
    $('h4').removeClass('animated fadeInUp');
    $('h1').removeClass('animated fadeInUp');
    $('p').removeClass('animated fadeInUp');
    $('.butn-light').removeClass('animated fadeInUp');
    $('.butn-dark').removeClass('animated fadeInUp');

    // Animate the current slide elements
    var currentItem = $('.owl-item').not('.cloned').eq(item); // Get the active slide
    currentItem.find('span').addClass('animated fadeInUp');
    currentItem.find('h4').addClass('animated fadeInUp');
    currentItem.find('h1').addClass('animated fadeInUp');
    currentItem.find('p').addClass('animated fadeInUp');
    currentItem.find('.butn-light').addClass('animated fadeInUp');
    currentItem.find('.butn-dark').addClass('animated fadeInUp');
}


$('.productslider').owlCarousel({
     loop: true,
     items: 2,
     margin: 20,
     mouseDrag: true,
     autoplay: false,
     autoplayTimeout: 5000,
     dots: false,
     autoplayHoverPause: false,
     nav: true,
     navText: ["<span class='fa fa-angle-left'></span>", "<span class='fa fa-angle-right'></span>"],
     responsiveClass: true,
     responsive: {
         0: {
             items: 1
         },
         600: {
             items: 1
         },
         1000: {
             items: 3
         }
     }
});



$('.projectslider').owlCarousel({
        loop: true
        , items: 2 
        , margin: 20
        , mouseDrag: true
        , autoplay: false
        , autoplayTimeout: 5000
        , dots: false
        , autoplayHoverPause: false
        , nav: true
        , navText: ["<span class='fa fa-angle-left'></span>", "<span class='fa fa-angle-right'></span>"]
        , responsiveClass: true
        , responsive: {
            0: {
                items: 1
            , }
            , 600: {
                items: 1
            , }
            , 1000: {
                items: 4
            , }
        }
    });

$('.clientsliderone').owlCarousel({
        loop: true
        , items: 2 
        , margin: 20
        , mouseDrag: true
        , autoplay: true
        , autoplayTimeout: 5000
        , dots: true
        , autoplayHoverPause: false
        , nav: false
        , navText: ["<span class='fa fa-angle-left'></span>", "<span class='fa fa-angle-right'></span>"]
        , responsiveClass: true
        , responsive: {
            0: {
                items: 2
            , }
            , 600: {
                items: 2
            , }
            , 1000: {
                items: 4
            , }
        }
    });

$('.clientslidertwo').owlCarousel({
        loop: true
        , items: 2 
        , margin: 20
        , mouseDrag: true
        , autoplay: true
        , autoplayTimeout: 5000
        , dots: true
        , autoplayHoverPause: false
        , nav: false
        , navText: ["<span class='fa fa-angle-left'></span>", "<span class='fa fa-angle-right'></span>"]
        , responsiveClass: true
        , responsive: {
            0: {
                items: 2
            , }
            , 600: {
                items: 2
            , }
            , 1000: {
                items: 4
            , }
        }
    });




 AOS.init({
once: true
})

 jQuery(document).ready(function ($) {
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
});

