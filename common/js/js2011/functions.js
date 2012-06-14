var sheridan={homeInit:function(){
    
    $(document).ready(function(){

    	$('#coned-search-results').hide();

    	$('.coned-search-field').focusin(function(){
    		
    		$(this).keydown(function(){
    			$('#big-audience-nav').hide();
    			$('#coned-messaging-area').hide();
				$('#coned-landing-content').hide();
				$('#coned-search-results').delay(750).fadeIn(1250);
				return;
    		});

    	});

    	$('.coned-search-submit').click(function(){
			$('#coned-search-results').fadeOut(50).hide();
			$('#coned-landing-content').fadeIn(1250);
			$('#coned-messaging-area').fadeIn(1250);
    		$('#big-audience-nav').fadeIn(1250);
    	});

    });
}};
