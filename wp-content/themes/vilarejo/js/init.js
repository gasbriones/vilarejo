(function ($) {
    $(document).ready(function(){

        $('.bxslider').each(function(){
            $(this).bxSlider({
                captions:true,
                auto:true,
                preloadImages:'all'
            });
        });
    });
})(jQuery);