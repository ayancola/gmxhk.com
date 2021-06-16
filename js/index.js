$(function () {
    //锚点定位滚动
     $('.topnav').find('a[href*="#"]:not([href="#"])').click(function() {
        $('.header').addClass('menu-fix menu-color');
        $('.topnav li a').removeClass('c-eb6100');
        $(this).addClass('c-eb6100');
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: (target.offset().top )
                }, 800);
            }
        }
    });

    var video = document.getElementById('video');
    $(".play").click(function(){
        if(!video.paused){//判断视频时候暂停。
            video.pause();
            $(".play").show();
            //$(".poster").show();
        }else{
            video.play();
            $(".play").hide();
            $(".poster").hide();
        }
    })

    var rw= $(window).width();
    var rh= $(window).height();
    var scaleW = rw/1920;
     
    if(rw > 641){
        window.onscroll = function() {scrollFunction()};
        var changeheader = (rh * scaleW) - 200;
        function scrollFunction() {
            if (document.body.scrollTop > changeheader || document.documentElement.scrollTop > changeheader) {
                //$(".header").addClass("menu-color");
                //$(".header").addClass("menu-fix");
                if ($(".nav_xl_a").hasClass("a1") && $(".header").hasClass("menu-open")) {
                    $(".header").addClass("menu-fix");
                } else {
                    $(".header").addClass("menu-color");
                    $(".header").addClass("menu-fix");
                }

                var topPin = $('#B1').offset().top - $(window).scrollTop();
                var topPin2 = $('#B2').offset().top - $(window).scrollTop();
                var topPin3 = $('#B3').offset().top - $(window).scrollTop();
                var topPin4 = $('#B4').offset().top - $(window).scrollTop();
                var topPin5 = $('#B5').offset().top - $(window).scrollTop();
                var topPin6 = $('#B6').offset().top - $(window).scrollTop();
                if(topPin < 10){
                    $('.topnav li a').removeClass('c-eb6100');
                    $('.topnav li').eq(0).find('a').addClass('c-eb6100');
                }
                if(topPin2 < 10){
                    $('.topnav li a').removeClass('c-eb6100');
                    $('.topnav li').eq(1).find('a').addClass('c-eb6100');
                }
                if(topPin3 < 10){
                    $('.topnav li a').removeClass('c-eb6100');
                    $('.topnav li').eq(2).find('a').addClass('c-eb6100');
                }
                if(topPin4 < 10){
                    $('.topnav li a').removeClass('c-eb6100');
                    $('.topnav li').eq(3).find('a').addClass('c-eb6100');
                }
                if(topPin5 < 10){
                    $('.topnav li a').removeClass('c-eb6100');
                    $('.topnav li').eq(4).find('a').addClass('c-eb6100');
                }
                if(topPin6 < 10){
                    $('.topnav li a').removeClass('c-eb6100');
                    $('.topnav li').eq(5).find('a').addClass('c-eb6100');
                }
            } else {
                $('.topnav li a').removeClass('c-eb6100');
                $(".header").removeClass("menu-fix");
                if(!$(".nav_xl_a").hasClass("a1") && !$(".header").hasClass("menu-open")) {
                    $(".header").removeClass("menu-color");
                }
            }
        }
    }else{
        window.onscroll = function() {scrollFunction()};
        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                $(".header").addClass("menu-fix");
                $(".header").addClass("menu-color");
            } else {
                $(".header").removeClass("menu-fix");
                $(".header").removeClass("menu-color");
            }
        }

        $('.NewsList_a1 ul').css('display','flex');
        $('.NewsList_a1').addClass('swiper-container');
        $('.NewsList_a1 ul').addClass('swiper-wrapper');
        $('.NewsList_a1 ul li').addClass('swiper-slide');
        var myNews = new Swiper ('.NewsList_a1', {
            observer:true,
            autoplay:true,
            observeParents:true,
            observeSlideChildren:true,
            spaceBetween: 10,
            autoplay :{
                delay:5000
            },
            slidesPerView: '1',
            pagination: {
                el: '.B5 .swiper-pagination',
                clickable: true,
            }
        })
    }
    var mySwiper = new Swiper('.banner .swiper-container', {
        observer:true,
        observeParents:true,
        autoplay :{
            delay:5000
        },
            spewd:2000,

        effect: 'fade',
        navigation: {
          prevEl: '.banner .swiper-button-prev',
          nextEl: '.banner .swiper-button-next',
        },
        slidesPerView: 1,
          // 如果需要分页器
        pagination: {
            el: '.banner .swiper-pagination',
            clickable :true,
            type: 'custom',
            renderCustom: function (swiper, current, total){
              var html_ = '';
              for(var i = 0; i < total; i ++ ){
                if(i == current - 1){
                  html_ += '<span class="swiper-pagination-bullet  swiper-pagination-customs swiper-pagination-customs-active"><em>0' + (i + 1) +'</em></span>'
                }else{
                  html_ += '<span class="swiper-pagination-bullet  swiper-pagination-customs"><em>0' + (i + 1) + '</em></span>'
                }
              }
              return html_
            },
          },
    })  
    
    $('.B4 .tap_btnlist li').eq(0).addClass('on');
    $('.B4 .tap_box').eq(0).show();

    var B2 = new Swiper('.B2 .swiper-container', {
        loop : true,
        observer:true,
        observeParents:true,
        speed: 2000,
        autoplay :{
            delay: 4000
        },
        navigation: {
          prevEl: '.B2 .swiper-button-prev',
          nextEl: '.B2 .swiper-button-next',
        },
        spaceBetween: '20%',
        slidesPerView: 'auto',
        breakpoints: {
            640: {
                autoHeight: true,
                slidesPerView: '1',
            }
        }
    })  

    var gallerythumbs = new Swiper('#bottom .swiper-container', {
        observer: true,
        observeParents: true,
        slidesPerView: '4',
        slideToClickedSlide: true,
        //mousewheel: true,
        spaceBetween: '4%',
        breakpoints: {
            1200: {
                slidesPerView: 3,
            },
            640: {
                slidesPerView: 3,
                spaceBetween: '18%',
            },
        },
        navigation: {
          prevEl: '.B3 .swiper-button-prev',
          nextEl: '.B3 .swiper-button-next',
        },
    });
    var gallerytop = new Swiper('#top', {
        slidesPerView: 1,
        effect: 'fade',
        fadeEffect: {
            crossFade: true,
        },
        thumbs: {
            swiper: gallerythumbs
        },
    });

    $(".B4 .tap_btnlist li").click(function(){
        $(this).addClass("on").siblings().removeClass("on");
        var Iindex = $(this).index();
        $(".B4 .tap_box").removeClass('show');
        $(".B4 .tap_box").eq(Iindex).addClass('show');
        $(".B4 .tap_box").eq(Iindex).fadeIn().siblings(".B4 .tap_box").hide();
    });

    $('.PhotoList_k2 ul').css('display','flex');
    $('.PhotoList_k2').addClass('swiper-container');
    $('.PhotoList_k2 ul').addClass('swiper-wrapper');
    $('.PhotoList_k2 ul li').addClass('swiper-slide');
    var forList = new Swiper ('.PhotoList_k2', {
        observer:true,
        autoplay:true,
        observeParents:true,
        observeSlideChildren:true,
        spaceBetween: '3%',
        autoplay :{
            delay:5000
        },
        navigation: {
          prevEl: '.pic .swiper-button-prev',
          nextEl: '.pic .swiper-button-next',
        },
        slidesPerView: '3',
        pagination: {
            el: '.pic .swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            640: {
                //autoHeight: true,
                slidesPerView: '1',
            }
        }
    })

    $('.VideoList_d1 ul').css('display','flex');
    $('.VideoList_d1').addClass('swiper-container');
    $('.VideoList_d1 ul').addClass('swiper-wrapper');
    $('.VideoList_d1 ul li').addClass('swiper-slide');
    var videoList = new Swiper ('.VideoList_d1', {
        observer:true,
        autoplay:true,
        observeParents:true,
        observeSlideChildren:true,
        spaceBetween: '3%',
        autoplay :{
            delay:5000
        },
        navigation: {
          prevEl: '.video .swiper-button-prev',
          nextEl: '.video .swiper-button-next',
        },
        slidesPerView: '3',
        pagination: {
            el: '.video .swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: '1',
            }
        }
    })

    function count_start(){
        $(".num-list li").eq(0).find("h3").numberRock({
            speed:180,
            count:16
        })
        $(".num-list li").eq(1).find("h3").numberRock({
            speed:40,
            count:40000
        })
        $(".num-list li").eq(2).find("h3").numberRock({
            speed:40,
            count:20000
        })
        $(".num-list li").eq(3).find("h3").numberRock({
            speed:40,
            count:35000
        })
    }
    var flag= true;
    $(window).scroll( function (){
        var topPin = $('#B1').offset().top - $(window).scrollTop();
        if(topPin < 100 && flag){
            flag= false;
            count_start();
        }
    });
})
