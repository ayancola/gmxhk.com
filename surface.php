<?php
  $rid = (int)$_GET['rid'];
?>
<!DOCTYPE html>
<html>
<head>
    <? include('common_info.php') ?>
    <link rel="stylesheet" href="css/PhotoList_i1.css">
    <link rel="stylesheet" href="css/page.css?v=210111">
    <script type="text/javascript">
        $(function(){
            var rid=<? echo $rid;?>;
            $('.MenuList_f1 .stmenu').eq(3).addClass('on');
            $('ul').addClass('clearfix');
            $('.nav .vam').hide();
        })
    </script>
</head>
<body >
    <? include('common_top.php') ?>
    <? include ('common_page.php') ?>
    <div class="main-box main-w clearfix rid<?echo $rid;?>">
        <div class="photo">
             <? getPhotoList('k2',$rid,$cid,6); ?><? //getNewsList('g3',$rid,$cid,6); ?>
        </div>
    </div>
    <? include('common_footer.php') ?>
    <? include('photojs2.php') ?>

</body>
</html>