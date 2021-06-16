<?php
  $rid = (int)$_GET['rid'];
  $cid = (int)$_GET['cid'];
  $bid='13';
  $sid='1';
  $ssid= 0;
  if( $rid == '36'){
    $sid='0';
    $bid='7';
    $cid = (int)$_GET['cid'] ? (int)$_GET['cid'] :'1';
  }else if( $rid == '44'){
    $sid='0';
    $bid='12';
    $cid = (int)$_GET['cid'] ? (int)$_GET['cid'] :'1';
  }else if( $rid == '38'){
    $sid='0';
    $bid='9';
  }else if( $rid == '42' || $rid == '41'){
    $bid='8';
  }else if( $rid == '39'){
    $sid='0';
    $bid='6';
  }
?>
<div class="page-ban" >
    <? getBannerShow('c1',40,$bid,1); ?>
    <div class="txt c-fff">
      <div class="main-w">
        <?php getResTitle('b2',$rid,$sid); ?>
        <p class="f-16 fm-28 lh-18 pc mt-30">致力于优质铝合金型材的开发与生产，满足市场的需求！<br/>尽我们最大的努力，使我们的客户与我们共享利益！</p>
      </div>
    </div>
</div>
<div class="nav clearfix por-r f-0">
  <div class="main-w clearfix">
    <div class="fr pc"><? getPosList('a1', $rid);?></div>
    <div class="fl f-0 clearfix por-r">
      <!-- <div class="vam swiper-button-prev"></div> -->
        <div class="text-center mobsnav ">
          <a class="sort_btn mob"></a>
          <? //getClassList('b3',$rid,$cid); ?>
          <? if($rid==61){getClassList('b2',$rid,$cid);} else{ getNavList_local('a1',$rid,$cid);}//版本号，栏目id ?>
        </div>
      <!-- <div class="vam swiper-button-next"></div> -->
    </div>
  </div>
</div>
<script>
  $(function(){
      //var nw=$('.NavList_a1 ul').width();
      //$('.NavList_a1').css('min-width',nw);
      $('.header').addClass('menu-color');
  })
</script>
<?php
   $sql = "select class_id,title".LANG." as title,title_en from product_class where rid=".$rid." and class_id=".$cid." and display='Y' and deleted=0 ";
   SQL($sql);
   $class_row = TOP();
   if($rid==36){
?>
<div class="ResTitle_a1">
  <span><?php echo $class_row['title_en'];?></span><br>
  <em><?php echo $class_row['title'];?></em>
</div>
<?}else{ getResTitle('b1',$rid,$ssid); }?>