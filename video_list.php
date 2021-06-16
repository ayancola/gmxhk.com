<?php
  $rid = (int)$_GET['rid'];
  $cid = (int)$_GET['cid'] ? (int)$_GET['cid'] :'0';
?>
<!DOCTYPE html>
<html>
<head>
    <? include('common_info.php') ?>
    <link rel="stylesheet" href="css/PhotoList_i1.css?v=210111">
    <link rel="stylesheet" href="css/page.css?v=210111">
    <script type="text/javascript">
        $(function(){
            var rid=<? echo $rid;?>;
            $('.MenuList_f1 .stmenu').eq(2).addClass('on');
           
            $('ul').addClass('clearfix');
        })
    </script>
</head>
<body >
    <? include('common_top.php') ?>
    <? include ('common_page.php') ?>
    <div class="main-box main-w clearfix rid<?echo $rid;?>">
        <div class="photo">
            <? getVideoList('d1',42,0,6); ?>
        </div>
    </div>
    <? include('common_footer.php') ?>
</body>
</html>