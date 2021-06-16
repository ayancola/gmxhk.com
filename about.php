<?php
  $rid = (int)$_GET['rid'];
  $cid = (int)$_GET['cid'];
?>
<!DOCTYPE html>
<html>
<head>
    <? include('common_info.php') ?>
    <link rel="stylesheet" href="css/page.css?v=210111">
    <script type="text/javascript">
        $(function(){
            $('.MenuList_f1 .stmenu').eq(0).addClass('on');
        })
    </script>
</head>
<body >
    <? include('common_top.php') ?>
    <? include ('common_page.php') ?>
    <div class="main-box rid32">
        <div class="clearfix">
            <? getPage($rid); ?>
<!--             <div class="T">
    <div class="main-w clearfix">
        <div class="L fl">
            <div class="video-boxv-align-m1 por-r">
                <div class="play"><img src="images/play.png" alt=""></div>
                <div class="poster" style="background-image: url(images/play.jpg);"></div>
                <video src="/images/Video.mp4" id="video"  controls="controls" class="w-100 vam" poster="" preload="auto" x5-video-player-type="h5" webkit-playsinline playsinline x5-playsinline x-webkit-airplay="allow"></video>
            </div>
        </div>
        <div class="R fr f-14 fm-28 c-666 mt-m40">
            <p class="f-28 fm-32">广东金雨铝业科技有限公司</p>
            <p class="text-indent mt-20">广东金雨铝业科技有限公司是一家生产各种规格铝合金型材的中外合资企业，位于山清水秀的广东五金生产基地肇庆市高要金利镇，距广肇高速公路金利出口仅 3 公里，距广州市仅 60 公里。</p>
            <p class="text-indent">公司占地面积20000 余平方米，拥有先进的生产设备和质量检验系统，新厂区占地面积近40000 平方米，将于2019 年中旬竣工投产，设计年产能达35000 吨。产品种类包括：室内装饰系列、家具系列、建筑材料和工业型材系列；多种表面处理包括：氧化、抛光、喷砂、拉丝、磨光、电泳、木纹、喷涂等。公司获得ISO9001:2008 质量体系认证，并根据国家标准和行业标准，制订了严格的企业内控标准、工艺规程和设备操作规程，按照GB/T 19001:2008 标准执行严格的质量管理体系。产品销往国内多个省市，并出口到欧洲，中东，南美，南亚，东南亚等多个国家和地区。</p>
            <p>公司把人才作为十分重要的资源，按照现在企业管理的要求，对员工实行定期培训、全面提高全员素质、确保公司生产技术、管理和服务的有效性和规范。</p>
            <p>秉承“我们只做好铝材”的企业精神，追求“零缺陷”的品质和服务，佳仕致力于优质铝材的开发与生产，满足市场与客户的需求。</p>
            <div class="num-list mt-40 mt-m40">
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
        </div>
    </div>
</div>
<div class="B main-w mt-80 mt-m80">
    <div class="tit" style="text-align:left;"><span class="c-d65227 f-28 fm-36 vam">ENTERPRISE TEAM </span><em class="f-20 fm-28 vam"> 企业团队</em></div>
    <ul class="clearfix mt-30 text-center mt-m30">
        <li>
            <img src="/images/a2.jpg" alt="">
            <p class="f-16 fm-28 mt-20">销售团队</p>
        </li>
        <li>
            <img src="/images/a3.jpg" alt="">
            <p class="f-16 fm-28 mt-20">生产管理团队</p>
        </li>
    </ul>
</div> -->
        </div>
    </div>
    <? include('common_footer.php') ?>
    <? include('photojs2.php') ?>
<script type="text/javascript">
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
</script>
</body>
</html>