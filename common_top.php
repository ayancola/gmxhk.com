<div class="header">
    <div class="main-w clearfix por-r">
        <div class="L vam">
            <a href="index.php" class="vam logo logoc"><img src="/images/logo.png" alt=""></a>
            <a href="index.php" class="vam logo logow"><img src="/images/logo-w.png" alt=""></a>
        </div>
        <div class="R fr clearfix text-right">
            <? getMenuList('f1'); ?>
            <div class="topnav">
                <ul class="clearfix">
                    <li><a href="#B1">品牌</a></li>
                    <li><a href="#B2">产品</a></li>
                    <li><a href="#B3">工艺</a></li>
                    <li><a href="#B4">设备</a></li>
                    <li><a href="#B5">新闻</a></li>
                    <li><a href="#B6">咨询</a></li>
                </ul>
            </div>
            <div class="s_ceng clearfix vam" id="topsearch">
                <a href="javascript:;" id="s-btn" class="s"></a>
                <form action="search_results.php" method="get">
                    <input name="search" id="search" autocomplete="off" placeholder="请输入关键词">
                    <button type="submit" class="s mob" onClick="return submitAction2()"></button>
                </form>
            </div>
            <div class="lang clearfix vam">
                <!-- <span>EN</span> -->
                <a href="#" id="btnxl">EN</a>
                <div class="sllist">
                    <ul>
                        <li><a href="#">简体</a></li>
<!--                         <li><a href="/big5">繁体</a></li>
                         -->                        
                         <li><a href="#">EN</a></li>
                    </ul>
                </div>
            </div>
            <a class="nav_xl_a vam f-16 text-u"><p class="o">MENU</p><p class="c">CLOSE</p></a>
        </div>
    </div>
    <div class="ceng"></div>
</div>
<script type="text/javascript">
    $(function(){
        $(".MenuList_f1 .on .child").addClass('cshow');
    })

    function submitAction2(){
        var key=$('#search').val();
        if(key==''){
            showTip('请输入关键词');
            return false;
        }
    }
    function submitAction(){
        var key=$('#search2').val();
        if(key==''){
            showTip('请输入关键词');
            return false;
        }
    }
    /*自定义消息气泡*/
    function showTip(str) {
        $('.login-tip').html(str);
        $('.login-tip').fadeIn();
        setTimeout(function () {
            $('.login-tip').hide();
        }, 2000);
    }
</script>