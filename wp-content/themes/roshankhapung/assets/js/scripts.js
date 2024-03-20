( function( $ ) {

    $('.menu-bar').on('click', function(){
        $('.menu-bar, .navigation-section').toggleClass('open-menu');
        // $('body').toggleClass('open-menu');
    });

} )( jQuery );