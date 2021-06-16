<?php
      $rid = (int)$_GET['rid'];
      $cid = (int)$_GET['cid'] ? (int)$_GET['cid'] :'1';
      $fid = (int)$_GET['fid'];

      $className = globalModule("product","class");
      $productClass = new $className;

      if($fid == 0){
          $sql = "SELECT * FROM product_class WHERE fid=".$cid." AND display='Y' AND deleted=0 LIMIT 1";
          SQL($sql);
          $fidStr = TOP();
          $fid = $fidStr['class_id'];
      }

?>
<!DOCTYPE html>
<html>
<head>
    <? include('common_info.php') ?>
    <link rel="stylesheet" href="css/PhotoList_i1.css">
    <link rel="stylesheet" href="css/page.css?v=210111">
    <script type="text/javascript">
        $(function(){
            $('.MenuList_f1 .stmenu').eq(1).addClass('on');
        })
    </script>
</head>
<body>
    <? include('common_top.php') ?>
    <? include('common_page.php') ?>
    <div class="main-box main-w  clearfix rid<? echo $rid ;?>">
        <div class="class-nav text-center">
            <a class="sort_btn mob"></a>
            <? //getClassList('b3',$rid,$cid); ?>
            <div class="ClassList_b3">
                <ul class='clearfix'>
                    <?php
                        $productClass->set('classorderby', 'orders asc,addtime');
                        
                        $arr = $productClass->geClasstList_arr(array('rid' => $rid, 'fid' => $cid), $fields = '', $condition2 = "display='Y' AND");

                        if(!empty($arr)){
                            foreach($arr as $row)
                            {
                                ?>
                                <li class="<? if($fid==$row['class_id']){echo 'on';}?>"><a href="?<? echo 'rid='.$row['rid'].'&fid='.$row['class_id'].'&cid='.$row['fid'];?>" title="<? echo $row['title']?>"><? echo $row['title']?></a></li>
                                <?php
                            }
                        }
                    ?>

                </ul>
            </div>
        </div>
        <div class="photo">
            <? getProductList('b2',$rid,$fid,8); ?>
        </div>
    </div>
    <? include('common_footer.php') ?>
    <script type="text/javascript">
        $('.NewsList_a1 ul').addClass('clearfix');
    </script>
        <script type="text/javascript">
        //下拉二级菜单
         var a=$('.ClassList_b3 .on').text();
        $('.class-nav .sort_btn').html(a);
        $(".class-nav .sort_btn").click(function () {
            $(".ClassList_b3").slideToggle();
        });
    </script>
</body>
</html>