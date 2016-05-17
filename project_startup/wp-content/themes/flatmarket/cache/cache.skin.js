    (function($){
    $(document).ready(function() {

        
        
        
        
        
        $('.products-module .products').addClass('owl-carousel');

        $('.products-module .products').owlCarousel({
            items: 5,
            itemsTablet: [770,3],
            itemsMobile : [480,1],
            navigation: true,
            navigationText : false,
            pagination: false,
            afterInit : function(elem){
                $('.products-module .woocommerce:not(.compare-button)').css('height', 'auto').css('overflow', 'visible');
            }
        });
        
          
        $('.parallax').each(function(){
           $(this).parallax("50%", 0.1);
        });

                
        
    });
    })(jQuery);
     /*2016-05-13 06:02*//* JS Generator Execution Time: 0 seconds */