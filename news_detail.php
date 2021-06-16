<?php
  $row = getDetailSeo($arrSeo,'news');
  $arrSeo['display_name'] = $row['title'];//网页title
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
            var rid=<? echo $rid;?>;
            if(rid == '38'){
                $('.MenuList_f1 .stmenu').eq(4).addClass('on');
            }else if(rid == '44'){
                $('.MenuList_f1 .stmenu').eq(3).addClass('on');
            }
            $('.nav .vam').hide();
        })
    </script>
    <style>
      .map-btn{display: block;}
    </style>
</head>
<body >
    <? include('common_top.php') ?>
    <? include('common_page.php') ?>
    <div class="main-box main-w clearfix rid<? echo $rid ;?>">
       <? getNewsDetail('a1'); //版本号 ?>
    </div>
    <? include('common_footer.php') ?>
</body>
</html>