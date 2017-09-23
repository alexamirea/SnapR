/**
 * Created by alexa on 9/23/2017.
 */
// Preloader
if($(".contact-1").length <= 0 && $(".contact-2").length <= 0 && $("body > .loader").length > 0) {

    var bg_color = $("body > .loader").attr('data-background-color') || '#000000',
        text_color = $("body > .loader").attr('data-text-color') || '#ffffff';

    $("body > .loader").before('<style id="cosy-custom-styler" type="text/css">.loader .circle{border: 2px solid '+text_color+';border-right-color: transparent;}</style>');
    $("#cosy-custom-styler").append('.loader p{color: '+text_color+';}body > .loader{background-color: '+bg_color+';}');

    var imgs = $("img:not('.lazy')").length,
        loaded_imgs = 0;


    if($(".gallery-h.normal").length > 0) {

        $("img.lazy").lazyload({
            threshold : 400,
            effect : "fadeIn",
            container : $(".gallery"),
            skip_invisible : true
        });
    }
    else if($(".gallery-h.centered").length > 0) {

        $("img.lazy").lazyload({
            threshold : 400,
            effect : "fadeIn",
            container : $(".gallery .container"),
            skip_invisible : true
        });
    }
    else {

        $("img.lazy").lazyload({
            threshold : 200,
            effect : "fadeIn",
            container : $(".inner-wrapper"),
            skip_invisible : true,
            failure_limit: 100
        });
    }

    if(imgs <= 0) {
        render();

        $("body > .loader").delay(1500).fadeOut(200, function() {
            $("body").addClass('loaded');
        });
    }
    else {
        $("img:not('.lazy')").each(function(index, el) {

            $(this).imagesLoaded(function(){
                loaded_imgs++;

                if(loaded_imgs == imgs) {

                    render();

                    $("body > .loader").delay(1500).fadeOut(200, function() {
                        $("body").addClass('loaded');
                    });
                }
            });
        });
    }
}
else {

    render();
    $("body > .loader").fadeOut(300, function() {
        $("body").addClass('loaded');
    });
}
