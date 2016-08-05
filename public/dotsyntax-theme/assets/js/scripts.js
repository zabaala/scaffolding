jQuery(function($){

    /**
     * Navbar manager by scrollTop.
     */
    $(document).bind('scroll', function(){
        if($(document).scrollTop()>=50) {
            $('.navbar').removeClass('navhome').removeClass('navbar-default').addClass('navbar-fixed-top');
        } else {
            $('.navbar').addClass('navhome').addClass('navbar-default').removeClass('navbar-fixed-top');
        }
    });

})