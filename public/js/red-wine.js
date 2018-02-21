//Animation
jQuery(document).ready(function($) {
    $(".scroll").click(function(event){
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
});

$(document).ready(function() {
    /*
    var defaults = {
          containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear'
     };
    */

    $().UItoTop({ easingType: 'easeOutQuart' });
});

//Magnific Popup (Lightbox gallery)
$(document).ready(function() {
    $('.popup-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            /*titleSrc: function(item) {
                return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
            }*/
        }
    });
});

//AJAX Contact Form
$(document).ready(function(){
    $('#contact-form').on('submit', function(e){
        e.preventDefault();
        $('.output_message').text('Loading...');
        $.ajax({
            type: 'POST',
            url: '/contact',
            data: $('#contact-form').serialize(),
            success: function(data){
                if (data.result){
                    $('.output_message').text('Message Sent!').delay(2000).fadeOut(800);
                } else {
                    $('.output_message').text('Error Sending email!').delay(2000).fadeOut(800);
                }
                $('#contact-form')[0].reset();
            }
        });
        return false;
    });
});


//AJAX Subscribe Form
$(document).ready(function(){
    $('#subscribe-form').on('submit', function(e){
        e.preventDefault();
        $('.output_mess').text('Loading...').css("color", "#FFFFFF");
        $.ajax({
            type: 'POST',
            url: '/subscribe',
            data: $('#subscribe-form').serialize(),
            success: function(data){
                if (data.result){
                    $('.output_mess').text('You Subscribed!').css("color", "#FFFFFF").delay(2000).fadeOut(800);
                } else {
                    $('.output_mess').text('Email already exists!').css("color", "#FFFFFF").delay(2000).fadeOut(800);
                }
                $('#subscribe-form')[0].reset();
            }
        });
        return false;
    });
});

