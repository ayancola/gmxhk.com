<?php
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
        <? getPage($rid); ?>
        
        <!-- <div class="T clearfix">
            <div class="L fl img">
                <img src="images/c1.jpg" alt="" class="w-100 block">
            </div>
            <div class="R fr f-14 fm-28 c-666 mt-m40 txt">
                <h3 class="f-20 fm-30 bold">金雨公司</h3>
                <p>金雨是一家基于铝合金型材行业，向相关建材领域发展的科技型企业。</p>
                <p>我们以科技为动力，市场为依托，质量为基础，管理为利器，制造可以满足市场需要的产品。</p>
                <h3 class="f-20 fm-30 bold mt-30">金雨人</h3>
                <p>金雨把人才作为最重要的资源！我们培养领导能力，责任感及团队合作精神。</p>
                <p>我们的伙伴是以结果为导向的专家式的专业人员并具有正直的个性。</p>
                <p>我们把企业的目标作为各自的目标，并以佳仕企业的发展为己任。</p>
                <p>作为回报，我们的伙伴享有受同行业尊重的地位以及佳仕企业提供的回报率高、具有挑战性、有个人发展空间的职位！</p>
                <h3 class="f-20 fm-30 bold mt-30">经营使命</h3>
                <p>致力于优质铝合金型材的开发与生产，满足市场的需求！</p>
                <p>尽我们最大的努力，使我们的客户与我们共享利益！</p>
                <p>我们的经营活动要对社会负责！</p>
                <h3 class="f-20 fm-30 bold mt-30">志向</h3>
                <p>成为用户、客户、员工的第一选择，并且成为为人尊重的社会成员！</p>
            </div>
        </div>
        <div class="B mt-60 mt-m60 clearfix">
            <div class="R fr img">
                <img src="images/c2.jpg" alt="" class="w-100 block">
            </div>
            <div class="L fl f-14 fm-28 c-666 mt-m40 txt">
                <h3 class="f-20 fm-30 bold">经营目标</h3>
                <p>近期 —— 成为优质铝合金型材重要的生产商和供应商！</p>
                <p>远期 —— 使资源达到最优化配置，成为优质铝合金型材及其配套产品等多元素发展现代化企业！</p>
                <h3 class="f-20 fm-30 bold mt-30">经营理念</h3>
                <p>同舟共济、共创辉煌！合作、分享、共同成长！</p>
                <h3 class="f-20 fm-30 bold mt-30">人才观念</h3>
                <p>让精英推动佳仕的发展！让佳仕引领精英的腾飞！</p>
                <h3 class="f-20 fm-30 bold mt-30">企业精神</h3>
                <p>我们只做好铝材！</p>
                <h3 class="f-20 fm-30 bold mt-30">质量方针</h3>
                <p>科学管理、优质产品、真诚服务、持续改进！</p>
            </div>
        </div> -->
    </div>
    <? include('common_footer.php') ?>
</body>
</html>