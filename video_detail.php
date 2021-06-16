<?php
  $rid = (int)$_GET['rid'];
  $cid = (int)$_GET['cid'];
  if($rid == '10' || $rid == '12'){
    $bid='9';
  }else {
    $bid='9';
  }
?>
<!DOCTYPE html>
<html>
<head>
    <? include('common_info.php') ?>
    <link rel="stylesheet" href="css/page.css?v=200803">
    <script type="text/javascript">
        $(function(){
            var rid=<? echo $rid;?>;
            if(rid == '34'){
                $('.MenuList_f1 .stmenu').eq(0).addClass('on');
            }
        })
    </script>
</head>
<body class="nav<?echo $rid;?>">
    <? include('common_top.php') ?>
    <? include ('common_page.php') ?>
    <div class="main-box clearfix main-w rid<?echo $rid;?>">
        <?php //getResTitle('a3',$rid,0);?>
        <?
            $verson = "a1";
          $id=intGet('id');
          $className = globalModule("video","class");
          $video = new $className;
          $video->set('table',"video");
          $rowP=$video->get_row($id);
          // dg($rowP);
          if(!empty($rowP['linkurl'])){
            $target="./VideoDetail_".$verson[0].".php";
            if(is_file($target))
            {
              include($target);
            }else{
              echo "模板文件错误：".$target;
            }
          }else{
            echo $lang=='_en' ?  'updating...' : '资料更新中...';
          }
        ?>
    </div>
    <? include('common_footer.php') ?>
</body>
</html>