<?php
  $rid = (int)$_GET['rid'];
  $cid = (int)$_GET['cid'];
?>
<!DOCTYPE html>
<html>
<head>
    <? include('common_info.php') ?>
    <link rel="stylesheet" href="css/Gsk_b1.css?v=210111">
    <link rel="stylesheet" href="css/page.css?v=210111">
    <script type="text/javascript">
        $(function(){
            $('.MenuList_f1 .stmenu').eq(5).addClass('on');
            $('.nav .vam').hide();
        })
    </script>
    <style>
        .main-box.contact .map img{max-width: unset !important;}
       .BMap_omCtrl,.BMap_cpyCtrl.BMap_noprint.anchorBL,.anchorBL,#zoomer{display: none;}
        #map1,#map2{height: 100%;width: 100%;}
        .map img{display: inline-block;max-width: none;width: auto;max-width: unset;}
        .BMap_mask{z-index: 1 !important;}
        .BMap_bubble_content{}
        .BMap_bubble_title{font-size:1.1em;white-space: normal !important;}
        /* .BMapLabel{font-size: 16px !important;padding: 5px 7px !important;} */
    </style>
</head>
<body >
    <? include('common_top.php') ?>
    <? include ('common_page.php') ?>
    <div class="main-box contact clearfix rid39">
        <div class="main-w clearfix">
            <div class="c-title">
                <p class="bold f-28 fm-36">广东金雨铝业科技有限公司</p>
                <p class="text-u f-14 fm-24 c-ccc">Green Metal Expert Aluminum Products Co., Ltd </p>
            </div>
            <div class="mt-m40 mt-20 clearfix"><? getPage($rid); ?>
                <!-- <div class=" txt">
                    <ul class="clearfix lh-18 clist f-20 fm-28 text-center">
                        <li>
                            <i class="vat"><img src="/images/c1.png" alt=""></i>
                            <div class="txt vat">
                                <p>电 话：</p>
                                <p>0758-8598733</p>
                            <div>
                        </li>
                        <li>
                            <i class="vat"><img src="/images/c2.png" alt=""></i>
                            <div class="txt vat">
                                <p>传真：</p>
                                <p>0758-8598729</p>
                            </div>
                        </li>
                        <li>
                            <i class="vat"><img src="/images/c3.png" alt=""></i>
                            <div class="txt vat">
                                <p>地址：</p>
                                <p>广东省肇庆市高要区金利镇金淘工业园</p>
                            </div>
                        </li>
                    </ul>
                </div> -->
            </div>
                <a target="_blank" href="http://wxdev.pbinfo.cn/open/map/nav.php?navstr=FC921Ln9Y8UDpCrx3s3n5-5Gaq7X_1TNlTfI7hyZdQoqy1elTQp7WG-UMTaGySjZvPDw526zJHLxIUskeqGuvaThCArskAXNh6hn0E01CV9R_mD8KBvhCSToKuxFcTwpYML-56zLGnULXS9dFGm-zsJwchWRA8c0ldw7mFA_bWA" class="map-btn">一键导航</a>
            <div class="map mt-50 mt-m40">
                <? getMapList('a1',46) ?>
            </div> 
        </div>
    </div>
    <? include('common_footer.php') ?>
    <script>
    $('.vcode').addClass('clearfix');
    </script>
</body>
</html>