var sheridan={homeInit:function(){
    
    $(document).ready(function(){

        $('#coned-search-results').hide();

        //temp
        //$('#big-audience-nav').hide();
        //$('#coned-messaging-area').hide();
        //$('#coned-landing-content').hide();
        //$('#coned-search-results').delay(450).fadeIn(1250);

        $('.coned-search-field').focusin(function(){
            
            $(this).keydown(function(){
                $('#big-audience-nav').hide();
                $('#coned-messaging-area').hide();
                $('#coned-landing-content').hide();
                $('#coned-search-results').delay(450).fadeIn(1250);
                $('#coned-search-bar form').animate({width:500},100);
                $('.coned-search-submit').addClass('smallSearchBtn');
                return;
            });

        });

        $('.coned-search-submit').click(function(){
            $('.coned-search-submit').removeClass('smallSearchBtn');
            $('#coned-search-bar form').animate({width:400},100);
            $('#coned-search-results').fadeOut(50).hide();
            $('#coned-landing-content').fadeIn(1250);
            $('#coned-messaging-area').fadeIn(1250);
            $('#big-audience-nav').fadeIn(1250);
        });

        //$('.list li:odd').css('background','#eee');

    });
}};