jQuery(document).ready(function ($) {
    
    // alert('Loaded!')
    jQuery('.hidden-cell').removeClass('hidden-cell');

    $('.main-carousel').flickity({
        wrapAround: true,
        autoPlay: 12000,
        arrowShape: 'M 0,50 L 60,00 L 50,30 L 80,30 L 80,70 L 50,70 L 60,100 Z'
    });


    // social links open in new tab/window
    $('#menu-social a').attr('target', '_blank');

});
  