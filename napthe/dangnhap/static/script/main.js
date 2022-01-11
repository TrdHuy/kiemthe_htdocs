<!--é€‰é¡¹å¡-->
function tab(list,listEles,num,contlist,cls){
    list = document.getElementById(list).getElementsByTagName(listEles);
    for(var i=0;i<list.length;i++){
        if(i+1==num){
            list[i].className = 'on';
            document.getElementById(contlist+(i+1)).className = 'show';
        }else{
            list[i].className = '';
            document.getElementById(contlist+(i+1)).className = 'hide';
        }
    }
}

<!--è½®æ’­-->
$(function() {
    $(".slides_container").fadeIn(250);
    if ($('#slides').val()!=1) {
        $('#slides').slides({
            preload: true,
            preloadImage: '/static/images/loading.gif',
            play: 6000,
            pause: 2000,
            hoverPause: true,
            animationStart: function(current){
                $('.caption').animate({
                    bottom:-25
                },100);
                if (window.console && console.log) {
                    console.log('animationStart on slide: ', current);
                };
            },
            animationComplete: function(current){
                $('.caption').animate({
                    bottom:0
                },200);
                if (window.console && console.log) {
                    console.log('animationComplete on slide: ', current);
                };
            },
            slidesLoaded: function() {
                $('.caption').animate({
                    bottom:0
                },200);
            }
        });
    }
    <!--login-->
    $("#openloginform").click(function(){
        showLogin({
            'returl':location,
            'lang':lang
        })
    });
});

$(document).ready(function(){
    if (document.getElementById("demo1"))
    {
        var speed = 6;
        var tab=document.getElementById("demo"); 
        var tab1=document.getElementById("demo1"); 
        var tab2=document.getElementById("demo2");
        tab2.innerHTML=tab1.innerHTML;
        function Marquee(){
            if(tab2.offsetWidth-tab.scrollLeft<=0){
                tab.scrollLeft-=tab1.offsetWidth
            }
            else{
                tab.scrollLeft++;
            }
        }
        var MyMar=setInterval(Marquee,speed);
        tab.onmouseover=function(){
            clearInterval(MyMar);
        }; 
        tab.onmouseout=function(){
            MyMar=setInterval(Marquee,speed);
        };
    }
});


<!-- å……å€¼é¡µé¢selectéªŒè¯ -->
function doPay(cid){
    if(cid==9){
        if(checkPay('server') && checkPay('price') && checkPay('baokim_buyer_account_email') ){
            return true;
        }else{
            return false;
        }
    }else if(cid==8){
        if(checkPay('server') && checkPay('price')){
            return true;
        }else{
            return false;
        }
    }else if(cid==13){
        if(checkPay('server') && checkPay('price')){
            sl('block',1); 
            return true;
        }else{
            return false;
        }
    }else{
        if(checkPay('server') && checkPay('cardno') && checkPay('cardpin')){
            return true;
        }else{
            return false;
        }
    }
        
}

function checkPay(id){
    var val	= $('#'+id).val();
    if(!val){
        msg = $("#"+id+"note").val();
        $("#"+id+"msg").html(msg);
        $("#"+id+"msg").css("color","red");
        return false;
    }else{
        $("#"+id+"msg").html("");
        $("#"+id+"msg").css("color","");
        return true;
    }
}
