$(document).ready(function(){$('#search-container input.styled').each(function(){$(this).css('display','none');inpId=$(this).attr('id');spanStyle=$(this).prop('checked')?'active':'';$('<span id="span_'+inpId+'" class="styled '+spanStyle+'" rel="'+inpId+'"></span>').insertBefore($(this));$('#span_'+inpId).click(function(){$('#search-container span.styled').removeClass('active');$('#search-container input.styled').removeProp('checked');$('#'+$(this).attr('rel')).attr('checked','');$(this).addClass('active');if($(this).attr('id')=='span_search_site')
{$("#header_listbox").hide();$(".search-text").val('');}
else
{if($(".search-text").val()!='')
{$("#header_listbox").show();}
else
{$("#header_listbox").hide();}}});});$('#header-quick').click(function(){if($('#qLinks').css('display')=='none')
{$('#qLinks').slideDown(500,function(){$('#header-quick p').addClass('active')});}
else
{$('#qLinks').slideUp(500,function(){$('#header-quick p').removeClass('active')});}})
$(".search-subm").click(function (){
    if ($("#span_search_prog").attr('class') == 'styled active')
    {
        var pbLink = $(".highlight_prog_search a").attr('href');
        if (pbLink != null)
        {
            window.location.replace(pbLink);
            return false;
        }
        else
            return false;
    }
    else
        return true;
});
})
