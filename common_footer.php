<div class="footer f-14 fm-24 c-fff lh-18">
     <div class="T por-r">
          <div class="slogo pc v-align-m1">
               <img src="/images/slogo.png" alt="" class="vam">
          </div>
          <div class="main-w clearfix">
               <div class="R fr t">
                    <div class="fr map pc">
                         <a class="f-14 fm-30 clearfix block"  target="_blank" href="https://j.map.baidu.com/29/k9z">在线地图 <span class="fr">获取导航路线</span></a>
                         <img src="/images/map.png" alt="">
                     </div>
                    <div class="fl txt mt-m40">
                         <p class="f-28 fm-40">广东金雨铝业科技有限公司</p>
                         <p class="f-12 fm-24">Green Metal Expert Aluminum Products Co., Ltd </p>
                         <div class="ewm-f clearfix mt-30 mt-m30">
                              <ul class="clearfix lh-18 fl">
                                   <li>
                                        <i><img src="images/i1.png" alt=""></i><p>电话：0758-8598733</p>
                                    </li>
                                   <li>
                                        <i><img src="images/i2.png" alt=""></i><p>传真：0758-8598729</p>
                                   </li>               
                                   <li>
                                        <i><img src="images/i3.png" alt=""></i><p>地址：广东省肇庆市高要区金利镇金淘工业园</p>
                                   </li>
                              </ul>
                              <div class="ewm fr text-center pc">
                                    <? getBannerShow('c1',40,10,1); ?>
                                    <div><img src="/images/we-chat.png" alt="" class="vam"> <p class="vam">关注了解更多资讯</p></div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <div class="clearfix link2 f-14 fm-24 mt-50 mt-m0 c-ddd">
               <div class="main-w">
               <ul class="R fr link clearfix" >
                <li><img src="/images/i4.png" alt="" class="vam">&nbsp;&nbsp;&nbsp;<p class="vam">友情链接：</p></li>
                <?php
                    BTAG();
                    $sql = "select * from links where display='Y' and deleted=0 order by orders desc,addtime desc";
                    SQLS($sql);
                    $link_rows = TOP() ?: [];
                    foreach ($link_rows as $link_row) {
                        echo '<li><a href="' . $link_row['linkurl'] . '" target="_blank">' . $link_row['title'] . '</a></li>';
                    }
                ?>
              </ul>
              </div>
          </div>
     </div>
    <div class="copyright c-ddd text-center  fm-24">
      <div class="main-w clearfix">
          <p>Copyright © <? echo date('Y', time()); ?> 广东金雨铝业科技有限公司 All Rights Reserved.</p>
          <p><a href="<?echo ICP_BEIAN_URL;?>" target="_blank">粤ICP备18039185号</a>
            <!-- <a href="#"><img src="images/gaba.png" alt="" style="display：inline-block;float:none;height: 18px;transform: translateY(3px);"> </a> --></p>
          <p class="support" style="white-space: nowrap;"><? echo PB_SUPPORT_UTF8?></p>
      </div>
    </div>
</div>
<!--     <a id="service" href="javascript:;" title="在线客服" onclick="wchat_init();"><img src="images/ser.gif" alt=""><p>在<br>线<br>客<br>服</p></a>
 -->