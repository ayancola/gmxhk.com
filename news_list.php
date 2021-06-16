<?php
  $rid = (int)$_GET['rid'];
  $cid = (int)$_GET['cid'] ? (int)$_GET['cid'] :'0';
?>
<!DOCTYPE html>
<html>
<head>
    <? include('common_info.php') ?>
    <link rel="stylesheet" href="css/NewsList_g3.css">
    <link rel="stylesheet" href="css/page.css?v=210111">
    <script type="text/javascript">
        $(function(){
            $('.MenuList_f1 .stmenu').eq(4).addClass('on');
            $('.nav .vam').hide();
        })
    </script>
</head>
<body class="nav<? echo $rid ;?>">
    <? include('common_top.php') ?>
    <? include ('common_page.php') ?>
    <div class="main-box main-w  clearfix rid<? echo $rid ;?>">
                <div class="news_part1 b-fff">
            <!--..................................-->
            <div class="w-88 m-ot" id="innner_top_news">
                <div class="f-20 fm-28">
                    <?php
                        $count = 6;
                        $page = (int)$_REQUEST['page'];
                        if ($page < 1) $page = 1;
                        $per_page_num = (int)$count;
                        
                      //获取最上面三条数据
                        if(!empty($cid)){
                            $conArr = array('rid' => $rid, 'class_id' => $cid, 'display' => 'Y');//构建查询条件
                        }else{
                            $conArr = array('rid' => $rid,'display' => 'Y');//构建查询条件
                        }
                        $condition2 = " title" . LANG . "!='' AND ";
                        foreach ($conArr as $key => $value) {
                            $condition2 .= $key . "=:" . $key . " and ";
                        }
                        $orderby = "orders desc,addtime DESC";
                        $orderbyArr = array('orders' => 'desc', 'addtime' => 'desc');
                        
                        $condition2 = array('condition2' => $condition2, 'bind' => $conArr);
                        $className = globalModule("news", "class");
                        $news = new $className;
                        $fields = ",images,addtime,title" . LANG . " AS title,content" . LANG . " AS content,islink,linkurl";
                        $start = (int)($page - 1) * $count;
                        
                        $arr = $news->get_rows($fields, $condition2, 'orders desc,addtime desc', 1);
                        
                        $total = $news->total;
                        if ($total == 0) {
                            echo LANG == '_en' ? 'updating...' : '资料更新中...';
                        }
                        $third_id_rows = array();
                        foreach ($arr as $key => $row) {
                            $third_id_rows[] = $row['id'];
                            if (empty($row['images'])) {
                                $row['images'] = '/images/nopic.jpg';
                            }
                            if ($row['islink'] == 1) {
                                $url = $row['linkurl'];
                            } else {
                                $url = 'news_detail.php?rid=' . $rid . '&id=' . $row['id'];
                            }
                            ?>
                            <div class="list clearfix">
                                <a href="<?php echo $url; ?>" title="查看更多" class="block clearfix">
                                    <div class="imgbox ov-h vam">
                                        <img src="<?php echo $row['images']; ?>"class="img-cover"/>
                                    </div>
                                    <div class="news_content vam c-666">
                                        <div class="data">
                                            <span class="vam f-16 fm-28"><?php echo date('Y-m-d', strtotime($row['addtime'])); ?></span>
                                        </div>
                                        <h3 class="font-over1 f-20 fm-30 bold block mt-20 mt-m10">
                                            <?php echo $row['title']; ?>
                                        </h3>
                                        <p class="font-over3 f-16 fm-28 mt-20 "><?php echo cutstr(strip_tags(str_replace("&nbsp;", "", $row['content'])), 300); ?></p>
                                        <div class="btn text-right mt-50 mt-m50">
                                           <p class="f-14 fm-24 c-fff">查看详情</p>
                                        </div>
                                    </div>
                                    
                                </a>
                            </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <!--..................................-->
        </div>
        <?php
            if(!empty($cid)){
                $conArr = array('rid' => $rid, 'class_id' => $cid, 'display' => 'Y');//构建查询条件
            }else{
                $conArr = array('rid' => $rid,'display' => 'Y');//构建查询条件
            }
            $condition2 = " title" . LANG . "!='' AND ";
            foreach ($conArr as $key => $value) {
                $condition2 .= $key . "=:" . $key . " and ";
            }
            if (!empty($third_id_rows)) {
                $third_id_str = implode(",", $third_id_rows);
                $condition2 .= " id not in (" . $third_id_str . ") and ";
            }
            $condition2 = array('condition2' => $condition2, 'bind' => $conArr);
            
            $arr = $news->get_rows($fields, $condition2, $orderby, $per_page_num, $start);
            //dg($arr);
            $conArr['third_id_str'] = implode(",", $third_id_rows);
            $total = $news->total;
        ?>
        <?php if ($total > 0) { ?>
            <div class="news_part2 mt-80 ">
                <div id="NewsList_a3" class="NewsList_a3">
                    <ul class="clearfix">
                        <?php
                            foreach ($arr as $key => $row) {
                                if (empty($row['images'])) {
                                    $row['images'] = '/images/nopic.jpg';
                                }
                                if ($row['islink'] == 1) {
                                    $url = $row['linkurl'];
                                } else {
                                    $url = 'news_detail.php?rid=' . $rid . '&id=' . $row['id'];
                                }
                                ?>
                                <li class="list">
                                    <a href="<?php echo $url; ?>" class="block"
                                       title="<?php echo $row['title']; ?>">
                                        <div class="newimg IMG b-f5 ov-h">
                                            <div class="figure" style="background:url(<?php echo $row['images']; ?>) no-repeat center; background-size:cover;"></div>
                                        </div>
                                        <div class="newnr c-666">
                                            <div class="data f-14 fm-26"><?php echo date('Y-m-d', strtotime($row['addtime'])); ?></div>
                                            <b class="font-over1 f-20 fm-30 c-333"><?php echo $row['title']; ?></b>
                                            <p class="font-over2 f-14 fm-28 mt-5"><?php echo cutstr(strip_tags(str_replace("&nbsp;", "", $row['content'])), 200); ?></p>
                                        </div>
                                    </a>
                                </li>
                            <?php } ?>
                    </ul>
                    <div class="page clearfix" id="page">
                        <?php include(GLOBAL_ROOT . "/view/pageNumber2.php");//插入页码组件?>
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
                        var client = new HproseHttpClient('/common/news.svr.php', ["getList2"]);
                        type = 'news';
                        fields = '<? echo $fields?>';
                        conArr = '<? echo json_encode($conArr)?>';
                        orderby = '<? echo json_encode(getOrderBy($orderbyArr));?>';
                        per_page_num = '<? echo $per_page_num?>';
                        var page = 0;
                        function getMore() {
                            page++;
                            client.getList2(conArr, orderby, per_page_num, (page * per_page_num), function (result, args) {
                                if ($(result).length) {
                                    $.each(result, function (index, element) {
                                        var Url = '';
                                        if (this.islink == 1) {
                                            Url = this.linkurl
                                        } else {
                                            Url = "news_detail.php?rid=" + this.rid + "&id=" + this.id;
                                        }
                                        var img = this.images ? this.images : '/images/nopic.jpg';
                                        html = '<li class="list"><a href="' + Url + '" class="block b-fff" title="' + this.title + '"><div class="newimg IMG b-f5 ov-h"><div class="figure" style="background:url(' + img + ') no-repeat center; background-size:cover;"></div></div><div class="newnr c-666"><div class="data f-16 fm-28">' + this.addtime + '</div><b class="font-over1 f-20 fm-30 c-333">' + this.title + '</b><p class="font-over2 f-16 fm-28 mt-5">' + this.content + '</p></div></a></li>';
                                        $("#NewsList_a3 ul").append(html);
                                    });
                                } else {
                                    $("#load_more_button").hide();
                                }
                            });
                        }
                    </script>
                </div>
            </div>
        <?php } ?>
    </div>
    <? include('common_footer.php') ?>
    <script type="text/javascript">
        $('.NewsList_a1 ul').addClass('clearfix');
    </script>
</body>
</html>