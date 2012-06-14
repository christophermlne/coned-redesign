var sheridan={homeInit:function(){
    
    $(document).ready(function(){

    	$('#coned-search-results').hide();

    	$('.coned-search-field').focusin(function(){
    		
    		$(this).keydown(function(){
    			$('#big-audience-nav').hide();
    			$('#coned-messaging-area').hide();
				$('#coned-landing-content').hide();
				$('#coned-search-results').delay(750).fadeIn(750);
				return;
    		});

    	});

    });
}};
