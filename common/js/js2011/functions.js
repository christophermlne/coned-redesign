var sheridan={homeInit:function(){
    
    $(document).ready(function(){

        $('#coned-search-results').hide();
        $('#close-search').hide();
        
        function goDirectlyToSearchForm(){
            $('#big-audience-nav').hide();
            $('#coned-messaging-area').hide();
            $('#coned-landing-content').hide();
            $('#coned-search-results').delay(450).fadeIn(1250);    
        };
        // uncomment/comment this line to have the landing page go immediately into search mode
        //goDirectlyToSearchForm();

        $('.coned-search-field').focusin(function(){
            
            $(this).keydown(function(){
                $('#big-audience-nav').hide();
                $('#coned-messaging-area').hide();
                $('#coned-landing-content').hide();
                $('#coned-search-results').delay(450).fadeIn(1250);
                $('#coned-search-bar form').animate({width:400},100);
                $('.coned-search-submit').addClass('smallSearchBtn');
                $('#close-search').show();
                return;
            });

        });

        $('#close-search').click(function(){
            $('.coned-search-submit').removeClass('smallSearchBtn');
            $('#coned-search-bar form').animate({width:420},100);
            $('#coned-search-results').fadeOut(50).hide();
            $('#coned-landing-content').fadeIn(1250);
            $('#coned-messaging-area').fadeIn(1250);
            $('#big-audience-nav').fadeIn(1250);
            $(this).hide();
        });

        //$('.list li:odd').css('background','#eee');
        $('.expanded-li').hide();
        $('.list > li > a').click(function(){
            event.preventDefault();
            e.stopPropagation();
            $(this).children().show();    
        });
        

    });
}};