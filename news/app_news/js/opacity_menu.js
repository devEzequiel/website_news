$(function(){
    $(window).scroll(function(){
        var topo = $(window).scrollTop();
        if(topo > 50){
            $('nav')
            .css("opacity", '0.75');
        }else{
            $('nav')
            .css("opacity", '1');
        }
    });
});