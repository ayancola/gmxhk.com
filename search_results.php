<?php
  $rid = (int)$_GET['rid'];
  $cid = (int)$_GET['cid'];
?>
<!DOCTYPE html>
<html>
<head>
    <? include('common_info.php') ?>
    <link rel="stylesheet" href="css/PhotoList_i1.css">
    <link rel="stylesheet" href="css/page.css?v=210111">
</head>
<body class="nav<?echo $rid;?> rid33">
    <? include('common_top.php') ?>
        <div class="page-ban" >
        <? getBannerShow('c1',40,7,1); ?>
        <div class="txt c-fff">
          <div class="main-w">
            <div class="ResTitle_a2"><span>SEARCH</span><br><em>搜索结果</em></div>
            <p class="f-16 fm-28 lh-18 pc mt-30">致力于优质铝合金型材的开发与生产，满足市场的需求！<br/>尽我们最大的努力，使我们的客户与我们共享利益！</p>
          </div>
        </div>
    </div>
    <div class="nav clearfix por-r f-0">
      <div class="main-w clearfix">
        <div class="fl"></div>
      </div>
    </div>
    <script>
      $(function(){
          //var nw=$('.NavList_a1 ul').width();
          //$('.NavList_a1').css('min-width',nw);
          $('.header').addClass('menu-color');
      })
    </script>
    <div class="main-box clearfix main-w  ProductList_b2 photo">
        <ul class="clearfix">
            <?php
                $search = ksearch($_GET['search']);
                $arr = [];

                if($search != ''){
                    $page = (int)$_GET['page'];
                    if ($page < 1) $page = 1;
                    $count =8;
                    $per_page_num = (int)$count;
                    $conArr = array('rid' => 36, 'display' => 'Y');

                    $className = globalModule("product","class");
                    $product = new $className;
                    $fields = ",rid,class_id,path,title".LANG." as title,images,images_s,orders,addtime";
                    $orderby=" orders desc,addtime DESC ";
                    $orderbyArr = array('addtime' => 'DESC');
                    $start=(int)($page-1)*$count;
                    unset($conArr['class_id']);
                    $condition2 = "";
                    if(!empty($conArr)){
                        foreach ($conArr as $key => $value) {
                            $condition2 .= $key . "=:". $key ." and ";
                        }
                    }
                    $condition2 .= " (title LIKE :title) and ";
                    //dg($conArr);
                    $conArr['title'] = "%".$search."%"; //修改后
                    $condition2 = array('condition2' => $condition2, 'bind' => $conArr);
                    //debug();
                    $arr = $product->get_rows($fields,$condition2,$orderby,$per_page_num,$start);
                    $total=$product->total;
                }
    
                foreach ($arr as $row){
                    if(!empty($row['img']))
                    {
                        foreach($row['img'] as $k => $valArr)
                        {
                            $row['images_s']=$valArr['images_s'];
                            $row['images']=$valArr['images'];
                            break;
                        }
                    }
                    if($row['images'] == ''){
                        $row['images'] = './images/nopic.jpg';
                    }
            ?>
            <li>
                <a href="product_detail.php?rid=<?php echo $row['rid']; ?>&cid=<?php echo $row['class_id']; ?>&id=<?php echo $row['id'];?>"
                   target="_blank">
                    <div class="picimg"><img src="<?php echo $row['images']; ?>" alt="<?php echo $row['title']; ?>"></div>
                </a>
                 <span><?php echo $row['title'];?></span>
            </li>
            <?php }?>
        </ul>

        <div class="page clearfix" id="page">
            <?php include("pageNumber2.php");//插入页码组件?>
        </div>
        <a class="more" id="load_more_button" href="javascript:getMore();">
            <? if (LANG == '') {
                echo '加载更多';
            } else {
                echo 'Load More';
            } ?>
        </a>
        <script src="/libs/Hprose/ajs/hprose.js" type="text/javascript" charset="utf-8"></script>
        <script>
            var client = new HproseHttpClient('/common/load_more.php', ["getList2"]);
            conArr = '<?php echo json_encode($conArr);?>';
            per_page_num = '<?php echo $per_page_num;?>';
            search = '<?php echo $search;?>';
            var page = '<?php echo $page-1;?>';
            orderby = '<?php echo json_encode(getOrderBy($orderbyArr));?>';

            function getMore() {
                page++;
                client.getList2(search,conArr, orderby, per_page_num, (page * per_page_num), function (result, args) {
                    if($(result).length){
                        $.each(result,function(index,element){
                            //console.log(this);
                            var img= this.images ? this.images : './images/nopic.jpg';
                            html = '<li><a href="product_detail.php?rid=36&cid='+this.class_id+'&id='+this.id+'" target="_blank"><div class="picimg"><img src="'+img+'" alt="'+this.title+'"></div></a><span>'+this.title+'</span></li>';
                            $(".ProductList_b2 ul").append(html);
                        });
                    }else{
                        $("#load_more_button").hide();
                    }
                });
            }
        </script>
    </div>
    <? include('common_footer.php') ?>
</body>
</html>