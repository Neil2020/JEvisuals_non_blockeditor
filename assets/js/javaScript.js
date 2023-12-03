(function( $ ){

    //Function to view Loading Screen animation for first time load
    $(document).ready( function() {
    var first_time = localStorage.getItem("first_time");
    if(first_time == null){
        $(".page-transition").show();
        localStorage.setItem("first_time","1");
        $('.s_logo_j').removeClass('s_logo_j_active');
        $('s_logo_e').removeClass('s_logo_e_active');
        initialAnaimation();
        setTimeout(function(){
        $(".page-transition").fadeOut("slow");
        }, 3100);
    }else{
        $(".page-transition").hide();
    }
    });
    //every url click initiates page drop animation
    $('a').click(function(e) {
        e.preventDefault();
        href = $(this).attr('href');
        $(".page-transition").removeClass("page-transition_zoomOut");
        $(".page-transition").css({
            "transition":"all 0.8s ease-in-out",
            "transform":"translateY(-100%)",
            "height":"10000vh"
        });
        $(".page-transition").show();
        $(".page-transition").css({
            "transition":"all 0.9s ease-in-out",
            "transform":"none",       
        });
        siteDropDown();
        setTimeout(function() {
            window.location = href;
        },1500)
    });

    //Function for site Dropdown Screen
    function siteDropDown(){
        $('.s_logo').css('opacity','0');
        setTimeout(function(){
            $('.s_logo').css({
                'transition':'all 0.6s ease-in-out'});
            $('.s_logo').css('opacity','1')
            $('.s_logo_vis').addClass('s_logo_vis_show');
        }, 800);
    }
    //Function to rotate elements
    $.fn.animateRotate = function(angle, duration, easing, complete) {
        var args = $.speed(duration, easing, complete);
        var step = args.step;
        return this.each(function(i, e) {
          args.complete = $.proxy(args.complete, e);
          args.step = function(now) {
            $.style(e, 'transform', 'rotate(' + now + 'deg)');
            if (step) return step.apply(e, arguments);
          };
      
          $({deg: 0}).animate({deg: angle}, args);
        });
      }; 
    //Function to view Loading Screen animation for first Time Load
    function initialAnaimation(){
        $('.s_logo_j').animateRotate(-90,{
            duration: 2000,
            easing: 'linear',
            complete: function(){}
        });
        $('.s_logo_e').animateRotate(90,{
            duration: 2000,
            easing: 'linear',
            complete: function(){}
        });
        $('.s_logo_vis').addClass('s_logo_vis_show');
        setTimeout(function(){
            $('.page-transition').addClass('page-transition_zoomOut');
        }, 3000);
        setTimeout(function(){
            $('.page-transition').css('display','none');
        }, 4000);
    }

})( jQuery );