jQuery(document).ready(function ($) {
    
    // alert('Loaded!')
    jQuery('.hidden-cell').removeClass('hidden-cell');

    $('.main-carousel').flickity({
        wrapAround: true,
        autoPlay: 10000,
        arrowShape: 'M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z'
    });

    // social links open in new tab/window
    $('#menu-social a').attr('target', '_blank');

    // funky grid stuff    
    $('.grid').pinterest_grid({
        no_columns: 3,
        padding_x: 0,
        padding_y: 0,
        margin_bottom: 15,
        single_column_breakpoint: 920
    });

    $links = $('.my-stories a');
    $links.each(function(index, link){
        var text = (index+1) + '. ' + $(link).text();
        $(link).text(text);
    });

});