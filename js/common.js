/*lyann 01.10*/
var rw= $(window).width();

/*s搜索框和主导航*/
$(function(){
    $(".NavList_a1 .on").parent().addClass('as');
    $(".MenuList_f1 .child").addClass('clearfix');

    $(".nav_xl_a").click(function() {
        if ($(".nav_xl_a").hasClass("a1")) {
            $(".nav_xl_a").removeClass("a1");
            $(".MenuList_f1").hide();
            $(".MenuList_f1").addClass('hide');
            
            if($(".header").hasClass("menu-fix")){
                $(".header").removeClass("menu-open");
                if($('body').hasClass("index")){
                    $(".header").addClass("menu-color");
                }

            }else{
                $(".header").removeClass("menu-open");
                if(!$('body').hasClass("index")){
                    $(".header").addClass("menu-color");
                }
            }
        } else {
            $('#topsearch form').removeClass('show');
            $('#s-btn').removeClass('close');

            $(".MenuList_f1").fadeIn();
            $(".MenuList_f1").removeClass('hide');
            $(".nav_xl_a").addClass("a1");
            $(".header").removeClass("menu-color");
            $(".header").addClass("menu-open");
            $(".sllist").removeClass("show");
            $('.sllist').slideUp();
        }
        return false;
    });

    $('.MenuList_f1 .stmenu').each(function(e){
        if($(this).find('ul li').length != 0){
            $(this).addClass('fa');
        }
    })

    

    if ( rw > 1125){
        $(".MenuList_f1 .stmenu").hover(function(){
            $(this).find(".child").stop(true,true).slideDown();
            },function(){
            if(!$(this).find(".child").hasClass("cshow")){
                $(this).find(".child").hide();
            }
            //$(this).find(".child").stop(true,true).hide();
        });

        $('#s-btn').click(function(){
            if($('#topsearch form').hasClass('show')){
                $('#topsearch form').removeClass('show');
                $(".header").removeClass("s-open");
                $('#s-btn').removeClass('close');
            }else{
                if($(".header").hasClass("menu-open")){
                    $(".header").removeClass("menu-open");
                    $(".MenuList_f1").hide();
                    $(".nav_xl_a").removeClass("a1");
                }
                $('#topsearch form').addClass('show');
                $(".header").addClass("s-open");
                $('#s-btn').addClass('close');
            }
        });

        /*语言下拉*/
        $('.lang').hover(function(){
            $('.sllist').stop(true,true).slideDown();
          },function(){
            $('.sllist').stop(true,true).hide();
        });

    }else{
        $(".MenuList_f1").addClass('hide');
        //$('.MenuList_f1 ul.menu').append('<li class="stmenu mob"><h3><a href="#" class="drop"><span>EN</span></a></h3></li>');
        var fMenu= $('.MenuList_f1 .drop');
        fMenu.click(function(e){
            if($(this).parent().parent().find('ul li').length != 0){
                e.preventDefault();
                if($(this).parent().parent().hasClass('cur')){
                    $(this).parent().parent().removeClass('cur');  
                    $(this).parent().parent().find(".child").stop(true,true).hide();
                }else{
                    $(this).parent().parent().find(".child").slideDown();
                    $('.cur').removeClass("cur");
                    $(this).parent().parent().addClass('cur');
                    $('.cur').siblings().find(".child").hide();
                }
            }
        })

        $('.lang').click(function(){
            if($('.sllist').hasClass('show')){
                $(".sllist").removeClass("show");
                $('.sllist').slideUp();
            }else{
                $('.MenuList_f1').hide();
                $(".nav_xl_a").removeClass("a1");
                $('.sllist').slideDown();
                $(".sllist").addClass("show");
            }
        });

        $('#s-btn').click(function(){
            if($('#topsearch form').hasClass('show')){
                $('#topsearch form').removeClass('show');
                $('#s-btn').removeClass('close');
            }else{
                $('#topsearch form').addClass('show');
                 $('#s-btn').addClass('close');
                $('.MenuList_f1').hide();
                $(".nav_xl_a").removeClass("a1");
            }
        });
    }
    $('.MenuList_f1 .stmenu .drop').click(function(){
        localStorage.setItem("navindex",'0');
        localStorage.setItem("navindex2",'0');
     })


    $(".NavList_a1 ul li").bind("click",function(){
       var i= $(this).index();
        localStorage.setItem("navindex2",i);
    })
    $(".MenuList_f1 .child li").bind("click",function(){
       var i= $(this).index();
        localStorage.setItem("navindex2",i);
    })
/*    var navindex2=0;//点击页面链接跳转前保存导航当前的index值
    if(localStorage.getItem("navindex2")){
        navindex2=localStorage.getItem("navindex2");
    }
    $('.NavList_a1 ul').css('display','flex');
    $('.NavList_a1').addClass('swiper-container');
    $('.NavList_a1 ul').addClass('swiper-wrapper');
    $('.NavList_a1 ul li').addClass('swiper-slide');
    var NavList = new Swiper ('.NavList_a1', {
        initialSlide: navindex2,
        slidesPerView: 'auto',
        observer:true,
        observeParents:true,
        spaceBetween: '40',
        mousewheel: true,
        navigation: {
          prevEl: '.nav .swiper-button-prev',
          nextEl: '.nav .swiper-button-next',
        },
        breakpoints: {
            1250: {
                //autoHeight: true,
                slidesPerView: 30,
            },
            640: {
                spaceBetween: '20',
            }
        }
    }) 

    $(".ClassList_b2 ul li").bind("click",function(){
       var i= $(this).index();
        localStorage.setItem("navindex",i);
    })
    var navindex=0;//点击页面链接跳转前保存导航当前的index值
    if(localStorage.getItem("navindex")){
        navindex=localStorage.getItem("navindex");
    }
    $('.ClassList_b2 ul').css('display','flex');
    $('.ClassList_b2').addClass('swiper-container');
    $('.ClassList_b2 ul').addClass('swiper-wrapper');
    $('.ClassList_b2 ul li').addClass('swiper-slide');
    var NavList = new Swiper ('.ClassList_b2', {
        initialSlide: navindex,
        slidesPerView: 'auto',
        observer:true,
        observeParents:true,
        spaceBetween: '40',
        mousewheel: true,
        navigation: {
          prevEl: '.nav .swiper-button-prev',
          nextEl: '.nav .swiper-button-next',
        },
        breakpoints: {
            1250: {
                //autoHeight: true,
                slidesPerView: 30,
            },
            640: {
                spaceBetween: '20',
            }
        }
    })  */
    //下拉二级菜单
    var a=$('.ClassList_b2 .on').text();
    if(a){
        $('.nav .sort_btn').html('<span>'+a+'</span>');
    }
    $(".nav .sort_btn").click(function () {
        $(".ClassList_b2").slideToggle();
    });
     //下拉二级菜单
    var a1=$('.NavList_a1 .on').text();
    if(a1){
        $('.nav .sort_btn').html('<span>'+a1+'</span>');
    }
    $(".nav .sort_btn").click(function () {
        $(".NavList_a1").slideToggle();
    });
})

function isIE() {
    if (!!window.ActiveXObject || "ActiveXObject" in window){
        $('body').addClass('ie');
    }
    else{
        $('body').addClass('nie');
    }
}    


