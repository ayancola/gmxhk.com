<?php
  $rid = (int)$_GET['rid'];
  $cid = (int)$_GET['cid'] ? (int)$_GET['cid'] :'1';
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
            if(rid == '33' || rid == '35'){
                $('.MenuList_f1 .stmenu').eq(0).addClass('on');
            }else if(rid == '41'){
                $('.MenuList_f1 .stmenu').eq(2).addClass('on');
            }
            $('ul').addClass('clearfix');
        })
    </script>
</head>
<body >
    <? include('common_top.php') ?>
    <? include ('common_page.php') ?>
    <div class="main-box main-w clearfix rid<?echo $rid;?>">
        <div class="photo">
            <? if($rid == 33) {$num = '8';}else{$num = '6';} ;?>
            <? getPhotoList('k2',$rid,$cid,$num); ?>
        </div>
    </div>
    <? include('common_footer.php') ?>
    <? include('photojs2.php') ?>
</body>
</html>