( function( $ ) {

    $('.menu-bar').on('click', function(){
        $('.menu-bar, .navigation-section').toggleClass('open-menu');
        setTimeout(function() {
            $('.menu-label').text(function(i, text) {
                return text === 'MENU' ? 'CLOSE' : 'MENU';
            });
        }, 500);
    });

} )( jQuery );