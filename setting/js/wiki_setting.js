jQuery(document).ready(function($){
    $('#wiki_responsive_menu').click(function (){
        $('.wiki_setting_nav').removeClass('wiki_responsive_hidden');
        $('.wiki_setting_nav').addClass('wiki_setting_nav_responsive');
        $('body').append("<div id='mask'></div>");
    })
    $('.remove_wiki_responsive_menu').click(function (){
        $(this).parent().addClass('wiki_responsive_hidden');
        $('body').find("#mask").remove();
    })
});
