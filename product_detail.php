<?php
  $rid = (int)$_GET['rid'];
  $cid = (int)$_GET['cid'] ? (int)$_GET['cid'] :'5';
  $id = (int)$_GET['id'];
  $bid='9';
  $mbid='19';
  $sid='0';
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
    <div class="main-box main-w  clearfix rid<? echo $rid ;?> detail">
        <div class="L fl">
            <div class="swiper-container gallery-top">
                <ul class="swiper-wrapper">
                    <?
                          $sql = "select * from product_photo where product_id=".$id." and deleted=0 and display='Y' order by orders desc, addtime DESC";
                          SQLS($sql);
                          $pic_rows = TOP();
                          if(!empty($pic_rows)){
                            foreach ($pic_rows as $pic_row) {
                        ?>
                        <li class="swiper-slide" data-src="<?echo $pic_row['images']?>"><a href="javascript:;"><img src="<?echo $pic_row['images']?>"></a></li>
                    <?}}?>
                    <!--产品多图+封面图  大图-->
                    <?php
                        $className = globalModule("product","class");
                        $productClass = new $className;

                        $row = $productClass ->get_row($id);
                        $imagesArr = [];
                        $images_sArr = [];
                        if($row['product_images'] != ''){
                            $imagesArr = explode(',',$row['product_images']);
                            $images_sArr = explode(',',$row['product_images_s']);
                        }
                        //dg($imagesArr);
                        foreach ($imagesArr as $k => $v){
                    ?>
                     <li class="swiper-slide" data-src="<?php echo $v;?>"><a href="javascript:;"><img src="<?php echo $v;?>"></a></li>
                    <?php }?>
                    <!--end-->
                    
                </ul>
            </div>
            <div class="b mt-30 mt-m30 por-r">
                <div class="swiper-container gallery-thumbs">
                    <div class="swiper-wrapper">
                        <?
                              $sql = "select * from product_photo where product_id=".$id." and deleted=0 and display='Y' order by orders desc, addtime DESC";
                              SQLS($sql);
                              $pic_rows = TOP();
                              if(!empty($pic_rows)){
                                foreach ($pic_rows as $pic_row) {
                            ?>
                            <div class="swiper-slide">
                                <a href="javascript:;">
                                  <img src="<?echo $pic_row['images_s']?>" alt="">
                                </a>
                            </div>
                        <?}}?>
                    <!--产品多图+封面图  缩略图-->
                        <?php
                            foreach ($images_sArr as $k => $v){
                        ?>
                        <div class="swiper-slide">
                            <a href="javascript:;">
                              <img src="<?php echo $v;?>" alt="<?php echo $row['title'.LANG];?>">
                            </a>
                        </div>
                        <?php }?>
                    <!--end-->
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="R fr mt-m60">
            <div class="detail-h3 f-28 fm-36"><?php echo $row['title'.LANG];?></div>
            <div class="detail-txt mt-30 mt-m40 c-666 f-16 fm-28 lh-18 clearfix">
                <?php echo $row['content'.LANG];?>
            </div>
            <a href="/index.php#B6" class="map-btn mt-40 mt-m40">立即咨询</a>
        </div>
    </div>
    <? include('common_footer.php') ?>
    <? include('photojs2.php') ?>
    <script type="text/javascript">
        $('.MenuList_f1 .stmenu').eq(1).addClass('on');
        var rw = $(window).width();

        $(function () {
            $('.gallery-top ul').lightGallery({});
            
            var gallerythumbs = new Swiper('.gallery-thumbs', {
                observer: true,
                observeParents: true,
                slidesPerView: '3.5',
                slideToClickedSlide: true,
                mousewheel: true,
                spaceBetween: '4%',
                breakpoints: {
                    640: {
                        slidesPerView: 3,
                        spaceBetween: '4%',
                    }
                },
            });
            var gallerytop = new Swiper('.gallery-top', {
                slidesPerView: 1,
                effect: 'fade',
                fadeEffect: {
                    crossFade: true,
                },
                thumbs: {
                    swiper: gallerythumbs
                }
            });
        })
        $('.NavList_a1 li').each(function(){
            //var lin=$(this).find("a").attr('href').replace(/photo_list/,"case_list");//部分匹配替换
            var lin=$(this).find("a").attr('href');//部分匹配替换
            $(this).find("a").attr('href','product_list.php' + lin);
        })
    </script>
</body>
</html>