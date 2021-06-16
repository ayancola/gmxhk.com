<!DOCTYPE html>
<html>
<head>
	<? include('common_info.php') ?>
    <link rel="stylesheet" href="css/Gsk_b1.css?v=200803">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/index.css?v=200803">
    <script type="text/javascript">
        $(function(){
            $('.ResTitle_a2').each(function(){
                var $l_1 = $(this).find("span");
                var $l_2 = $(this).find("em");
                $l_1.insertAfter($l_2);
            })    
            $('.NewsList_a1 ul').addClass('clearfix');
        })
        
    </script>
    <script src="js/count.js" type="text/javascript"></script>
</head>
<body class="index">
<? include('common_top.php') ?>
<div class="banner">
    <div class="pc">
		<? getBannerShow('b1', 40, 4, 5); ?>
    </div>
    <div class="mob">
		<? getBannerShow('b1', 40, 11, 5); ?>
    </div>
    <div class="arrow text-right pc">
        <div class="swiper-button-prev pc"></div>
        <div class="swiper-button-next pc"></div>
    </div>
</div>

<div class="B1 bg1 por-r" id="B1">
    <div class="main-w clearfix">
        <div class="fr lh-18 f-16 fm-28 c-666">
            <p class="f-46 fm-46 c-999 lh-15"  data-aos="fade-left">WE MAKE GOODS,<br/>AND MAKE IT BETTER!</p>
            <div class="pc">
                <p class="f-36 bold c-d65227 mt-30"  data-aos="fade-left"  data-aos-delay="200">广东金雨铝业</p>
                <p class="text-indent mt-30"  data-aos="fade-left"  data-aos-delay="400">广东金雨铝业科技有限公司是一家生产各种规格铝合金型材的中外合资企业，公司占地面积 20000 余平方米，拥有先进的生产设备和质量检验系统，新厂区占地面积近 40000 平方米，将于 2019 年中旬竣工投产，设计年产能达 35000 吨。</p>
            </div>
            <div class="video-box mt-70 v-align-m1 por-r mt-m40"  data-aos="fade-left"  data-aos-delay="400">
                <div class="play"><img src="images/play.png" alt=""></div>
                <div class="poster" style="background-image: url(images/play.jpg);"></div>
                <video src="/images/Video.mp4" id="video"  controls="controls" class="w-100 vam" poster="" preload="auto" x5-video-player-type="h5" webkit-playsinline playsinline x5-playsinline x-webkit-airplay="allow"></video>
            </div>

            <div class="mob mt-m40">
                <p class="fm-36 bold c-d65227 mt-m50" >广东金雨铝业</p>
                <p class="text-indent mt-m30" >广东金雨铝业科技有限公司是一家生产各种规格铝合金型材的中外合资企业，公司占地面积 20000 余平方米，拥有先进的生产设备和质量检验系统，新厂区占地面积近 40000 平方米，将于 2019 年中旬竣工投产，设计年产能达 35000 吨。</p>
            </div>
        </div>
        <div class="fl mt-m50">
            <img src="/images/al.png" alt="" class="pc"  data-aos="fade-right">
            <div class="num-list  b-fff mt-120 mt-m0">
                <ul class="clearfix lh-16 c-666 f-14 fm-24">
                    <li>
                        <div class="txt">
                            <h3 class="c-d65227 f-36 fm-40 bold">16</h3>
                            <p>16年生产经验</p>
                        </div>
                    </li>
                    <li>
                        <div class="txt">
                            <h3 class="c-d65227 f-36 fm-40 bold">40000</h3>
                            <p >4万m²新厂房面积</p>
                        </div>
                    </li>
                    <li>
                        <div class="txt">
                            <h3 class="c-d65227 f-36 fm-40 bold">20000</h3>
                            <p >2万m²公司面积</p>
                        </div>
                    </li>
                    <li>
                        <div class="txt">
                            <h3 class="c-d65227 f-36 fm-40 bold">35000</h3>
                            <p >3.5万吨设计年产量</p>
                        </div>
                    </li>
                </ul>
            </div>
            <a href="about.php?rid=32" target="_blank" class="mymore mt-50 mt-m40">MORE</a>
        </div>
    </div>
</div>
<div class="B2 bg2 ovh" id="B2">
    <div class="main-w clearfix c-fff">
        <?php getResTitle('a2',36,0); ?>
    </div>
    <div class="swiper-container mt-m60 ovh" id="product">
        <div class="swiper-wrapper f-20 fm-28 c-666 lh-18">
            <?php
                $sql = "SELECT * FROM product_class WHERE fid=0 AND display='Y' AND deleted=0";
                SQLS($sql);
                $arr = TOP();
                foreach ($arr as $k => $v){
            ?>
            <div class="swiper-slide">
                <div class="pbg"></div>
                <div class="txt fl mt-m60">
                    <div class="title">
                        <img src="<?php echo $v['icon'];?>" alt="<?php echo $v['title'.LANG];?>" class="vam">
                        <p class="bold f-36 fm-36 font-over1 c-d65227"><?php echo $v['title'.LANG];?></p>
                    </div>
                    <p class="font-over3 mt-20 mt-m20"><?php echo $v['content'.LANG];?></p>
                    <a href="product_list.php?rid=36&cid=<?php echo $v['class_id'];?>" target="_blank" class="mymore mt-60 mt-m70">MORE</a>
                </div>
                <div class="img fr mt-40"><img src="<?php echo $v['images'];?>" alt="<?php echo $v['title'.LANG];?>"></div>
            </div>
            <?php }?>
        </div>
    </div>
    <div class="main-w clearfix mt-80">
        <div class="arrow text-left pc vam">
            <div class="swiper-button-prev ar"></div>
            <div class="swiper-button-next ar"></div>
        </div>
        <a href="product_list.php?rid=36" target="_blank" class="mymore fr mt-20 mt-m70 pc">探索更多型材</a>
    </div>
</div>
<div class="B3 bg3" id="B3">
    <div class="main-w">
        <div class="t clearfix">
            <?php getResTitle('a2',44,0); ?>
            <ul class="clearfix tap_btnlist fr mt-30 pc">
                <li><a href="surface.php?rid=44" target="_blank" class="b-d65227">了解更多</a></li>
                <li><a href="#B6">立即咨询</a></li>
            </ul>
        </div>
        <div class="mt-60 mt-m70 f-16 fm-28 c-666 b por-r">
            <div id="bottom" class="arrow">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!--表面处理栏目获取6条数据  配图，标题，中文内容130个字符-->
                        <?php
                            $sql = "SELECT * FROM photo_class WHERE rid=44 AND display='Y' AND deleted=0 LIMIT 6";
                            SQLS($sql);
                            $arr = TOP();
                            foreach ($arr as $k => $v){
                                if($v['images_s'] == ''){
                                    $v['images_s'] = '/images/nopic.jpg';
                                }
                        ?>
                        <div class="swiper-slide">
                            <div class="img"><img src="<?php echo $v['images_s'];?>" alt="<?php echo $v['title'.LANG];?>"></div>
                        </div>
                        <?php }?>
                        <!--end-->
                    </div>
                </div>
                <div class="swiper-button-prev ar"></div>
                <div class="swiper-button-next ar"></div>
            </div>
            <div class="swiper-container mt-m60" id="top">
                <div class="swiper-wrapper">
                    <!--表面处理栏目获取6条数据-->
                    <?php
                        foreach ($arr as $k => $v){
                            if($v['images'] == ''){
                                $v['images'] = '/images/nopic.jpg';
                            }
                    ?>
                    <div class="swiper-slide">
                        <div class="img fl"><img src="<?php echo $v['images'];?>" alt="<?php echo $v['title'.LANG];?>"></div>
                        <div class="txt fr mt-m40">
                            <p class="bold f-28 fm-36 font-over1 c-d65227"><a href="surface.php?rid=44&cid=<?php echo $v['class_id'];?>" target="_blank"><?php echo $v['title'.LANG];?></a></p>
                            <p class="font-over3 mt-20 mt-m10"><? echo cutstr(strip_tags(str_replace("&nbsp;","",$v['content'.LANG])),130);?></p>
                        </div>
                    </div>
                    <?php }?>
                    <!--end-->
                </div>
            </div>
        </div>
         <a href="surface.php?rid=44" target="_blank" class="mymore m-ot mt-m80 mob">MORE</a>
    </div>
</div>
<div class="B4 bg4" id="B4">
    <div class="main-w">
        <div class="t clearfix">
            <?php getResTitle('a2',37,0); ?>
            <ul class="clearfix tap_btnlist fr mt-30 mt-m80">
                <li><a href="javascript:;">设备图片</a></li>
                <li><a href="javascript:;">设备视频</a></li>
            </ul>
        </div>
        <p class="mt-60 f-20 pc text-center c-666">每一个产品、每一次服务，我们都精益求精，力图做到更完美</p>
        <div class="b mt-50 mt-m50 arrow">
            <div class="tap_box pic por-r">
                <div class="swiper-button-prev ar pc"></div>
                <? getPhotoList('k2', 41, 0, 8); ?>
                <div class="swiper-pagination mob mt-m50"></div>
                <div class="swiper-button-next ar pc"></div>
                <a href="photo_list.php?rid=41" target="_blank" class="mymore mt-50 mt-m60 m-ot">MORE</a>
            </div>
            <div class="tap_box video por-r">
                <div class="swiper-button-prev ar pc"></div>
                <? getVideoList('d1',42,0,6); ?>
                <div class="swiper-button-next ar pc"></div>
                <div class="swiper-pagination mob mt-m50"></div>
                <a href="video_list.php?rid=42" target="_blank" class="mymore mt-50 mt-m60 m-ot">MORE</a>
            </div>
        </div>
        
    </div>
</div>

<div class="B5"  id="B5">
    <div class="main-w">
        <div class="t clearfix">
            <?php getResTitle('a2',38,0); ?>
            <a href="news_list.php?rid=38" target="_blank" class="mymore fr pc mt-20">MORE</a>
        </div>
        <div class="mt-20 mt-m60">
            <? getNewsList('a1',38,0,4); ?>
        </div>
        <div class="swiper-pagination mob mt-m50"></div>
        <a href="news_list.php?rid=38" target="_blank" class="mymore m-ot mob mt-m80">MORE</a>
    </div>
</div>
<div class="B6" id="B6">
    <div class="main-w">
        <div class="t clearfix">
            <div class="ResTitle_a2"><span>留言咨询</span><br><em>consulting</em></div>
            <p class="f-20 fr c-d65227 pc mt-20">咨询热线：0758-8598733</p>
        </div>
        <div class="mt-70 mt-m50 tips"><p class="c-4c f-20 fm-28 lh-17">秉承“<span class="c-d65227">我们只做好铝材</span>”的企业精神，<span>追求“零缺陷”</span>的品质和服务，佳仕致力于优质铝材的开发与生产，满足市场与客户的需求。</p></div>
        <div class="pc mt-30 f-14">
            <p class="tips2 b-d65227 c-fff">机遇稍纵即逝，也许今天的一个留言、一次项目的了解就是改变人生实现财富梦想的转折点！</p>
        </div>
        <div class="mt-50 mt-m40">
            <? getGbook('b1',12); //版本号 ?>
        </div>
    </div>
</div>
<? include('common_footer.php') ?>
<? include('photojs2.php') ?>
<script src="js/aos.js" type="text/javascript"></script>
<script src="js/index.js?v=201107" type="text/javascript"></script>
<script type="text/javascript">
    AOS.init({
        duration: 800,
        disable: window.innerWidth < 1024,
    });
</script>
</body>
</html>